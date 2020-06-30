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
    
	Route::resource('/cotiza-salud', 'HealthQuoteController', ['except' => ['edit', 'show' ]]);
    /** Ruta para editar cotizaciones de salud */
    Route::get('/cotiza-salud/edit/{id}', 'HealthQuoteController@edit')->name('cotiza-salud.edit');
    /** Ruta para ver una cotización de salud */
    Route::get('/cotiza-salud/show/{id}', 'HealthQuoteController@show')->name('cotiza-salud.show');
    /** Ruta para editar cotizaciones de salud */
    Route::delete('/cotiza-salud/delete/{id}', 'HealthQuoteController@destroy')->name('cotiza-salud.destroy');
    /** Ruta para obtener las cotizaciones de salud */
    Route::get('/cotiza-salud/vue-list', 'HealthQuoteController@vueList')->name('cotiza-salud.vue-list');
    /** Ruta para imprimir cotización de salud */
    Route::get('/cotiza-salud/print/{id}', 'HealthQuoteController@print')->name('cotiza-salud.print');
	/** Ruta para obtener los planes de cotizaciones de salud */
	Route::get('/cotiza-salud/get-plan', 'HealthQuoteController@plan')->name('cotiza-salud.get-plan');

	/**
     * -----------------------------------------------------------------------
     * Rutas para gestión de planes de salud
     * -----------------------------------------------------------------------
     */
	Route::resource('/plan-salud', 'HealthPlanController', ['except' => ['edit', 'show', 'destroy']]);
    /** Ruta para editar planes de salud */
    Route::get('/plan-salud/edit/{id}', 'HealthPlanController@edit')->name('plan-salud.edit');
    /** Ruta para ver planes de salud */
    Route::get('/plan-salud/show/{id}', 'HealthPlanController@show')->name('plan-salud.show');
    /** Ruta para editar planes de salud */
    Route::delete('/plan-salud/delete/{id}', 'HealthPlanController@destroy')->name('plan-salud.destroy');
    /** Ruta para obtener los planes de salud */
    Route::get('/plan-salud/vue-list', 'HealthPlanController@vueList')->name('plan-salud.vue-list');

	/**
     * -----------------------------------------------------------------------
     * Rutas para gestión de planes de auto
     * -----------------------------------------------------------------------
     */
    Route::resource('/plan-auto', 'CarPlanController', ['except' => ['edit', 'show', 'destroy']]);
    /** Ruta para editar planes de auto */
    Route::get('/plan-auto/edit/{id}', 'CarPlanController@edit')->name('plan-auto.edit');
    /** Ruta para ver planes de auto */
    Route::get('/plan-auto/show/{id}', 'CarPlanController@show')->name('plan-auto.show');
    /** Ruta para editar planes de auto */
    Route::delete('/plan-auto/delete/{id}', 'CarPlanController@destroy')->name('plan-auto.destroy');
    /** Ruta para obtener los planes de auto */
    Route::get('/plan-auto/vue-list', 'CarPlanController@vueList')->name('plan-auto.vue-list');


	/**
     * -----------------------------------------------------------------------
     * Rutas para gestión de cotizaciones de auto
     * -----------------------------------------------------------------------
     */
	Route::resource('/cotiza-auto', 'CarQuoteController');

}); 