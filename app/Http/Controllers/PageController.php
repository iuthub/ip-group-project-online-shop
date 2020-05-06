<?php

namespace App\Http\Controllers;
use App\Product;


use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('pages.index',compact('products'));
    }
    
    public function adminItem() {
        return view('pages.admin.item');
    }

    public function products() {
        return view('pages.products');
}
}