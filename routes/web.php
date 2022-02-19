<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LicenseController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\ProductKeyController;



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
    return view('welcome');
});


Route::resource('licenses', LicenseController::class);

Route::resource('customers', CustomerController::class);

Route::resource('manufacturers', ManufacturerController::class);

Route::resource('devices', DeviceController::class);

Route::resource('statuses', StatusController::class);

Route::resource('productkeys', ProductKeyController::class);
