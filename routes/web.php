<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPackageController;

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

Route::get(uri: '/admin/packages', action: [AdminPackageController::class, 'index'])->name(name: 'admin.packages.index');

Route::post(uri: '/admin/create-package', action: [AdminPackageController::class, 'create'])->name(name: 'admin.packages.create');

Route::get(uri: '/admin/package', action: [AdminPackageController::class, 'show'])->name(name: 'admin.package.show');