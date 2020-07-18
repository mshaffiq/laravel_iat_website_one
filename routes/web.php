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

Route::get('/', function () {return view('welcome');});
Route::get('/contact', function () {return view('contact');});
Route::get('/support', function () {return view('support');});
Route::get('/sell', function () {return view('sell');});
Route::get('/buy', function () {return view('buy');});
Route::get('/manage', function () {return view('manage');});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');