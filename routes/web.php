<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/students', 'App\Http\Controllers\StudentController@index')->name('students.index');
Route::get('/students/create', 'App\Http\Controllers\StudentController@create')->name('students.create');
Route::get('/students/get_card', 'App\Http\Controllers\StudentController@get_card')->name('students.get_card');
Route::get('/students/search_card', 'App\Http\Controllers\StudentController@search_card')->name('students.search_card');
Route::get('/students/download_card/{id}','App\Http\Controllers\StudentController@download_card')->name('students.download_card');
Route::post('/students/store', 'App\Http\Controllers\StudentController@store')->name('students.store');
Route::get('/student/card/{id}', 'App\Http\Controllers\StudentController@card')->name('students.card');
Route::get('/student/detail/{id}', 'App\Http\Controllers\StudentController@detail')->name('students.detail');
Route::get('/students/edit/{id}', 'App\Http\Controllers\StudentController@edit')->name('students.edit');
Route::put('/students/update/{id}','App\Http\Controllers\StudentController@update')->name('students.update');
Route::get('/students/delete/{id}','App\Http\Controllers\StudentController@delete')->name('students.delete');

