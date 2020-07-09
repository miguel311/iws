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
            /** @type {JSON} Establece el dominio de la apicación a usar en componentes vue en entorno de producción */
            domain:  `${$('#appjs').data('domain')}${(location.port !== "") ? ':' + location.port : ''}`,
            /** @type {JSON} Opciones generales a implementar en tablas */
            table_options: {
                pagination: { edge: true },
                highlightMatches: true,
                texts: {
                    filter: "Buscar:",
                    filterBy: 'Buscar por {column}',
                    count:'Página {page}',
                    count: ' ',
                    first: 'PRIMERO',
                    last: 'ÚLTIMO',
                    limit: 'Registros',
                    page: 'Página:',
                    noResults: 'No existen registros',
                },
                sortIcon: {
                    is: 'fa-sort cursor-pointer',
                    base: 'fa',
                    up: 'fa-sort-up cursor-pointer',
                    down: 'fa-sort-down cursor-pointer'
                },
            },
        }
    },
    props: {
        route_list: {
            type: String,
            required: false,
            default: ''
        },
        route_create: {
            type: String,
            required: false,
            default: ''
        },
        route_edit: {
            type: String,
            required: false,
            default: ''
        },
        route_update: {
            type: String,
            required: false,
            default: ''
        },
        route_delete: {
            type: String,
            required: false,
            default: ''
        },
        route_show: {
            type: String,
            required: false,
            default: ''
        }
    },
    watch: {
        /**
         * Método que permite mostrar el mensaje de espera al usuario cuando cambia el estatus de la variable "loading"
         *
         * @method     loading
         */
        loading: function() {
            const vm = this;
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
            const vm = this;
            if (typeof(vm.record) !== "undefined") {
                for (var index in vm.record) {
                    vm.record[index] = '';
                }
            }
        },
        /**
         * Inicializa los registros base del formulario
         *
         * @author Ing. Roldan Vargas <rvargas@cenditel.gob.ve> | <roldandvg@gmail.com>
         *
         * @param {string} url      Ruta que obtiene los datos a ser mostrado en listados
         * @param {string} modal_id Identificador del modal a mostrar con la información solicitada
         */
        initRecords(url, modal_id) {
            this.errors = {};
            this.reset();
            const vm = this;

            axios.get(url).then(response => {
                if (typeof(response.data.records) !== "undefined") {
                    vm.records = response.data.records;
                }
                if ($("#" + modal_id).length) {
                    $("#" + modal_id).modal('show');
                }
            }).catch(error => {
                if (typeof(error.response) !== "undefined") {
                    if (error.response.status == 403) {
                        vm.showMessage(
                            'custom', 'Acceso Denegado', 'danger', 'screen-error', error.response.data.message
                        );
                    }
                    else {
                        vm.logs('resources/js/all.js', 343, error, 'initRecords');
                    }
                }
            });
        },
        /**
         * Método que obtiene los registros a mostrar
         *
         * @author  Ing. Roldan Vargas <rvargas@cenditel.gob.ve> | <roldandvg@gmail.com>
         *
         * @param  {string} url Ruta que obtiene todos los registros solicitados
         */
        readRecords(url) {
            const vm = this;
            vm.loading = true;
            axios.get(`${vm.domain}/${url}`).then(response => {
                if (typeof(response.data.records) !== "undefined") {
                    vm.records = response.data.records;
                }
                vm.loading = false;
            }).catch(error => {
                vm.logs('mixins.js', 285, error, 'readRecords');
            });
        },
        /**
         * Método que permite mostrar una ventana emergente con la información registrada
         * y la nueva a registrar
         *
         * @author  Ing. Roldan Vargas <rvargas@cenditel.gob.ve> | <roldandvg@gmail.com>
         *
         * @param {string} modal_id Identificador de la ventana modal
         * @param {string} url      Ruta para acceder a los datos solicitados
         * @param {object} event    Objeto que gestiona los eventos
         */
        addRecord(modal_id, url, event) {
            event.preventDefault();
            this.initRecords(url, modal_id);
        },
        /**
         * Método que permite crear o actualizar un registro
         *
         * @author  Ing. Roldan Vargas <rvargas@cenditel.gob.ve> | <roldandvg@gmail.com>
         *
         * @param  {string} url    Ruta de la acción a ejecutar para la creación o actualización de datos
         * @param  {string} list   Condición para establecer si se cargan datos en un listado de tabla.
         *                         El valor por defecto es verdadero.
         * @param  {string} reset  Condición que evalúa si se inicializan datos del formulario.
         *                         El valor por defecto es verdadero.
         */
        createRecord(url, list = true, reset = true) {
            const vm = this;
            if (this.record.id) {
                this.updateRecord(url);
            }
            else {
                vm.loading = true;
                var fields = {};
                for (var index in this.record) {
                    fields[index] = this.record[index];
                }
                axios.post(`${vm.domain}/${url}`, fields).then(response => {
                    if (typeof(response.data.redirect) !== "undefined") {
                        location.href = response.data.redirect;
                    }
                    else {
                        vm.errors = {};
                        if (reset) {
                            vm.reset();
                        }
                        if (list) {
                            vm.readRecords(url);
                        }
                        vm.loading = false;
                        vm.showMessage('store');
                    }

                }).catch(error => {
                    vm.errors = {};

                    if (typeof(error.response) !="undefined") {
                        for (var index in error.response.data.errors) {
                            if (error.response.data.errors[index]) {
                                vm.errors[index] = error.response.data.errors[index][0];
                            }
                        }
                    }

                    vm.loading = false;
                });
            }

        },
        /**
         * Método que carga el formulario con los datos a modificar
         *
         * @author  Ing. Roldan Vargas <rvargas@cenditel.gob.ve> | <roldandvg@gmail.com>
         *
         * @param  {integer} index Identificador del registro a ser modificado
         * @param {object} event   Objeto que gestiona los eventos
         */
        initUpdate(index, event) {
            const vm = this;
            vm.errors = {};
            vm.record = vm.records[index - 1];
            
            event.preventDefault();
        },
        /**
         * Método que permite actualizar información
         *
         * @author  Ing. Roldan Vargas <rvargas@cenditel.gob.ve> | <roldandvg@gmail.com>
         *
         * @param  {string} url Ruta de la acci´on que modificará los datos
         */
        updateRecord(url) {
            const vm = this;
            vm.loading = true;
            var fields = {};
            for (var index in this.record) {
                fields[index] = this.record[index];
            }
            axios.patch('/' + url + '/' + this.record.id, fields).then(response => {
                if (typeof(response.data.redirect) !== "undefined") {
                    location.href = response.data.redirect;
                }
                else {
                    vm.readRecords(url);
                    vm.reset();
                    vm.loading = false;
                    vm.showMessage('update');
                }

            }).catch(error => {
                vm.errors = {};

                if (typeof(error.response) !="undefined") {
                    for (var index in error.response.data.errors) {
                        if (error.response.data.errors[index]) {
                                vm.errors[index] = error.response.data.errors[index][0];
                            }
                    }
                }
                vm.loading = false;
            });
        },
        /**
         * Método para la eliminación de registros
         *
         * @author  Ing. Roldan Vargas <rvargas@cenditel.gob.ve> | <roldandvg@gmail.com>
         *
         * @param  {integer} index Elemento seleccionado para su eliminación
         * @param  {string}  url   Ruta que ejecuta la acción para eliminar un registro
         */
        deleteRecord(index, url) {
            var url = (url)?url:this.route_delete;
            var records = this.records;
            var confirmated = false;
            var index = index - 1;
            const vm = this;

            Swal.fire({
                title: 'Eliminar registro?',
                text: "Esta seguro de eliminar este registro?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Confirmar'
            }).then((result) => {
                if (result.value) {
                    confirmated = true;
                    axios.delete(url + '/' + records[index].id).then(response => {
                        if (typeof(response.data.error) !== "undefined") {
                            /** Muestra un mensaje de error si sucede algún evento en la eliminación */
                            vm.showMessage('custom', 'Alerta!', 'warning', 'screen-error', response.data.message);
                            return false;
                        }
                        records.splice(index, 1);
                        vm.showMessage('destroy');
                    }).catch(error => {
                        vm.logs('mixins.js', 498, error, 'deleteRecord');
                    });
                }
            })
            if (confirmated) {
                this.records = records;
                this.showMessage('destroy');
            }
        },
        /**
         * Método que muestra un mensaje al usuario sobre el resultado de una acción
         *
         * @author  Ing. Roldan Vargas <rvargas@cenditel.gob.ve> | <roldandvg@gmail.com>
         *
         * @param  {string} type        Tipo de mensaje a mostrar
         * @param  {string} msg_title   Título del mensaje (opcional)
         * @param  {string} msg_class   Clase CSS a utilizar en el mensaje (opcional)
         * @param  {string} msg_icon    Ícono a mostrar en el mensaje (opcional)
         * @param  {string} custom_text Texto personalizado para el mensaje (opcional)
         */
        showMessage(type, msg_title, msg_class, msg_icon, custom_text) {
            msg_title = (typeof(msg_title) == "undefined" || !msg_title)?'Éxito':msg_title;
            msg_class = (typeof(msg_class) == "undefined" || !msg_class)?'growl-success':'growl-'+msg_class;
            msg_icon = (typeof(msg_icon) == "undefined" || !msg_icon)?'screen-ok':msg_icon;
            custom_text = (typeof(custom_text)!=="undefined")?custom_text:'';

            var msg_text;
            if (type=='store') {
                msg_text = 'Registro almacenado con éxito';
            }
            else if (type=='update') {
                msg_text = 'Registro actualizado con éxito';
            }
            else if (type=='destroy') {
                msg_text = 'Registro eliminado con éxito';
            }
            else if (type=='custom') {
                msg_text = custom_text;
            }

            /** @type {object} Muestra el correspondiente mensaje al usuario */
            $.gritter.add({
                title: msg_title,
                text: msg_text,
                class_name: msg_class,
                image: "/images/gritter/" + msg_icon + ".png",
                sticky: false,
                time: 3500
            });
        },
        /**
         * Elimina la fila del elemento indicado
         *
         * @author Ing. Roldan Vargas <rvargas@cenditel.gob.ve> | <roldandvg@gmail.com>
         *
         * @param  {integer}      index Indice del elemento a eliminar
         * @param  {object|array} el    Elemento del cual se va a eliminar un elemento
         */
        removeRow: function(index, el, event) {
            const vm = this;
            if (el.length == 1) {
                return false;
            } else {
                el.splice(index, 1);
                if (typeof(vm.editIndex) != 'undefined') {
                    vm.editIndex = '';
                }
            }
            event.preventDefault();
        },

        /**
         * Redirecciona al formulario de actualización de datos
         *
         * @author Ing. Roldan Vargas <rvargas@cenditel.gob.ve> | <roldandvg@gmail.com>
         *
         * @param  {integer} id Identificador del registro a actualizar
         */
        editForm(id) {
            location.href = (this.route_edit.indexOf("{id}") >= 0)
                            ? this.route_edit.replace("{id}", id)
                            : this.route_edit + '/' + id;
        },
        isInvalid(index) {
            return this.errors[index] ? 'is-invalid': '';
        }
    },
    created() {
        const vm = this;
        vm.clearForm();
        vm.loading = false;
    }
});