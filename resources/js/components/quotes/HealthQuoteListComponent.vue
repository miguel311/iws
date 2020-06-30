<template>
    <section id="HealthQuoteListComponent">
        <v-client-table :columns="columns" :data="records" :options="table_options">
            <div slot="number" slot-scope="props" class="text-center">
                <span>
                    {{ props.row.id }}
                </span>
            </div>
            <div slot="document" slot-scope="props" class="text-center">
                <span>
                    {{ props.row.document_type + '-' + props.row.document_number }}
                </span>
            </div>
            <div slot="id" slot-scope="props" class="text-center">
                <div class="d-inline-flex">
                    <button @click="editForm(props.row.id)"
                            class="btn btn-warning btn-xs btn-icon btn-action"
                            title="Modificar registro" data-toggle="tooltip" type="button">
                        <i class="fa fa-edit"></i>
                    </button>
                    <button @click="deleteRecord(props.index, '')"
                            class="btn btn-danger btn-xs btn-icon btn-action"
                            title="Eliminar registro" data-toggle="tooltip"
                            type="button">
                        <i class="fa fa-trash"></i>
                    </button>
                </div>
            </div>
        </v-client-table>
    </section>
</template>

<script>
    export default {
        data() {
            return {
                record:  {},
                errors:  [],
                records: [],
                columns: ['number', 'name', 'last_name', 'document', 'email', 'id']
            }
        },
        created() {
            const vm = this;
            vm.table_options.headings = {
                'number':    'N°',
                'name':      'Nombre',
                'last_name': 'Apellido',
                'document':  'Cédula',
                'email':     'Email',
                'id':        'Acciones'
            };
            vm.table_options.sortable = ['number', 'name', 'last_name', 'document', 'email'];
            vm.table_options.filterable = ['number', 'name', 'last_name', 'document', 'email'];
        },
        mounted () {
            const vm = this;
            vm.initRecords(vm.route_list, '');
        },
        methods: {
            /**
             * Inicializa los datos del formulario
             */
            reset() {

            },
        }
    }
</script>