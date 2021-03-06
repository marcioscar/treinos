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
Route::group(['middleware' => ['auth']], function () {
    Route::resource('groups', 'GroupController');
    Route::resource('exercises', 'ExerciseController');
    Route::resource('users', 'UserController');
    Route::resource('classes', 'ClassesController');
    Route::get('/treinos/{name}', 'ExerciseController@treino')->name('treino');

});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register'=>false]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contato', 'ClassesController@contato')->name('contato');

Route::get('/', 'ClassesController@aulasDia')->name('aulasdia');

