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
// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


//Route::resource('course','CourseController');

Route::resource('course','StudentController');

Route::resource('dept','DepartmentController');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return "Hello world";
});
Route::get('/deptcreate', function () {
    return view('course.deptcreate');
});
Route::get('/sobur', function () {
    return view('course.sobur');
});
Route::get('/t', function () {
    return "Hello world";
});