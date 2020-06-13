/**
 * Opciones de configuración global para utilizar en todos los componentes vuejs de la aplicación
 *
 * @param  {object} methods Métodos generales a implementar en CRUDS
 */
Vue.mixin({
    data() {
        return {
            /** @type {Boolean} Establece si se esta o no cargando una petición del sistema */
            loading: true,
            /**
             * Establece el dominio de los componentes vuejs en la aplicación para entornos de producción
             * @type {JSON}
             */
            domain:  `${$('#appjs').data('domain')}${(location.port !== "") ? ':' + location.port : ''}`,
            /** @type {object} Objeto que contiene los campos del formulario */
            record:  {},
            /** @type {array} Arreglo que contiene los errores de validación del formulario */
            errors:  [],
            /** @type {array} Arreglo que contiene los elementos a listar en el formulario */
            records: []
        }
    },
    watch: {
        /**
         * Método que permite mostrar el mensaje de espera al usuario cuando cambia el estatus de la variable "loading"
         *
         * @method     loading
         */
        loading: function() {
            let vm = this;
            if (!vm.loading) {
                $('.preloader').fadeOut(2000);
            }
            else {
                $('.preloader').show();
            }
        }
    },
    methods: {
        /**
         * Inicializa todos los campos de formularios a un valor vacío
         */
        clearForm() {
            let vm = this;
            if (typeof(vm.record) !== "undefined") {
                for (var index in vm.record) {
                    vm.record[index] = '';
                }
            }
        }
    },
    created() {
        let vm = this;
        vm.clearForm();
        vm.loading = false;
    }
});