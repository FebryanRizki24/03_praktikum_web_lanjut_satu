<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Auth;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('home2');
});

Route::prefix('/product')->name('product')->group(function () {
    Route::get('', function(){
        return view('product.product');
    });
    Route::get('/edu', function(){
        return view('product.edu',['nama' => 'marbel-edu-games']);
    });
    Route::get('/kids', function(){
        return view('product.kids',['nama' => 'marbel-and-friends-kids-games']);
    });
});

Route::get('/news', function () {
    return view('news');
});

Route::prefix('')->group(function(){
    Route::get('/program', [App\Http\Controllers\ProgramController::class, 'index'])->name('program');
});

Route::get('/about-us', function(){
    return view('about');
});

Route::get('/contact-us', [App\Http\Controllers\ContactController::class, 'index']);