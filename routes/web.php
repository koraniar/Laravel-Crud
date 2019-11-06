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
    return view('layouts.home.home');
});

Route::get('/roles', 'RolController@index');
Route::get('/roles/create', 'RolController@create');
Route::post('/roles/store', 'RolController@store');
Route::get('/roles/edit/{id}', 'RolController@edit');
Route::post('/roles/update/{id}', 'RolController@update');
Route::get('/roles/destroy/{id}', 'RolController@destroy');

Route::get('/businesses', 'BusinessController@index');
Route::get('/businesses/create', 'BusinessController@create');
Route::post('/businesses/store', 'BusinessController@store');
Route::get('/businesses/edit/{id}', 'BusinessController@edit');
Route::post('/businesses/update/{id}', 'BusinessController@update');
Route::get('/businesses/destroy/{id}', 'BusinessController@destroy');

Route::get('/modules', 'ModuleController@index');
Route::get('/modules/create', 'ModuleController@create');
Route::post('/modules/store', 'ModuleController@store');
Route::get('/modules/edit/{id}', 'ModuleController@edit');
Route::post('/modules/update/{id}', 'ModuleController@update');
Route::get('/modules/destroy/{id}', 'ModuleController@destroy');

Route::get('/users', 'UserController@index');
Route::get('/users/create', 'UserController@create');
Route::post('/users/store', 'UserController@store');
Route::get('/users/edit/{id}', 'UserController@edit');
Route::post('/users/update/{id}', 'UserController@update');
Route::get('/users/destroy/{id}', 'UserController@destroy');
Route::get('/users/changeactive/{id}/{active}', 'UserController@changeActive');
