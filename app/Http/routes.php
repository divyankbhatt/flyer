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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('test','testcontroller@test');
Route::get('employee','employeecontroller@index');
Route::get('employee/create','employeecontroller@create');
Route::post('employee/create','employeecontroller@store');
Route::get('flyer','flyer@index');
Route::get('flyer/home','flyer@home');

Route::get('employee/{id}','employeecontroller@show');

Route::get('getempbycompany/{id}','employeecontroller@getByCompany');
Route::get('company/{id}','employeecontroller@get');

Route::get('files/upload','employeecontroller@multiUpload');

Route::post('files/uploadimage','employeecontroller@multiUploadimage');
Route::get('photogallary','employeecontroller@photoGallary');
Route::get('photoswipe','employeecontroller@photoSwipe');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
