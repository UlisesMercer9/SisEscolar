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

Route::get('/','HomeController@index');

Route::resource('log','LogController');

Route::get('logout','LogController@logout');

Route::get('panel','HomeController@panel');

Route::resource('users','UserController');

Route::resource('escuelas','EscuelaController');

Route::resource('profesors','ProfesorController');

Route::resource('aulas','AulaController');

Route::resource('periodos','PeriodoController');

Route::resource('alumnos','AlumnoController');

Route::get('escuelas/{id}/destroy', [
  'uses' => 'EscuelaController@destroy',
  'as' => 'escuelas.destroy'
]);


Route::get('users/{id}/destroy', [
  'uses' => 'UserController@destroy',
  'as' => 'users.destroy'
]);

Route::get('profesors/{id}/destroy', [
  'uses' => 'ProfesorController@destroy',
  'as' => 'profesors.destroy'
]);

Route::get('aulas/{id}/destroy', [
  'uses' => 'AulaController@destroy',
  'as' => 'aulas.destroy'
]);

Route::get('periodos/{id}/destroy', [
  'uses' => 'PeriodoController@destroy',
  'as' => 'periodos.destroy'
]);

