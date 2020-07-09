<template>
    <section id="HealthQuoteFormComponent">
        <div class="card">
            <div class="card-header"><h4>Cotizador de salud</h4></div>
            <div class="card-body">
                <form-wizard @on-complete="createRecord('cotiza-salud')"
                             @on-validate="handleValidation"
                             @on-error="handleErrorMessage"
                             next-button-text="Siguiente"
                             back-button-text="Atras"
                             shape="" title="" subtitle=""
                             color="#096EAB"
                             error-color="#e74c3c">
                    <tab-content title="Información Contratante"
                                 icon="fa fa-user-shield"
                                 :before-change="validateStep1">
                        <button class="btn btn-success" @click="setContractor()">
                            Agregar
                        </button>
                        <br><br>
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead class="text-center">
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Género</th>
                                    <th>Fecha de Nacimiento</th>
                                    <th>Parentesco</th>
                                    <th>Maternidad</th>
                                    <th>Acciones</th>
                                </thead>
                                <tbody style="vertical-align: baseline;">
                                    <tr class="text-center" 
                                        v-for="(contractor, index) in quote_contractors">
                                        <td>
                                            <span v-if="editIndex != index">
                                                {{
                                                    (contractor.first_name == '')
                                                        ? 'No definido'
                                                        : contractor.first_name
                                                }}
                                            </span>
                                            <input v-else
                                                   type="text"
                                                   v-bind:class="['form-control input-sm', isInvalid('first_name')]"
                                                   style="text-transform:uppercase;"
                                                   v-model="contractor.first_name">
                                            <span class="text-danger"
                                                  style="width: 100%;"
                                                  v-if="editIndex == index && errors.first_name"
                                                  v-text="errors.first_name">
                                            </span>
                                        </td>
                                        <td>
                                            <span v-if="editIndex != index">
                                                {{
                                                    (contractor.last_name == '')
                                                        ? 'No definido'
                                                        : contractor.last_name
                                                }}
                                            </span>
                                            <input v-else
                                                   type="text"
                                                   v-bind:class="['form-control input-sm', isInvalid('last_name')]"
                                                   style="text-transform:uppercase;"
                                                   v-model="contractor.last_name">
                                            <span class="text-danger"
                                                  style="width: 100%;"
                                                  v-if="editIndex == index && errors.last_name"
                                                  v-text="errors.last_name">
                                            </span>
                                        </td>
                                        <td>
                                            <span v-if="editIndex != index">
                                                {{
                                                    (contractor.gender == '')
                                                        ? 'NO'
                                                        : 'SI'
                                                }}
                                            </span>
                                            <select v-else
                                                    v-bind:class="['form-control input-sm', isInvalid('gender')]"
                                                    @input.prevent="contractor.maternity=(contractor.gender == 'M')?'':contractor.maternity;"
                                                    v-model="contractor.gender">
                                                <option label="M" value="M"></option>
                                                <option label="F" value="F"></option>
                                            </select>
                                            <span class="text-danger"
                                                  style="width: 100%;"
                                                  v-if="editIndex == index && errors.gender"
                                                  v-text="errors.gender">
                                            </span>
                                        </td>
                                        <td>
                                            <span v-if="editIndex != index">
                                                {{
                                                    (contractor.birthdate == '')
                                                        ? 'No definido'
                                                        : contractor.birthdate
                                                }}
                                            </span>
                                            <input v-else
                                                   type="date"
                                                   v-bind:class="['form-control input-sm', isInvalid('birthdate')]"
                                                   v-model="contractor.birthdate">
                                            <span class="text-danger"
                                                  style="width: 100%;"
                                                  v-if="editIndex == index && errors.birthdate"
                                                  v-text="errors.birthdate">
                                            </span>
                                        </td>
                                        <!-- parentesco -->
                                        <td>
                                            <span v-if="editIndex != index">
                                                {{
                                                    (contractor.parent == '')
                                                        ? 'No definido'
                                                        : contractor.parent
                                                }}
                                            </span>
                                            <select v-else
                                                    v-bind:class="['form-control input-sm', isInvalid('parent')]"
                                                    v-model="contractor.parent">
                                                <option label="Titular" value="Titular"></option>
                                                <option label="Espos@" value="Espos@"></option>
                                                <option label="Hij@" value="Hij@"></option>
                                                <option label="Herman@" value="Herman@"></option>
                                                <option label="Madre" value="Madre"></option>
                                                <option label="Padre" value="Padre"></option>
                                                <option label="Sobrin@" value="Sobrin@"></option>
                                                <option label="Niet@" value="Niet@"></option>
                                            </select>
                                            <span class="text-danger"
                                                  style="width: 100%;"
                                                  v-if="editIndex == index && errors.parent"
                                                  v-text="errors.parent">
                                            </span>
                                        </td>
                                        <!-- ./parentesco -->
                                        <td>
                                            <span v-if="contractor.gender =='M'">
                                                N/A
                                            </span>
                                            <span v-else-if="editIndex != index">
                                                {{
                                                    (contractor.maternity == '')
                                                        ? 'No definido'
                                                        : contractor.maternity
                                                }}
                                            </span>
                                            <input v-else
                                                   type="checkbox"
                                                   v-model="contractor.maternity">
                                        </td>
                                        <td>
                                            <div class="d-inline-flex">
                                                <button v-if="editIndex == index"
                                                        @click="saveRow(index, $event)"
                                                        class="btn btn-success btn-xs btn-icon btn-action"
                                                        title="Guardar registro" data-toggle="tooltip"
                                                        type="button">
                                                    <i class="fa fa-save"></i>
                                                </button>
                                                <button v-else
                                                        @click="initUpdate(index, $event)"
                                                        class="btn btn-warning btn-xs btn-icon btn-action"
                                                        title="Modificar registro" data-toggle="tooltip" type="button">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                                <button @click="removeRow(index, quote_contractors, $event)"
                                                        class="btn btn-danger btn-xs btn-icon btn-action"
                                                        title="Eliminar registro" data-toggle="tooltip"
                                                        type="button">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            
                        </div>
                    </tab-content>

                    <tab-content title="Planes"
                                 icon="fa fa-briefcase"
                                 :before-change="validateStep2">
                        <!-- Planes y cobertura -->
                        <h3>Planes y Cobertura</h3>
                        <div class="row"
                             v-if="commercial_plans.length > 0">
                            <div class="col-4">
                                <div class="list-group"
                                     v-for="plan in commercial_plans">
                                    <button type="button"
                                            @click="geCommercialPlan(plan, $event)"
                                            class="list-group-item list-group-item-action">
                                        <span> {{ plan.name }} </span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-8"
                                 v-if="record.commercial_plan_id">
                                <!-- descripcion -->
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Descripción</span>
                                    </div>
                                    <input class="form-control" type="text" readonly
                                           v-model="commercial_plan.description">
                                </div>
                                <!-- Suma a Resguardar -->
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Cobertura</span>
                                    </div>           
                                    <input class="form-control" type="text" readonly
                                           v-model="commercial_plan.coverage">
                                </div>
                                <!-- prima -->
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Costo a pagar</span>
                                    </div>
                                    <input class="form-control" type="text" readonly
                                           v-model="commercial_plan.price">
                                </div>
                                <!-- Deducible -->
                                <div class="input-group mb-3">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text">Deducible %</span>
                                        </div>
                                        <input class="form-control" type="text" readonly
                                               v-model="commercial_plan.deductible">
                                    </div>
                                </div>
                            </div>
                            <div class="col-8"
                                 v-else>
                                <span class="text-danger"
                                      style="width: 100%;"
                                      v-if="errors.commercial_plan_id"
                                      v-text="errors.commercial_plan_id">
                                </span>
                            </div>
                        </div>
                        <div class="row"
                             v-else>
                             <div class="alert alert-danger">
                                <div class="container">
                                    <strong>Error, no se encontraron planes registrados!</strong>
                                </div>
                            </div>
                            
                        </div>
                    </tab-content>

                    <tab-content title="Forma de Pago"
                                 icon="fa fa-dollar-sign"
                                 :before-change="validateStep3">
                        <div class="row" style="justify-content: center;">
                            <div class="col-md-8">
                                <!-- Forma de pago -->
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Forma de Pago</span>
                                    </div>
                                    <!-- forma de pago -->
                                    <select v-bind:class="['form-control input-sm', isInvalid('way_to_pay')]"
                                            v-model="record.way_to_pay">
                                        <option label="De contado" value="De contado"></option>
                                        <option label="Semestral" value="Semestral"></option>
                                        <option label="Trimestral" value="Trimestral"></option>
                                        <option label="Mensual" value="Mensual"></option>
                                    </select>
                                    <span class="text-danger"
                                          style="width: 100%;"
                                          v-if="errors.way_to_pay"
                                          v-text="errors.way_to_pay">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </tab-content>

                    <tab-content title="Solicitante"
                                 icon="fa fa-user"
                                 :before-change="validateStep4">
                        <div class="row" style="justify-content: center;">
                            <div class="col-md-8">
                                <!-- Documento de identidad -->
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Documento de Identidad</span>
                                    </div>
                                    <select v-bind:class="['col-md-1', isInvalid('document_number')]"
                                            v-model="record.document_type">
                                        <option label="V" value="V"></option>
                                        <option label="E" value="E"></option>
                                        <option label="J" value="J"></option>
                                        <option label="G" value="G"></option>
                                    </select>
                                    <input type="text"
                                           v-bind:class="['form-control input-sm', isInvalid('document_number')]"
                                           v-model="record.document_number">
                                    <span class="text-danger"
                                          style="width: 100%;"
                                          v-if="errors.document_number || errors.document_type"
                                          v-text="errors.document_number">
                                    </span>
                                </div>
                                <!-- Nombre -->
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Nombre</span>
                                    </div>
                                    <input type="text" placeholder="Nombre"
                                           v-bind:class="['form-control input-sm', isInvalid('first_name')]"
                                           style="text-transform:uppercase;"
                                           v-model="record.first_name">
                                    <span class="text-danger"
                                          style="width: 100%;"
                                          v-if="errors.first_name"
                                          v-text="errors.first_name">
                                    </span>
                                </div>
                                <!-- Apellido -->
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Apellido</span>
                                    </div>
                                    <input type="text" placeholder="Apellido"
                                           v-bind:class="['form-control input-sm', isInvalid('last_name')]"
                                           style="text-transform:uppercase;"
                                           v-model="record.last_name">
                                    <span class="text-danger"
                                          style="width: 100%;"
                                          v-if="errors.last_name"
                                          v-text="errors.last_name">
                                    </span>
                                </div>
                                <!-- Telefono Local -->
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Telefono Local</span>
                                    </div>
                                    <select v-bind:class="['col-md-2', isInvalid('local_phone')]"
                                            v-model="local_phone.area_code">
                                        <option label="0212" value="0212"></option>
                                        <option label="0234" value="0234"></option>
                                        <option label="0235" value="0235"></option>
                                        <option label="0237" value="0237"></option>
                                        <option label="0238" value="0238"></option>
                                        <option label="0239" value="0239"></option>
                                        <option label="0240" value="0240"></option>
                                        <option label="0241" value="0241"></option>
                                        <option label="0242" value="0242"></option>
                                        <option label="0243" value="0243"></option>
                                        <option label="0244" value="0244"></option>
                                        <option label="0245" value="0245"></option>
                                        <option label="0246" value="0246"></option>
                                        <option label="0247" value="0247"></option>
                                        <option label="0248" value="0248"></option>
                                        <option label="0249" value="0249"></option>
                                        <option label="0251" value="0251"></option>
                                        <option label="0252" value="0252"></option>
                                        <option label="0253" value="0253"></option>
                                        <option label="0254" value="0254"></option>
                                        <option label="0255" value="0255"></option>
                                        <option label="0256" value="0256"></option>
                                        <option label="0257" value="0257"></option>
                                        <option label="0258" value="0258"></option>
                                        <option label="0259" value="0259"></option>
                                        <option label="0261" value="0261"></option>
                                        <option label="0262" value="0262"></option>
                                        <option label="0263" value="0263"></option>
                                        <option label="0264" value="0264"></option>
                                        <option label="0265" value="0265"></option>
                                        <option label="0266" value="0266"></option>
                                        <option label="0267" value="0267"></option>
                                        <option label="0268" value="0268"></option>
                                        <option label="0269" value="0269"></option>
                                        <option label="0271" value="0271"></option>
                                        <option label="0272" value="0272"></option>
                                        <option label="0273" value="0273"></option>
                                        <option label="0274" value="0274"></option>
                                        <option label="0275" value="0275"></option>
                                        <option label="0276" value="0276"></option>
                                        <option label="0277" value="0277"></option>
                                        <option label="0278" value="0278"></option>
                                        <option label="0279" value="0279"></option>
                                        <option label="0281" value="0281"></option>
                                        <option label="0282" value="0282"></option>
                                        <option label="0283" value="0283"></option>
                                        <option label="0284" value="0284"></option>
                                        <option label="0285" value="0285"></option>
                                        <option label="0286" value="0286"></option>
                                        <option label="0287" value="0287"></option>
                                        <option label="0288" value="0288"></option>
                                        <option label="0289" value="0289"></option>
                                        <option label="0291" value="0291"></option>
                                        <option label="0292" value="0292"></option>
                                        <option label="0293" value="0293"></option>
                                        <option label="0294" value="0294"></option>
                                        <option label="0295" value="0295"></option>
                                    </select>
                                    <input type="text"
                                           v-bind:class="['form-control input-sm', isInvalid('local_phone')]"
                                           v-model="local_phone.number">
                                    <span class="text-danger"
                                          style="width: 100%;"
                                          v-if="errors.local_phone"
                                          v-text="errors.local_phone">
                                    </span>
                                </div>
                                <!-- Telefono celular -->
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Telefono Móvil</span>
                                    </div>
                                    <select v-bind:class="['col-md-2', isInvalid('mobile_phone')]"
                                            v-model="mobile_phone.area_code">
                                        <option label="0412" value="0412"></option>
                                        <option label="0414" value="0414"></option>
                                        <option label="0424" value="0424"></option>
                                        <option label="0416" value="0416"></option>
                                        <option label="0426" value="0426"></option>
                                    </select>
                                    <input type="text"
                                           v-bind:class="['form-control input-sm', isInvalid('mobile_phone')]"
                                           v-model="mobile_phone.number">
                                    <span class="text-danger"
                                          style="width: 100%;"
                                          v-if="errors.mobile_phone"
                                          v-text="errors.mobile_phone">
                                    </span>
                                </div>
                                <!-- Email -->
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Email</span>
                                    </div>
                                    <input type="text" placeholder="Email"
                                           v-bind:class="['form-control input-sm', isInvalid('email')]"
                                           v-model="record.email">
                                    <span class="text-danger"
                                          style="width: 100%;"
                                          v-if="errors.email"
                                          v-text="errors.email">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </tab-content>

                    <tab-content title="Resumen" icon="fa fa-save">
                        <!-- Genera reporte y imprime cotizacion -->
                    </tab-content>
                </form-wizard>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        data() {
            return {
                record:  {
                    first_name:               '',
                    last_name:          '',
                    document_type:      '',
                    document_number:    '',
                    email:              '',
                    local_phone_id:     '',
                    mobile_phone_id:    '',
                    commercial_plan_id: '',
                    user_id:            '',
                    sum:                '',
                    fee:                '',
                    deductible:         '',
                    way_to_pay:         ''
                },

                commercial_plan: {
                    name:        '',
                    description: '',
                    coverage:    '',
                    price:       '',
                    deductible:  '',
                    type:        ''
                },
                local_phone: {
                    area_code: '',
                    number:    '',
                    type:      'H'
                },
                mobile_phone: {
                    area_code: '',
                    number:    '',
                    type:      'M'
                },

                quote_contractors: [],
                commercial_plans: [],

                editIndex: '',
                errors:  {},
                records: []

            }
        },
        props: {
            health_quote_id: Number,
        },
        created() {
            const vm = this;
            vm.reset();
            vm.setContractor();
            vm.getCommercialPlan();
        },
        mounted() {
            const vm = this;
            if(vm.health_quote_id) {
                vm.getHealthQuote();
            }
        },
        methods: {
            reset() {
                const vm = this;
                vm.editIndex = 0;
                vm.record =  {
                    first_name:               '',
                    last_name:          '',
                    document_type:      '',
                    document_number:    '',
                    email:              '',
                    local_phone_id:     '',
                    mobile_phone_id:    '',
                    commercial_plan_id: '',
                    user_id:            '',
                    sum:                '',
                    fee:                '',
                    deductible:         '',
                    way_to_pay:         ''
                };
                vm.commercial_plan = {
                    name:        '',
                    description: '',
                    coverage:    '',
                    price:       '',
                    deductible:  '',
                    type:        ''
                };
                vm.local_phone = {
                    area_code: '',
                    number:    '',
                    type:      'H'
                };
                vm.mobile_phone = {
                    area_code: '',
                    number:    '',
                    type:      'M'
                };
            },
            setContractor() {
                const vm = this;
                let contractor = {
                    id:        '',
                    first_name:      '',
                    last_name: '',
                    gender:    '',
                    birthdate: '',
                    parent:    '',
                    maternity: ''
                };
                vm.quote_contractors.push(contractor);
            },
            getCommercialPlan() {
                const vm = this;
                vm.commercial_plans = [];
                axios.get('/plan-salud/vue-list').then((response) => {
                    if (typeof(response.data.records) != 'undefined') {
                        vm.commercial_plans = response.data.records;
                    }
                }).catch(error => {
                    console.log(error);
                });
            },
            handleValidation(isValid, tabIndex) {
                /** Resultado de la validación */
                //console.log('Tab: ' + tabIndex + ' valid: ' + isValid);
            },
            handleErrorMessage(errorMsg) {
                /** Se procesa el mensaje de error */
            },
            validateStep1() {
                /** Se valida el componente */
                const vm = this;
                if (vm.editIndex != null) {
                    return new Promise((resolve, reject) => {
                            Swal.fire({
                                title: 'Existen elementos sin guardar!',
                                text: "Debe guardar la información de los contratantes antes de continuar.",
                                icon: 'warning',
                            });
                            reject('');
                    })
                } else {
                    return new Promise((resolve, reject) => {
                        setTimeout(() => {
                            resolve(true);
                        }, 1000)
                    })
                }
            },
            validateStep2() {
                /** Se valida el componente */
                const vm = this;
                let confirmated = false;
                vm.errors = {};
                if (vm.record['commercial_plan_id'] == '') {
                    if (typeof(vm.errors['commercial_plan_id']) === 'undefined') {
                        vm.errors['commercial_plan_id'] = 'El campo plan comercial es requerido.';
                    }
                } else {
                    confirmated = true;
                }
                return new Promise((resolve, reject) => {
                    setTimeout(() => {
                        if (confirmated) {
                            resolve(true);
                        } else {
                            reject('');
                        }
                    }, 1000)
                })
            },
            validateStep3() {
                /** Se valida el componente */
                const vm = this;
                let confirmated = false;
                vm.errors = {};
                if (vm.record['way_to_pay'].trim() === '') {
                    if (typeof(vm.errors['way_to_pay']) === 'undefined') {
                        vm.errors['way_to_pay'] = 'El campo forma de pago es requerido.';
                    }
                } else {
                    confirmated = true;
                }
                return new Promise((resolve, reject) => {
                    setTimeout(() => {
                        if (confirmated) {
                            resolve(true);
                        } else {
                            reject('');
                        }
                    }, 1000)
                })
            },
            validateStep4() {
                /** Se valida el componente */
                const vm = this;
                vm.errors = {};
                if ((vm.record['document_number'].trim() === '') || (vm.record['document_type'].trim() === '')) {
                    if (typeof(vm.errors['document_number']) === 'undefined') {
                        vm.errors['document_number'] = 'El campo documento de identidad es requerido.';
                    }
                }
                if (vm.record['first_name'].trim() === '') {
                    if (typeof(vm.errors['first_name']) === 'undefined') {
                        vm.errors['first_name'] = 'El campo nombre es requerido.';
                    }
                }
                if (vm.record['last_name'].trim() === '') {
                    if (typeof(vm.errors['last_name']) === 'undefined') {
                        vm.errors['last_name'] = 'El campo apellido es requerido.';
                    }
                }
                if ((vm.local_phone['area_code'].trim() === '') || (vm.local_phone['number'].trim() === '')) {
                    if (typeof(vm.errors['local_phone']) === 'undefined') {
                        vm.errors['local_phone'] = 'El campo teléfono local es requerido.';
                    }
                }
                if ((vm.mobile_phone['area_code'].trim() === '') || (vm.local_phone['number'].trim() === '')) {
                    if (typeof(vm.errors['mobile_phone']) === 'undefined') {
                        vm.errors['mobile_phone'] = 'El campo teléfono móvil es requerido.';
                    }
                }
                if (vm.record['email'].trim() === '') {
                    if (typeof(vm.errors['email']) === 'undefined') {
                        vm.errors['email'] = 'El campo email es requerido.';
                    }
                }
                return new Promise((resolve, reject) => {
                    setTimeout(() => {
                        if (Object.keys(vm.errors).length > 0) {
                            reject('');
                        } else {
                            resolve(true);
                        }
                    }, 1000)
                })
            },
            saveRow(index, event) {
                const vm = this;
                let field = {};
                field = vm.quote_contractors[index];
                vm.errors = {};
                if (field['first_name'].trim() === '') {
                    if (typeof(vm.errors['first_name']) === 'undefined') {
                        vm.errors['first_name'] = 'El campo nombre es requerido.';
                    }
                }
                if (field['last_name'].trim() === '') {
                    if (typeof(vm.errors['last_name']) === 'undefined') {
                        vm.errors['last_name'] = 'El campo apellido es requerido.';
                    }
                }
                if (field['gender'].trim() === '') {
                    if (typeof(vm.errors['gender']) === 'undefined') {
                        vm.errors['gender'] = 'El campo género es requerido.';
                    }
                }
                if (field['birthdate'].trim() === '') {
                    if (typeof(vm.errors['birthdate']) === 'undefined') {
                        vm.errors['birthdate'] = 'El campo fecha de nacimiento es requerido.';
                    }
                }
                if (field['parent'].trim() === '') {
                    if (typeof(vm.errors['parent']) === 'undefined') {
                        vm.errors['parent'] = 'El campo parentesco es requerido.';
                    }
                }
                if (Object.keys(vm.errors).length > 0) {
                    return false;
                }
                vm.editIndex = null;
            },
            /**
             * Reescribe el método initUpdate para cambiar su comportamiento por defecto
             * Método que carga el formulario con los datos a modificar
             *
             * @author  Ing. Roldan Vargas <rvargas@cenditel.gob.ve> | <roldandvg@gmail.com>
             *
             * @param {integer} index Identificador del registro a ser modificado
             * @param {object} event   Objeto que gestiona los eventos
             */
            initUpdate(index, event) {
                const vm = this;
                vm.errors = {};
                
                if (typeof(vm.editIndex) != 'undefined') {
                    vm.editIndex = index;
                }

                event.preventDefault();
            },
            geCommercialPlan(field, event) {
                const vm = this;
                vm.commercial_plan = field;
                vm.record.commercial_plan_id = vm.commercial_plan['id'];
                event.preventDefault();
            },

            /**
             * Reescribe el método createRecord para cambiar su comportamineto por defecto
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
                    fields['quote_contractors'] = vm.quote_contractors;
                    fields['local_phone'] = vm.local_phone;
                    fields['mobile_phone'] = vm.mobile_phone;

                    axios.post('/' + url, fields).then(response => {
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
                                    vm.errors.push(error.response.data.errors[index][0]);
                                }
                            }
                        }

                        vm.loading = false;
                    });
                }

            },
            getHealthQuote() {
                const vm = this;
                axios.get(`/cotiza-salud/show/${vm.health_quote_id}`).then(response => {
                    vm.record = response.data.record;
                });
            },
        }
    }
</script>