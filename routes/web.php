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


Route::prefix('student')->group(function (){
    Route::get('/','StudentController@index')->name('student');

    Route::get('/add','StudentController@getAdd')->name('student.getAdd');
    Route::post('/add','StudentController@add')->name('student.add');
    Route::get('/delete/{id}','StudentController@delete')->name('student.delete');
    Route::get('/edit/{id}','StudentController@getEdit')->name('student.getEdit');
    Route::post('/edit/{id}','StudentController@edit')->name('student.edit');

});
