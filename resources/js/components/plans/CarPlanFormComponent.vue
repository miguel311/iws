<template>
    <section id="CarPlanFormComponent">
        <div class="card">
            <div class="card-header"><h4>Planes de Automóvil</h4></div>
            <div class="card-body">
                <div class="alert alert-danger" v-if="errors.length > 0">
                    <ul>
                        <li v-for="error in errors">{{ error }}</li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group is-required">
                            <label>Nombre:</label>
                            <input type="text" class="form-control input-sm" v-model="record.name"/>
                            <input type="hidden" v-model="record.id">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group is-required">
                            <label>Descripción:</label>
                            <input type="text" class="form-control input-sm" v-model="record.description"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group is-required">
                            <label>Cobertura:</label>
                            <input type="number" step="0.01"
                                   class="form-control input-sm" v-model="record.coverage"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group is-required">
                            <label>Precio:</label>
                            <input type="number" step="0.01"
                                   class="form-control input-sm" v-model="record.price"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group is-required">
                            <label>Deducible permitido:</label>
                            <input type="number" step="0.01"
                                   class="form-control input-sm" v-model="record.deductible"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-right">
                <button type="button" @click="createRecord('plan-car')"
                        class="btn btn-success edit-icons">
                        <i class="fa fa-save"></i>
                    </button>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        props: {
            commercial_plan_id: Number,
        },
        data() {
            return {
                record:  {
                    id:          '',
                    name:        '',
                    description: '',
                    coverage:    '',
                    price:       '',
                    deductible:  ''
                },

                errors:  [],
                records: []
            }
        },
        created() {
        },
        mounted() {
            const vm = this;
            if(vm.commercial_plan_id) {
                vm.getCommercialPlan();
            }
        },
        methods: {
            reset() {
                const vm = this;
                vm.record =  {
                    id:          '',
                    name:        '',
                    description: '',
                    coverage:    '',
                    price:       '',
                    deductible:  ''
                };

            },
            getCommercialPlan() {
                const vm = this;
                axios.get(`/plan-car/show/${vm.commercial_plan_id}`).then(response => {
                    vm.record = response.data.record;
                });
            },
        }
    }
</script>