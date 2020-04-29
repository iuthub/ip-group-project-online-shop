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

    public function item() {
        return view('pages.item');
    }
}
