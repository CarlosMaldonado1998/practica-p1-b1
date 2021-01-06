<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('customers', 'App\Http\Controllers\CustomerController@index');
Route::get('customers/{customer}', 'App\Http\Controllers\CustomerController@show');
Route::post('customers', 'App\Http\Controllers\CustomerController@store');
Route::put('customers/{customer}', 'App\Http\Controllers\CustomerController@update');
Route::delete('customers/{customer}', 'App\Http\Controllers\CustomerController@delete');

Route::get('products', 'App\Http\Controllers\ProductController@index');
Route::get('products/{product}', 'App\Http\Controllers\ProductController@show');
Route::post('products', 'App\Http\Controllers\ProductController@store');
Route::put('products/{product}', 'App\Http\Controllers\ProductController@update');
Route::delete('products/{product}', 'App\Http\Controllers\ProductController@delete');
