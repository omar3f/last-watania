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

Route::get(/**
 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
 */
    '/', function () {
    return view('welcome');
});

Route::get('panel/pages/');

Route::get('/panel','AdminController@index');
Route::get('page1','AdminController@page');

// Main Data
Route::get('panel/main-data','AdminController@mainData');
Route::post('panel/main-data','AdminController@storeMainData');

// social
Route::get('panel/main-data/social','AdminController@social');
Route::post('panel/main-data/social','AdminController@storeSocialData');

// Admins
Route::get('panel/main-data/admins','AdminController@admins');
Route::post('panel/main-data/admins/{id}','AdminController@destroyAdmin');

Route::get('panel/admins/new','AdminController@newAdmin');
Route::post('panel/admins/new','AdminController@storeNewAdmin');

//slider
Route::get('panel/slider','AdminController@slider');
Route::get('panel/slider/new','AdminController@newSlide');
Route::post('panel/slider/new','AdminController@storeNewSlide');

Route::get('panel/slider/{id}/edit','AdminController@editSlide');
Route::post('panel/slider/{id}/edit','AdminController@updateSlide');

Route::post('panel/slider/{id}','AdminController@destroySlide');

Route::post('panel/slider/{id}/show','AdminController@showSlide');
Route::post('panel/slider/{id}/hide','AdminController@hideSlide');

// authentication Login
Route::get('/auth/login','Auth\AuthController@getLogin');
Route::post('/auth/login','Auth\AuthController@postLogin');

// authentication Logout
Route::get('/auth/logout','Auth\AuthController@getLogout');

// authentication Register
/*Route::get('/auth/register','Auth\AuthController@getRegister');
Route::post('/auth/register','Auth\AuthController@postRegister');*/