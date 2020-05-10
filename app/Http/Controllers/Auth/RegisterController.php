<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'regex:/^[a-zA-Z0-9]{5,}$/'],
            'postal_code' => ['required', 'regex:/\d{7}/'],
            'email' => ['required', 'unique:users', 'regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            //'password' => ['required', 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{5,})/'],
            'telephone_num' => ['required', 'unique:users', 'regex:/^\+998-\d{2}-\d{7}$/'],
            'city' => ['required', 'regex:/^[a-zA-Z]+$/'],
            'date_of_birth' => ['required', 'regex:/^(0[1-9]|[12][0-9]|3[01])\/(0[1-9]|1[12])\/(19|20)\d{2}$/'],
            'passport_num' => ['required', 'unique:users', 'regex:/^(AA|AB)(\d){7}$/'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'city'=>$data['city'],
            'postal_code'=>$data['postal_code'],
            'passport_num'=>$data['passport_num'],
            'telephone_num'=>$data['telephone_num'],
            'date_of_birth'=>$data['date_of_birth'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
