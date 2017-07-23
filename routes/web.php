<?php
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::name('classrooms_path')->get('/classrooms','ClassroomController@index');
Route::name('classroom_path')->get('classrooms/{id}','ClassroomController@show');
Route::name('delete_class_path')->delete('/classrooms/{id}','ClassroomController@delete');