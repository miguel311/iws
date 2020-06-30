<template>
    <section id="HealthQuoteListComponent">
        <v-client-table :columns="columns" :data="records" :options="table_options">
            <div slot="number" slot-scope="props" class="text-center">
                <span>
                    {{ props.row.id }}
                </span>
            </div>
            <div slot="cedule" slot-scope="props" class="text-center">
                <span>
                    {{ props.row.cedule_type + '-' + props.row.cedule }}
                </span>
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
                columns: ['number', 'name', 'last_name', 'cedule', 'email', 'id']
            }
        },
        created() {
            const vm = this;
            vm.table_options.headings = {
                'number': 'N°',
                'name': 'Nombre',
                'last_name': 'Apellido',
                'cedule': 'Cédula',
                'email': 'Email',
                'id': 'Acciones'
            };
            vm.table_options.sortable = ['number', 'name', 'last_name', 'cedule', 'email'];
            vm.table_options.filterable = ['number', 'name', 'last_name', 'cedule', 'email'];
        },
        methods: {
        }
    }
</script>