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
//
//Route::get('/', function () {
//    return view('welcome');
//});
//
//
//# Routing without names
//# - ID :
//Route::get('/admin', function () {
//    return "Hello admin";
//});
//
//
//Route::namespace("Clients")->group(function(){
//
//   Route::get("users" , "Client@getClientName")-> middleware("auth");
//});
//
////Route::namespace("Clients" , Route::get("users" , "Client@getClientName"));
//
//Route::get("login" , function () {
//    return "You must login babe";
//})->name("login");
//
//
//Route::group(["prefix" => "work" , "middleware" => "auth"] , function () {
//
//    Route::get("/" , function () {
//        return "it is working";
//    });
//if(false)
//    Route::get("/" , function () {
//
//        return " mainerwokrs";
//    });
//
//});
//
//
//Route::get("/orderpage" , "OrderController@ShowOrder");
//
