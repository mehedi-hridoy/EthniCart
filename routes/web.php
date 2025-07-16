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
    return view('home');
});

Route::get('/food', function () {
    return view('food');
});

Route::get('/home&kitchen', function () {
    return view('home&kitchen');
});

Route::get('/fruits&vegetables', function () {
    return view('fruits&vegetables');
});

Route::get('/babyCare', function () {
    return view('babyCare');
});

Route::get('/beauty&Pcare', function () {
    return view('beauty&Pcare');
});

Route::get('/cloths', function () {
    return view('cloths');
});

Route::get('/gift', function () {
    return view('gift');
});


Route::get('/health', function () {
    return view('health');
});

Route::get('/homemadeMasala', function () {
    return view('homemadeMasala');
});

Route::get('/craftItems', function () {
    return view('craftItems');
});

Route::get('/fish&meat', function () {
    return view('fish&meat');
});


Route::get('/cleaning&household', function () {
    return view('cleaning&household');
});

