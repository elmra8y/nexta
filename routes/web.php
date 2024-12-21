<?php

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
    return view('home');
})->name('home');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');

Route::get('/our-services', function () {
    return view('our-services');
})->name('our-services');

Route::get('/our-services/{type}', function () {
    return view('our-services-details');
})->name('our-services-details');

Route::get('/our-work', function () {
    return view('our-work');
})->name('our-work');

Route::get('/our-work/{type}', function () {
    return view('our-work-details');
})->name('our-work-details');
