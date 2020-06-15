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

/**
 * -----------------------------------------------------------------------
 * Ruta para la gestión de acceso a la aplicación
 * -----------------------------------------------------------------------
 *
 * Condiciona el acceso a la aplicación y evalúa si el usuario esta
 * autenticado en el sistema, si lo está, redirecciona a la página principal
 * de lo contrario muestra la interfaz de autenticación
 */
Route::get('/', 'HomeController@index')->name('home');

/**
 * -----------------------------------------------------------------------
 * Rutas para la gestión de acceso al sistema
 * -----------------------------------------------------------------------
 *
 * Gestiona las rutas de:
 * - login (GET|POST)
 * - logout
 * - password/email
 * - password/reset
 * - password/reset/{token}
 */
Auth::routes(['verify' => true]);


/**
 * -----------------------------------------------------------------------
 * Grupo de rutas para la gestión general de registros
 * -----------------------------------------------------------------------
 *
 * Permite gestionar los distintos modelos de uso común en la aplicación y
 * el acceso a los distintos discos establecidos en la configuración de
 * config/filesystems.php
 */
Route::group(['middleware' => ['auth', 'verified']], function () {
	/**
     * -----------------------------------------------------------------------
     * Rutas para gestión de cotizaciones de salud
     * -----------------------------------------------------------------------
     */
	
	Route::resource('/cotizasalud', 'CoizaSaludController', ['except' => ['destroy']]);
	/** Ruta para obtener datos de cotizaciones de salud */
	Route::get('/cotizasalud/search', 'CoizaSaludController@search')->name('cotizasalud.search');
	/** Ruta para obtener los planes de cotizaciones de salud */
	Route::get('/cotizasalud/getplan', 'CoizaSaludController@plan')->name('cotizasalud.planes');
	/** Ruta para eliminar cotización de salud */
	Route::get('/cotizasalud/delete/{id}', 'CoizaSaludController@destroy')->name('cotizasalud.delete');
	/** Ruta para imprimir cotización de salud */
	Route::get('/cotizasalud/print/{id}', 'CoizaSaludController@print')->name('cotizasalud.print');


	/**
     * -----------------------------------------------------------------------
     * Rutas para gestión de planes de salud
     * -----------------------------------------------------------------------
     */
	Route::resource('/plan_salud', 'Plan_SaludController');
	/** Ruta para obtener datos de los planes */
	Route::get('/plan_salud/search', 'Plan_SaludController@search')->name('plan_salud.search');

	/**
     * -----------------------------------------------------------------------
     * Rutas para gestión de planes de auto
     * -----------------------------------------------------------------------
     */
	Route::resource('/plan_auto', 'Plan_AutoController');


	/**
     * -----------------------------------------------------------------------
     * Rutas para gestión de cotizaciones de auto
     * -----------------------------------------------------------------------
     */
	Route::resource('/cotizasauto', 'CoizaAutoController');

});