<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['as' => 'home'],function () {
    return view('welcome');
});

Route::group(['prefix' => '/admin'], function(){
    Route::get('adminpanel/addarticles', ['uses' =>'AdminController@addarticles', 'as' => 'addarticles']);
    Route::post('adminpanel/savearticle',['uses' =>'AdminController@savearticle', 'as' => 'savearticle']);
    Route::resource('adminpanel','AdminController',['names'=>[
        'create' => 'create',
        'index' => 'index',
        'edit' => 'edit',
        'destroy' => 'delete',
        'store' => 'store',
        'show' => 'show',
    ]]);
});
