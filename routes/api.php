<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::prefix('v1')->group(function () {
    Route::resource('staff','StaffController');
    Route::resource('product','ProductController');
    Route::resource('category','CategoryController');
    Route::resource('purchasing','PurchasingController');
    Route::resource('purcashing-detail','PurchasingDetailController');
    Route::resource('vendor','VendorController');
});