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

Route::post('register', 'App\Http\Controllers\UserController@register');
Route::post('login', 'App\Http\Controllers\UserController@authenticate');
Route::get('products', 'App\Http\Controllers\ProductController@store');
Route::get('products/{product}', 'App\Http\Controllers\ProductController@show');

Route::group(['middleware' => ['jwt.verify']], function() {
    Route::get('user', 'App\Http\Controllers\UserController@getAuthenticatedUser');

    //Customers
    Route::get('customers', 'App\Http\Controllers\CustomerController@index');
    Route::get('customers/{customer}', 'App\Http\Controllers\CustomerController@show');
    Route::post('customers', 'App\Http\Controllers\CustomerController@store');
    Route::put('customers/{customer}', 'App\Http\Controllers\CustomerController@update');
    Route::delete('customers/{customer}', 'App\Http\Controllers\CustomerController@delete');

    //Products
    Route::post('products', 'App\Http\Controllers\ProductController@index');
    Route::put('products/{product}', 'App\Http\Controllers\ProductController@update');
    Route::delete('products/{product}', 'App\Http\Controllers\ProductController@delete');
});





