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

/*
Route::get('/plans', 'Api\\PlanController@index');
Route::post('/plans', 'Api\\PlanController@store');
Route::get('/plans/{plan}', 'Api\\PlanController@show');
Route::put('/plans/{plan}', 'Api\\PlanController@update');
Route::delete('/plans/{plan}', 'Api\\PlanController@destroy');
*/

Route::resource('plans','api\\PlanController')->except(['create','edit']);
Route::resource('groups','api\\GroupController')->except(['create','edit']);
