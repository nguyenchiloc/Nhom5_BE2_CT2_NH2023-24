<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use App\Models\User;

class UserController extends Controller
{
    //Login
    public function login(){
        return view('auth.login');   
    }
    //Register
    public function register(){
        return view('user.register');   
    }
}
