<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\CreateProductFormRequest;
use App\Interfaces\ShippingFreightInterface;
use App\Models\Product;
use App\Traits\UploadTrait;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    use UploadTrait;

    public function __construct()
    {
        $_SESSION["menuActive"] = 'product';
    }

    public function index(): object
    {
        return view('product.index');
    }

    public function create(ShippingFreightInterface $shipping): object
    {
        $currencies = $shipping->getCurrencyCode();
        $uomcodes = $shipping->getUOMCode();
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
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name . '.' . $image->getClientOriginalExtension();
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
        return view('product.freight-rate');
    }
}
