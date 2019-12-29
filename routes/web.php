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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });




//Route::view('/', 'home');
Route::get('/', 'HomeController@index');

Route::view('/statistics', 'statistics');

//Route::view('/contact', 'contact', ['name' => 'Ludwik']);
Route::get('/contact', 'ContactController@index');

Route::view('/jokes', 'jokes');

Route::view('/places', 'places');

Route::view('/gallery', 'gallery');

Route::view('/whatislaravel', 'whatislaravel');