<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Orders;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /**
         * @var Orders $products
         */
        $products = app(Orders::class);
        $products = $products->getItems();

        return view('orders.index', [
            'products' => $products
        ]);
    }

    public function confirm($id){
        /**
         * @var Orders $products
         */
        $products = app(Orders::class);
        $products = $products->getItem($id);

        $products->performed = 1;
        $products->save();

        return redirect(route('admin.orders.index'))->with('success', 'Order successfully performed');
    }
}
