<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\stockController;


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

// stock home
Route::get('/home', function () {
    return view('welcome');
});

// project home
Route::get('/', function () {
    return view('mainMenu');
});

// show form - insert product
Route::get('/stock/create', 'App\Http\Controllers\StockController@create');

// save stock details
Route::post('/stock/store', 'App\Http\Controllers\StockController@store');

// display product details
Route::get('/stock/product', 'App\Http\Controllers\StockController@showProduct');

// display product details for update
Route::get('/stock/product/edit/{id}', 'App\Http\Controllers\StockController@indexProduct');

// update product details
Route::post('/stock/product/edit/', 'App\Http\Controllers\StockController@editProduct');

// delete product details
Route::get('/stock/product/delete/{id}', 'App\Http\Controllers\StockController@deleteProduct');

// display order details
Route::get('/stock/order', 'App\Http\Controllers\StockController@showOrder');

// display order details for update
Route::get('/stock/order/edit/{id}', 'App\Http\Controllers\StockController@indexOrder');

// update order details
Route::post('/stock/order/edit/', 'App\Http\Controllers\StockController@editOrder');

// delete order details
Route::get('/stock/order/delete/{id}', 'App\Http\Controllers\StockController@deleteOrder');

// search products
Route::get('/stock/product/search', [StockController::class, 'productSearch']);

// search orders
Route::get('/stock/order/search', [StockController::class, 'orderSearch']);

// pdf - order
Route::get('/stock/order/pdf', [StockController::class, 'orderPdfReport']);