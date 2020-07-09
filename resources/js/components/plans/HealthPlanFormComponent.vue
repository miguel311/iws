<template>
    <section id="HealthPlanFormComponent">
        <div class="card">
            <div class="card-header"><h4>Planes de Salud & Funerario</h4></div>
            <div class="card-body">
                <div class="alert alert-danger" v-if="Object.keys(errors).length > 0">
                    <div class="container">
                        <strong>Se encontraron algunos errores por favor revise</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"
                                @click.prevent="errors = {}">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group is-required">
                            <label>Nombre:</label>
                            <input type="text"
                                   v-bind:class="['form-control input-sm', isInvalid('name')]"
                                   v-model="record.name"/>
                            <span class="text-danger"
                                  style="width: 100%;"
                                  v-if="errors.name"
                                  v-text="errors.name">
                            </span>
                            <input type="hidden" v-model="record.id">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group is-required">
                            <label>Descripción:</label>
                            <input type="text"
                                   v-bind:class="['form-control input-sm', isInvalid('description')]"
                                   v-model="record.description"/>
                            <span class="text-danger"
                                  style="width: 100%;"
                                  v-if="errors.description"
                                  v-text="errors.description">
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group is-required">
                            <label>Cobertura:</label>
                            <input type="number" step="0.01"
                                   v-bind:class="['form-control input-sm', isInvalid('coverage')]"
                                   v-model="record.coverage"/>
                            <span class="text-danger"
                                  style="width: 100%;"
                                  v-if="errors.coverage"
                                  v-text="errors.coverage">
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group is-required">
                            <label>Precio:</label>
                            <input type="number" step="0.01"
                                   v-bind:class="['form-control input-sm', isInvalid('price')]"
                                   v-model="record.price"/>
                            <span class="text-danger"
                                  style="width: 100%;"
                                  v-if="errors.price"
                                  v-text="errors.price">
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group is-required">
                            <label>Deducible permitido:</label>
                            <input type="number" step="0.01"
                                   v-bind:class="['form-control input-sm', isInvalid('deductible')]"
                                   v-model="record.deductible"/>
                            <span class="text-danger"
                                  style="width: 100%;"
                                  v-if="errors.deductible"
                                  v-text="errors.deductible">
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-right">
                <button type="button" @click="createRecord('plan-salud')"
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

                errors:  {},
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
                axios.get(`${vm.domain}/plan-salud/show/${vm.commercial_plan_id}`).then(response => {
                    vm.record = response.data.record;
                });
            },
        }
    }
</script>