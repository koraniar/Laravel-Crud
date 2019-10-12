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

Route::get('/rols', 'RolController@index');
Route::get('/rols/create', 'RolController@create');
Route::post('/rols/store', 'RolController@store');
Route::get('/rols/edit/{id}', 'RolController@edit');
Route::post('/rols/update/{id}', 'RolController@update');
Route::get('/rols/destroy/{id}', 'RolController@destroy');

Route::get('/businesses', 'BusinessController@index');

Route::get('/modules', 'ModuleController@index');
Route::get('/modules/create', 'ModuleController@create');
Route::post('/modules/store', 'ModuleController@store');
Route::get('/modules/edit/{id}', 'ModuleController@edit');
Route::post('/modules/update/{id}', 'ModuleController@update');
Route::get('/modules/destroy/{id}', 'ModuleController@destroy');

Route::get('/users', 'UserController@index');
