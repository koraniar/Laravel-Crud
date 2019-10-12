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

Route::get('/rol', 'RolController@index');
Route::get('/rol/create', 'RolController@create');
Route::post('/rol/store', 'RolController@store');
Route::get('/rol/edit/{id}', 'RolController@edit');
Route::post('/rol/update/{id}', 'RolController@update');

Route::get('/business', 'BusinessController@index');

Route::get('/module', 'ModuleController@index');

Route::get('/user', 'UserController@index');
