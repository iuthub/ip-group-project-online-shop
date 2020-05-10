<?php
/**
 * Created by Netco Telecom.
 * User: Otabek
 * Date: 10-May-20
 * Time: 5:51 PM
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

class MainController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('adminHome');
    }
}