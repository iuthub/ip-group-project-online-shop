<?php

namespace App\Http\Controllers;

use App\Carts;
use App\Orders;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /**
         * @var Carts $products
         */
        $products = app(Carts::class);
        $products = $products->getItems(Auth::user()->id);

        /**
         * @var Orders $orders
         */
        $orders = app(Orders::class);
        $orders = $orders
            ->where('user_id', '=', Auth::user()->id)
            ->get();

        return view('pages.cart', [
            'products' => $products,
            'orders' => $orders
        ]);
    }

    public function delete($id){
        /**
         * @var Carts $cart
         */
        $cart = app(Carts::class);
        $cart = $cart
            ->where('id', '=', $id)
            ->first();

        if(!is_null($cart))
            $cart->deleteItem();

        return redirect(route('cart.index'));
    }

    public function confirm(){
        /**
         * @var Carts $products
         */
        $products = app(Carts::class);
        $products = $products->getItems(Auth::user()->id);
        foreach ($products as $product){
            /**
             * @var Orders $orders
             */
            $orders = app(Orders::class);
            $orders->insertItem([
                'user_id' => $product->user_id,
                'product_id' => $product->product_id,
            ]);

            $product->deleteItem();
        }

        return redirect(route('cart.index'))->with('success','Orders successfully framed');
    }
}
