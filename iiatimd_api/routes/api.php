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

Route::get("/activiteiten", "activiteitenController@index");
Route::get("/activiteiten/random","activiteitenController@random");
Route::get("/activiteiten/{id}","activiteitenController@show");

Route::get("/agenda", "dagenController@index");
Route::get("/agenda/{dag}/{maand}/{jaar}", "dagenController@showDag");
