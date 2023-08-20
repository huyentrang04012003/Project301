<?php

use App\Http\Controllers\ManagementController;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Loader\Configurator\ImportConfigurator;

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
    return view('welcome');
});

Route::resources([
    'imports'=> ImportController::class
]);

Route::resources([
    'products'=> ProductController::class
]);

Route::resources([
    'sale'=> SaleController::class
]);

Route::resources([
    'management'=> ManagementController::class
]);
