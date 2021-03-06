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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/about', function () {
//     $name = "Programmer Awam";
//     return view('about', ['name' => $name]);
// });

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');

Route::get('/mahasiswa', 'MahasiswaController@index');

Route::get('/students', 'StudentsController@index');
Route::get('/Students/create', 'StudentsController@create');
Route::post('/students', 'StudentsController@store');
Route::get('/Students/{student}', 'StudentsController@show');
