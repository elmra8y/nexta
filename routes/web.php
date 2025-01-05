<?php

use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\SerivesController;
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

Route::get('/our-services/{type}', [SerivesController::class, 'show'])->name('our-services-details');

Route::get('/our-work', function () {
    return view('our-work');
})->name('our-work');

Route::get('/our-work/{type}', [ProjectsController::class, 'show'])->name('our-work-details');

Route::get('/change-language', function () {
    // Check the current application locale and toggle between 'en' and 'ar'
    $lang = app()->getLocale() === 'en' ? 'ar' : 'en';

    // Store the new locale in the session
    session(['locale' => $lang]);

    // Set the application locale for the current request
    app()->setLocale($lang);

    // Redirect back to the previous page
    return redirect()->back();
})->name('change-language');