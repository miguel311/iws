/**
*--------------------------------------------------------------------------
* App Scripts
*--------------------------------------------------------------------------
*
* Scripts a compilar por la aplicación
*/

/** Requerimiento del paquete bootstrap 4 para el diseño de la aplicación */
require('./bootstrap');

/** @type {object} Requerimiento del paquete vue para la reactividad de la aplicación */
window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

/**
 * Componentes para la gestión del cotizador de salud
 */
Vue.component('health-quote-form', () => import(
    /* webpackChunkName: "healt-quote-form" */
    './components/quotes/HealthQuoteFormComponent.vue'
));
Vue.component('health-quote-list', () => import(
    /* webpackChunkName: "healt-quote-list" */
    './components/quotes/HealthQuoteListComponent.vue'
));

/**
 * Componentes para la gestión de planes de salud
 */
Vue.component('health-plan-form', () => import(
    /* webpackChunkName: "health-plan-form" */
    './components/plans/HealthPlanFormComponent.vue'
));
Vue.component('health-plan-list', () => import(
    /* webpackChunkName: "health-plan-list" */
    './components/plans/HealthPlanListComponent.vue'
));

/**
 * Componentes para la gestión de planes de automóviles
 */
Vue.component('car-plan-form', () => import(
    /* webpackChunkName: "car-plan-form" */
    './components/plans/CarPlanFormComponent.vue'
));
Vue.component('car-plan-list', () => import(
    /* webpackChunkName: "car-plan-list" */
    './components/plans/CarPlanListComponent.vue'
));

/**
 * Componente genérico para el uso de listas desplegables de selección multiple
 * @param array     options         Arreglo de objetos con las opciones a cargar.
 *                                  Ej.: [{clave: clave, valor: valor}, ...]
 * @param string    track_by        Define el nombre de la clave por la cual se va a gestionar la información.
 * @param boolean   taggable        Define si se muestra la selección mediante tags o no (opcional).
 *                                  El valor por defecto es true.
 * @param string    id              Define el identificador del objeto (opcional).
 * @param boolean   preselect_first Define si se preselecciona el primero objeto del arreglo (opcional).
 *                                  El valor por defecto es false
 * @param boolean   preserve_search Define si se preserva el campo de búsqueda (opcional).
 *                                  El valor por defecto es true
 * @param boolean   hide_selected   Define si se ocultan los elementos seleccionados (opcional).
 *                                  El valor por defecto es true
 * @param boolean   clear_on_select Define si se limpia el texto al seleccionar un elemento (opcional).
 *                                  El valor por defecto es true
 * @param boolean   close_on_select Define si se cierra la lista de elementos al seleccionar uno de ellos (opcional).
 *                                  El valor por defecto es true
 *
 * @note
 * Ejemplo de uso:
 * <v-multiselect :options="[{key: 1, name: 'one'},{key: 2, name: 'two'},{key: 3, name: 'three'}]" track_by="key"
 * :hide_selected="false"></v-multiselect>
 **/
 Vue.component('v-multiselect', () => import(
    /* webpackChunkName: "multi-selects" */
    './components/Shared/MultiSelectsComponent.vue'
));


/**
 * Componente genérico para el uso de listas desplegables con select2 y selects dependientes
 */
Vue.component('select2', () => import(
    /* webpackChunkName: "selects" */
    './components/Shared/SelectsComponent.vue'
));