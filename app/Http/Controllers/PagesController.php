<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('index');
     }
     public function products(){
        return view('pages.products');
     }
     public function contact(){
        return view('pages.contact');
     }
     public function about(){
        return view('pages.about');
     }
     public function blog(){
        return view('pages.blog') ;
     }
}
