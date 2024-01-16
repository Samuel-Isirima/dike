<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPackageController;
use App\Http\Controllers\AdminTransitController;
use App\Http\Controllers\CustomerPackageController; 

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

Route::get(uri: '/package', action: [CustomerPackageController::class, 'show'])->name(name: 'customer.package.index');


Route::get(uri: '/admin/packages', action: [AdminPackageController::class, 'index'])->name(name: 'admin.packages.index');

Route::get(uri: '/admin', action: [AdminPackageController::class, 'index'])->name(name: 'admin.packages.index');


Route::post(uri: '/admin/create-package-action', action: [AdminPackageController::class, 'create'])->name(name: 'admin.package.create');

Route::get(uri: '/admin/create-package', action: [AdminPackageController::class, 'show_create'])->name(name: 'admin.packages.show-create');

Route::get(uri: '/admin/package', action: [AdminPackageController::class, 'show'])->name(name: 'admin.package.show');

Route::post(uri: '/admin/edit-package-action', action: [AdminPackageController::class, 'updatePackage'])->name(name: 'admin.package.edit');

Route::get(uri: '/admin/edit-package', action: [AdminPackageController::class, 'showEditPackage'])->name(name: 'admin.package.show-edit');

Route::post(uri: '/admin/delete-package', action: [AdminPackageController::class, 'deletePackage'])->name(name: 'admin.package.delete');

Route::get(uri: '/admin/create-transit', action: [AdminTransitController::class, 'showCreate'])->name(name: 'admin.transit.show-create');

Route::post(uri: '/admin/create-transit-action', action: [AdminTransitController::class, 'create'])->name(name: 'admin.transit.create');

Route::post(uri: '/admin/edit-transit', action: [AdminTransitController::class, 'edit'])->name(name: 'admin.transit.edit');

Route::post(uri: '/admin/delete-transit', action: [AdminTransitController::class, 'delete'])->name(name: 'admin.transit.delete');
