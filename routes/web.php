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

Route::get('profilePhotographer', function(){ 
    return view('profilePhotographer');
});

Route::get('package', function(){ 
    return view('package');
});

Route::get('searchResult', function(){ 
    return view('searchResult');
});


Route::get('recommendSetting', function(){ 
    return view('recommendSetting');
});

Route::get('orderstep1', function(){ return view('orderstep1');});
Route::get('orderstep2', function(){ return view('orderstep2');});
Route::get('orderstep3', function(){ return view('orderstep3');});
Route::get('orderstep4', function(){ return view('orderstep4');});
Route::get('orderstep5', function(){ return view('orderstep5');});
Route::get('orderstep6', function(){ return view('orderstep6');});
Route::get('orderstep7', function(){ return view('orderstep7');});
