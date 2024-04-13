<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\login;
use App\Http\Controllers\register;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/{page?}', function ($page='index') { 
//     return view($page);
// })->name('page');
Route::get('/{page?}', [PagesController::class, 'page'])->name('page');
Route::get('/page/search', [PagesController::class, 'searchProducts'])->name('pages.search');
Route::get('/user/login', [login::class, 'login'])->name('user.login');
Route::get('/user/register', [register::class, 'register'])->name('user.register');
    
