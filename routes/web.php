<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::get('/{page?}', [PagesController::class, 'page'])->name('page');
Route::get('/page/search', [PagesController::class, 'searchProducts'])->name('pages.search');
Route::get('/page/products_detail/{id?}', [PagesController::class, 'productDetail'])->name('pages.products_detail');
//Route::get('/auth/login', [UserController::class, 'login'])->name('auth.login');
Route::get('/user/register', [UserController::class, 'register'])->name('user.register');

require __DIR__.'/auth.php';

