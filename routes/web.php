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
});


Route::get('/about', function () {
    return view('about');
});



Route::get('/air-freight', function () {
    return view('air-freight');
});



Route::get('/ocean-freight', function () {
    return view('ocean-freight');
});


Route::get('/road-freight', function () {
    return view('road-freight');
});

Route::get('/ware-housing-and-storage', function () {
    return view('ware-housing-and-storage');
});
