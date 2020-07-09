<template>
    <section id="HealthPlanListComponent">
        <v-client-table :columns="columns" :data="records" :options="table_options">
            <div slot="number" slot-scope="props" class="text-center">
                <span>
                    {{ props.row.id }}
                </span>
            </div>
            <div slot="id" slot-scope="props" class="text-center">
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
        </v-client-table>
    </section>
</template>

<script>
    export default {
        data() {
            return {
                record:  {},
                errors:  {},
                records: [],
                columns: ['number', 'name', 'description', 'coverage', 'price', 'deductible', 'id']
            }
        },
        created() {
            const vm = this;
            vm.table_options.headings = {
                'number':      'N°',
                'name':        'Nombre',
                'description': 'Descripción',
                'coverage':    'Cobertura',
                'price':       'Precio',
                'deductible':  'deducible Permitido',
                'id':          'Acciones'
            };
            vm.table_options.sortable = ['number', 'name', 'description', 'coverage', 'price', 'deductible'];
            vm.table_options.filterable = ['number', 'name', 'description', 'coverage', 'price', 'deductible'];
        },
        mounted() {
            const vm = this;
            vm.initRecords(vm.route_list, '');
        },
        methods: {
            reset() {
                //
            }
        }
    }
</script>