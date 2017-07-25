<?php
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::name('create_classroom_path')->get('/classrooms/create','ClassroomController@create');
Route::name('store_classroom_path')->post('/classrooms','ClassroomController@store');
Route::name('edit_classroom_path')->get('/classrooms/{classroom}/edit','ClassroomController@edit');
Route::name('update_classroom_path')->put('/classrooms/{classroom}', 'ClassroomController@update');
Route::name('delete_classroom_path')->delete('/classrooms/{classroom}','ClassroomController@delete');

Route::name('classrooms_path')->get('/classrooms','ClassroomController@index');
<<<<<<< HEAD
Route::name('classroom_path')->get('classrooms/{id}','ClassroomController@show');
Route::name('delete_class_path')->delete('/classrooms/{id}','ClassroomController@delete');

//curso 
Route::name('subjects_path')->get('/subjects','SubjectController@index');
Route::name('create_subject_path')->get('/subjects/create','SubjectControll@create');
=======
Route::name('classroom_path')->get('/classrooms/{classroom}', 'ClassroomController@show');
>>>>>>> eff0355521bec9ef4082d0876384efde101aa29d
