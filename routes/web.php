<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('test');
//});

Route::get('/','App\Http\Controllers\PostController@index');

Route::get('user{id}','App\Http\Controllers\UserController@user');
Route::get('user/','App\Http\Controllers\UserController@index');

//php artisan make:migration create_test_table - create migration after its should to write
