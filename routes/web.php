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

Route::get("/", function () {return view("welcome");});

Route::get("/welcome", function () {return view("welcome");});

Route::get("/contact", function () {return view("contact");});

Route::get("/support", function () {return view("support");});

Route::post("/sell", "ItemsController@store");

Route::get("/sell", "ItemsController@create");

Route::get("/buy/{id}", "ItemsController@updateAvailability");

Route::get("/buy", function () {
    return view("items.buy", [
        "item" => App\Items::latest("id")->get()
    ]);});

Route::get("/manage", function () {
    return view("items.manage", [
    "item" => App\Items::get()
    ]);});

Route::get("/manage/{id}/edit", "ItemsController@edit");
Route::get("/manage/{id}/delete", "ItemsController@destroy");
Route::put("/manage/{id}", "ItemsController@update");

Auth::routes();

Route::get("/home", "HomeController@index")->name("home");