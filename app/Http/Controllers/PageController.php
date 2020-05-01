<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view('pages.index');
    }

    public function contactus(){
        return view('pages.contactus');
    }
    public function contact_us(){
        return view('contact_us');
    }
    
    
    public function adminItem() {
        return view('pages.admin.item');
    }

    public function products() {
        return view('pages.products');
    }
}
