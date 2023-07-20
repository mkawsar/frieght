<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\CreateProductFormRequest;
use App\Interfaces\ShippingFreightInterface;
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

        return $imageID;
    }
}
