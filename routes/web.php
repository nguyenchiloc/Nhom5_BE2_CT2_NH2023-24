<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfileController;


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
Route::get('/page/search', [PagesController::class, 'searchProducts'])->name('pages.search');
Route::get('/page/products_detail/{id?}', [PagesController::class, 'productDetail'])->name('pages.products_detail');
//profiles
Route::prefix('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::patch('/profile/{user_id}', [ProfileController::class, 'update'])->name('profile.update');
    Route::patch('/profile/{user_id}/changePassword', [ProfileController::class, 'changePassword'])->name('profile.changePassword');
});
// Route::group([
//     'namespace'  => 'App\Http\Controllers',
//     'as'         => 'auth.'
//     ], function() {
//     Route::resource('profile', 'ProfileController');
//     Route::patch('profile/{user}/passUpdate', [ProfileController::class, 'passUpdate'])->name('profile.passUpdate');
//     Route::patch('profile/{user}/othersUpdate', [ProfileController::class, 'othersUpdate'])->name('profile.othersUpdate');

//     Route::resource('roles','RoleController');
//     Route::resource('permissions','PermissionController');

//     Route::resource('users','UserController');
//     Route::patch('users/{user}/passUpdate', [UserController::class, 'passUpdate'])->name('users.passUpdate');
//     Route::patch('users/{user}/othersUpdate', [UserController::class, 'othersUpdate'])->name('users.othersUpdate');

// });
    
