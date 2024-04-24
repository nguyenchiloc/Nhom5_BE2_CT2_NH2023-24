<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;


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

Auth::routes();
Route::get('/home', [PagesController::class, 'page'])->name('home');
Route::get('/{page?}', [PagesController::class, 'page'])->name('page');
Route::get('/search', [PagesController::class, 'searchProducts'])->name('pages.search');
Route::get('/products_detail/{id?}', [PagesController::class, 'productDetail'])->name('pages.products_detail');
//profiles
Route::group(['prefix' => 'auth', 'middleware' => ['auth']], function(){
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::patch('/profile/{user_id}', [ProfileController::class, 'update'])->name('profile.update');
    Route::patch('/profile/{user_id}/changePassword', [ProfileController::class, 'changePassword'])->name('profile.changePassword');
});
//Admin - Product
Route::group(['prefix' => 'product', 'middleware' => ['auth']], function(){
    Route::get('/list', [ProductController::class, 'index'])->name('product.index');
    Route::get('/news/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/news/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/show/{product_id?}', [ProductController::class, 'show'])->name('product.show');
    Route::get('/product/{product_id?}/edit', [ProductController::class, 'edit'])->name('product.edit');
    Route::get('/update/{product_id?}', [ProductController::class, 'update'])->name('product.update');
});
    
