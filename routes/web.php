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

Route::get('index', function(){ 
    return view('index');
});

Route::get('search', function(){ 
    return view('search');
});

Route::get('chatchannel', function(){ 
    return view('chatchannel');
});

Route::get('notification', function(){ 
    return view('notification');
});

Route::get('profileEmpoyer', function(){ 
    return view('profileEmpoyer');
});