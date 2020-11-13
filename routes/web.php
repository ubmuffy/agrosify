<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('front.index');
});

Route::get('/about', function () {
    return view('front.about');
});
Route::get('/contact', function () {
    return view('front.contact');
});

Route::get('/home', function () {
    return view('admin.layouts.dashboard');
});
Route::get('/loan', function () {
    return view('admin.layouts.loan');
});
Route::get('/verify', function () {
    return view('admin.layouts.verify');
});


// Route::get('/home', function () {
//     // Auth::logout();
//     return view('admin.master');
// })->middleware('auth');
