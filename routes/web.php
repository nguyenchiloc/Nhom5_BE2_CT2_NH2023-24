<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\ProductFilterController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\BillController;



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
Route::get('/products/search', [PagesController::class, 'searchProducts'])->name('pages.search');
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
    Route::patch('/update/{product_id?}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/destroy/{product_id?}', [ProductController::class, 'destroy'])->name('product.destroy');
});
//Admin - Category
Route::group(['prefix' => 'management/category', 'middleware' => ['auth']], function(){
    Route::get('/list', [CategoryController::class, 'index'])->name('category.index');
    Route::post('/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/edit/{category_id?}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::patch('/update/{category_id?}', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/destroy/{category_id?}', [CategoryController::class, 'destroy'])->name('category.destroy');
});    
//Admin - Brand
Route::group(['prefix' => 'management/brand', 'middleware' => ['auth']], function(){
    Route::get('/list', [BrandController::class, 'index'])->name('brand.index');
    Route::post('/store', [BrandController::class, 'store'])->name('brand.store');
    Route::get('/edit/{brand_id?}', [BrandController::class, 'edit'])->name('brand.edit');
    Route::patch('/update/{brand_id?}', [BrandController::class, 'update'])->name('brand.update');
    Route::delete('/destroy/{brand_id?}', [BrandController::class, 'destroy'])->name('brand.destroy');
});  
//Admin - Price
Route::group(['prefix' => 'management/price', 'middleware' => ['auth']], function(){
    Route::get('/list', [PriceController::class, 'index'])->name('price.index');
    Route::post('/store', [PriceController::class, 'store'])->name('price.store');
    Route::get('/edit/{price_id?}', [PriceController::class, 'edit'])->name('price.edit');
    Route::patch('/update/{price_id?}', [PriceController::class, 'update'])->name('price.update');
    Route::delete('/destroy/{price_id?}', [PriceController::class, 'destroy'])->name('price.destroy');
}); 
//Fillter category, sort, brand
Route::group(['prefix' => 'fillter'], function(){
    Route::get('/sort/product', [ProductFilterController::class, 'fillterSort'])->name('pages.fillterSort'); 
    Route::get('/{id?}/category', [ProductFilterController::class, 'fillterCategory'])->name('pages.fillterCategory'); 
    Route::get('/price/{id?}', [ProductFilterController::class, 'fillterPrice'])->name('pages.fillterPrice'); 
    Route::get('/{id?}/brand', [ProductFilterController::class, 'fillterBrand'])->name('pages.fillterBrand'); 
}); 
//User - Cart
Route::group(['prefix' => 'cart', 'middleware' => ['auth']], function(){
    Route::post('/{product_id}', [CartController::class, 'add_to_cart'])->name('cart.add_to_cart');
    Route::get('/show_cart', [CartController::class, 'show_cart'])->name('cart.show_cart');
    Route::patch('/update/{cart_id}', [CartController::class, 'update_cart'])->name('cart.update_cart'); 
    Route::delete('/destroy/{cart_id}', [CartController::class, 'destroy_cart'])->name('cart.destroy');
    Route::get('/checkout', [CartController::class, 'getCheckOut'])->name('cart.getCheckOut');
    Route::post('/checkout/order', [CartController::class, 'postCheckOut'])->name('cart.postCheckOut');
});
//Admin/User - Bill
Route::group(['prefix' => 'bill', 'middleware' => ['auth']], function(){
    Route::post('/show_order', [BillController::class, 'show_order'])->name('bill.show_order');
   
});