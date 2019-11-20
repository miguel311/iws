<template>
	<div>
		<form-wizard next-button-text="Siguiente" shape="" back-button-text="Atras" finish-button-text="Guardar Solicitud" @on-complete="agregar" @submit.prevent="agregar" title="" subtitle="" color="#096EAB">
			<!-- :before-change="validateFirstStep" -->
			<tab-content title="Información Contratante" >


  			  <button class="btn btn-success" @click="addUser">
			    Agregar Otro
			  </button><br><br>
			  <div class="table-responsive-lg" v-for="(user, index) in users">
    			<tr>
    				<th><center>Nombre</center></th>
    				<th><center>Apellido</center></th>
    				<th><center>Genero o Sexo</center></th>
    				<th><center>Fecha de Nacimiento</center> </th>
    				<th><center>Parentesco</center></th>
    				<th><center>Maternidad</center></th>
    				<th><center>Eliminar</center></th>

    			</tr>
    			<tr>  
			    <td> <input v-model="user.name" class="form-control"></td>
			    <td> <input v-model="user.lastname" class="form-control"></td>
			    <td><select class="form-control" v-model="user.sexo" >
					<option label="M" value="M"></option>
					<option label="F" value="F"></option>
				</select></td>
			    <td><input type="date" v-model="user.date" class="form-control"></td>
	         				<!-- parentesco -->
				<td><select class="form-control" v-model="user.parent" >
					<option label="Titular" value="Titular"></option>
					<option label="Espos@" value="Espos@"></option>
					<option label="Hij@" value="Hij@"></option>
					<option label="Herman@" value="Herman@"></option>
					<option label="Madre" value="Madre"></option>
					<option label="Padre" value="Padre"></option>
					<option label="Sobrin@" value="Sobrin@"></option>
					<option label="Niet@" value="Niet@"></option>
				</select></td>
				<td><center><input v-if="user.sexo !='M'" type="checkbox" class="" v-model="user.mother" ></center></td>
				<td><button class="btn btn-danger" @click="deleteUser(index)">
			      Eliminar
			    </button></td>
				</tr>
			  </div>
			  <br>
			  
			  <!-- <pre>{{ $data }}</pre> -->



			</tab-content>
			<tab-content title="Planes">
				<h3>Planes y Cobertura</h3>
				<!-- Plan a Seleccionar -->
			    <div class="input-group mb-3">
				    <div class="input-group-prepend">
				      <span class="input-group-text">Plan</span>
				    </div>
				    <!-- PLAN  -->
					<select  class="form-control" v-model="request.plan_persona_id">
						<option v-for="(item, index) in plan" :key="index"
						  :label=" item.name " :value=" item.id "></option>
					</select>
				</div>

				<!-- descripcion -->
				<div v-if="request.plan_persona_id" class="input-group mb-3">
					  <div class="input-group-prepend">
								      <span class="input-group-text">Descripcion</span>
					  </div>		   
					<select  class="form-control" v-model="request.plan_persona_id">
						<option disabled  v-model="request.plan_persona_id" v-for="(item, index) in plan" :key="index" :label=" item.description " :value=" item.id "></option>
					</select> 
				</div>

				<!-- Suma a Resguardar -->
				<div v-if="request.plan_persona_id" class="input-group mb-3">
					  <div class="input-group-prepend">
								      <span class="input-group-text">Suma a Resguardar</span>
					  </div>		   
					<select  class="form-control" v-model="request.plan_persona_id">
						<option disabled  v-model="request.plan_persona_id" v-for="(item, index) in plan" :key="index" :label=" item.price " :value=" item.id "></option>
					</select> 
				</div>

				<!-- prima -->
				<div v-if="request.plan_persona_id" class="input-group mb-3">
					  <div class="input-group-prepend">
								      <span class="input-group-text">Costo a pagar</span>
					  </div>		   
					<select  class="form-control" v-model="request.plan_persona_id">
						<option disabled  v-model="request.plan_persona_id" v-for="(item, index) in plan" :key="index" :label=" item.prima " :value=" item.id "></option>
					</select> 
				</div>

				<!-- Deducible -->
				<div v-if="request.plan_persona_id" class="input-group mb-3">
				    <div class="input-group mb-3">
					    <div class="input-group-prepend">
					      <span class="input-group-text">Deducible</span>
					    </div>
					  	<input type="number" placeholder="Deducible" name="" class="form-control"  min="0" max="50" v-model="request.deducible">
					</div>
				</div>

			</tab-content>


			<tab-content title="Forma de Pago">

				<!-- Forma de pago -->
			    <div class="input-group mb-3">
			      <div class="input-group-prepend">
			        <span class="input-group-text">Forma de Pago</span>
			      </div>
					<!-- forma de pago -->
					<select class="form-control" v-model="request.forma_pago">
						<option label="De contado" value="De contado"></option>
						<option label="Semestral" value="Semestral"></option>
						<option label="Trimestral" value="Trimestral"></option>
						<option label="Mensual" value="Mensual"></option>
					</select>
				</div>
			</tab-content>





			<tab-content title="Solicitante">

				<!-- cedula y tipo de cedula -->
				<div class="input-group mb-3">
			      <!-- type of cedule -->
			      <div class="input-group-prepend">
			        <span class="input-group-text">C.I/RIF</span>
			      </div>
				  <select class="col-md-1" v-model="request.cedule_type">
					<option label="V" value="V"></option>
					<option label="E" value="E"></option>
					<option label="J" value="J"></option>
					<option label="G" value="G"></option>
				  </select>
				  <!-- cedule -->
				    <input type="text" placeholder="Cédula" name="" class="form-control" v-model="request.cedule">
			      <div class="input-group-prepend">
			        <span class="input-group-text">Nombre</span>
			      </div>
					<input type="text" placeholder="Nombre" name="" class="form-control" v-model="request.name">
					<!-- Apellido -->
				  <div class="input-group-prepend">
			        <span class="input-group-text">Apellido</span>
			      </div>
				    <input type="text" placeholder="Apellido" name="" class="form-control" v-model="request.lastname">
				</div>

				<!-- Nombre -->
			    <!-- <div class="input-group mb-3"> -->
			    <!-- </div> -->

				<!-- Telefono Local -->
				<div class="input-group mb-3">
			      <!-- type of telefono Local -->
			      <div class="input-group-prepend">
			        <span class="input-group-text">Telefono Local</span>
			      </div>
				  <select class="col-md-2" v-model="request.phone_local_type">
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
				    <input type="text" placeholder="Teléfono Local" name="" class="form-control" v-model="request.phone_local">
			      <!-- type of telefono celular-->
			      <div class="input-group-prepend">
			        <span class="input-group-text">Telefono Movil</span>
			      </div>
				<!-- Telefono celular -->
				  <select class="col-md-2" v-model="request.phone_movile_type">
					<option label="0412" value="0412"></option>
					<option label="0414" value="0414"></option>
					<option label="0424" value="0424"></option>
					<option label="0416" value="0416"></option>
					<option label="0426" value="0426"></option>
				  </select>
				    <input type="text" placeholder="Teléfono Movil" name="" class="form-control" v-model="request.phone_movile">
				</div>
				<!-- Email -->
				<div class="input-group mb-3">
			      <!-- Email -->
			      <div class="input-group-prepend">
			        <span class="input-group-text">Email</span>
			      </div>
				    <input type="text" placeholder="Email" name="" class="form-control" v-model="request.email">
				</div>

			</tab-content>




			<tab-content title="Resumen">
				<!-- Genera reporte y imprime cotizacion -->
			</tab-content>






		</form-wizard>
	</div>

<!-- 	<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-8 is-offset-2">
                <horizontal-stepper :steps="demoSteps" @completed-step="completeStep"
                                    @active-step="isStepActive" @stepper-finished="alert"
                >                     
                </horizontal-stepper>
            </div>
        </div>
    </div>
</section> -->

</template>


<script>
	import Swal from 'sweetalert2';
	import VueFormWizard from 'vue-form-wizard';
	import 'vue-form-wizard/dist/vue-form-wizard.min.css';
	Vue.use(VueFormWizard);
	export default {

		data(){

				// Swal.fire(
				//   'Good job!',
				//   'You clicked the button!',
				//   'success'
				// )
			return{
				users: [{ name: '',lastname:'',date: '', sexo: '', parent:'Titular', mother:false}],

				 plan: [],
				 request: [],
				 request: {name:'',lastname:'',cedule:'',cedule_type:'',email:'',phone_local:'',phone_local_type:'',phone_movile_type:'',phone_movile:'',plan_persona_id:'',forma_pago:'',deducible:'0'},
				 















				// rules: {
		  //          name: [{
		  //            required: true,
		  //            message: 'Por favor Completar Nombre',
		  //            trigger: 'blur'
		  //          }, {
		  //            min: 3,
		  //            max: 5,
		  //            message: 'Minimo de caracteres de 3 a 5',
		  //            trigger: 'blur'
		  //          }],
		  //          lastname: [{required:true,message:'Por favor Completar Apellido',trigger:'change'
		  //          }],
		  //       }



			}
		},
		created(){
	    	axios.get('/cotizasalud')
	    		.then(res =>{
	    			this.plan = res.data
	    		})
		},
		methods:{
			// FILTRO DE PLANES
		    planFormatter: function(val) {
		        var newVal = '';
		        this.plan.map(function(el){ 
		            if (val == el.value){
		                newVal = el.id + ' ' + el.name;
		            }
		        });
		        return newVal;
		    },
		    // Al cambiar
			onChange(event) {
				// esto va en el div
				// @change="onChange($event)"
			},
			// add user test
			addUser: function () {
		      this.users.push({  name: '',lastname:'',date: '', sexo: '', parent:'', mother:false });
		    },
			// delet user test
		    deleteUser: function (index) {
		      console.log(index);
		      console.log(this.finds);
		      this.users.splice(index, 1);
		      if(index===0)
		      this.addUser()
		    },




			// validateFirstStep() {
	  //         return new Promise((resolve, reject) => {
	  //           this.$refs.ruleForm.validate((valid) => {
	  //             resolve(valid);
	  //           });
	  //         })

	  //       },

		 //    beforeTabSwitch: function(){
			// 	if (this.request.name.trim() === '' || this.request.lastname.trim() === '' || this.request.cedule.trim() === '' || this.request.email.trim() === '' || this.request.phone.trim() === '' || this.request.date.trim() === '' ) {

			// 		Swal.fire({
			// 		  type: 'warning',
			// 		  title: 'Necesita Llenar Todos los Campos Requeridos de Información personal',
			// 		  text: 'Intente Nuevamente',
			// 		  showConfirmButton: false,
			// 		  timer: 6500,

			// 		})
			// 	}
			// },
			// Validacion de formulario
			agregar: function (){
				// validacion datos personales
				// if (
				// 	this.request.plan_persona_id.trim() === '' ||
				// 	this.request.deducible.trim() === '' ||
				// 	this.request.forma_pago.trim() === '' ||
				// 	this.request.cedule_type.trim() === '' ||
				// 	this.request.cedule.trim() === '' ||
				// 	this.request.name.trim() === '' ||
				// 	this.request.lastname.trim() === '' ||
				// 	this.request.phone_local_type.trim() === '' ||
				// 	this.request.phone_local.trim() === '' ||
				// 	this.request.phone_movile_type.trim() === '' ||
				// 	this.request.phone_movile.trim() === '' ||
				// 	this.request.email.trim() === ''
				//  ) {


				// 	Swal.fire({
				// 	  type: 'warning',
				// 	  title: 'Necesita Llenar Todos los Campos Requeridos',
				// 	  text: 'Intente Nuevamente',
				// 	  showConfirmButton: false,
				// 	  timer: 6500,

				// 	})
				// 	return;
				// }











				// // validacion datos institucionales
				// if (this.request.type_institution_id.trim() === '' || this.request.institution_name.trim() === '' || this.request.parish_id.trim() === '' || this.request.address_institution.trim() === '' || this.request.web_address.trim() === '' || this.request.type_request_id.trim() === '') {


				// 	Swal.fire({
				// 	  type: 'warning',
				// 	  title: 'Necesita Llenar Todos los Campos Requeridos de Información Institucional',
				// 	  text: 'Intente Nuevamente',
				// 	  showConfirmButton: false,
				// 	  timer: 6500,

				// 	})
				// 	return;
				// }





				// if (this.request.name.trim() === '' || this.request.lastname.trim() === '' || this.request.cedule.trim() === '' || this.request.email.trim() === '' || this.request.phone.trim() === '' || this.request.date.trim() === '' || this.request.type_institution_id.trim() === '' || this.request.institution_name.trim() === '' || this.request.parish_id.trim() === '' || this.request.address_institution.trim() === '' || this.request.web_address.trim() === '' || this.request.type_request_id.trim() === '' || this.request.additional_Information.trim() === '') {


				// 	Swal.fire({
				// 	  type: 'warning',
				// 	  title: 'Necesita Llenar Todos los Campos Requeridos',
				// 	  text: 'Intente Nuevamente',
				// 	  showConfirmButton: false,
				// 	  timer: 6500,

				// 	})
				// 	return;
				// }


				// console.log(this.request.name, this.request.lastname);


				// const cotizacion = this.request;
				// this.request ={
				// 	// user: users,
				// 	plan_persona_id: this.request.plan_persona_id,
				// 	deducible: this.request.deducible,
				// 	forma_pago: this.request.forma_pago,
				// 	cedule_type: this.request.cedule_type,
				// 	cedule: this.request.cedule,
				// 	name: this.request.name,
				// 	lastname: this.request.lastname,
				// 	phone_local_type: this.request.phone_local_type,
				// 	phone_local: this.request.phone_local,
				// 	phone_movile_type: this.request.phone_movile_type,
				// 	phone_movile: this.request.phone_movile,
				// 	email: this.request.email
				// };
				// axios.post('/cotizasalud', cotizacion);


				const params ={
					// user: users,
					// _method: 'PUT',
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
				axios
				.post('/cotizasalud', params)
		        .then((res) =>{
		          const cotizaServer = res.data;
		          this.request.push(cotizaServer);
		        })
		        .catch(e => {
		            console.log(e);
		        });
		        // alert('Hola ' + this.request.name + '!')
			},
		}
	}
</script>