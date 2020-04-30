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

Route::get('/', function () {
    return view('front.home');
});

Route::get('hello/{name}','UserController@index');

Route::get('user/{id}', function ($id) {
    //$id = request('id');
    return '你在'.$id;
});

//Route::get('about','Front\UserController@about');
Route::get('about',function (){
    return view('front.about');
});
Route::get('contact','Front\UserController@contact');
Route::get('login','Front\UserController@about');
Route::get('register','Front\UserController@about');
