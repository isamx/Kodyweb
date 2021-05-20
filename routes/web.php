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

Route::get('/', function () {
    return view('welcome');
});

//
//# Routing without names
//# - ID :
//Route::get('/test1/{id}', function () {
//    return "";
//});
//
//Route::get('/test3/{id}', function ($id) {
//    return "testing";
//});
//
//# Route with name
//# name makes it easy to call function
//
//Route::get('/Product/{id}', function () {
////    var message;
////    if()
////    if( id == 15)
//    return "Table - 3500";
//
//}) -> name("ShowProductName");
//
//
////Route::get("/homepage" , function () {
////    return view("welcome");
////});
//
////Route::resources("order" , "OrderController");
//
//Route::get("homepage" , "HomepageController@getindex");
//
//
//
//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
//
//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');

Auth::routes(["verify" => true]);

Route::get('/home', 'HomeController@index')->name('home')-> middleware('verified');
Route::get('/names', 'NamesController@index') ->name('namesRout');


Route::get('/dashboard', function () {
   return 'dashboard';
});


//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
