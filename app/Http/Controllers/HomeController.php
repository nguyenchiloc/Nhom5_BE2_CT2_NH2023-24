<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function home()
    {
        if(Auth::id()){
            $userlevel= Auth()->user()->level_id;
            if($userlevel == '1'){
                // return view('dashboard');
                return redirect('/blog');
            }else{
                return view('blog');
            }
        }
    }
}
