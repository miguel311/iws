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


// HOME
	Route::get('/home', 'HomeController@index')->name('home');


// COTIZADOR SALUD
	// busqueda de cotizaciones
	Route::get('/cotizasalud/search', 'CoizaSaludController@search')->name('cotizasalud.search');
	// llamar plan de salud
	Route::get('/cotizasalud/getplan', 'CoizaSaludController@plan')->name('cotizasalud.planes');
	// Cotizar Salud //expto destroy
	Route::resource('/cotizasalud', 'CoizaSaludController', ['except' => ['destroy']])->middleware('auth');
	// Eliminar Cotizar Salud
	Route::get('/cotizasalud/delete/{id}', 'CoizaSaludController@destroy')->name('cotizasalud.delete')->middleware('auth');
	// imprimir cotización
	Route::get('/cotizasalud/print/{id}', 'CoizaSaludController@print')->name('cotizasalud.print')->middleware('auth');


// PLANES INDEX
	// busqueda Plan de salud
	Route::get('/plan_salud/search', 'Plan_SaludController@search')->name('plan_salud.search');
	// Formular Plan de salud
	Route::resource('/plan_salud', 'Plan_SaludController')->middleware('auth');

	// Formular plan de auto
	Route::resource('/plan_auto', 'Plan_AutoController')->middleware('auth');



// AUTO

	//  Cotizar Auto
	Route::resource('/cotizasauto', 'CoizaAutoController')->middleware('auth');