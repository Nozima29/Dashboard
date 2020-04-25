<?php

Route::get('/', 'HomeController@index')->name('home');
Auth::routes();
Route::get('/create', 'RecordsController@create');
Route::post('/create', 'RecordsController@store');
Route::get('/delete/{id}', 'RecordsController@delete');
Route::get('/update/{id}', 'RecordsController@edit');
Route::post('/update/{id}', 'RecordsController@update');
Route::group(['middleware' => 'auth'], function () {    
    Route::resource('user', 'UserController', ['except' => ['show']]);
    
	Route::get('profile', [
        'as' => 'profile.edit', 
        'uses' => 'ProfileController@edit'
    ]);
    
    Route::put('profile', [
        'as' => 'profile.update', 
        'uses' => 'ProfileController@update'
    ]);
    
    Route::put('profile/password', [
        'as' => 'profile.password', 
        'uses' => 'ProfileController@password'
    ]);
});

