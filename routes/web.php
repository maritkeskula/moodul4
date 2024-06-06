<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
   return view('index');
})->name('home');

Route::get('/shop', function () {
   return view('shop');
})->name('shop');

Route::get('/contact', function () {
   return view('contact');
})->name('contact');

// Route::name('public.')->group(function () {
//     Route::view('/', 'index')->name('home');
//     Route::view('/products', 'products')->name('products');
//     Route::view('/contact', 'contact')->name('contact');
//     Route::view('/shop', 'shop')->name('shop');
//
// });


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin', function () {
    return view('admin.index');
})->middleware(['auth', 'verified', 'role:admin'])->name('admin.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
