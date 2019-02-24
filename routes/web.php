<?php

use App\Events\FormSubmited;


Auth::routes();

Route::get('photographer/chatchannel', function(){ return view('photographer.chatchannel.chatchannel');});
Route::get('photographer/notification', function(){ return view('photographer.notification.notification');});

// Success CRUD
// Route::resource('profile_photographer', 'AlbumsController');
Route::get('photographer/show/{id}', 'AlbumsController@show');
Route::get('createAlbum', 'AlbumsController@create');
Route::post('createAlbum/store', 'AlbumsController@store');
Route::get('photographer/show/{id}/edit', 'AlbumsController@edit');
Route::get('photographer/show/{id}/update', 'AlbumsController@update');
Route::get('photographer/show/{id}/destroy', 'AlbumsController@destroy');
Route::get('createAlbumSuccess', function(){ return view('createAlbumSuccess');});

// Success CRUD
Route::get('/profile/{username}/listPackage/{id}', 'PackageCardsController@index')->name('photographer.packages.listPackage');
Route::get('createPackagecardCategory', 'PackageCardsController@createPackagecardCategory');
Route::post('createPackagecardCategory', 'PackageCardsController@postPackagecardCategory');
Route::get('createPackageCard', 'PackageCardsController@create');
Route::post('createPackageCard/store', 'PackageCardsController@store');
Route::get('profile/{username}/listPackage/{idcategory}/{id}/edit', 'PackageCardsController@edit');
Route::get('profile/{username}/listPackage/{idcategory}/{id}/update', 'PackageCardsController@update');
Route::get('profile/{username}/listPackage/{idcategory}/{id}/destroy', 'PackageCardsController@destroy');
Route::get('createPackageCardSuccess','PackageCardsController@success');

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

Route::resource('/','IndexController');
Route::get('/profile/{username}', 'ProfileController@show')->name('general.profile.show');
Route::get('/profile/{username}/edit', 'UserController@show')->name('auth.edit');
Route::post('/profile/update', 'UserController@update')->name('auth.update');

// Unsuccess CRUD
Route::any('search','SearchController@index');

Route::get('chatchannel', function(){ return view('general.chatchannel');})->middleware('auth');
Route::get('/notification/{username}', 'NotificationController@index');

Route::get('package', function(){ return view('package');});

// Route::get('searchResult', function(){ return view('searchResult');});

Route::get('recommendSetting', function(){ return view('recommendSetting');});

Route::get('{username}/order/step1', 'OrderController@createStep1');
Route::post('{username}/order/step1', 'OrderController@postCreateStep1');
Route::get('{username}/order/step2', 'OrderController@createStep2');
Route::post('{username}/order/step2', 'OrderController@postCreateStep2');
Route::get('{username}/order/step3', 'OrderController@createStep3');
Route::post('{username}/order/step3', 'OrderController@postCreateStep3');
Route::get('{username}/order/step4', 'OrderController@createStep4');
Route::post('{username}/order/step4', 'OrderController@postCreateStep4');
Route::get('{username}/order/step5', 'OrderController@createStep5');
Route::post('{username}/order/step5', 'OrderController@postCreateStep5');
Route::get('{username}/order/step6', 'OrderController@createStep6');
Route::post('/order/store', 'OrderController@store');
Route::get('orderstep7', function(){ return view('orderstep7');});
Route::get('/order/{id}/invoice', 'OrderController@edit');
Route::get('/order/{id}/update', 'OrderController@update');
Route::get('invoiceSuccess', function(){ return view('invoiceSuccess');});

Route::get('listpayment', function(){ return view('listpayment');});
Route::get('paymentsuccess', function(){ return view('paymentsuccess');});
Route::get('internetbanking', function(){ return view('internetbanking');});
Route::get('paymentCard', function(){ 
    return view('paymentCard');
});
Route::get('checkout', function(){ return view('checkout');});

Route::get('/credits/{username}', 'DepositAccountController@index');
Route::get('/credits/{username}/create', 'DepositAccountController@create');
Route::post('/credits/{username}/store', 'DepositAccountController@store');
Route::get('listTag', function(){ return view('listTag');});
Route::get('mn_order', function(){ return view('mn_order');});



Route::get('/home', 'HomeController@index')->name('home');




Route::get('/portfolioPhotographer',function(){ return view('regforphotographer.portfolio');});


Route::get('counter', function(){ return view('counter');});
Route::get('sender', function(){ return view('sender');});
Route::post('sender', function(){ 
    $text = request()->text;
    event(new FormSubmited($text));
    return $text;
});
