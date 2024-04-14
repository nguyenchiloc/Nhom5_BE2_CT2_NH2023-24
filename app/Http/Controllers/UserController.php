<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //Login
    public function login(){
        return view('user.login');   
    }
    //Register
    public function register(){
        return view('user.register');   
    }
}
