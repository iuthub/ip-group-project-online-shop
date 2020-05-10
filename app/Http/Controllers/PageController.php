<?php

namespace App\Http\Controllers;
use App\Carts;
use App\Product;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function show($id, Request $request)
    {
        $product = Product::where('id', $id)->firstOrFail();

        $addToCart = $request->input('add_to_cart', 0);
        if($addToCart){
            /**
             * @var Carts $carts
             */
            $carts = app(Carts::class);
            $cartsCheck = $carts->getItem(Auth::user()->id, $id);
            if(is_null($cartsCheck))
                $carts->insertItem([
                    'user_id' => Auth::user()->id,
                    'product_id' => $id
                ]);

            return redirect(route('shop.show', $id));
        }

        return view('pages.show')->with('product',$product);
    }

    public function search(Request $request) {
        $search_line = $request->input("search-line");
        $items = [];
        
        if($search_line) {
            $items = Product::where("name", "LIKE", "%$search_line%")->get();
        }
        
        return view('pages.search', ["items" => $items]);
    }
}
