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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Rutas para los productos

Route::get('/productos', 'App\Http\Controllers\ProductoController@index');
Route::post('/productos', 'App\Http\Controllers\ProductoController@create');
Route::get('/productos/{id}', 'App\Http\Controllers\ProductoController@getById');
//Route::put('/producto', 'App\Http\Controllers\ProductoController@update');
Route::delete('/productos/{id}', 'App\Http\Controllers\ProductoController@delete'); 