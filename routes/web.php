<?php

use App\Http\Controllers\PostController;
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

Route::get('/','App\Http\Controllers\HomeController@index');

//first I need to create some model "php artisan make:model Name --factory"
//to create resource controller use the following command "php artisan make:controller NameController -r"
//or use only one command php artisan make:model Name --controller --resource
//Route::resource('/post', 'PostController');
//Route::resource('/post', PostController::class);
// when I write this link it's the same link bellow
//but this way create wrong route list, I don't know how fix it

Route::get('post/','App\Http\Controllers\PostController@index')->name('post.index');
Route::get('post/create','App\Http\Controllers\PostController@create')->name('post.create');
Route::get('post/show/{id}','App\Http\Controllers\PostController@show')->name('post.show');
Route::get('post/edit/{id}','App\Http\Controllers\PostController@edit')->name('post.edit');
Route::post('post/','App\Http\Controllers\PostController@store')->name('post.store');
Route::patch('post/show/{id}','App\Http\Controllers\PostController@update')->name('post.update');
Route::delete('post/{id}','App\Http\Controllers\PostController@destroy')->name('post.destroy');


//Route::get('user{id}','App\Http\Controllers\UserController@user');
//Route::get('user/','App\Http\Controllers\UserController@index');

//php artisan make:migration create_test_table - create migration after its should to write


Auth::routes();
Route::get('register','App\Http\Controllers\HomeController@index');


Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('home/price/','App\Http\Controllers\HomeController@price')->name('home.price');
Route::get('home/contact/','App\Http\Controllers\HomeController@contact')->name('home.contact');
Route::post('home/contact/','App\Http\Controllers\HomeController@sendMessage')->name('home.sendMassage');
Route::get('home/sendMail/{id}','App\Http\Controllers\MailController@store')->name('home.sendMail');
