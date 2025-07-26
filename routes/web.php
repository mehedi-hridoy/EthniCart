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

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', function() {
    return view('home');
})->name('home');


Route::get('/home&kitchen', function () {
    return view('home&kitchen');
});

Route::get('/fruits&vegetables', function () {
    return view('fruits&vegetables');
});

Route::get('/babyCare', function () {
    return view('babyCare');
});



Route::get('/cloths', function () {
    return view('cloths');
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


Route::get('/pickles&condiments', function () {
    return view('pickles&condiments');
});

Route::get('/organicRoots', function () {
    return view('organicRoots');
});

Route::get('/beauty&care', function () {
    return view('beauty&care');
});

Route::get('/gift', function () {
    return view('gift');
});

Route::get('/vegetables', function () {
    return view('vegetables');
});

Route::get('/meet_theMakers', function () {
    return view('meet_theMakers');
});

Route::get('/fromTheSource', function () {
    return view('fromTheSource');
});

Route::get('/aboutUs', function () {
    return view('aboutUs');
});

Route::get('/ethniPromise', function () {
    return view('ethniPromise');
});


Route::get('/stories', function () {
    return view('stories');
});

Route::get('/accounts/account', function () {
    return view('accounts.account');
});

// login 
use App\Http\Controllers\AuthController;

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Protected route example
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');
