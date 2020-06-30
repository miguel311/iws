/**
*--------------------------------------------------------------------------
* Shared Scripts
*--------------------------------------------------------------------------
*
* Scripts compartidos para ser requeridos por módulos externos al núcleo de la aplicación
*/

/** Requerimiento del paquete vue-table-2 para la representación de consultas en tablas con vue */
import {ServerTable, ClientTable, Event} from 'vue-tables-2';

Vue.use(ClientTable, ServerTable);

/** Requerimiento del paquete sweetalert2 para la representación de mensajes de alerta */
import Swal from 'sweetalert2';

/** Requerimiento del paquete vue-form-wizard para la representación de formularios de múltiples pasos */
import VueFormWizard from 'vue-form-wizard';
import 'vue-form-wizard/dist/vue-form-wizard.min.css';

Vue.use(VueFormWizard);