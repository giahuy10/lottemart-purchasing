<?php

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



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::prefix('purchasing')->group(function () {

    // STAFF
    Route::get('staff', function () {
        return view('purchasing/staff');
    })->name('purchasing-staff');
    Route::get('staff/product', function () {
        return view('purchasing/staff-product');
    })->name('purchasing-staff-product');
    Route::get('staff/category', function () {
        return view('purchasing/staff-category');
    })->name('purchasing-staff-category');

    // MANAGER
    Route::get('manager', function () {
        return view('purchasing/manager');
    })->name('purchasing-manager');
    Route::get('manager/approve', function () {
        return view('purchasing/manager-approve');
    })->name('purchasing-manager-approve');
    Route::get('manager/staff', function () {
        return view('purchasing/manager-staff');
    })->name('purchasing-manager-staff');
    Route::get('manager/vendor', function () {
        return view('purchasing/manager-vendor');
    })->name('purchasing-manager-vendor');

    // VENDOR
    Route::get('vendor', function () {
        return view('purchasing/vendor');
    })->name('purchasing-vendor');
    Route::get('vendor/order', function () {
        return view('purchasing/vendor-order');
    })->name('purchasing-vendor-order');
});
