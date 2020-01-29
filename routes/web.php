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

// Cotizar Salud //expto destroy
Route::resource('/cotizasalud', 'CoizaSaludController', ['except' => ['destroy']])->middleware('auth');
// Eliminar Cotizar Salud
Route::get('/cotizasalud/delete/{id}', 'CoizaSaludController@destroy')->name('cotizasalud.delete')->middleware('auth');
//  Cotizar Auto
Route::resource('/cotizasauto', 'CoizaAutoController')->middleware('auth');
// Formular Plan de salud
Route::resource('/plan_salud', 'Plan_SaludController')->middleware('auth');
// Formular plan de auto
Route::resource('/plan_auto', 'Plan_AutoController')->middleware('auth');

