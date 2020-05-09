<?php

namespace App\Http\Controllers;
use App\Product;


use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $products = Product::orderBy('price', 'asc')->paginate(3);
        return view('pages.index',compact('products'))->with('i', (request()->input('page', 1) - 1) * 3);
    }

    public function adminItem() {
        return view('pages.admin.item');
    }

    public function products() {
        return view('pages.products');
}
}