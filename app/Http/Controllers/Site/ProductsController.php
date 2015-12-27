<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    public function index() {
        $products = (new \App\Product)->orderBy('title')->get();
        return view('site.products.all', compact('products'));
    }

    public function show($id){
        $product = (new \App\Product)->find($id);
        return view('site.products.product', compact('product'));

    }
}
