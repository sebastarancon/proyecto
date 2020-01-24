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

Route::get('/ejemplo', function () {
    return view('ejemplo');
});

Route::resource('profesor','ProfesorController');
Route::resource('alumno','AlumnoController');
Route::resource('anuncio','AnuncioController');
Route::resource('aula','AulaController');
Route::resource('ausencia','AusenciaController');
Route::resource('grupo','GrupoController');
Route::resource('horario','HorarioController');
Route::resource('materia','MateriaController');
Route::resource('reserva','ReservaController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/importar_profesor', 'ProfesorController@importar');
Route::post('/importar_profesor2', 'ProfesorController@importa2');