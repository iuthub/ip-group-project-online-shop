<?php
   
namespace App\Http\Controllers;
  
use App\Product;
   
class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function main(){
        $products = Product::orderBy('price', 'asc')->paginate(3);
        return view('pages.index',compact('products'))->with('i', (request()->input('page', 1) - 1) * 3);
    }

    public function about(){
        return view('pages.about');
    }

    public function contacts(){
        return view('pages.contacts');
    }

}