<?php


// Test Noti
use App\Events\TriggerNotification;
Route::get('echo/{id}', function ($id) {
    \App\Notification::create([
        'user_id' => $id,
        'message' => 'ทดสอบ',
    ]);
    event(new TriggerNotification($id));
});


// Login
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


// index
Route::resource('/', 'IndexController');


// Reg Photographer
Route::resource('invitePhotographer', 'RegisterPhotographerController');
Route::get('regPhotographer', 'RegisterPhotographerController@create');
Route::get('regPhotographerSuccess', function () {
    $id = Auth::user()->id;
    $user = \App\User::findOrFail($id);
    $user->role_id = '2';
    $user->save();
    return view('regPhotographerSuccess');
})->middleware('auth');


// profile
Route::get('/profile/{username}', 'ProfileController@show')->name('general.profile.show');
Route::get('/profile/{username}/edit', 'UserController@show')->name('auth.edit');
Route::post('/profile/update', 'UserController@update')->name('auth.update');


// album
Route::get('photographer/show/{id}', 'AlbumsController@show');
Route::get('createAlbum', 'AlbumsController@create');
Route::post('createAlbum/store', 'AlbumsController@store');
Route::get('createAlbum/{id}/upload', 'AlbumsController@uploadimage');
Route::post('createAlbum/{id}/upload/store', 'AlbumsController@upload');
Route::get('profile/{username}/album/{id}', 'AlbumsController@show');
Route::get('profile/{username}/album/{id}/edit', 'AlbumsController@edit');
Route::post('profile/{username}/album/{id}/update', 'AlbumsController@update');
Route::get('photographer/show/{id}/destroy', 'AlbumsController@destroy');
Route::get('createAlbumSuccess', function () {return view('createAlbumSuccess');});


// package
Route::get('/profile/{username}/listPackage/{id}', 'PackageCardsController@index')->name('photographer.packages.listPackage');
Route::get('createPackagecardCategory', 'PackageCardsController@createPackagecardCategory');
Route::post('createPackagecardCategory', 'PackageCardsController@postPackagecardCategory');
Route::get('createPackageCard', 'PackageCardsController@create');
Route::post('createPackageCard/store', 'PackageCardsController@store');
Route::get('profile/{username}/listPackage/{idcategory}/{id}/edit', 'PackageCardsController@edit');
Route::get('profile/{username}/listPackage/{idcategory}/{id}/update', 'PackageCardsController@update');
Route::get('profile/{username}/listPackage/{idcategory}/{id}/destroy', 'PackageCardsController@destroy');
Route::get('createPackageCardSuccess', 'PackageCardsController@success');


// Notification
Route::get('/notification/{username}', 'NotificationController@index');
Route::post('/notification/clear', 'NotificationController@clearNoti');

// Order
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
Route::get('/order/{id}/createsuccess', 'OrderController@createsuccess');
Route::get('/order/{id}/invoice', 'OrderController@edit');
Route::get('/order/{id}/update', 'OrderController@update');
Route::get('invoiceSuccess', function () {return view('invoiceSuccess');});

// Payment
Route::get('listpayment/{id}', 'PaymentController@index');
Route::post('listpayment', 'PaymentController@requestCharge');
Route::get('paymentsuccess', function () {return view('paymentsuccess');});
Route::get('internetbanking', function () {return view('internetbanking');});
Route::get('paymentCard', function () {
    return view('paymentCard');
});
// Route::get('checkout', function () {return view('checkout');});

// credits
Route::get('/credits/{username}', 'DepositAccountController@index');
Route::get('/credits/{username}/create', 'DepositAccountController@create');
Route::post('/credits/{username}/store', 'DepositAccountController@store');
Route::get('/credits/{username}/edit', 'DepositAccountController@edit');
Route::post('/credits/{username}/update', 'DepositAccountController@update');


// review
Route::get('order/{id}/review', 'ReviewController@create');
Route::post('order/{id}/review/store', 'ReviewController@store');
Route::get('reviewSuccess', function () {return view('reviewSuccess');});

//Vertify
Route::get('/verify/{username}', 'VerifyController@index');
Route::post('/verify/{username}/store', 'VerifyController@store');
Route::get('/verify/{username}/edit', 'VerifyController@edit');
Route::post('/verify/{username}/update', 'VerifyController@update');


//admin
// Route::get('/admin', 'AdminController@index');
Route::get('/admin/orders', 'AdminController@orderlist');
Route::get('/admin/orders/{id}', 'AdminController@ordershow');
Route::get('/admin/users/general', 'AdminController@usergenerallist');
Route::get('/admin/users/general/{id}', 'AdminController@usergeneralshow');
Route::get('/admin/users/photographer', 'AdminController@userphotographerlist');
Route::get('/admin/users/photographer/{id}', 'AdminController@userphotographershow');
Route::get('/admin/categories', 'AdminController@categorylist');
Route::post('/admin/categories/post', 'AdminController@categorypost');
Route::get('/admin/categories/{id}/update', 'AdminController@categoryupdate');
Route::get('/admin/categories/{id}/destroy', 'AdminController@categorydestroy');
Route::get('/admin/formattime', 'AdminController@formattimelist');
Route::post('/admin/formattime/post', 'AdminController@formattimepost');
Route::get('/admin/formattime/{id}/update', 'AdminController@formattimeupdate');
Route::get('/admin/formattime/{id}/destroy', 'AdminController@formattimedestroy');
Route::get('/admin/banks', 'AdminController@banklist');
Route::post('/admin/banks/post', 'AdminController@bankpost');
Route::get('/admin/banks/{id}/update', 'AdminController@bankupdate');
Route::get('/admin/banks/{id}/destroy', 'AdminController@bankdestroy');
Route::get('/admin/verify', 'AdminController@verifylist');
Route::get('/admin/verify/{id}/update', 'AdminController@verifyupdate');


// Unsuccess CRUD
// Route::get('photographer/chatchannel', function () {return view('photographer.chatchannel.chatchannel');});
// Route::get('chatchannel', function () {return view('general.chatchannel');})->middleware('auth');
Route::get('recommendSetting', function () {return view('recommendSetting');});
Route::get('/portfolioPhotographer', function () {return view('regforphotographer.portfolio');});

Route::any('search', 'SearchController@index');
// Route::get('searchResult', function(){ return view('searchResult');});

Route::get('listTag', function () {return view('listTag');});
Route::get('management', function () {return view('mn_order');});

Route::get('order/{id}', 'OrderController@show');
Route::get('order/{id}/uploadfile', 'OrderController@uploadfileview');
Route::post('order/{id}/uploadfile/store', 'OrderController@uploadfile');
Route::post('order/{id}/sendwork', 'OrderController@sendwork');
Route::get('order/{id}/uploadfile/success', 'OrderController@uploadfilesuccess');
Route::get('order/{id}/viewfile', 'OrderController@viewfile');
Route::get('order/{id}/download', 'OrderController@downloadzip');
Route::get('order/{id}/downloadlink', 'OrderController@downloadzip');




