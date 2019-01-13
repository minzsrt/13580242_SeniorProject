<?php


Route::get('/', function(){ return view('index');});
Route::get('search', function(){ return view('search');});
Route::get('chatchannel', function(){ return view('chatchannel');});
Route::get('notification', function(){ return view('notification');});
Route::get('profileEmpoyer', function(){  return view('profileEmpoyer');});

Route::resource('profilePhotographer', 'AlbumsController');
// Route::get('profilePhotographer', function(){ return view('profilePhotographer');});
Route::get('package', function(){ return view('package');});

Route::get('searchResult', function(){ return view('searchResult');});

Route::get('recommendSetting', function(){ return view('recommendSetting');});

Route::get('orderstep1', function(){ return view('orderstep1');});
Route::get('orderstep2', function(){ return view('orderstep2');});
Route::get('orderstep3', function(){ return view('orderstep3');});
Route::get('orderstep4', function(){ return view('orderstep4');});
Route::get('orderstep5', function(){ return view('orderstep5');});
Route::get('orderstep6', function(){ return view('orderstep6');});
Route::get('orderstep7', function(){ return view('orderstep7');});
Route::get('listpayment', function(){ return view('listpayment');});

Route::get('paymentsuccess', function(){ return view('paymentsuccess');});
Route::get('internetbanking', function(){ return view('internetbanking');});

Route::get('index_ptg', function(){ return view('index_ptg');});
Route::get('yourBank', function(){ return view('yourBank');});
Route::get('profile_Photographer', function(){ return view('profile_Photographer');});
Route::get('createAlbum', function(){ return view('createAlbum');});
Route::get('createAlbumSuccess', function(){ return view('createAlbumSuccess');});
Route::get('createCard', function(){ return view('createCard');});
Route::get('listPackage', function(){ return view('listPackage');});
Route::get('listTag', function(){ return view('listTag');});
Route::get('mn_order', function(){ return view('mn_order');});

