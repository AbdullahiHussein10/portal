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

Route::get('/studentdetails', function(){
    return view('students.create');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('students', 'StudentController');


Route::get('insert','StudentController@insertform');
Route::post('create','StudentController@store'); 
Route::get('view','StudentController@index');
Route::post('update/{id}','StudentController@update');
Route::get('edit/{id}','StudentController@edit');


