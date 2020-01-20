<?

	Coordinador OAC (Coac)
	Presidente (P)
	Prensa (Pr)
	Analista de Soporte Técnico (Ast)
	Directores (D)
	Trabajador (T)
///////////////////////////////// CONSOLA INSTALACIÓN
	npm run watch
	//Instalacion de laravel
	composer require laravel/ui --dev
	php artisan ui vue --auth
	npm install && npm run dev


	npm install vue-tables-2
        "vue-tables-2": "^1.4.70",
        composer require elibyy/tcpdf-laravel

	//formularios con numerador	
	// FALLA CON LARAVEL NO INSTALAR
	// npm install vue-form-wizard

/////////////////////


/////////////////////////////// SISTEMA OAC

	//Selección de ubicación
	php artisan make:model Estado -m //Estado         State
	php artisan make:model Municipio -m //Municipio   municipality
	php artisan make:model Parroquia -m //Parroquia   parish


	//Selección de caracteristicas
	php artisan make:model Type_request -m //tipo de requerimiento
	php artisan make:model Type_institution -m //tipo de institucion 
	php artisan make:model State -m //estado de solicitud 



	//
	php artisan make:model Request -m //solicitud



	// por instalar

	php artisan make:model Register_team -m //Registrar Equipos 

	php artisan make:model Register_activity -m //Registrar Actividades 

	php artisan make:model Generate_report -m //Generar Reportes 




////////////// SE CREA EL SEEDER CON EL CONTENIDO DE ESTADO MUNICIPIO Y PARROQUIA

	php artisan make:seeder EstadoTableSeeder
 Y LOS DEMAS SEEDER 


/////////// SE CREA EL CONTROLADOR 

	php artisan make:controller RequestController --resource





	// CREAR VISTA PARA AAGREGAR MAS TIPOS DE INSTITUCIONES



	php artisan make:model Roll -m










///////////////////////////// IWS


	//Selección de ubicación
	php artisan make:model Estado -m //Estado         State
	php artisan make:model Municipio -m //Municipio   municipality
	php artisan make:model Parroquia -m //Parroquia   parish


	//Selección de Auto
	php artisan make:model Uso -m //Uso         Use
	php artisan make:model Marca -m //Marca   Marca
	php artisan make:model Modelo -m //Modelo   Modelo



	php artisan make:seeder EstadoTableSeeder
	php artisan make:seeder AutomovilTableSeeder








// hacer migraciones en base de datos
	php artisan migrate
