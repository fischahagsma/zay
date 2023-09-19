<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('pages.home');
});
Route::view('/profile', 'pages.profile')->middleware('auth');
Route::view('/about', 'pages.about');

Route::get('/shop', [ProductController::class, 'showProduct']);
Route::get('/shop/{id}', [ProductController::class, 'showSingleProduct']);

Route::get('/addCart/{productId}', [CartController::class, 'addCart'])->middleware('auth');

Route::view('/contact', 'pages.contact');

Route::view('/addProduct', 'pages.addProduct');
Route::post('addProduct', [ProductController::class, 'addProduct']);

Route::post('/logout', [ProfileController::class, 'logout'])->middleware('auth');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

/*Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});*/

require __DIR__.'/auth.php';
