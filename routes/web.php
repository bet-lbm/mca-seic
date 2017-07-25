<?php
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Classroom
Route::name('create_classroom_path')->get('/classrooms/create','ClassroomController@create');
Route::name('store_classroom_path')->post('/classrooms','ClassroomController@store');
Route::name('edit_classroom_path')->get('/classrooms/{classroom}/edit','ClassroomController@edit');
Route::name('update_classroom_path')->put('/classrooms/{classroom}', 'ClassroomController@update');
Route::name('delete_classroom_path')->delete('/classrooms/{classroom}','ClassroomController@delete');

Route::name('classrooms_path')->get('/classrooms','ClassroomController@index');
Route::name('classroom_path')->get('/classrooms/{classroom}', 'ClassroomController@show');


//curso 

Route::name('create_subject_path')->get('/subjects/create','SubjectController@create');
Route::name('store_subject_path')->post('/subjects','SubjectController@store');

Route::name('edit_subject_path')->get('/subjects/{subject}/edit','SubjectController@edit');
Route::name('update_subject_path')->put('/subjects/{subject}','SubjectController@update');

Route::name('delete_subject_path')->delete('/subjects/{subject}','SubjectController@delete');

Route::name('subjects_path')->get('/subjects','SubjectController@index');
Route::name('subject_path')->get('subjects/{subject}','SubjectController@show');




