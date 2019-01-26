<?php

Auth::routes();

Route::resource('photographer/index', 'IndexController');
Route::get('profilePhotographer', 'ProfileController@index');
Route::get('photographer/chatchannel', function(){ return view('photographer.chatchannel.chatchannel');});
Route::get('photographer/notification', function(){ return view('photographer.notification.notification');});

// Success CRUD
Route::resource('profile_photographer', 'AlbumsController');
Route::get('photographer/show/{id}', 'AlbumsController@show');
Route::get('createAlbum', 'AlbumsController@create');
Route::get('photographer/show/{id}/edit', 'AlbumsController@edit');
Route::get('photographer/show/{id}/update', 'AlbumsController@update');
Route::get('photographer/show/{id}/destroy', 'AlbumsController@destroy');
Route::get('createAlbumSuccess', function(){ return view('createAlbumSuccess');});

// Success CRUD
Route::resource('listPackage', 'PackageCardsController');
Route::get('createPackageCard', 'PackageCardsController@create');
Route::get('photographer/packages/show/{id}/edit', 'PackageCardsController@edit');
Route::get('photographer/packages/show/{id}/update', 'PackageCardsController@update');
Route::get('photographer/packages/show/{id}/destroy', 'PackageCardsController@destroy');
Route::get('createPackageCardSuccess', function(){ return view('createPackageCardSuccess');});

// Success CRUD
Route::resource('invitePhotographer', 'RegisterPhotographerController');
Route::get('regPhotographer', 'RegisterPhotographerController@create');
Route::get('regPhotographerSuccess',function(){
    $id = Auth::user()->id;
    $user = \App\User::findOrFail($id);
    $user->role_id = '2';
    $user->save();
    return view('regPhotographerSuccess');
})->middleware('auth');

Route::get('/upload', 'UploadController@uploadForm');
Route::post('/upload', 'UploadController@uploadSubmit');

// Unsuccess CRUD
Route::get('/index', function(){ return view('general.index');});
Route::get('/', function(){ return view('general.index');});
Route::get('search', function(){ return view('general.search');});
Route::get('chatchannel', function(){ return view('general.chatchannel');})->middleware('auth');
Route::get('notification', function(){ return view('general.notification');})->middleware('auth');
Route::get('profileEmployer', function () { return view('general.profileEmployer'); })->middleware('auth');
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

Route::get('yourBank', function(){ return view('yourBank');});
Route::get('listTag', function(){ return view('listTag');});
Route::get('mn_order', function(){ return view('mn_order');});



Route::get('/home', 'HomeController@index')->name('home');




Route::get('/portfolioPhotographer',function(){ return view('regforphotographer.portfolio');});


