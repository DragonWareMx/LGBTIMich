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

Route::get('/', function () {
    return view('welcome');
});

Route::get('test', function () {
    return view('layouts.main');
});


// ENCUESTA---------------------------------------------------------------
Route::get('/encuesta/{nombre}', 'QuizController@index');

//TEST
Route::post('/encuesta/{nombre}', 'QuizController@store')->name('guardarEncuesta');

// GESTOR---------------------------------------------------------------
Route::get('login', function () {
    return view('gestor.login');
});
Route::get('dashboard', function () {
    return view('layouts.dashboard');
});