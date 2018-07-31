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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('acasessions','AcasessionController');

Route::resource('terms','TermController');

Route::resource('acaclasses','AcaclassController');

Route::resource('subjects','SubjectController');

Route::resource('teachers','TeacherController');

Route::resource('students','StudentController');

//Route::resource('exams','ExamController');

//Route::resource('grade','GradeController');

//exam-class
