<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'StudentController@index');


// sugeneruoja visus autentifikacijos route'us /login /register ir kitus
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('students', 'StudentController');

//Route::get('/students/{id}/grade', 'StudentController@gradeCreate')->name('student.grade');