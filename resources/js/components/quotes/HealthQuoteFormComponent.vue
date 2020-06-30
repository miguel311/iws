<template>
    <section id="HealthQuoteFormComponent">
        <form-wizard @on-complete="onComplete"
                     @on-loading="setLoading"
                     @on-validate="handleValidation"
                     @on-error="handleErrorMessage"
                     next-button-text="Siguiente"
                     back-button-text="Atras"
                     finish-button-text="Guardar Solicitud"
                     shape="" title="" subtitle=""
                     color="#096EAB"
                     error-color="#e74c3c">

            <tab-content title="Información Contratante"
                         icon="fa fa-user-shield"
                         :before-change="validateAsync">
                <button class="btn btn-success" @click="setContractor()">
                    Agregar
                </button>
                <br><br>
                <table class="table table-hover table-striped table-responsive">
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
                                        (contractor.name == '')
                                            ? 'No definido'
                                            : contractor.name
                                    }}
                                </span>
                                <input v-else
                                      class="form-control" style="text-transform:uppercase;"
                                       v-model="contractor.name">
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
                                       class="form-control" style="text-transform:uppercase;"
                                       v-model="contractor.last_name">
                            </td>
                            <td>
                                <span v-if="editIndex != index">
                                    {{
                                        (contractor.gender == '')
                                            ? 'No definido'
                                            : contractor.gender
                                    }}
                                </span>
                                <select v-else
                                        class="form-control"
                                        @input.prevent="contractor.maternity=(contractor.gender == 'M')?'':contractor.maternity;"
                                        v-model="contractor.gender">
                                    <option label="M" value="M"></option>
                                    <option label="F" value="F"></option>
                                </select>
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
                                       class="form-control"
                                       type="date"
                                       v-model="contractor.birthdate">
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
                                        class="form-control"
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
                                       class=""
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
            </tab-content>

            <tab-content title="Planes"
                         icon="fa fa-briefcase"
                         :before-change="validateAsync">
                <!-- Planes y cobertura -->
                <h3>Planes y Cobertura</h3>
                <div class="row">
                    <div class="col-4">
                        <div class="list-group"
                             v-for="commercial_plan in commercial_plans">
                            <button type="button"
                                    class="list-group-item list-group-item-action">
                                <span> {{ commercial_plan.name }} </span>
                            </button>
                        </div>
                    </div>
                    <div class="col-8">
                        <span>Prueba</span>
                    </div>
                </div>
                <!-- descripcion -->
                <div v-if="request.plan_persona_id"
                     class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Descripcion</span>
                    </div>
                    <select class="form-control"
                            v-model="request.plan_persona_id">
                        <option disabled
                                v-model="request.plan_persona_id"
                                v-for="(item, index) in plan"
                                :key="index" :label="item.description"
                                :value="item.id">
                        </option>
                    </select> 
                </div>
                <!-- Suma a Resguardar -->
                <div v-if="request.plan_persona_id"
                     class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Suma a Resguardar $</span>
                    </div>           
                    <select class="form-control"
                            v-model="request.plan_persona_id">
                        <option disabled
                                v-model="request.plan_persona_id"
                                v-for="(item, index) in plan"
                                :key="index" :label="item.coverage"
                                :value="item.id">
                        </option>
                    </select> 
                </div>
                <!-- prima -->
                <div v-if="request.plan_persona_id"
                     class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Costo a pagar $</span>
                    </div>
                    <select class="form-control"
                            v-model="request.plan_persona_id">
                        <option disabled
                                v-model="request.plan_persona_id"
                                v-for="(item, index) in plan"
                                :key="index" :label="item.price"
                                :value="item.id">
                        </option>
                    </select> 
                </div>
                <!-- Deducible -->
                <div v-if="request.plan_persona_id"
                     class="input-group mb-3">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Deducible %</span>
                        </div>
                    <input class="form-control" type="number"
                           placeholder="Deducible" min="0" max="0"
                           v-model="request.deducible">
                    </div>
                </div>
            </tab-content>

            <tab-content title="Forma de Pago"
                         icon="fa fa-dollar-sign"
                         :before-change="validateAsync">
                <!-- Forma de pago -->
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Forma de Pago</span>
                    </div>
                    <!-- forma de pago -->
                    <select class="form-control"
                            v-model="request.forma_pago">
                        <option label="De contado" value="De contado"></option>
                        <option label="Semestral" value="Semestral"></option>
                        <option label="Trimestral" value="Trimestral"></option>
                        <option label="Mensual" value="Mensual"></option>
                    </select>
                </div>
            </tab-content>

            <tab-content title="Solicitante"
                         icon="fa fa-user"
                         :before-change="validateAsync">
                <div class="row" style="justify-content: center;">
                    <div class="col-md-5">
                        <div class="input-group">
                            <!-- type of cedule -->
                            <div class="input-group-prepend">
                                <span class="input-group-text">Tipo de Documento</span>
                            </div>
                            <select class="col-md-3" 
                                    v-model="request.cedule_type">
                                <option label="V" value="V"></option>
                                <option label="E" value="E"></option>
                                <option label="J" value="J"></option>
                                <option label="G" value="G"></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-5">
                        <div class="input-group">
                            <!-- cedule -->
                            <div class="input-group-prepend">
                                <span class="input-group-text">Documento:</span>
                            </div>
                            <input class="form-control"
                                   type="text" placeholder="Cédula"
                                   v-model="request.cedule">
                        </div>
                    </div>
                    
                </div>
                <!-- cedula y tipo de cedula -->
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Nombre</span>
                    </div>
                    <input class="form-control" style="text-transform:uppercase;"
                           type="text" placeholder="Nombre"
                           v-model="request.name">
                    <!-- Apellido -->
                    <div class="input-group-prepend">
                        <span class="input-group-text">Apellido</span>
                    </div>
                    <input class="form-control" style="text-transform:uppercase;"
                           type="text" placeholder="Apellido"
                           v-model="request.lastname">
                </div>
                <!-- Telefono Local -->
                <div class="input-group mb-3">
                    <!-- type of telefono Local -->
                    <div class="input-group-prepend">
                        <span class="input-group-text">Telefono Local</span>
                    </div>
                    <select class="col-md-2"
                            v-model="request.phone_local_type">
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
                    <input class="form-control"
                           type="text" placeholder="Teléfono Local"
                           v-model="request.phone_local">
                    <!-- type of telefono celular-->
                    <div class="input-group-prepend">
                        <span class="input-group-text">Telefono Movil</span>
                    </div>
                    <!-- Telefono celular -->
                    <select class="col-md-2"
                            v-model="request.phone_movile_type">
                        <option label="0412" value="0412"></option>
                        <option label="0414" value="0414"></option>
                        <option label="0424" value="0424"></option>
                        <option label="0416" value="0416"></option>
                        <option label="0426" value="0426"></option>
                    </select>
                    <input class="form-control"
                           type="text" placeholder="Teléfono Movil"
                           v-model="request.phone_movile">
                </div>
                <!-- Email -->
                <div class="input-group mb-3">
                    <!-- Email -->
                    <div class="input-group-prepend">
                        <span class="input-group-text">Email</span>
                    </div>
                    <input class="form-control"
                           type="text" placeholder="Email"
                           v-model="request.email">
                </div>
            </tab-content>

            <tab-content title="Resumen" icon="fa fa-save">
                <!-- Genera reporte y imprime cotizacion -->
            </tab-content>
        </form-wizard>
    </section>
</template>

<script>
    export default {
        data() {
            return {
                record:  {},

                quote_contractors: [],

                commercial_plans: [],
                request: [],
                request: {
                    name:'',
                    lastname:'',
                    cedule:'',
                    cedule_type:'',
                    email:'',
                    phone_local:'',
                    phone_local_type:'',
                    phone_movile_type:'',
                    phone_movile:'',
                    plan_persona_id:'',
                    plan_persona_id2:'',
                    forma_pago:'',
                    deducible:'0'
                },
                editIndex: '',
                errors:  [],
                records: []

            }
        },
        created() {
            const vm = this;
            vm.editIndex = 0;
            vm.setContractor();
            vm.getCommercialPlan();
        },
        methods: {
            setContractor() {
                const vm = this;
                let contractor = {
                    id:        '',
                    name:      '',
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
            onComplete() {
                /** Revisar */
                const params = {
                    plan_persona_id: this.request.plan_persona_id,
                    deducible: this.request.deducible,
                    forma_pago: this.request.forma_pago,
                    cedule_type: this.request.cedule_type,
                    cedule: this.request.cedule,
                    name: this.request.name,
                    lastname: this.request.lastname,
                    phone_local_type: this.request.phone_local_type,
                    phone_local: this.request.phone_local,
                    phone_movile_type: this.request.phone_movile_type,
                    phone_movile: this.request.phone_movile,
                    email: this.request.email
                };

                [].push.call(params, this.users);//ingresa array de users en constante

                axios.post('/cotiza-salud', params).then((response) =>{
                }).catch(error => {
                    console.log(error);
                });
                alert('Guardada su Cotización Correctamente!');
            },
            setLoading(value) {
                const vm = this;
                vm.loading = value;
            },
            handleValidation(isValid, tabIndex) {
                //Resultado de la validación
                console.log('Tab: ' + tabIndex + ' valid: ' + isValid);
            },
            handleErrorMessage(errorMsg) {
                //Se procesa el mensaje de error
            },
            validateAsync() {
                //Se valida el componente
                return new Promise((resolve, reject) => {
                    setTimeout(() => {
                        //reject('This is a custom validation error message. Click next again to get rid of the validation');
                        resolve(true);
                    }, 1000)
                })
            },
            saveRow(index, event) {
                
            }
        }
    }
</script>