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




Route::get('/detail-beanie', function () {
   return view('detail-beanie');
})->name('detail-beanie');

Route::get('/detail-controller', function () {
   return view('detail-controller');
})->name('detail-controller');

Route::get('/detail-headphones', function () {
   return view('detail-headphones');
})->name('detail-headphones');

Route::get('/detail-keyboard', function () {
   return view('detail-keyboard');
})->name('detail-keyboard');

Route::get('/detail-mouse', function () {
   return view('detail-mouse');
})->name('detail-mouse');

Route::get('/detail-shirt', function () {
   return view('detail-shirt');
})->name('detail-shirt');





Route::view('/', 'index')->name('home');
Route::view('/index', 'index')->name('index');


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
