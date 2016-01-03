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

// Routing for links
Route::resource('/panel/links', 'Panel\LinksController');
Route::get('/panel/links/visibility/{id}', 'Panel\LinksController@toggleVisibility');
Route::get('/panel/menu', 'Panel\MenuController@menu');

//Routing for sections
Route::resource('/panel/sections', 'Panel\SectionsController');
Route::get('/panel/sections/visibility/{id}', 'Panel\SectionsController@toggleVisibility');


//Routing for products
Route::resource('/panel/products', 'Panel\ProductsController');

//Routing for pages
Route::resource('/panel/pages', 'Panel\PagesController');

//Routing for public site
Route::resource('products'  ,    'Site\ProductsController' ,       ['only' => ['index', 'show']]);
Route::resource('sections'  ,    'Site\SectionsController' ,       ['only' => ['index', 'show']]);
Route::get('/pages/{url}'     ,    'Site\PagesController@show');
Route::get('contact', 'Site\ContactController@contact');
Route::post('contact', 'Site\ContactController@email');


Route::get('/', 'Site\HomeController@index');

//Route::resource('panel/sliders', 'Panel\SliderController');


//Route::get('panel/pages/');
Route::get('/panel','AdminController@index');
Route::get('page1','AdminController@page');
//--------------Main Data
Route::get('panel/main-data','AdminController@mainData');
Route::post('panel/main-data','AdminController@storeMainData');
//--------------social
Route::get('panel/main-data/social','AdminController@social');
Route::post('panel/main-data/social','AdminController@storeSocialData');
//---------- Admins
Route::get('panel/main-data/admins','AdminController@admins');
Route::post('panel/main-data/admins/{id}','AdminController@destroyAdmin');
Route::get('panel/admins/new','AdminController@newAdmin');
Route::post('panel/admins/new','AdminController@storeNewAdmin');
//----------------slider
Route::get('panel/slider','AdminController@slider');
Route::get('panel/slider/new','AdminController@newSlide');
Route::post('panel/slider/new','AdminController@storeNewSlide');
Route::get('panel/slider/{id}/edit','AdminController@editSlide');
Route::post('panel/slider/{id}/edit','AdminController@updateSlide');
Route::post('panel/slider/{id}','AdminController@destroySlide');
Route::post('panel/slider/{id}/show','AdminController@showSlide');
Route::post('panel/slider/{id}/hide','AdminController@hideSlide');
//--------------- page
//Route::get('panel/pages','Panel\PagesController@index');
//Route::get('panel/pages/new','Panel\PagesController@create');
//Route::post('panel/pages/new','Panel\PagesController@store');
//Route::get('panel/pages/{id}/edit','Panel\PagesController@edit');
//Route::post('panel/pages/{id}/edit','Panel\PagesController@update');
//Route::post('Panel/pages/{id}','Panel\PagesController@destroy');
//---------------- authentication Login
Route::get('/auth/login','Auth\AuthController@getLogin');
Route::post('/auth/login','Auth\AuthController@postLogin');
//----------------- authentication Logout
Route::get('/auth/logout','Auth\AuthController@getLogout');
// authentication Register
//------------------authentication Register
Route::get('/auth/register','Auth\AuthController@getRegister');
Route::post('/auth/register','Auth\AuthController@postRegister');
//---------------------- site routes
/*Route::get('page/{id}','SiteController@show');*/


//Experimental
Route::get('/test/test', 'TestController@index');