<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

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
    protected $redirectTo = '/home';

    protected $validColumns = [
        'fname'     =>   'required|string|max:255',
        'lname'     =>   'required|string|max:255',
        'email'     =>   'required|string|email|max:100|unique:users',
        'phone'     =>   'required|numeric|digits_between:10,13|unique:users',
        'bdate'     =>   'required|date',
        'gender'    =>   'required|string|max:10',
        'password'  =>   'required|string|min:8|confirmed',
    ];

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
        return Validator::make($data, $this->validColumns);
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
            'fname' => $data['fname'],
            'lname' => $data['lname'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'bdate' => $data['bdate'],
            'gender' => $data['gender'],
            'password' => Hash::make($data['password']),
            'register_ip' => request()->ip(),
            'active_token' => Str::random(),
            'remember_token' => Str::random(),
        ]);
    }
}
