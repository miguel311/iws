(window.webpackJsonp=window.webpackJsonp||[]).push([[2],{"5Ra2":function(t,n,o){"use strict";o.r(n);var a={data:function(){return{notas:[],modoEditar:!1,nota:{nombre:"",descripcion:""}}},created:function(){var t=this;axios.get("/notas").then((function(n){t.notas=n.data}))},methods:{agregar:function(){var t=this;if(""!==this.nota.nombre.trim()&&""!==this.nota.descripcion.trim()){var n=this.nota;this.nota={nombre:"",descripcion:""},axios.post("/notas",n).then((function(n){var o=n.data;t.notas.push(o)}))}else alert("Debes completar todos los campos antes de guardar")},editarFormulario:function(t){this.nota.nombre=t.nombre,this.nota.descripcion=t.descripcion,this.nota.id=t.id,this.modoEditar=!0},editarNota:function(t){var n=this,o={nombre:t.nombre,descripcion:t.descripcion};axios.put("/notas/".concat(t.id),o).then((function(o){n.modoEditar=!1;var a=n.notas.findIndex((function(n){return n.id===t.id}));n.notas[a]=o.data}))},eliminarNota:function(t,n){var o=this;confirm("Eliminar nota ".concat(t.nombre))&&axios.delete("/notas/".concat(t.id)).then((function(){o.notas.splice(n,1)}))},cancelarEdicion:function(){this.modoEditar=!1,this.nota={nombre:"",descripcion:""}}}},e=o("KHd+"),i=Object(e.a)(a,(function(){var t=this,n=t.$createElement,o=t._self._c||n;return o("div",[t.modoEditar?o("form",{on:{submit:function(n){return n.preventDefault(),t.editarNota(t.nota)}}},[o("h3",[t._v("Editar nota")]),t._v(" "),o("input",{directives:[{name:"model",rawName:"v-model",value:t.nota.nombre,expression:"nota.nombre"}],staticClass:"form-control mb-2",attrs:{type:"text",placeholder:"Nombre de la nota"},domProps:{value:t.nota.nombre},on:{input:function(n){n.target.composing||t.$set(t.nota,"nombre",n.target.value)}}}),t._v(" "),o("input",{directives:[{name:"model",rawName:"v-model",value:t.nota.descripcion,expression:"nota.descripcion"}],staticClass:"form-control mb-2",attrs:{type:"text",placeholder:"Descripción de la nota"},domProps:{value:t.nota.descripcion},on:{input:function(n){n.target.composing||t.$set(t.nota,"descripcion",n.target.value)}}}),t._v(" "),o("button",{staticClass:"btn btn-warning",attrs:{type:"submit"}},[t._v("Editar")]),t._v(" "),o("button",{staticClass:"btn btn-danger",attrs:{type:"submit"},on:{click:t.cancelarEdicion}},[t._v("Cancelar")])]):o("form",{on:{submit:function(n){return n.preventDefault(),t.agregar(n)}}},[o("h3",[t._v("Agregar nota")]),t._v(" "),o("input",{directives:[{name:"model",rawName:"v-model",value:t.nota.nombre,expression:"nota.nombre"}],staticClass:"form-control mb-2",attrs:{type:"text",placeholder:"Nombre de la nota"},domProps:{value:t.nota.nombre},on:{input:function(n){n.target.composing||t.$set(t.nota,"nombre",n.target.value)}}}),t._v(" "),o("input",{directives:[{name:"model",rawName:"v-model",value:t.nota.descripcion,expression:"nota.descripcion"}],staticClass:"form-control mb-2",attrs:{type:"text",placeholder:"Descripción de la nota"},domProps:{value:t.nota.descripcion},on:{input:function(n){n.target.composing||t.$set(t.nota,"descripcion",n.target.value)}}}),t._v(" "),o("button",{staticClass:"btn btn-primary",attrs:{type:"submit"}},[t._v("Agregar")])]),t._v(" "),o("hr"),t._v(" "),o("h3",[t._v("Lista de notas:")]),t._v(" "),o("ul",{staticClass:"list-group"},t._l(t.notas,(function(n,a){return o("li",{key:a,staticClass:"list-group-item"},[o("span",{staticClass:"badge badge-primary float-right"},[t._v("\n          "+t._s(n.updated_at)+"\n        ")]),t._v(" "),o("p",[t._v(t._s(n.nombre))]),t._v(" "),o("p",[t._v(t._s(n.descripcion))]),t._v(" "),o("p",[o("button",{staticClass:"btn btn-warning btn-sm",on:{click:function(o){return t.editarFormulario(n)}}},[t._v("Editar")]),t._v(" "),o("button",{staticClass:"btn btn-danger btn-sm",on:{click:function(o){return t.eliminarNota(n,a)}}},[t._v("Eliminar")])])])})),0)])}),[],!1,null,null,null);n.default=i.exports}}]);