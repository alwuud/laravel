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

Route::get('/home',[
	'uses'=>'baseController@home',
	'as'=>'home'
]);

Route::get('/autos',[
	'uses'=>'baseController@autosView',
	'as'=>'autos'
]);


Route::get('/registrarAutoView',[
	'uses'=>'baseController@registrarAutoView',
	'as'=>'registrarautoview'
]);


Route::get('/registrarAuto',[
	'uses'=>'baseController@registrarAuto',
	'as'=>'registrarauto'
]);


Route::get('/eliminarAuto/{auto_id}',[
	'uses'=>'baseController@eliminarAuto',
	'as'=>'eliminarauto'
]);