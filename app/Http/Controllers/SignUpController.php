<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignUpController extends Controller
{
    public function signup() {
        return view('pages.signup');
    }

    public function signin() {
        return view('pages.signin');
    }
}
