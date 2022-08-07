<?php

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


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/index', 'IndexController@index')
    ->middleware('auth');

Auth::routes();

Route::get('/login', 'HomeController@index')->name('home');

Route::get('/check', 'HomeController@index')->name('home');



