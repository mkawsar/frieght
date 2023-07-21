<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\CreateProductFormRequest;
use App\Http\Requests\Product\CreateProductFreightRateFormRequest;
use App\Interfaces\ShippingFreightInterface;
use App\Models\Product;
use App\Models\ProductFreightRate;
use App\Traits\FedexFreightTrait;
use App\Traits\UploadTrait;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    use UploadTrait, FedexFreightTrait;

    private $shipping;

    public function __construct(ShippingFreightInterface $shipping)
    {
        $_SESSION["menuActive"] = 'product';
        $this->shipping = $shipping;
    }

    public function index(Product $product): object
    {
        $products = $product->query()->with('rated')->paginate(1);
        return view('product.index', ['products' => $products]);
    }

    public function create(): object
    {
        $currencies = $this->shipping->getCurrencyCode();
        $uomcodes = $this->shipping->getUOMCode();
        return view('product.create', ['currencies' => $currencies, 'uomcodes' => $uomcodes]);
    }

    public function store(CreateProductFormRequest $request)
    {
        $imageID = '';
        if ($request->has('image')) {
            // Get image file
            $image = $request->file('image');
            // Make a image name based on user name and current timestamp
            $name = Str::slug($request->input('title')) . '_' . time();
            // Define folder path
            $folder = '/product/images';
            // Upload image
            $imageID = $this->upload($image, $folder, 'public', $name, $image->getClientMimeType());
        }

        $product = new Product();
        $product->uuid = uniqid();
        $product->title = $request->title;
        $product->price = $request->price;
        $product->currency = $request->currency;
        $product->image_id = $imageID;
        $product->uom = $request->uom;
        $product->upc = $request->upc;
        $product->sku = $request->sku;
        $product->length = $request->length;
        $product->width = $request->width;
        $product->height = $request->height;
        $product->weight = $request->weight;
        $product->weight_unit = $request->weight_unit;
        $product->created_by = $request->user()->id;

        if ($product->save()) {
            return redirect()->route('product.freight.rate', $product->uuid)->with('success', 'Product information stored successfully!');
        } else {
            return redirect()->back()->with('error', 'Failed to crate product information!');
        }
    }

    public function getProductRates(Product $product, $uuid)
    {
        $product = $product->query()->where('uuid', '=', $uuid)->first();
        $countries = $this->shipping->getCountryCode();
        $freights = $this->shipping->getFreightClass();
        $packages = $this->shipping->getPackageType();
        return view('product.freight-rate', [
            'product' => $product,
            'countries' => $countries,
            'freights' => $freights,
            'packages' => $packages
        ]);
    }

    public function storeProductFreightRate(Product $product, CreateProductFreightRateFormRequest $request)
    {
        $totalBaseCharge = 0;
        $totalNetCharge = 0;
        $totalSurcharges = 0;
        $currency = 'USD';
        $data = null;
        $product = $product->query()->where('uuid', '=', $request->uuid)->first();
        $payload = '{"rateRequestControlParameters": {"returnTransitTimes":true}, "accountNumber": {"value": "' . $request->shipper_account_no . '"}, "freightRequestedShipment": {"serviceType": "FEDEX_FREIGHT_PRIORITY", "shipper": {"address": {"city": "' . $request->shipper_city . '", "stateOrProvinceCode": "' . $request->shipper_state_code . '", "postalCode": "' . $request->shipper_postal_code . '", "countryCode": "' . $request->shipper_country . '"}}, "recipient": {"address": {"city": "' . $request->recipient_city . '", "stateOrProvinceCode": "' . $request->recipient_state_code . '", "postalCode": "' . $request->recipient_postal_code . '", "countryCode": "' . $request->recipient_country . '"}}, "shippingChargesPayment": {"paymentType": "SENDER", "payor": {"responsibleParty": {"accountNumber": {"value": "' . $request->recipient_account_no . '"}}}}, "freightShipmentDetail": {"role": "SHIPPER", "accountNumber": {"value": "' . $request->recipient_account_no . '"}, "fedExFreightBillingContactAndAddress": {"address": {"streetLines": ["' . $request->street_line . '"], "city": "' . $request->recipient_city . '", "stateOrProvinceCode": "' . $request->recipient_state_code . '", "postalCode": "' . $request->recipient_postal_code . '", "countryCode": "' . $request->recipient_country . '"}}, "lineItem": [{"freightClass": "' . $request->freight_class . '", "handlingUnits": "' . $request->product_quantity . '", "pieces": "' . $request->product_quantity . '","subPackagingType": "' . $request->package_type . '", "id": "' . strtolower($request->item_id) . '", "weight": {"units": "' . strtoupper($product->weight_unit) . '", "value": "' . $product->weight . '.00"}}]}, "rateRequestType": ["LIST"], "requestedPackageLineItems": [{"associatedFreightLineItems": [{"id": "' . strtolower($request->item_id) . '"}], "weight": {"units": "' . strtoupper($product->weight_unit) . '", "value": "' . $product->weight . '.00"}, "subPackagingType": "' . $request->package_type . '"}]}}';

        $rated = $this->getFreightRate($payload);

        if ($rated !== null) {
            $totalBaseCharge = $rated['output']['rateReplyDetails'][0]['ratedShipmentDetails'][0]['totalBaseCharge'];
            $totalNetCharge = $rated['output']['rateReplyDetails'][0]['ratedShipmentDetails'][0]['totalNetCharge'];
            $totalSurcharges = $rated['output']['rateReplyDetails'][0]['ratedShipmentDetails'][0]['shipmentRateDetail']['totalSurcharges'];
            $currency = $rated['output']['rateReplyDetails'][0]['ratedShipmentDetails'][0]['currency'];
            $data = json_encode($rated);
        }

        $freightRated = new ProductFreightRate();
        $freightRated->uuid = uniqid();
        $freightRated->product_id = $product->id;
        $freightRated->shipper_account_no = $request->shipper_account_no;
        $freightRated->recipient_account_no = $request->recipient_account_no;
        $freightRated->shipper_country = $request->shipper_country;
        $freightRated->recipient_country = $request->recipient_country;
        $freightRated->shipper_postal_code = $request->shipper_postal_code;
        $freightRated->recipient_postal_code = $request->recipient_postal_code;
        $freightRated->shipper_state_code = $request->shipper_state_code;
        $freightRated->recipient_state_code = $request->recipient_state_code;
        $freightRated->shipper_city = $request->shipper_city;
        $freightRated->recipient_city = $request->recipient_city;
        $freightRated->street_line = $request->street_line;
        $freightRated->item_id = $request->item_id;
        $freightRated->package_type = $request->package_type;
        $freightRated->product_quantity = $request->product_quantity;
        $freightRated->freight_class = $request->freight_class;
        $freightRated->total_base_charge = $totalBaseCharge;
        $freightRated->total_net_charge = $totalNetCharge;
        $freightRated->total_sur_charges = $totalSurcharges;
        $freightRated->currency = $currency;
        $freightRated->freight_rated_data = $data;
        $freightRated->created_by = $request->user()->id;

        if ($freightRated->save() && $product->update(['status' => 'active', 'updated_by' => $request->user()->id])) {
            return redirect()->route('product.index')->with('success', 'Product freight rate get successfully!');
        } else {
            return redirect()->back()->with('error', 'Failed to get product freight rate information');
        }
    }
}
