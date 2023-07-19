<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $_SESSION["menuActive"] = 'product';
    }

    public function index(): object
    {
        return view('product.index');
    }

    public function create(): object
    {
        return view('product.create');
    }
}
