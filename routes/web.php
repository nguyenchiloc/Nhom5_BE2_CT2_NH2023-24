<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\HomeController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
//Login, Register
Route::get('/login', function () {
    return Inertia::render('index', [ 'canLogin' => Route::has('login'), 'laravelVersion' => Application::VERSION,'phpVersion' => PHP_VERSION,
    ]);
});
Route::get('/register', function () {
    return Inertia::render('index', [ 'canRegister' => Route::has('register'), 'laravelVersion' => Application::VERSION,'phpVersion' => PHP_VERSION,
    ]);
});

//dashboard
Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
//Profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
//Page
Route::get('/{page?}', [PagesController::class, 'page'])->name('page');
Route::get('/page/search', [PagesController::class, 'searchProducts'])->name('pages.search');
Route::get('/page/products_detail/{id?}', [PagesController::class, 'productDetail'])->name('pages.products_detail');

require __DIR__.'/auth.php';
