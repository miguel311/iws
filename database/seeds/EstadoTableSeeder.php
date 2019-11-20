<?php

use Illuminate\Database\Seeder;
use App\Estado;
use App\Municipio;
use App\Parroquia;


class EstadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
public function run()
	{

		/* ESTADOS */
		$categoria = new Estado();
		$categoria->id = 1; 
		$categoria->estado = "Amazonas"; 
		$categoria->save();

		$categoria = new Estado();
		$categoria->id = 2; 
		$categoria->estado = "Anzoátegui"; 
		$categoria->save();

		$categoria = new Estado();
		$categoria->id = 3; 
		$categoria->estado = "Apure"; 
		$categoria->save();

		$categoria = new Estado();
		$categoria->id = 4; 
		$categoria->estado = "Aragua"; 
		$categoria->save();

		$categoria = new Estado();
		$categoria->id = 5; 
		$categoria->estado = "Barinas"; 
		$categoria->save();

		$categoria = new Estado();
		$categoria->id = 6; 
		$categoria->estado = "Bolívar"; 
		$categoria->save();

		$categoria = new Estado();
		$categoria->id = 7; 
		$categoria->estado = "Carabobo"; 
		$categoria->save();

		$categoria = new Estado();
		$categoria->id = 8; 
		$categoria->estado = "Cojedes"; 
		$categoria->save();

		$categoria = new Estado();
		$categoria->id = 9; 
		$categoria->estado = "Delta Amacuro"; 
		$categoria->save();

		$categoria = new Estado();
		$categoria->id = 10; 
		$categoria->estado = "Falcón"; 
		$categoria->save();

		$categoria = new Estado();
		$categoria->id = 11; 
		$categoria->estado = "Guárico"; 
		$categoria->save();

		$categoria = new Estado();
		$categoria->id = 12; 
		$categoria->estado = "Lara"; 
		$categoria->save();

		$categoria = new Estado();
		$categoria->id = 13; 
		$categoria->estado = "Mérida";
		$categoria->save();

		$categoria = new Estado();
		$categoria->id = 14; 
		$categoria->estado = "Miranda"; 
		$categoria->save();

		$categoria = new Estado();
		$categoria->id = 15; 
		$categoria->estado = "Monagas"; 
		$categoria->save();

		$categoria = new Estado();
		$categoria->id = 16; 
		$categoria->estado = "Nueva Esparta"; 
		$categoria->save();

		$categoria = new Estado();
		$categoria->id = 17; 
		$categoria->estado = "Portuguesa"; 
		$categoria->save();

		$categoria = new Estado();
		$categoria->id = 18; 
		$categoria->estado = "Sucre"; 
		$categoria->save();

		$categoria = new Estado();
		$categoria->id = 19; 
		$categoria->estado = "Táchira"; 
		$categoria->save();

		$categoria = new Estado();
		$categoria->id = 20; 
		$categoria->estado = "Trujillo"; 
		$categoria->save();

		$categoria = new Estado();
		$categoria->id = 21; 
		$categoria->estado = "Vargas"; 
		$categoria->save();

		$categoria = new Estado();
		$categoria->id = 22; 
		$categoria->estado = "Yaracuy"; 
		$categoria->save();

		$categoria = new Estado();
		$categoria->id = 23; 
		$categoria->estado = "Zulia"; 
		$categoria->save();

		$categoria = new Estado();
		$categoria->id = 24; 
		$categoria->estado = "Distrito Capital"; 
		$categoria->save();

		$categoria = new Estado();
		$categoria->id = 25; 
		$categoria->estado = "Dependencias Federales"; 
		$categoria->save();




		/* MUNICIPIOS */
		$categoria = new Municipio();
		$categoria->id = 1; 
		$categoria->estado_id = 1; 
		$categoria->municipio = "Alto Orinoco";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 2; 
		$categoria->estado_id = 1; 
		$categoria->municipio = "Atabapo";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 3; 
		$categoria->estado_id = 1; 
		$categoria->municipio = "Atures";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 4; 
		$categoria->estado_id = 1; 
		$categoria->municipio = "Autana";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 5; 
		$categoria->estado_id = 1; 
		$categoria->municipio = "Manapiare";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 6; 
		$categoria->estado_id = 1; 
		$categoria->municipio = "Maroa";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 7; 
		$categoria->estado_id = 1; 
		$categoria->municipio = "Río Negro";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 8; 
		$categoria->estado_id = 2; 
		$categoria->municipio = "Anaco";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 9; 
		$categoria->estado_id = 2; 
		$categoria->municipio = "Aragua";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 10; 
		$categoria->estado_id = 2; 
		$categoria->municipio = "Manuel Ezequiel Bruzual";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 11; 
		$categoria->estado_id = 2; 
		$categoria->municipio = "Diego Bautista Urbaneja";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 12; 
		$categoria->estado_id = 2; 
		$categoria->municipio = "Fernando Peñalver";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 13; 
		$categoria->estado_id = 2; 
		$categoria->municipio = "Francisco Del Carmen Carvajal";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 14; 
		$categoria->estado_id = 2; 
		$categoria->municipio = "General Sir Arthur McGregor";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 15; 
		$categoria->estado_id = 2; 
		$categoria->municipio = "Guanta";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 16; 
		$categoria->estado_id = 2; 
		$categoria->municipio = "Independencia";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 17; 
		$categoria->estado_id = 2; 
		$categoria->municipio = "José Gregorio Monagas";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 18; 
		$categoria->estado_id = 2; 
		$categoria->municipio = "Juan Antonio Sotillo";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 19; 
		$categoria->estado_id = 2; 
		$categoria->municipio = "Juan Manuel Cajigal";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 20; 
		$categoria->estado_id = 2; 
		$categoria->municipio = "Libertad";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 21; 
		$categoria->estado_id = 2; 
		$categoria->municipio = "Francisco de Miranda";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 22; 
		$categoria->estado_id = 2; 
		$categoria->municipio = "Pedro María Freites";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 23; 
		$categoria->estado_id = 2; 
		$categoria->municipio = "Píritu";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 24; 
		$categoria->estado_id = 2; 
		$categoria->municipio = "San José de Guanipa";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 25; 
		$categoria->estado_id = 2; 
		$categoria->municipio = "San Juan de Capistrano";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 26; 
		$categoria->estado_id = 2; 
		$categoria->municipio = "Santa Ana";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 27; 
		$categoria->estado_id = 2; 
		$categoria->municipio = "Simón Bolívar";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 28; 
		$categoria->estado_id = 2; 
		$categoria->municipio = "Simón Rodríguez";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 29; 
		$categoria->estado_id = 3; 
		$categoria->municipio = "Achaguas";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 30; 
		$categoria->estado_id = 3; 
		$categoria->municipio = "Biruaca";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 31; 
		$categoria->estado_id = 3; 
		$categoria->municipio = "Muñóz";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 32; 
		$categoria->estado_id = 3; 
		$categoria->municipio = "Páez";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 33; 
		$categoria->estado_id = 3; 
		$categoria->municipio = "Pedro Camejo";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 34; 
		$categoria->estado_id = 3; 
		$categoria->municipio = "Rómulo Gallegos";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 35; 
		$categoria->estado_id = 3; 
		$categoria->municipio = "San Fernando";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 36; 
		$categoria->estado_id = 4; 
		$categoria->municipio = "Atanasio Girardot";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 37; 
		$categoria->estado_id = 4; 
		$categoria->municipio = "Bolívar";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 38; 
		$categoria->estado_id = 4; 
		$categoria->municipio = "Camatagua";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 39; 
		$categoria->estado_id = 4; 
		$categoria->municipio = "Francisco Linares Alcántara";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 40; 
		$categoria->estado_id = 4; 
		$categoria->municipio = "José Ángel Lamas";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 41; 
		$categoria->estado_id = 4; 
		$categoria->municipio = "José Félix Ribas";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 42; 
		$categoria->estado_id = 4; 
		$categoria->municipio = "José Rafael Revenga";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 43; 
		$categoria->estado_id = 4; 
		$categoria->municipio = "Libertador";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 44; 
		$categoria->estado_id = 4; 
		$categoria->municipio = "Mario Briceño Iragorry";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 45; 
		$categoria->estado_id = 4; 
		$categoria->municipio = "Ocumare de la Costa de Oro";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 46; 
		$categoria->estado_id = 4; 
		$categoria->municipio = "San Casimiro";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 47; 
		$categoria->estado_id = 4; 
		$categoria->municipio = "San Sebastián";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 48; 
		$categoria->estado_id = 4; 
		$categoria->municipio = "Santiago Mariño";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 49; 
		$categoria->estado_id = 4; 
		$categoria->municipio = "Santos Michelena";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 50; 
		$categoria->estado_id = 4; 
		$categoria->municipio = "Sucre";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 51; 
		$categoria->estado_id = 4; 
		$categoria->municipio = "Tovar";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 52; 
		$categoria->estado_id = 4; 
		$categoria->municipio = "Urdaneta";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 53; 
		$categoria->estado_id = 4; 
		$categoria->municipio = "Zamora";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 54; 
		$categoria->estado_id = 5; 
		$categoria->municipio = "Alberto Arvelo Torrealba";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 55; 
		$categoria->estado_id = 5; 
		$categoria->municipio = "Andrés Eloy Blanco";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 56; 
		$categoria->estado_id = 5; 
		$categoria->municipio = "Antonio José de Sucre";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 57; 
		$categoria->estado_id = 5; 
		$categoria->municipio = "Arismendi";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 58; 
		$categoria->estado_id = 5; 
		$categoria->municipio = "Barinas";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 59; 
		$categoria->estado_id = 5; 
		$categoria->municipio = "Bolívar";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 60; 
		$categoria->estado_id = 5; 
		$categoria->municipio = "Cruz Paredes";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 61; 
		$categoria->estado_id = 5; 
		$categoria->municipio = "Ezequiel Zamora";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 62; 
		$categoria->estado_id = 5; 
		$categoria->municipio = "Obispos";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 63; 
		$categoria->estado_id = 5; 
		$categoria->municipio = "Pedraza";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 64; 
		$categoria->estado_id = 5; 
		$categoria->municipio = "Rojas";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 65; 
		$categoria->estado_id = 5; 
		$categoria->municipio = "Sosa";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 66; 
		$categoria->estado_id = 6; 
		$categoria->municipio = "Caroní";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 67; 
		$categoria->estado_id = 6; 
		$categoria->municipio = "Cedeño";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 68; 
		$categoria->estado_id = 6; 
		$categoria->municipio = "El Callao";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 69; 
		$categoria->estado_id = 6; 
		$categoria->municipio = "Gran Sabana";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 70; 
		$categoria->estado_id = 6; 
		$categoria->municipio = "Heres";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 71; 
		$categoria->estado_id = 6; 
		$categoria->municipio = "Piar";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 72; 
		$categoria->estado_id = 6; 
		$categoria->municipio = "Angostura (Raúl Leoni)";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 73; 
		$categoria->estado_id = 6; 
		$categoria->municipio = "Roscio";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 74; 
		$categoria->estado_id = 6; 
		$categoria->municipio = "Sifontes";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 75; 
		$categoria->estado_id = 6; 
		$categoria->municipio = "Sucre";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 76; 
		$categoria->estado_id = 6; 
		$categoria->municipio = "Padre Pedro Chien";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 77; 
		$categoria->estado_id = 7; 
		$categoria->municipio = "Bejuma";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 78; 
		$categoria->estado_id = 7; 
		$categoria->municipio = "Carlos Arvelo";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 79; 
		$categoria->estado_id = 7; 
		$categoria->municipio = "Diego Ibarra";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 80; 
		$categoria->estado_id = 7; 
		$categoria->municipio = "Guacara";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 81; 
		$categoria->estado_id = 7; 
		$categoria->municipio = "Juan José Mora";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 82; 
		$categoria->estado_id = 7; 
		$categoria->municipio = "Libertador";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 83; 
		$categoria->estado_id = 7; 
		$categoria->municipio = "Los Guayos";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 84; 
		$categoria->estado_id = 7; 
		$categoria->municipio = "Miranda";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 85; 
		$categoria->estado_id = 7; 
		$categoria->municipio = "Montalbán";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 86; 
		$categoria->estado_id = 7; 
		$categoria->municipio = "Naguanagua";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 87; 
		$categoria->estado_id = 7; 
		$categoria->municipio = "Puerto Cabello";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 88; 
		$categoria->estado_id = 7; 
		$categoria->municipio = "San Diego";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 89; 
		$categoria->estado_id = 7; 
		$categoria->municipio = "San Joaquín";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 90; 
		$categoria->estado_id = 7; 
		$categoria->municipio = "Valencia";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 91; 
		$categoria->estado_id = 8; 
		$categoria->municipio = "Anzoátegui";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 92; 
		$categoria->estado_id = 8; 
		$categoria->municipio = "Tinaquillo";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 93; 
		$categoria->estado_id = 8; 
		$categoria->municipio = "Girardot";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 94; 
		$categoria->estado_id = 8; 
		$categoria->municipio = "Lima Blanco";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 95; 
		$categoria->estado_id = 8; 
		$categoria->municipio = "Pao de San Juan Bautista";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 96; 
		$categoria->estado_id = 8; 
		$categoria->municipio = "Ricaurte";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 97; 
		$categoria->estado_id = 8; 
		$categoria->municipio = "Rómulo Gallegos";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 98; 
		$categoria->estado_id = 8; 
		$categoria->municipio = "San Carlos";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 99; 
		$categoria->estado_id = 8; 
		$categoria->municipio = "Tinaco";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 100; 
		$categoria->estado_id = 9; 
		$categoria->municipio = "Antonio Díaz";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 101; 
		$categoria->estado_id = 9; 
		$categoria->municipio = "Casacoima";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 102; 
		$categoria->estado_id = 9; 
		$categoria->municipio = "Pedernales";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 103; 
		$categoria->estado_id = 9; 
		$categoria->municipio = "Tucupita";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 104; 
		$categoria->estado_id = 10; 
		$categoria->municipio = "Acosta";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 105; 
		$categoria->estado_id = 10; 
		$categoria->municipio = "Bolívar";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 106; 
		$categoria->estado_id = 10; 
		$categoria->municipio = "Buchivacoa";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 107; 
		$categoria->estado_id = 10; 
		$categoria->municipio = "Cacique Manaure";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 108; 
		$categoria->estado_id = 10; 
		$categoria->municipio = "Carirubana";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 109; 
		$categoria->estado_id = 10; 
		$categoria->municipio = "Colina";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 110; 
		$categoria->estado_id = 10; 
		$categoria->municipio = "Dabajuro";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 111; 
		$categoria->estado_id = 10; 
		$categoria->municipio = "Democracia";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 112; 
		$categoria->estado_id = 10; 
		$categoria->municipio = "Falcón";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 113; 
		$categoria->estado_id = 10; 
		$categoria->municipio = "Federación";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 114; 
		$categoria->estado_id = 10; 
		$categoria->municipio = "Jacura";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 115; 
		$categoria->estado_id = 10; 
		$categoria->municipio = "José Laurencio Silva";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 116; 
		$categoria->estado_id = 10; 
		$categoria->municipio = "Los Taques";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 117; 
		$categoria->estado_id = 10; 
		$categoria->municipio = "Mauroa";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 118; 
		$categoria->estado_id = 10; 
		$categoria->municipio = "Miranda";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 119; 
		$categoria->estado_id = 10; 
		$categoria->municipio = "Monseñor Iturriza";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 120; 
		$categoria->estado_id = 10; 
		$categoria->municipio = "Palmasola";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 121; 
		$categoria->estado_id = 10; 
		$categoria->municipio = "Petit";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 122; 
		$categoria->estado_id = 10; 
		$categoria->municipio = "Píritu";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 123; 
		$categoria->estado_id = 10; 
		$categoria->municipio = "San Francisco";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 124; 
		$categoria->estado_id = 10; 
		$categoria->municipio = "Sucre";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 125; 
		$categoria->estado_id = 10; 
		$categoria->municipio = "Tocópero";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 126; 
		$categoria->estado_id = 10; 
		$categoria->municipio = "Unión";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 127; 
		$categoria->estado_id = 10; 
		$categoria->municipio = "Urumaco";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 128; 
		$categoria->estado_id = 10; 
		$categoria->municipio = "Zamora";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 129; 
		$categoria->estado_id = 11; 
		$categoria->municipio = "Camaguán";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 130; 
		$categoria->estado_id = 11; 
		$categoria->municipio = "Chaguaramas";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 131; 
		$categoria->estado_id = 11; 
		$categoria->municipio = "El Socorro";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 132; 
		$categoria->estado_id = 11; 
		$categoria->municipio = "José Félix Ribas";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 133; 
		$categoria->estado_id = 11; 
		$categoria->municipio = "José Tadeo Monagas";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 134; 
		$categoria->estado_id = 11; 
		$categoria->municipio = "Juan Germán Roscio";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 135; 
		$categoria->estado_id = 11; 
		$categoria->municipio = "Julián Mellado";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 136; 
		$categoria->estado_id = 11; 
		$categoria->municipio = "Las Mercedes";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 137; 
		$categoria->estado_id = 11; 
		$categoria->municipio = "Leonardo Infante";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 138; 
		$categoria->estado_id = 11; 
		$categoria->municipio = "Pedro Zaraza";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 139; 
		$categoria->estado_id = 11; 
		$categoria->municipio = "Ortíz";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 140; 
		$categoria->estado_id = 11; 
		$categoria->municipio = "San Gerónimo de Guayabal";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 141; 
		$categoria->estado_id = 11; 
		$categoria->municipio = "San José de Guaribe";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 142; 
		$categoria->estado_id = 11; 
		$categoria->municipio = "Santa María de Ipire";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 143; 
		$categoria->estado_id = 11; 
		$categoria->municipio = "Sebastián Francisco de Miranda";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 144; 
		$categoria->estado_id = 12; 
		$categoria->municipio = "Andrés Eloy Blanco";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 145; 
		$categoria->estado_id = 12; 
		$categoria->municipio = "Crespo";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 146; 
		$categoria->estado_id = 12; 
		$categoria->municipio = "Iribarren";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 147; 
		$categoria->estado_id = 12; 
		$categoria->municipio = "Jiménez";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 148; 
		$categoria->estado_id = 12; 
		$categoria->municipio = "Morán";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 149; 
		$categoria->estado_id = 12; 
		$categoria->municipio = "Palavecino";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 150; 
		$categoria->estado_id = 12; 
		$categoria->municipio = "Simón Planas";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 151; 
		$categoria->estado_id = 12; 
		$categoria->municipio = "Torres";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 152; 
		$categoria->estado_id = 12; 
		$categoria->municipio = "Urdaneta";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 179; 
		$categoria->estado_id = 13; 
		$categoria->municipio = "Alberto Adriani";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 180; 
		$categoria->estado_id = 13; 
		$categoria->municipio = "Andrés Bello";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 181; 
		$categoria->estado_id = 13; 
		$categoria->municipio = "Antonio Pinto Salinas";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 182; 
		$categoria->estado_id = 13; 
		$categoria->municipio = "Aricagua";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 183; 
		$categoria->estado_id = 13; 
		$categoria->municipio = "Arzobispo Chacón";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 184; 
		$categoria->estado_id = 13; 
		$categoria->municipio = "Campo Elías";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 185; 
		$categoria->estado_id = 13; 
		$categoria->municipio = "Caracciolo Parra Olmedo";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 186; 
		$categoria->estado_id = 13; 
		$categoria->municipio = "Cardenal Quintero";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 187; 
		$categoria->estado_id = 13; 
		$categoria->municipio = "Guaraque";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 188; 
		$categoria->estado_id = 13; 
		$categoria->municipio = "Julio César Salas";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 189; 
		$categoria->estado_id = 13; 
		$categoria->municipio = "Justo Briceño";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 190; 
		$categoria->estado_id = 13; 
		$categoria->municipio = "Libertador";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 191; 
		$categoria->estado_id = 13; 
		$categoria->municipio = "Miranda";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 192; 
		$categoria->estado_id = 13; 
		$categoria->municipio = "Obispo Ramos de Lora";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 193; 
		$categoria->estado_id = 13; 
		$categoria->municipio = "Padre Noguera";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 194; 
		$categoria->estado_id = 13; 
		$categoria->municipio = "Pueblo Llano";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 195; 
		$categoria->estado_id = 13; 
		$categoria->municipio = "Rangel";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 196; 
		$categoria->estado_id = 13; 
		$categoria->municipio = "Rivas Dávila";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 197; 
		$categoria->estado_id = 13; 
		$categoria->municipio = "Santos Marquina";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 198; 
		$categoria->estado_id = 13; 
		$categoria->municipio = "Sucre";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 199; 
		$categoria->estado_id = 13; 
		$categoria->municipio = "Tovar";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 200; 
		$categoria->estado_id = 13; 
		$categoria->municipio = "Tulio Febres Cordero";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 201; 
		$categoria->estado_id = 13; 
		$categoria->municipio = "Zea";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 223; 
		$categoria->estado_id = 14; 
		$categoria->municipio = "Acevedo";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 224; 
		$categoria->estado_id = 14; 
		$categoria->municipio = "Andrés Bello";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 225; 
		$categoria->estado_id = 14; 
		$categoria->municipio = "Baruta";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 226; 
		$categoria->estado_id = 14; 
		$categoria->municipio = "Brión";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 227; 
		$categoria->estado_id = 14; 
		$categoria->municipio = "Buroz";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 228; 
		$categoria->estado_id = 14; 
		$categoria->municipio = "Carrizal";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 229; 
		$categoria->estado_id = 14; 
		$categoria->municipio = "Chacao";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 230; 
		$categoria->estado_id = 14; 
		$categoria->municipio = "Cristóbal Rojas";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 231; 
		$categoria->estado_id = 14; 
		$categoria->municipio = "El Hatillo";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 232; 
		$categoria->estado_id = 14; 
		$categoria->municipio = "Guaicaipuro";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 233; 
		$categoria->estado_id = 14; 
		$categoria->municipio = "Independencia";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 234; 
		$categoria->estado_id = 14; 
		$categoria->municipio = "Lander";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 235; 
		$categoria->estado_id = 14; 
		$categoria->municipio = "Los Salias";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 236; 
		$categoria->estado_id = 14; 
		$categoria->municipio = "Páez";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 237; 
		$categoria->estado_id = 14; 
		$categoria->municipio = "Paz Castillo";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 238; 
		$categoria->estado_id = 14; 
		$categoria->municipio = "Pedro Gual";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 239; 
		$categoria->estado_id = 14; 
		$categoria->municipio = "Plaza";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 240; 
		$categoria->estado_id = 14; 
		$categoria->municipio = "Simón Bolívar";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 241; 
		$categoria->estado_id = 14; 
		$categoria->municipio = "Sucre";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 242; 
		$categoria->estado_id = 14; 
		$categoria->municipio = "Urdaneta";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 243; 
		$categoria->estado_id = 14; 
		$categoria->municipio = "Zamora";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 258; 
		$categoria->estado_id = 15; 
		$categoria->municipio = "Acosta";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 259; 
		$categoria->estado_id = 15; 
		$categoria->municipio = "Aguasay";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 260; 
		$categoria->estado_id = 15; 
		$categoria->municipio = "Bolívar";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 261; 
		$categoria->estado_id = 15; 
		$categoria->municipio = "Caripe";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 262; 
		$categoria->estado_id = 15; 
		$categoria->municipio = "Cedeño";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 263; 
		$categoria->estado_id = 15; 
		$categoria->municipio = "Ezequiel Zamora";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 264; 
		$categoria->estado_id = 15; 
		$categoria->municipio = "Libertador";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 265; 
		$categoria->estado_id = 15; 
		$categoria->municipio = "Maturín";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 266; 
		$categoria->estado_id = 15; 
		$categoria->municipio = "Piar";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 267; 
		$categoria->estado_id = 15; 
		$categoria->municipio = "Punceres";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 268; 
		$categoria->estado_id = 15; 
		$categoria->municipio = "Santa Bárbara";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 269; 
		$categoria->estado_id = 15; 
		$categoria->municipio = "Sotillo";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 270; 
		$categoria->estado_id = 15; 
		$categoria->municipio = "Uracoa";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 271; 
		$categoria->estado_id = 16; 
		$categoria->municipio = "Antolín del Campo";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 272; 
		$categoria->estado_id = 16; 
		$categoria->municipio = "Arismendi";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 273; 
		$categoria->estado_id = 16; 
		$categoria->municipio = "García";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 274; 
		$categoria->estado_id = 16; 
		$categoria->municipio = "Gómez";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 275; 
		$categoria->estado_id = 16; 
		$categoria->municipio = "Maneiro";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 276; 
		$categoria->estado_id = 16; 
		$categoria->municipio = "Marcano";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 277; 
		$categoria->estado_id = 16; 
		$categoria->municipio = "Mariño";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 278; 
		$categoria->estado_id = 16; 
		$categoria->municipio = "Península de Macanao";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 279; 
		$categoria->estado_id = 16; 
		$categoria->municipio = "Tubores";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 280; 
		$categoria->estado_id = 16; 
		$categoria->municipio = "Villalba";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 281; 
		$categoria->estado_id = 16; 
		$categoria->municipio = "Díaz";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 282; 
		$categoria->estado_id = 17; 
		$categoria->municipio = "Agua Blanca";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 283; 
		$categoria->estado_id = 17; 
		$categoria->municipio = "Araure";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 284; 
		$categoria->estado_id = 17; 
		$categoria->municipio = "Esteller";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 285; 
		$categoria->estado_id = 17; 
		$categoria->municipio = "Guanare";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 286; 
		$categoria->estado_id = 17; 
		$categoria->municipio = "Guanarito";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 287; 
		$categoria->estado_id = 17; 
		$categoria->municipio = "Monseñor José Vicente de Unda";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 288; 
		$categoria->estado_id = 17; 
		$categoria->municipio = "Ospino";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 289; 
		$categoria->estado_id = 17; 
		$categoria->municipio = "Páez";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 290; 
		$categoria->estado_id = 17; 
		$categoria->municipio = "Papelón";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 291; 
		$categoria->estado_id = 17; 
		$categoria->municipio = "San Genaro de Boconoíto";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 292; 
		$categoria->estado_id = 17; 
		$categoria->municipio = "San Rafael de Onoto";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 293; 
		$categoria->estado_id = 17; 
		$categoria->municipio = "Santa Rosalía";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 294; 
		$categoria->estado_id = 17; 
		$categoria->municipio = "Sucre";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 295; 
		$categoria->estado_id = 17; 
		$categoria->municipio = "Turén";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 296; 
		$categoria->estado_id = 18; 
		$categoria->municipio = "Andrés Eloy Blanco";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 297; 
		$categoria->estado_id = 18; 
		$categoria->municipio = "Andrés Mata";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 298; 
		$categoria->estado_id = 18; 
		$categoria->municipio = "Arismendi";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 299; 
		$categoria->estado_id = 18; 
		$categoria->municipio = "Benítez";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 300; 
		$categoria->estado_id = 18; 
		$categoria->municipio = "Bermúdez";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 301; 
		$categoria->estado_id = 18; 
		$categoria->municipio = "Bolívar";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 302; 
		$categoria->estado_id = 18; 
		$categoria->municipio = "Cajigal";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 303; 
		$categoria->estado_id = 18; 
		$categoria->municipio = "Cruz Salmerón Acosta";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 304; 
		$categoria->estado_id = 18; 
		$categoria->municipio = "Libertador";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 305; 
		$categoria->estado_id = 18; 
		$categoria->municipio = "Mariño";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 306; 
		$categoria->estado_id = 18; 
		$categoria->municipio = "Mejía";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 307; 
		$categoria->estado_id = 18; 
		$categoria->municipio = "Montes";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 308; 
		$categoria->estado_id = 18; 
		$categoria->municipio = "Ribero";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 309; 
		$categoria->estado_id = 18; 
		$categoria->municipio = "Sucre";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 310; 
		$categoria->estado_id = 18; 
		$categoria->municipio = "Valdéz";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 341; 
		$categoria->estado_id = 19; 
		$categoria->municipio = "Andrés Bello";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 342; 
		$categoria->estado_id = 19; 
		$categoria->municipio = "Antonio Rómulo Costa";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 343; 
		$categoria->estado_id = 19; 
		$categoria->municipio = "Ayacucho";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 344; 
		$categoria->estado_id = 19; 
		$categoria->municipio = "Bolívar";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 345; 
		$categoria->estado_id = 19; 
		$categoria->municipio = "Cárdenas";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 346; 
		$categoria->estado_id = 19; 
		$categoria->municipio = "Córdoba";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 347; 
		$categoria->estado_id = 19; 
		$categoria->municipio = "Fernández Feo";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 348; 
		$categoria->estado_id = 19; 
		$categoria->municipio = "Francisco de Miranda";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 349; 
		$categoria->estado_id = 19; 
		$categoria->municipio = "García de Hevia";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 350; 
		$categoria->estado_id = 19; 
		$categoria->municipio = "Guásimos";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 351; 
		$categoria->estado_id = 19; 
		$categoria->municipio = "Independencia";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 352; 
		$categoria->estado_id = 19; 
		$categoria->municipio = "Jáuregui";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 353; 
		$categoria->estado_id = 19; 
		$categoria->municipio = "José María Vargas";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 354; 
		$categoria->estado_id = 19; 
		$categoria->municipio = "Junín";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 355; 
		$categoria->estado_id = 19; 
		$categoria->municipio = "Libertad";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 356; 
		$categoria->estado_id = 19; 
		$categoria->municipio = "Libertador";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 357; 
		$categoria->estado_id = 19; 
		$categoria->municipio = "Lobatera";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 358; 
		$categoria->estado_id = 19; 
		$categoria->municipio = "Michelena";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 359; 
		$categoria->estado_id = 19; 
		$categoria->municipio = "Panamericano";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 360; 
		$categoria->estado_id = 19; 
		$categoria->municipio = "Pedro María Ureña";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 361; 
		$categoria->estado_id = 19; 
		$categoria->municipio = "Rafael Urdaneta";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 362; 
		$categoria->estado_id = 19; 
		$categoria->municipio = "Samuel Darío Maldonado";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 363; 
		$categoria->estado_id = 19; 
		$categoria->municipio = "San Cristóbal";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 364; 
		$categoria->estado_id = 19; 
		$categoria->municipio = "Seboruco";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 365; 
		$categoria->estado_id = 19; 
		$categoria->municipio = "Simón Rodríguez";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 366; 
		$categoria->estado_id = 19; 
		$categoria->municipio = "Sucre";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 367; 
		$categoria->estado_id = 19; 
		$categoria->municipio = "Torbes";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 368; 
		$categoria->estado_id = 19; 
		$categoria->municipio = "Uribante";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 369; 
		$categoria->estado_id = 19; 
		$categoria->municipio = "San Judas Tadeo";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 370; 
		$categoria->estado_id = 20; 
		$categoria->municipio = "Andrés Bello";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 371; 
		$categoria->estado_id = 20; 
		$categoria->municipio = "Boconó";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 372; 
		$categoria->estado_id = 20; 
		$categoria->municipio = "Bolívar";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 373; 
		$categoria->estado_id = 20; 
		$categoria->municipio = "Candelaria";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 374; 
		$categoria->estado_id = 20; 
		$categoria->municipio = "Carache";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 375; 
		$categoria->estado_id = 20; 
		$categoria->municipio = "Escuque";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 376; 
		$categoria->estado_id = 20; 
		$categoria->municipio = "José Felipe Márquez Cañizalez";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 377; 
		$categoria->estado_id = 20; 
		$categoria->municipio = "Juan Vicente Campos Elías";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 378; 
		$categoria->estado_id = 20; 
		$categoria->municipio = "La Ceiba";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 379; 
		$categoria->estado_id = 20; 
		$categoria->municipio = "Miranda";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 380; 
		$categoria->estado_id = 20; 
		$categoria->municipio = "Monte Carmelo";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 381; 
		$categoria->estado_id = 20; 
		$categoria->municipio = "Motatán";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 382; 
		$categoria->estado_id = 20; 
		$categoria->municipio = "Pampán";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 383; 
		$categoria->estado_id = 20; 
		$categoria->municipio = "Pampanito";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 384; 
		$categoria->estado_id = 20; 
		$categoria->municipio = "Rafael Rangel";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 385; 
		$categoria->estado_id = 20; 
		$categoria->municipio = "San Rafael de Carvajal";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 386; 
		$categoria->estado_id = 20; 
		$categoria->municipio = "Sucre";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 387; 
		$categoria->estado_id = 20; 
		$categoria->municipio = "Trujillo";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 388; 
		$categoria->estado_id = 20; 
		$categoria->municipio = "Urdaneta";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 389; 
		$categoria->estado_id = 20; 
		$categoria->municipio = "Valera";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 390; 
		$categoria->estado_id = 21; 
		$categoria->municipio = "Vargas";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 391; 
		$categoria->estado_id = 22; 
		$categoria->municipio = "Arístides Bastidas";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 392; 
		$categoria->estado_id = 22; 
		$categoria->municipio = "Bolívar";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 407; 
		$categoria->estado_id = 22; 
		$categoria->municipio = "Bruzual";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 408; 
		$categoria->estado_id = 22; 
		$categoria->municipio = "Cocorote";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 409; 
		$categoria->estado_id = 22; 
		$categoria->municipio = "Independencia";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 410; 
		$categoria->estado_id = 22; 
		$categoria->municipio = "José Antonio Páez";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 411; 
		$categoria->estado_id = 22; 
		$categoria->municipio = "La Trinidad";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 412; 
		$categoria->estado_id = 22; 
		$categoria->municipio = "Manuel Monge";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 413; 
		$categoria->estado_id = 22; 
		$categoria->municipio = "Nirgua";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 414; 
		$categoria->estado_id = 22; 
		$categoria->municipio = "Peña";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 415; 
		$categoria->estado_id = 22; 
		$categoria->municipio = "San Felipe";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 416; 
		$categoria->estado_id = 22; 
		$categoria->municipio = "Sucre";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 417; 
		$categoria->estado_id = 22; 
		$categoria->municipio = "Urachiche";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 418; 
		$categoria->estado_id = 22; 
		$categoria->municipio = "José Joaquín Veroes";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 441; 
		$categoria->estado_id = 23; 
		$categoria->municipio = "Almirante Padilla";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 442; 
		$categoria->estado_id = 23; 
		$categoria->municipio = "Baralt";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 443; 
		$categoria->estado_id = 23; 
		$categoria->municipio = "Cabimas";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 444; 
		$categoria->estado_id = 23; 
		$categoria->municipio = "Catatumbo";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 445; 
		$categoria->estado_id = 23; 
		$categoria->municipio = "Colón";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 446; 
		$categoria->estado_id = 23; 
		$categoria->municipio = "Francisco Javier Pulgar";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 447; 
		$categoria->estado_id = 23; 
		$categoria->municipio = "Páez";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 448; 
		$categoria->estado_id = 23; 
		$categoria->municipio = "Jesús Enrique Losada";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 449; 
		$categoria->estado_id = 23; 
		$categoria->municipio = "Jesús María Semprún";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 450; 
		$categoria->estado_id = 23; 
		$categoria->municipio = "La Cañada de Urdaneta";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 451; 
		$categoria->estado_id = 23; 
		$categoria->municipio = "Lagunillas";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 452; 
		$categoria->estado_id = 23; 
		$categoria->municipio = "Machiques de Perijá";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 453; 
		$categoria->estado_id = 23; 
		$categoria->municipio = "Mara";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 454; 
		$categoria->estado_id = 23; 
		$categoria->municipio = "Maracaibo";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 455; 
		$categoria->estado_id = 23; 
		$categoria->municipio = "Miranda";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 456; 
		$categoria->estado_id = 23; 
		$categoria->municipio = "Rosario de Perijá";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 457; 
		$categoria->estado_id = 23; 
		$categoria->municipio = "San Francisco";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 458; 
		$categoria->estado_id = 23; 
		$categoria->municipio = "Santa Rita";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 459; 
		$categoria->estado_id = 23; 
		$categoria->municipio = "Simón Bolívar";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 460; 
		$categoria->estado_id = 23; 
		$categoria->municipio = "Sucre";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 461; 
		$categoria->estado_id = 23; 
		$categoria->municipio = "Valmore Rodríguez";
		$categoria->save();

		$categoria = new Municipio();
		$categoria->id = 462; 
		$categoria->estado_id = 24; 
		$categoria->municipio = "Libertador";
		$categoria->save();




		/* PARROQUIAS */
		$categoria = new Parroquia();
		$categoria->id = 1; 
		$categoria->municipio_id = 1; 
		$categoria->parroquia = "Alto Orinoco";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 2; 
		$categoria->municipio_id = 1; 
		$categoria->parroquia = "Huachamacare Acanaña";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 3; 
		$categoria->municipio_id = 1; 
		$categoria->parroquia = "Marawaka Toky Shamanaña";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 4; 
		$categoria->municipio_id = 1; 
		$categoria->parroquia = "Mavaka Mavaka";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 5; 
		$categoria->municipio_id = 1; 
		$categoria->parroquia = "Sierra Parima Parimabé";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 6; 
		$categoria->municipio_id = 2; 
		$categoria->parroquia = "Ucata Laja Lisa";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 7; 
		$categoria->municipio_id = 2; 
		$categoria->parroquia = "Yapacana Macuruco";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 8; 
		$categoria->municipio_id = 2; 
		$categoria->parroquia = "Caname Guarinuma";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 9; 
		$categoria->municipio_id = 3; 
		$categoria->parroquia = "Fernando Girón Tovar";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 10; 
		$categoria->municipio_id = 3; 
		$categoria->parroquia = "Luis Alberto Gómez";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 11; 
		$categoria->municipio_id = 3; 
		$categoria->parroquia = "Pahueña Limón de Parhueña";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 12; 
		$categoria->municipio_id = 3; 
		$categoria->parroquia = "Platanillal Platanillal";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 13; 
		$categoria->municipio_id = 4; 
		$categoria->parroquia = "Samariapo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 14; 
		$categoria->municipio_id = 4; 
		$categoria->parroquia = "Sipapo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 15; 
		$categoria->municipio_id = 4; 
		$categoria->parroquia = "Munduapo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 16; 
		$categoria->municipio_id = 4; 
		$categoria->parroquia = "Guayapo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 17; 
		$categoria->municipio_id = 5; 
		$categoria->parroquia = "Alto Ventuari";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 18; 
		$categoria->municipio_id = 5; 
		$categoria->parroquia = "Medio Ventuari";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 19; 
		$categoria->municipio_id = 5; 
		$categoria->parroquia = "Bajo Ventuari";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 20; 
		$categoria->municipio_id = 6; 
		$categoria->parroquia = "Victorino";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 21; 
		$categoria->municipio_id = 6; 
		$categoria->parroquia = "Comunidad";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 22; 
		$categoria->municipio_id = 7; 
		$categoria->parroquia = "Casiquiare";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 23; 
		$categoria->municipio_id = 7; 
		$categoria->parroquia = "Cocuy";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 24; 
		$categoria->municipio_id = 7; 
		$categoria->parroquia = "San Carlos de Río Negro";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 25; 
		$categoria->municipio_id = 7; 
		$categoria->parroquia = "Solano";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 26; 
		$categoria->municipio_id = 8; 
		$categoria->parroquia = "Anaco";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 27; 
		$categoria->municipio_id = 8; 
		$categoria->parroquia = "San Joaquín";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 28; 
		$categoria->municipio_id = 9; 
		$categoria->parroquia = "Cachipo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 29; 
		$categoria->municipio_id = 9; 
		$categoria->parroquia = "Aragua de Barcelona";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 30; 
		$categoria->municipio_id = 11; 
		$categoria->parroquia = "Lechería";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 31; 
		$categoria->municipio_id = 11; 
		$categoria->parroquia = "El Morro";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 32; 
		$categoria->municipio_id = 12; 
		$categoria->parroquia = "Puerto Píritu";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 33; 
		$categoria->municipio_id = 12; 
		$categoria->parroquia = "San Miguel";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 34; 
		$categoria->municipio_id = 12; 
		$categoria->parroquia = "Sucre";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 35; 
		$categoria->municipio_id = 13; 
		$categoria->parroquia = "Valle de Guanape";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 36; 
		$categoria->municipio_id = 13; 
		$categoria->parroquia = "Santa Bárbara";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 37; 
		$categoria->municipio_id = 14; 
		$categoria->parroquia = "El Chaparro";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 38; 
		$categoria->municipio_id = 14; 
		$categoria->parroquia = "Tomás Alfaro";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 39; 
		$categoria->municipio_id = 14; 
		$categoria->parroquia = "Calatrava";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 40; 
		$categoria->municipio_id = 15; 
		$categoria->parroquia = "Guanta";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 41; 
		$categoria->municipio_id = 15; 
		$categoria->parroquia = "Chorrerón";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 42; 
		$categoria->municipio_id = 16; 
		$categoria->parroquia = "Mamo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 43; 
		$categoria->municipio_id = 16; 
		$categoria->parroquia = "Soledad";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 44; 
		$categoria->municipio_id = 17; 
		$categoria->parroquia = "Mapire";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 45; 
		$categoria->municipio_id = 17; 
		$categoria->parroquia = "Piar";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 46; 
		$categoria->municipio_id = 17; 
		$categoria->parroquia = "Santa Clara";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 47; 
		$categoria->municipio_id = 17; 
		$categoria->parroquia = "San Diego de Cabrutica";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 48; 
		$categoria->municipio_id = 17; 
		$categoria->parroquia = "Uverito";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 49; 
		$categoria->municipio_id = 17; 
		$categoria->parroquia = "Zuata";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 50; 
		$categoria->municipio_id = 18; 
		$categoria->parroquia = "Puerto La Cruz";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 51; 
		$categoria->municipio_id = 18; 
		$categoria->parroquia = "Pozuelos";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 52; 
		$categoria->municipio_id = 19; 
		$categoria->parroquia = "Onoto";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 53; 
		$categoria->municipio_id = 19; 
		$categoria->parroquia = "San Pablo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 54; 
		$categoria->municipio_id = 20; 
		$categoria->parroquia = "San Mateo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 55; 
		$categoria->municipio_id = 20; 
		$categoria->parroquia = "El Carito";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 56; 
		$categoria->municipio_id = 20; 
		$categoria->parroquia = "Santa Inés";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 57; 
		$categoria->municipio_id = 20; 
		$categoria->parroquia = "La Romereña";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 58; 
		$categoria->municipio_id = 21; 
		$categoria->parroquia = "Atapirire";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 59; 
		$categoria->municipio_id = 21; 
		$categoria->parroquia = "Boca del Pao";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 60; 
		$categoria->municipio_id = 21; 
		$categoria->parroquia = "El Pao";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 61; 
		$categoria->municipio_id = 21; 
		$categoria->parroquia = "Pariaguán";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 62; 
		$categoria->municipio_id = 22; 
		$categoria->parroquia = "Cantaura";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 63; 
		$categoria->municipio_id = 22; 
		$categoria->parroquia = "Libertador";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 64; 
		$categoria->municipio_id = 22; 
		$categoria->parroquia = "Santa Rosa";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 65; 
		$categoria->municipio_id = 22; 
		$categoria->parroquia = "Urica";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 66; 
		$categoria->municipio_id = 23; 
		$categoria->parroquia = "Píritu";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 67; 
		$categoria->municipio_id = 23; 
		$categoria->parroquia = "San Francisco";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 68; 
		$categoria->municipio_id = 24; 
		$categoria->parroquia = "San José de Guanipa";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 69; 
		$categoria->municipio_id = 25; 
		$categoria->parroquia = "Boca de Uchire";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 70; 
		$categoria->municipio_id = 25; 
		$categoria->parroquia = "Boca de Chávez";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 71; 
		$categoria->municipio_id = 26; 
		$categoria->parroquia = "Pueblo Nuevo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 72; 
		$categoria->municipio_id = 26; 
		$categoria->parroquia = "Santa Ana";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 73; 
		$categoria->municipio_id = 27; 
		$categoria->parroquia = "Bergatín";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 74; 
		$categoria->municipio_id = 27; 
		$categoria->parroquia = "Caigua";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 75; 
		$categoria->municipio_id = 27; 
		$categoria->parroquia = "El Carmen";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 76; 
		$categoria->municipio_id = 27; 
		$categoria->parroquia = "El Pilar";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 77; 
		$categoria->municipio_id = 27; 
		$categoria->parroquia = "Naricual";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 78; 
		$categoria->municipio_id = 27; 
		$categoria->parroquia = "San Crsitóbal";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 79; 
		$categoria->municipio_id = 28; 
		$categoria->parroquia = "Edmundo Barrios";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 80; 
		$categoria->municipio_id = 28; 
		$categoria->parroquia = "Miguel Otero Silva";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 81; 
		$categoria->municipio_id = 29; 
		$categoria->parroquia = "Achaguas";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 82; 
		$categoria->municipio_id = 29; 
		$categoria->parroquia = "Apurito";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 83; 
		$categoria->municipio_id = 29; 
		$categoria->parroquia = "El Yagual";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 84; 
		$categoria->municipio_id = 29; 
		$categoria->parroquia = "Guachara";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 85; 
		$categoria->municipio_id = 29; 
		$categoria->parroquia = "Mucuritas";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 86; 
		$categoria->municipio_id = 29; 
		$categoria->parroquia = "Queseras del medio";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 87; 
		$categoria->municipio_id = 30; 
		$categoria->parroquia = "Biruaca";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 88; 
		$categoria->municipio_id = 31; 
		$categoria->parroquia = "Bruzual";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 89; 
		$categoria->municipio_id = 31; 
		$categoria->parroquia = "Mantecal";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 90; 
		$categoria->municipio_id = 31; 
		$categoria->parroquia = "Quintero";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 91; 
		$categoria->municipio_id = 31; 
		$categoria->parroquia = "Rincón Hondo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 92; 
		$categoria->municipio_id = 31; 
		$categoria->parroquia = "San Vicente";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 93; 
		$categoria->municipio_id = 32; 
		$categoria->parroquia = "Guasdualito";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 94; 
		$categoria->municipio_id = 32; 
		$categoria->parroquia = "Aramendi";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 95; 
		$categoria->municipio_id = 32; 
		$categoria->parroquia = "El Amparo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 96; 
		$categoria->municipio_id = 32; 
		$categoria->parroquia = "San Camilo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 97; 
		$categoria->municipio_id = 32; 
		$categoria->parroquia = "Urdaneta";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 98; 
		$categoria->municipio_id = 33; 
		$categoria->parroquia = "San Juan de Payara";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 99; 
		$categoria->municipio_id = 33; 
		$categoria->parroquia = "Codazzi";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 100; 
		$categoria->municipio_id = 33; 
		$categoria->parroquia = "Cunaviche";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 101; 
		$categoria->municipio_id = 34; 
		$categoria->parroquia = "Elorza";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 102; 
		$categoria->municipio_id = 34; 
		$categoria->parroquia = "La Trinidad";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 103; 
		$categoria->municipio_id = 35; 
		$categoria->parroquia = "San Fernando";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 104; 
		$categoria->municipio_id = 35; 
		$categoria->parroquia = "El Recreo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 105; 
		$categoria->municipio_id = 35; 
		$categoria->parroquia = "Peñalver";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 106; 
		$categoria->municipio_id = 35; 
		$categoria->parroquia = "San Rafael de Atamaica";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 107; 
		$categoria->municipio_id = 36; 
		$categoria->parroquia = "Pedro José Ovalles";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 108; 
		$categoria->municipio_id = 36; 
		$categoria->parroquia = "Joaquín Crespo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 109; 
		$categoria->municipio_id = 36; 
		$categoria->parroquia = "José Casanova Godoy";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 110; 
		$categoria->municipio_id = 36; 
		$categoria->parroquia = "Madre María de San José";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 111; 
		$categoria->municipio_id = 36; 
		$categoria->parroquia = "Andrés Eloy Blanco";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 112; 
		$categoria->municipio_id = 36; 
		$categoria->parroquia = "Los Tacarigua";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 113; 
		$categoria->municipio_id = 36; 
		$categoria->parroquia = "Las Delicias";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 114; 
		$categoria->municipio_id = 36; 
		$categoria->parroquia = "Choroní";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 115; 
		$categoria->municipio_id = 37; 
		$categoria->parroquia = "Bolívar";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 116; 
		$categoria->municipio_id = 38; 
		$categoria->parroquia = "Camatagua";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 117; 
		$categoria->municipio_id = 38; 
		$categoria->parroquia = "Carmen de Cura";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 118; 
		$categoria->municipio_id = 39; 
		$categoria->parroquia = "Santa Rita";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 119; 
		$categoria->municipio_id = 39; 
		$categoria->parroquia = "Francisco de Miranda";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 120; 
		$categoria->municipio_id = 39; 
		$categoria->parroquia = "Moseñor Feliciano González";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 121; 
		$categoria->municipio_id = 40; 
		$categoria->parroquia = "Santa Cruz";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 122; 
		$categoria->municipio_id = 41; 
		$categoria->parroquia = "José Félix Ribas";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 123; 
		$categoria->municipio_id = 41; 
		$categoria->parroquia = "Castor Nieves Ríos";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 124; 
		$categoria->municipio_id = 41; 
		$categoria->parroquia = "Las Guacamayas";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 125; 
		$categoria->municipio_id = 41; 
		$categoria->parroquia = "Pao de Zárate";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 126; 
		$categoria->municipio_id = 41; 
		$categoria->parroquia = "Zuata";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 127; 
		$categoria->municipio_id = 42; 
		$categoria->parroquia = "José Rafael Revenga";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 128; 
		$categoria->municipio_id = 43; 
		$categoria->parroquia = "Palo Negro";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 129; 
		$categoria->municipio_id = 43; 
		$categoria->parroquia = "San Martín de Porres";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 130; 
		$categoria->municipio_id = 44; 
		$categoria->parroquia = "El Limón";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 131; 
		$categoria->municipio_id = 44; 
		$categoria->parroquia = "Caña de Azúcar";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 132; 
		$categoria->municipio_id = 45; 
		$categoria->parroquia = "Ocumare de la Costa";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 133; 
		$categoria->municipio_id = 46; 
		$categoria->parroquia = "San Casimiro";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 134; 
		$categoria->municipio_id = 46; 
		$categoria->parroquia = "Güiripa";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 135; 
		$categoria->municipio_id = 46; 
		$categoria->parroquia = "Ollas de Caramacate";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 136; 
		$categoria->municipio_id = 46; 
		$categoria->parroquia = "Valle Morín";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 137; 
		$categoria->municipio_id = 47; 
		$categoria->parroquia = "San Sebastían";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 138; 
		$categoria->municipio_id = 48; 
		$categoria->parroquia = "Turmero";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 139; 
		$categoria->municipio_id = 48; 
		$categoria->parroquia = "Arevalo Aponte";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 140; 
		$categoria->municipio_id = 48; 
		$categoria->parroquia = "Chuao";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 141; 
		$categoria->municipio_id = 48; 
		$categoria->parroquia = "Samán de Güere";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 142; 
		$categoria->municipio_id = 48; 
		$categoria->parroquia = "Alfredo Pacheco Miranda";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 143; 
		$categoria->municipio_id = 49; 
		$categoria->parroquia = "Santos Michelena";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 144; 
		$categoria->municipio_id = 49; 
		$categoria->parroquia = "Tiara";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 145; 
		$categoria->municipio_id = 50; 
		$categoria->parroquia = "Cagua";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 146; 
		$categoria->municipio_id = 50; 
		$categoria->parroquia = "Bella Vista";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 147; 
		$categoria->municipio_id = 51; 
		$categoria->parroquia = "Tovar";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 148; 
		$categoria->municipio_id = 52; 
		$categoria->parroquia = "Urdaneta";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 149; 
		$categoria->municipio_id = 52; 
		$categoria->parroquia = "Las Peñitas";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 150; 
		$categoria->municipio_id = 52; 
		$categoria->parroquia = "San Francisco de Cara";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 151; 
		$categoria->municipio_id = 52; 
		$categoria->parroquia = "Taguay";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 152; 
		$categoria->municipio_id = 53; 
		$categoria->parroquia = "Zamora";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 153; 
		$categoria->municipio_id = 53; 
		$categoria->parroquia = "Magdaleno";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 154; 
		$categoria->municipio_id = 53; 
		$categoria->parroquia = "San Francisco de Asís";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 155; 
		$categoria->municipio_id = 53; 
		$categoria->parroquia = "Valles de Tucutunemo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 156; 
		$categoria->municipio_id = 53; 
		$categoria->parroquia = "Augusto Mijares";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 157; 
		$categoria->municipio_id = 54; 
		$categoria->parroquia = "Sabaneta";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 158; 
		$categoria->municipio_id = 54; 
		$categoria->parroquia = "Juan Antonio Rodríguez Domínguez";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 159; 
		$categoria->municipio_id = 55; 
		$categoria->parroquia = "El Cantón";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 160; 
		$categoria->municipio_id = 55; 
		$categoria->parroquia = "Santa Cruz de Guacas";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 161; 
		$categoria->municipio_id = 55; 
		$categoria->parroquia = "Puerto Vivas";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 162; 
		$categoria->municipio_id = 56; 
		$categoria->parroquia = "Ticoporo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 163; 
		$categoria->municipio_id = 56; 
		$categoria->parroquia = "Nicolás Pulido";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 164; 
		$categoria->municipio_id = 56; 
		$categoria->parroquia = "Andrés Bello";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 165; 
		$categoria->municipio_id = 57; 
		$categoria->parroquia = "Arismendi";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 166; 
		$categoria->municipio_id = 57; 
		$categoria->parroquia = "Guadarrama";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 167; 
		$categoria->municipio_id = 57; 
		$categoria->parroquia = "La Unión";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 168; 
		$categoria->municipio_id = 57; 
		$categoria->parroquia = "San Antonio";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 169; 
		$categoria->municipio_id = 58; 
		$categoria->parroquia = "Barinas";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 170; 
		$categoria->municipio_id = 58; 
		$categoria->parroquia = "Alberto Arvelo Larriva";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 171; 
		$categoria->municipio_id = 58; 
		$categoria->parroquia = "San Silvestre";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 172; 
		$categoria->municipio_id = 58; 
		$categoria->parroquia = "Santa Inés";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 173; 
		$categoria->municipio_id = 58; 
		$categoria->parroquia = "Santa Lucía";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 174; 
		$categoria->municipio_id = 58; 
		$categoria->parroquia = "Torumos";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 175; 
		$categoria->municipio_id = 58; 
		$categoria->parroquia = "El Carmen";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 176; 
		$categoria->municipio_id = 58; 
		$categoria->parroquia = "Rómulo Betancourt";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 177; 
		$categoria->municipio_id = 58; 
		$categoria->parroquia = "Corazón de Jesús";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 178; 
		$categoria->municipio_id = 58; 
		$categoria->parroquia = "Ramón Ignacio Méndez";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 179; 
		$categoria->municipio_id = 58; 
		$categoria->parroquia = "Alto Barinas";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 180; 
		$categoria->municipio_id = 58; 
		$categoria->parroquia = "Manuel Palacio Fajardo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 181; 
		$categoria->municipio_id = 58; 
		$categoria->parroquia = "Juan Antonio Rodríguez Domínguez";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 182; 
		$categoria->municipio_id = 58; 
		$categoria->parroquia = "Dominga Ortiz de Páez";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 183; 
		$categoria->municipio_id = 59; 
		$categoria->parroquia = "Barinitas";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 184; 
		$categoria->municipio_id = 59; 
		$categoria->parroquia = "Altamira de Cáceres";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 185; 
		$categoria->municipio_id = 59; 
		$categoria->parroquia = "Calderas";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 186; 
		$categoria->municipio_id = 60; 
		$categoria->parroquia = "Barrancas";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 187; 
		$categoria->municipio_id = 60; 
		$categoria->parroquia = "El Socorro";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 188; 
		$categoria->municipio_id = 60; 
		$categoria->parroquia = "Mazparrito";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 189; 
		$categoria->municipio_id = 61; 
		$categoria->parroquia = "Santa Bárbara";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 190; 
		$categoria->municipio_id = 61; 
		$categoria->parroquia = "Pedro Briceño Méndez";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 191; 
		$categoria->municipio_id = 61; 
		$categoria->parroquia = "Ramón Ignacio Méndez";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 192; 
		$categoria->municipio_id = 61; 
		$categoria->parroquia = "José Ignacio del Pumar";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 193; 
		$categoria->municipio_id = 62; 
		$categoria->parroquia = "Obispos";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 194; 
		$categoria->municipio_id = 62; 
		$categoria->parroquia = "Guasimitos";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 195; 
		$categoria->municipio_id = 62; 
		$categoria->parroquia = "El Real";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 196; 
		$categoria->municipio_id = 62; 
		$categoria->parroquia = "La Luz";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 197; 
		$categoria->municipio_id = 63; 
		$categoria->parroquia = "Models\Ciudad Bolívia";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 198; 
		$categoria->municipio_id = 63; 
		$categoria->parroquia = "José Ignacio Briceño";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 199; 
		$categoria->municipio_id = 63; 
		$categoria->parroquia = "José Félix Ribas";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 200; 
		$categoria->municipio_id = 63; 
		$categoria->parroquia = "Páez";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 201; 
		$categoria->municipio_id = 64; 
		$categoria->parroquia = "Libertad";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 202; 
		$categoria->municipio_id = 64; 
		$categoria->parroquia = "Dolores";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 203; 
		$categoria->municipio_id = 64; 
		$categoria->parroquia = "Santa Rosa";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 204; 
		$categoria->municipio_id = 64; 
		$categoria->parroquia = "Palacio Fajardo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 205; 
		$categoria->municipio_id = 65; 
		$categoria->parroquia = "Models\Ciudad de Nutrias";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 206; 
		$categoria->municipio_id = 65; 
		$categoria->parroquia = "El Regalo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 207; 
		$categoria->municipio_id = 65; 
		$categoria->parroquia = "Puerto Nutrias";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 208; 
		$categoria->municipio_id = 65; 
		$categoria->parroquia = "Santa Catalina";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 209; 
		$categoria->municipio_id = 66; 
		$categoria->parroquia = "Cachamay";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 210; 
		$categoria->municipio_id = 66; 
		$categoria->parroquia = "Chirica";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 211; 
		$categoria->municipio_id = 66; 
		$categoria->parroquia = "Dalla Costa";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 212; 
		$categoria->municipio_id = 66; 
		$categoria->parroquia = "Once de Abril";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 213; 
		$categoria->municipio_id = 66; 
		$categoria->parroquia = "Simón Bolívar";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 214; 
		$categoria->municipio_id = 66; 
		$categoria->parroquia = "Unare";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 215; 
		$categoria->municipio_id = 66; 
		$categoria->parroquia = "Universidad";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 216; 
		$categoria->municipio_id = 66; 
		$categoria->parroquia = "Vista al Sol";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 217; 
		$categoria->municipio_id = 66; 
		$categoria->parroquia = "Pozo Verde";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 218; 
		$categoria->municipio_id = 66; 
		$categoria->parroquia = "Yocoima";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 219; 
		$categoria->municipio_id = 66; 
		$categoria->parroquia = "5 de Julio";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 220; 
		$categoria->municipio_id = 67; 
		$categoria->parroquia = "Cedeño";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 221; 
		$categoria->municipio_id = 67; 
		$categoria->parroquia = "Altagracia";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 222; 
		$categoria->municipio_id = 67; 
		$categoria->parroquia = "Ascensión Farreras";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 223; 
		$categoria->municipio_id = 67; 
		$categoria->parroquia = "Guaniamo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 224; 
		$categoria->municipio_id = 67; 
		$categoria->parroquia = "La Urbana";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 225; 
		$categoria->municipio_id = 67; 
		$categoria->parroquia = "Pijiguaos";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 226; 
		$categoria->municipio_id = 68; 
		$categoria->parroquia = "El Callao";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 227; 
		$categoria->municipio_id = 69; 
		$categoria->parroquia = "Gran Sabana";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 228; 
		$categoria->municipio_id = 69; 
		$categoria->parroquia = "Ikabarú";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 229; 
		$categoria->municipio_id = 70; 
		$categoria->parroquia = "Catedral";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 230; 
		$categoria->municipio_id = 70; 
		$categoria->parroquia = "Zea";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 231; 
		$categoria->municipio_id = 70; 
		$categoria->parroquia = "Orinoco";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 232; 
		$categoria->municipio_id = 70; 
		$categoria->parroquia = "José Antonio Páez";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 233; 
		$categoria->municipio_id = 70; 
		$categoria->parroquia = "Marhuanta";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 234; 
		$categoria->municipio_id = 70; 
		$categoria->parroquia = "Agua Salada";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 235; 
		$categoria->municipio_id = 70; 
		$categoria->parroquia = "Vista Hermosa";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 236; 
		$categoria->municipio_id = 70; 
		$categoria->parroquia = "La Sabanita";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 237; 
		$categoria->municipio_id = 70; 
		$categoria->parroquia = "Panapana";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 238; 
		$categoria->municipio_id = 71; 
		$categoria->parroquia = "Andrés Eloy Blanco";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 239; 
		$categoria->municipio_id = 71; 
		$categoria->parroquia = "Pedro Cova";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 240; 
		$categoria->municipio_id = 72; 
		$categoria->parroquia = "Raúl Leoni";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 241; 
		$categoria->municipio_id = 72; 
		$categoria->parroquia = "Barceloneta";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 242; 
		$categoria->municipio_id = 72; 
		$categoria->parroquia = "Santa Bárbara";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 243; 
		$categoria->municipio_id = 72; 
		$categoria->parroquia = "San Francisco";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 244; 
		$categoria->municipio_id = 73; 
		$categoria->parroquia = "Roscio";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 245; 
		$categoria->municipio_id = 73; 
		$categoria->parroquia = "Salóm";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 246; 
		$categoria->municipio_id = 74; 
		$categoria->parroquia = "Sifontes";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 247; 
		$categoria->municipio_id = 74; 
		$categoria->parroquia = "Dalla Costa";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 248; 
		$categoria->municipio_id = 74; 
		$categoria->parroquia = "San Isidro";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 249; 
		$categoria->municipio_id = 75; 
		$categoria->parroquia = "Sucre";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 250; 
		$categoria->municipio_id = 75; 
		$categoria->parroquia = "Aripao";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 251; 
		$categoria->municipio_id = 75; 
		$categoria->parroquia = "Guarataro";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 252; 
		$categoria->municipio_id = 75; 
		$categoria->parroquia = "Las Majadas";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 253; 
		$categoria->municipio_id = 75; 
		$categoria->parroquia = "Moitaco";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 254; 
		$categoria->municipio_id = 76; 
		$categoria->parroquia = "Padre Pedro Chien";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 255; 
		$categoria->municipio_id = 76; 
		$categoria->parroquia = "Río Grande";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 256; 
		$categoria->municipio_id = 77; 
		$categoria->parroquia = "Bejuma";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 257; 
		$categoria->municipio_id = 77; 
		$categoria->parroquia = "Canoabo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 258; 
		$categoria->municipio_id = 77; 
		$categoria->parroquia = "Simón Bolívar";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 259; 
		$categoria->municipio_id = 78; 
		$categoria->parroquia = "Güigüe";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 260; 
		$categoria->municipio_id = 78; 
		$categoria->parroquia = "Carabobo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 261; 
		$categoria->municipio_id = 78; 
		$categoria->parroquia = "Tacarigua";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 262; 
		$categoria->municipio_id = 79; 
		$categoria->parroquia = "Mariara";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 263; 
		$categoria->municipio_id = 79; 
		$categoria->parroquia = "Aguas Calientes";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 264; 
		$categoria->municipio_id = 80; 
		$categoria->parroquia = "Models\Ciudad Alianza";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 265; 
		$categoria->municipio_id = 80; 
		$categoria->parroquia = "Guacara";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 266; 
		$categoria->municipio_id = 80; 
		$categoria->parroquia = "Yagua";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 267; 
		$categoria->municipio_id = 81; 
		$categoria->parroquia = "Morón";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 268; 
		$categoria->municipio_id = 81; 
		$categoria->parroquia = "Yagua";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 269; 
		$categoria->municipio_id = 82; 
		$categoria->parroquia = "Tocuyito";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 270; 
		$categoria->municipio_id = 82; 
		$categoria->parroquia = "Independencia";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 271; 
		$categoria->municipio_id = 83; 
		$categoria->parroquia = "Los Guayos";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 272; 
		$categoria->municipio_id = 84; 
		$categoria->parroquia = "Miranda";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 273; 
		$categoria->municipio_id = 85; 
		$categoria->parroquia = "Montalbán";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 274; 
		$categoria->municipio_id = 86; 
		$categoria->parroquia = "Naguanagua";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 275; 
		$categoria->municipio_id = 87; 
		$categoria->parroquia = "Bartolomé Salóm";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 276; 
		$categoria->municipio_id = 87; 
		$categoria->parroquia = "Democracia";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 277; 
		$categoria->municipio_id = 87; 
		$categoria->parroquia = "Fraternidad";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 278; 
		$categoria->municipio_id = 87; 
		$categoria->parroquia = "Goaigoaza";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 279; 
		$categoria->municipio_id = 87; 
		$categoria->parroquia = "Juan José Flores";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 280; 
		$categoria->municipio_id = 87; 
		$categoria->parroquia = "Unión";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 281; 
		$categoria->municipio_id = 87; 
		$categoria->parroquia = "Borburata";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 282; 
		$categoria->municipio_id = 87; 
		$categoria->parroquia = "Patanemo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 283; 
		$categoria->municipio_id = 88; 
		$categoria->parroquia = "San Diego";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 284; 
		$categoria->municipio_id = 89; 
		$categoria->parroquia = "San Joaquín";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 285; 
		$categoria->municipio_id = 90; 
		$categoria->parroquia = "Candelaria";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 286; 
		$categoria->municipio_id = 90; 
		$categoria->parroquia = "Catedral";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 287; 
		$categoria->municipio_id = 90; 
		$categoria->parroquia = "El Socorro";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 288; 
		$categoria->municipio_id = 90; 
		$categoria->parroquia = "Miguel Peña";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 289; 
		$categoria->municipio_id = 90; 
		$categoria->parroquia = "Rafael Urdaneta";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 290; 
		$categoria->municipio_id = 90; 
		$categoria->parroquia = "San Blas";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 291; 
		$categoria->municipio_id = 90; 
		$categoria->parroquia = "San José";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 292; 
		$categoria->municipio_id = 90; 
		$categoria->parroquia = "Santa Rosa";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 293; 
		$categoria->municipio_id = 90; 
		$categoria->parroquia = "Negro Primero";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 294; 
		$categoria->municipio_id = 91; 
		$categoria->parroquia = "Cojedes";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 295; 
		$categoria->municipio_id = 91; 
		$categoria->parroquia = "Juan de Mata Suárez";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 296; 
		$categoria->municipio_id = 92; 
		$categoria->parroquia = "Tinaquillo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 297; 
		$categoria->municipio_id = 93; 
		$categoria->parroquia = "El Baúl";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 298; 
		$categoria->municipio_id = 93; 
		$categoria->parroquia = "Sucre";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 299; 
		$categoria->municipio_id = 94; 
		$categoria->parroquia = "La Aguadita";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 300; 
		$categoria->municipio_id = 94; 
		$categoria->parroquia = "Macapo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 301; 
		$categoria->municipio_id = 95; 
		$categoria->parroquia = "El Pao";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 302; 
		$categoria->municipio_id = 96; 
		$categoria->parroquia = "El Amparo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 303; 
		$categoria->municipio_id = 96; 
		$categoria->parroquia = "Libertad de Cojedes";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 304; 
		$categoria->municipio_id = 97; 
		$categoria->parroquia = "Rómulo Gallegos";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 305; 
		$categoria->municipio_id = 98; 
		$categoria->parroquia = "San Carlos de Austria";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 306; 
		$categoria->municipio_id = 98; 
		$categoria->parroquia = "Juan Ángel Bravo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 307; 
		$categoria->municipio_id = 98; 
		$categoria->parroquia = "Manuel Manrique";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 308; 
		$categoria->municipio_id = 99; 
		$categoria->parroquia = "General en Jefe José Laurencio Silva";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 309; 
		$categoria->municipio_id = 100; 
		$categoria->parroquia = "Curiapo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 310; 
		$categoria->municipio_id = 100; 
		$categoria->parroquia = "Almirante Luis Brión";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 311; 
		$categoria->municipio_id = 100; 
		$categoria->parroquia = "Francisco Aniceto Lugo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 312; 
		$categoria->municipio_id = 100; 
		$categoria->parroquia = "Manuel Renaud";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 313; 
		$categoria->municipio_id = 100; 
		$categoria->parroquia = "Padre Barral";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 314; 
		$categoria->municipio_id = 100; 
		$categoria->parroquia = "Santos de Abelgas";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 315; 
		$categoria->municipio_id = 101; 
		$categoria->parroquia = "Imataca";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 316; 
		$categoria->municipio_id = 101; 
		$categoria->parroquia = "Cinco de Julio";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 317; 
		$categoria->municipio_id = 101; 
		$categoria->parroquia = "Juan Bautista Arismendi";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 318; 
		$categoria->municipio_id = 101; 
		$categoria->parroquia = "Manuel Piar";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 319; 
		$categoria->municipio_id = 101; 
		$categoria->parroquia = "Rómulo Gallegos";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 320; 
		$categoria->municipio_id = 102; 
		$categoria->parroquia = "Pedernales";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 321; 
		$categoria->municipio_id = 102; 
		$categoria->parroquia = "Luis Beltrán Prieto Figueroa";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 322; 
		$categoria->municipio_id = 103; 
		$categoria->parroquia = "San José (Delta Amacuro)";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 323; 
		$categoria->municipio_id = 103; 
		$categoria->parroquia = "José Vidal Marcano";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 324; 
		$categoria->municipio_id = 103; 
		$categoria->parroquia = "Juan Millán";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 325; 
		$categoria->municipio_id = 103; 
		$categoria->parroquia = "Leonardo Ruíz Pineda";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 326; 
		$categoria->municipio_id = 103; 
		$categoria->parroquia = "Mariscal Antonio José de Sucre";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 327; 
		$categoria->municipio_id = 103; 
		$categoria->parroquia = "Monseñor Argimiro García";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 328; 
		$categoria->municipio_id = 103; 
		$categoria->parroquia = "San Rafael (Delta Amacuro)";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 329; 
		$categoria->municipio_id = 103; 
		$categoria->parroquia = "Virgen del Valle";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 330; 
		$categoria->municipio_id = 10; 
		$categoria->parroquia = "Clarines";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 331; 
		$categoria->municipio_id = 10; 
		$categoria->parroquia = "Guanape";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 332; 
		$categoria->municipio_id = 10; 
		$categoria->parroquia = "Sabana de Uchire";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 333; 
		$categoria->municipio_id = 104; 
		$categoria->parroquia = "Capadare";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 334; 
		$categoria->municipio_id = 104; 
		$categoria->parroquia = "La Pastora";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 335; 
		$categoria->municipio_id = 104; 
		$categoria->parroquia = "Libertador";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 336; 
		$categoria->municipio_id = 104; 
		$categoria->parroquia = "San Juan de los Cayos";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 337; 
		$categoria->municipio_id = 105; 
		$categoria->parroquia = "Aracua";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 338; 
		$categoria->municipio_id = 105; 
		$categoria->parroquia = "La Peña";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 339; 
		$categoria->municipio_id = 105; 
		$categoria->parroquia = "San Luis";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 340; 
		$categoria->municipio_id = 106; 
		$categoria->parroquia = "Bariro";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 341; 
		$categoria->municipio_id = 106; 
		$categoria->parroquia = "Borojó";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 342; 
		$categoria->municipio_id = 106; 
		$categoria->parroquia = "Capatárida";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 343; 
		$categoria->municipio_id = 106; 
		$categoria->parroquia = "Guajiro";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 344; 
		$categoria->municipio_id = 106; 
		$categoria->parroquia = "Seque";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 345; 
		$categoria->municipio_id = 106; 
		$categoria->parroquia = "Zazárida";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 346; 
		$categoria->municipio_id = 106; 
		$categoria->parroquia = "Valle de Eroa";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 347; 
		$categoria->municipio_id = 107; 
		$categoria->parroquia = "Cacique Manaure";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 348; 
		$categoria->municipio_id = 108; 
		$categoria->parroquia = "Norte";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 349; 
		$categoria->municipio_id = 108; 
		$categoria->parroquia = "Carirubana";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 350; 
		$categoria->municipio_id = 108; 
		$categoria->parroquia = "Santa Ana";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 351; 
		$categoria->municipio_id = 108; 
		$categoria->parroquia = "Urbana Punta Cardón";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 352; 
		$categoria->municipio_id = 109; 
		$categoria->parroquia = "La Vela de Coro";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 353; 
		$categoria->municipio_id = 109; 
		$categoria->parroquia = "Acurigua";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 354; 
		$categoria->municipio_id = 109; 
		$categoria->parroquia = "Guaibacoa";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 355; 
		$categoria->municipio_id = 109; 
		$categoria->parroquia = "Las Calderas";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 356; 
		$categoria->municipio_id = 109; 
		$categoria->parroquia = "Macoruca";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 357; 
		$categoria->municipio_id = 110; 
		$categoria->parroquia = "Dabajuro";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 358; 
		$categoria->municipio_id = 111; 
		$categoria->parroquia = "Agua Clara";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 359; 
		$categoria->municipio_id = 111; 
		$categoria->parroquia = "Avaria";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 360; 
		$categoria->municipio_id = 111; 
		$categoria->parroquia = "Pedregal";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 361; 
		$categoria->municipio_id = 111; 
		$categoria->parroquia = "Piedra Grande";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 362; 
		$categoria->municipio_id = 111; 
		$categoria->parroquia = "Purureche";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 363; 
		$categoria->municipio_id = 112; 
		$categoria->parroquia = "Adaure";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 364; 
		$categoria->municipio_id = 112; 
		$categoria->parroquia = "Adícora";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 365; 
		$categoria->municipio_id = 112; 
		$categoria->parroquia = "Baraived";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 366; 
		$categoria->municipio_id = 112; 
		$categoria->parroquia = "Buena Vista";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 367; 
		$categoria->municipio_id = 112; 
		$categoria->parroquia = "Jadacaquiva";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 368; 
		$categoria->municipio_id = 112; 
		$categoria->parroquia = "El Vínculo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 369; 
		$categoria->municipio_id = 112; 
		$categoria->parroquia = "El Hato";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 370; 
		$categoria->municipio_id = 112; 
		$categoria->parroquia = "Moruy";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 371; 
		$categoria->municipio_id = 112; 
		$categoria->parroquia = "Pueblo Nuevo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 372; 
		$categoria->municipio_id = 113; 
		$categoria->parroquia = "Agua Larga";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 373; 
		$categoria->municipio_id = 113; 
		$categoria->parroquia = "El Paují";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 374; 
		$categoria->municipio_id = 113; 
		$categoria->parroquia = "Independencia";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 375; 
		$categoria->municipio_id = 113; 
		$categoria->parroquia = "Mapararí";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 376; 
		$categoria->municipio_id = 114; 
		$categoria->parroquia = "Agua Linda";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 377; 
		$categoria->municipio_id = 114; 
		$categoria->parroquia = "Araurima";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 378; 
		$categoria->municipio_id = 114; 
		$categoria->parroquia = "Jacura";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 379; 
		$categoria->municipio_id = 115; 
		$categoria->parroquia = "Tucacas";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 380; 
		$categoria->municipio_id = 115; 
		$categoria->parroquia = "Boca de Aroa";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 381; 
		$categoria->municipio_id = 116; 
		$categoria->parroquia = "Los Taques";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 382; 
		$categoria->municipio_id = 116; 
		$categoria->parroquia = "Judibana";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 383; 
		$categoria->municipio_id = 117; 
		$categoria->parroquia = "Mene de Mauroa";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 384; 
		$categoria->municipio_id = 117; 
		$categoria->parroquia = "San Félix";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 385; 
		$categoria->municipio_id = 117; 
		$categoria->parroquia = "Casigua";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 386; 
		$categoria->municipio_id = 118; 
		$categoria->parroquia = "Guzmán Guillermo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 387; 
		$categoria->municipio_id = 118; 
		$categoria->parroquia = "Mitare";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 388; 
		$categoria->municipio_id = 118; 
		$categoria->parroquia = "Río Seco";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 389; 
		$categoria->municipio_id = 118; 
		$categoria->parroquia = "Sabaneta";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 390; 
		$categoria->municipio_id = 118; 
		$categoria->parroquia = "San Antonio";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 391; 
		$categoria->municipio_id = 118; 
		$categoria->parroquia = "San Gabriel";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 392; 
		$categoria->municipio_id = 118; 
		$categoria->parroquia = "Santa Ana";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 393; 
		$categoria->municipio_id = 119; 
		$categoria->parroquia = "Boca del Tocuyo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 394; 
		$categoria->municipio_id = 119; 
		$categoria->parroquia = "Chichiriviche";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 395; 
		$categoria->municipio_id = 119; 
		$categoria->parroquia = "Tocuyo de la Costa";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 396; 
		$categoria->municipio_id = 120; 
		$categoria->parroquia = "Palmasola";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 397; 
		$categoria->municipio_id = 121; 
		$categoria->parroquia = "Cabure";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 398; 
		$categoria->municipio_id = 121; 
		$categoria->parroquia = "Colina";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 399; 
		$categoria->municipio_id = 121; 
		$categoria->parroquia = "Curimagua";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 400; 
		$categoria->municipio_id = 122; 
		$categoria->parroquia = "San José de la Costa";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 401; 
		$categoria->municipio_id = 122; 
		$categoria->parroquia = "Píritu";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 402; 
		$categoria->municipio_id = 123; 
		$categoria->parroquia = "San Francisco";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 403; 
		$categoria->municipio_id = 124; 
		$categoria->parroquia = "Sucre";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 404; 
		$categoria->municipio_id = 124; 
		$categoria->parroquia = "Pecaya";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 405; 
		$categoria->municipio_id = 125; 
		$categoria->parroquia = "Tocópero";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 406; 
		$categoria->municipio_id = 126; 
		$categoria->parroquia = "El Charal";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 407; 
		$categoria->municipio_id = 126; 
		$categoria->parroquia = "Las Vegas del Tuy";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 408; 
		$categoria->municipio_id = 126; 
		$categoria->parroquia = "Santa Cruz de Bucaral";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 409; 
		$categoria->municipio_id = 127; 
		$categoria->parroquia = "Bruzual";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 410; 
		$categoria->municipio_id = 127; 
		$categoria->parroquia = "Urumaco";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 411; 
		$categoria->municipio_id = 128; 
		$categoria->parroquia = "Puerto Cumarebo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 412; 
		$categoria->municipio_id = 128; 
		$categoria->parroquia = "La Ciénaga";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 413; 
		$categoria->municipio_id = 128; 
		$categoria->parroquia = "La Soledad";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 414; 
		$categoria->municipio_id = 128; 
		$categoria->parroquia = "Pueblo Cumarebo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 415; 
		$categoria->municipio_id = 128; 
		$categoria->parroquia = "Zazárida";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 416; 
		$categoria->municipio_id = 113; 
		$categoria->parroquia = "Churuguara";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 417; 
		$categoria->municipio_id = 129; 
		$categoria->parroquia = "Camaguán";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 418; 
		$categoria->municipio_id = 129; 
		$categoria->parroquia = "Puerto Miranda";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 419; 
		$categoria->municipio_id = 129; 
		$categoria->parroquia = "Uverito";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 420; 
		$categoria->municipio_id = 130; 
		$categoria->parroquia = "Chaguaramas";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 421; 
		$categoria->municipio_id = 131; 
		$categoria->parroquia = "El Socorro";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 422; 
		$categoria->municipio_id = 132; 
		$categoria->parroquia = "Tucupido";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 423; 
		$categoria->municipio_id = 132; 
		$categoria->parroquia = "San Rafael de Laya";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 424; 
		$categoria->municipio_id = 133; 
		$categoria->parroquia = "Altagracia de Orituco";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 425; 
		$categoria->municipio_id = 133; 
		$categoria->parroquia = "San Rafael de Orituco";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 426; 
		$categoria->municipio_id = 133; 
		$categoria->parroquia = "San Francisco Javier de Lezama";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 427; 
		$categoria->municipio_id = 133; 
		$categoria->parroquia = "Paso Real de Macaira";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 428; 
		$categoria->municipio_id = 133; 
		$categoria->parroquia = "Carlos Soublette";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 429; 
		$categoria->municipio_id = 133; 
		$categoria->parroquia = "San Francisco de Macaira";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 430; 
		$categoria->municipio_id = 133; 
		$categoria->parroquia = "Libertad de Orituco";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 431; 
		$categoria->municipio_id = 134; 
		$categoria->parroquia = "Cantaclaro";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 432; 
		$categoria->municipio_id = 134; 
		$categoria->parroquia = "San Juan de los Morros";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 433; 
		$categoria->municipio_id = 134; 
		$categoria->parroquia = "Parapara";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 434; 
		$categoria->municipio_id = 135; 
		$categoria->parroquia = "El Sombrero";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 435; 
		$categoria->municipio_id = 135; 
		$categoria->parroquia = "Sosa";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 436; 
		$categoria->municipio_id = 136; 
		$categoria->parroquia = "Las Mercedes";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 437; 
		$categoria->municipio_id = 136; 
		$categoria->parroquia = "Cabruta";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 438; 
		$categoria->municipio_id = 136; 
		$categoria->parroquia = "Santa Rita de Manapire";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 439; 
		$categoria->municipio_id = 137; 
		$categoria->parroquia = "Valle de la Pascua";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 440; 
		$categoria->municipio_id = 137; 
		$categoria->parroquia = "Espino";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 441; 
		$categoria->municipio_id = 138; 
		$categoria->parroquia = "San José de Unare";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 442; 
		$categoria->municipio_id = 138; 
		$categoria->parroquia = "Zaraza";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 443; 
		$categoria->municipio_id = 139; 
		$categoria->parroquia = "San José de Tiznados";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 444; 
		$categoria->municipio_id = 139; 
		$categoria->parroquia = "San Francisco de Tiznados";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 445; 
		$categoria->municipio_id = 139; 
		$categoria->parroquia = "San Lorenzo de Tiznados";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 446; 
		$categoria->municipio_id = 139; 
		$categoria->parroquia = "Ortiz";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 447; 
		$categoria->municipio_id = 140; 
		$categoria->parroquia = "Guayabal";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 448; 
		$categoria->municipio_id = 140; 
		$categoria->parroquia = "Cazorla";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 449; 
		$categoria->municipio_id = 141; 
		$categoria->parroquia = "San José de Guaribe";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 450; 
		$categoria->municipio_id = 141; 
		$categoria->parroquia = "Uveral";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 451; 
		$categoria->municipio_id = 142; 
		$categoria->parroquia = "Santa María de Ipire";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 452; 
		$categoria->municipio_id = 142; 
		$categoria->parroquia = "Altamira";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 453; 
		$categoria->municipio_id = 143; 
		$categoria->parroquia = "El Calvario";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 454; 
		$categoria->municipio_id = 143; 
		$categoria->parroquia = "El Rastro";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 455; 
		$categoria->municipio_id = 143; 
		$categoria->parroquia = "Guardatinajas";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 456; 
		$categoria->municipio_id = 143; 
		$categoria->parroquia = "Capital Urbana Calabozo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 457; 
		$categoria->municipio_id = 144; 
		$categoria->parroquia = "Quebrada Honda de Guache";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 458; 
		$categoria->municipio_id = 144; 
		$categoria->parroquia = "Pío Tamayo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 459; 
		$categoria->municipio_id = 144; 
		$categoria->parroquia = "Yacambú";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 460; 
		$categoria->municipio_id = 145; 
		$categoria->parroquia = "Fréitez";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 461; 
		$categoria->municipio_id = 145; 
		$categoria->parroquia = "José María Blanco";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 462; 
		$categoria->municipio_id = 146; 
		$categoria->parroquia = "Catedral";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 463; 
		$categoria->municipio_id = 146; 
		$categoria->parroquia = "Concepción";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 464; 
		$categoria->municipio_id = 146; 
		$categoria->parroquia = "El Cují";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 465; 
		$categoria->municipio_id = 146; 
		$categoria->parroquia = "Juan de Villegas";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 466; 
		$categoria->municipio_id = 146; 
		$categoria->parroquia = "Santa Rosa";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 467; 
		$categoria->municipio_id = 146; 
		$categoria->parroquia = "Tamaca";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 468; 
		$categoria->municipio_id = 146; 
		$categoria->parroquia = "Unión";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 469; 
		$categoria->municipio_id = 146; 
		$categoria->parroquia = "Aguedo Felipe Alvarado";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 470; 
		$categoria->municipio_id = 146; 
		$categoria->parroquia = "Buena Vista";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 471; 
		$categoria->municipio_id = 146; 
		$categoria->parroquia = "Juárez";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 472; 
		$categoria->municipio_id = 147; 
		$categoria->parroquia = "Juan Bautista Rodríguez";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 473; 
		$categoria->municipio_id = 147; 
		$categoria->parroquia = "Cuara";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 474; 
		$categoria->municipio_id = 147; 
		$categoria->parroquia = "Diego de Lozada";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 475; 
		$categoria->municipio_id = 147; 
		$categoria->parroquia = "Paraíso de San José";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 476; 
		$categoria->municipio_id = 147; 
		$categoria->parroquia = "San Miguel";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 477; 
		$categoria->municipio_id = 147; 
		$categoria->parroquia = "Tintorero";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 478; 
		$categoria->municipio_id = 147; 
		$categoria->parroquia = "José Bernardo Dorante";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 479; 
		$categoria->municipio_id = 147; 
		$categoria->parroquia = "Coronel Mariano Peraza ";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 480; 
		$categoria->municipio_id = 148; 
		$categoria->parroquia = "Bolívar";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 481; 
		$categoria->municipio_id = 148; 
		$categoria->parroquia = "Anzoátegui";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 482; 
		$categoria->municipio_id = 148; 
		$categoria->parroquia = "Guarico";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 483; 
		$categoria->municipio_id = 148; 
		$categoria->parroquia = "Hilario Luna y Luna";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 484; 
		$categoria->municipio_id = 148; 
		$categoria->parroquia = "Humocaro Alto";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 485; 
		$categoria->municipio_id = 148; 
		$categoria->parroquia = "Humocaro Bajo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 486; 
		$categoria->municipio_id = 148; 
		$categoria->parroquia = "La Candelaria";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 487; 
		$categoria->municipio_id = 148; 
		$categoria->parroquia = "Morán";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 488; 
		$categoria->municipio_id = 149; 
		$categoria->parroquia = "Cabudare";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 489; 
		$categoria->municipio_id = 149; 
		$categoria->parroquia = "José Gregorio Bastidas";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 490; 
		$categoria->municipio_id = 149; 
		$categoria->parroquia = "Agua Viva";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 491; 
		$categoria->municipio_id = 150; 
		$categoria->parroquia = "Sarare";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 492; 
		$categoria->municipio_id = 150; 
		$categoria->parroquia = "Buría";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 493; 
		$categoria->municipio_id = 150; 
		$categoria->parroquia = "Gustavo Vegas León";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 494; 
		$categoria->municipio_id = 151; 
		$categoria->parroquia = "Trinidad Samuel";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 495; 
		$categoria->municipio_id = 151; 
		$categoria->parroquia = "Antonio Díaz";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 496; 
		$categoria->municipio_id = 151; 
		$categoria->parroquia = "Camacaro";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 497; 
		$categoria->municipio_id = 151; 
		$categoria->parroquia = "Castañeda";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 498; 
		$categoria->municipio_id = 151; 
		$categoria->parroquia = "Cecilio Zubillaga";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 499; 
		$categoria->municipio_id = 151; 
		$categoria->parroquia = "Chiquinquirá";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 500; 
		$categoria->municipio_id = 151; 
		$categoria->parroquia = "El Blanco";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 501; 
		$categoria->municipio_id = 151; 
		$categoria->parroquia = "Espinoza de los Monteros";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 502; 
		$categoria->municipio_id = 151; 
		$categoria->parroquia = "Lara";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 503; 
		$categoria->municipio_id = 151; 
		$categoria->parroquia = "Las Mercedes";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 504; 
		$categoria->municipio_id = 151; 
		$categoria->parroquia = "Manuel Morillo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 505; 
		$categoria->municipio_id = 151; 
		$categoria->parroquia = "Montaña Verde";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 506; 
		$categoria->municipio_id = 151; 
		$categoria->parroquia = "Montes de Oca";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 507; 
		$categoria->municipio_id = 151; 
		$categoria->parroquia = "Torres";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 508; 
		$categoria->municipio_id = 151; 
		$categoria->parroquia = "Heriberto Arroyo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 509; 
		$categoria->municipio_id = 151; 
		$categoria->parroquia = "Reyes Vargas";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 510; 
		$categoria->municipio_id = 151; 
		$categoria->parroquia = "Altagracia";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 511; 
		$categoria->municipio_id = 152; 
		$categoria->parroquia = "Siquisique";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 512; 
		$categoria->municipio_id = 152; 
		$categoria->parroquia = "Moroturo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 513; 
		$categoria->municipio_id = 152; 
		$categoria->parroquia = "San Miguel";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 514; 
		$categoria->municipio_id = 152; 
		$categoria->parroquia = "Xaguas";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 515; 
		$categoria->municipio_id = 179; 
		$categoria->parroquia = "Presidente Betancourt";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 516; 
		$categoria->municipio_id = 179; 
		$categoria->parroquia = "Presidente Páez";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 517; 
		$categoria->municipio_id = 179; 
		$categoria->parroquia = "Presidente Rómulo Gallegos";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 518; 
		$categoria->municipio_id = 179; 
		$categoria->parroquia = "Gabriel Picón González";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 519; 
		$categoria->municipio_id = 179; 
		$categoria->parroquia = "Héctor Amable Mora";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 520; 
		$categoria->municipio_id = 179; 
		$categoria->parroquia = "José Nucete Sardi";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 521; 
		$categoria->municipio_id = 179; 
		$categoria->parroquia = "Pulido Méndez";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 522; 
		$categoria->municipio_id = 180; 
		$categoria->parroquia = "La Azulita";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 523; 
		$categoria->municipio_id = 181; 
		$categoria->parroquia = "Santa Cruz de Mora";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 524; 
		$categoria->municipio_id = 181; 
		$categoria->parroquia = "Mesa Bolívar";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 525; 
		$categoria->municipio_id = 181; 
		$categoria->parroquia = "Mesa de Las Palmas";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 526; 
		$categoria->municipio_id = 182; 
		$categoria->parroquia = "Aricagua";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 527; 
		$categoria->municipio_id = 182; 
		$categoria->parroquia = "San Antonio";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 528; 
		$categoria->municipio_id = 183; 
		$categoria->parroquia = "Canagua";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 529; 
		$categoria->municipio_id = 183; 
		$categoria->parroquia = "Capurí";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 530; 
		$categoria->municipio_id = 183; 
		$categoria->parroquia = "Chacantá";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 531; 
		$categoria->municipio_id = 183; 
		$categoria->parroquia = "El Molino";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 532; 
		$categoria->municipio_id = 183; 
		$categoria->parroquia = "Guaimaral";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 533; 
		$categoria->municipio_id = 183; 
		$categoria->parroquia = "Mucutuy";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 534; 
		$categoria->municipio_id = 183; 
		$categoria->parroquia = "Mucuchachí";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 535; 
		$categoria->municipio_id = 184; 
		$categoria->parroquia = "Fernández Peña";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 536; 
		$categoria->municipio_id = 184; 
		$categoria->parroquia = "Matriz";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 537; 
		$categoria->municipio_id = 184; 
		$categoria->parroquia = "Montalbán";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 538; 
		$categoria->municipio_id = 184; 
		$categoria->parroquia = "Acequias";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 539; 
		$categoria->municipio_id = 184; 
		$categoria->parroquia = "Jají";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 540; 
		$categoria->municipio_id = 184; 
		$categoria->parroquia = "La Mesa";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 541; 
		$categoria->municipio_id = 184; 
		$categoria->parroquia = "San José del Sur";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 542; 
		$categoria->municipio_id = 185; 
		$categoria->parroquia = "Tucaní";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 543; 
		$categoria->municipio_id = 185; 
		$categoria->parroquia = "Florencio Ramírez";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 544; 
		$categoria->municipio_id = 186; 
		$categoria->parroquia = "Santo Domingo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 545; 
		$categoria->municipio_id = 186; 
		$categoria->parroquia = "Las Piedras";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 546; 
		$categoria->municipio_id = 187; 
		$categoria->parroquia = "Guaraque";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 547; 
		$categoria->municipio_id = 187; 
		$categoria->parroquia = "Mesa de Quintero";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 548; 
		$categoria->municipio_id = 187; 
		$categoria->parroquia = "Río Negro";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 549; 
		$categoria->municipio_id = 188; 
		$categoria->parroquia = "Arapuey";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 550; 
		$categoria->municipio_id = 188; 
		$categoria->parroquia = "Palmira";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 551; 
		$categoria->municipio_id = 189; 
		$categoria->parroquia = "San Cristóbal de Torondoy";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 552; 
		$categoria->municipio_id = 189; 
		$categoria->parroquia = "Torondoy";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 553; 
		$categoria->municipio_id = 190; 
		$categoria->parroquia = "Antonio Spinetti Dini";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 554; 
		$categoria->municipio_id = 190; 
		$categoria->parroquia = "Arias";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 555; 
		$categoria->municipio_id = 190; 
		$categoria->parroquia = "Caracciolo Parra Pérez";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 556; 
		$categoria->municipio_id = 190; 
		$categoria->parroquia = "Domingo Peña";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 557; 
		$categoria->municipio_id = 190; 
		$categoria->parroquia = "El Llano";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 558; 
		$categoria->municipio_id = 190; 
		$categoria->parroquia = "Gonzalo Picón Febres";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 559; 
		$categoria->municipio_id = 190; 
		$categoria->parroquia = "Jacinto Plaza";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 560; 
		$categoria->municipio_id = 190; 
		$categoria->parroquia = "Juan Rodríguez Suárez";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 561; 
		$categoria->municipio_id = 190; 
		$categoria->parroquia = "Lasso de la Vega";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 562; 
		$categoria->municipio_id = 190; 
		$categoria->parroquia = "Mariano Picón Salas";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 563; 
		$categoria->municipio_id = 190; 
		$categoria->parroquia = "Milla";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 564; 
		$categoria->municipio_id = 190; 
		$categoria->parroquia = "Osuna Rodríguez";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 565; 
		$categoria->municipio_id = 190; 
		$categoria->parroquia = "Sagrario";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 566; 
		$categoria->municipio_id = 190; 
		$categoria->parroquia = "El Morro";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 567; 
		$categoria->municipio_id = 190; 
		$categoria->parroquia = "Los Nevados";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 568; 
		$categoria->municipio_id = 191; 
		$categoria->parroquia = "Andrés Eloy Blanco";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 569; 
		$categoria->municipio_id = 191; 
		$categoria->parroquia = "La Venta";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 570; 
		$categoria->municipio_id = 191; 
		$categoria->parroquia = "Piñango";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 571; 
		$categoria->municipio_id = 191; 
		$categoria->parroquia = "Timotes";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 572; 
		$categoria->municipio_id = 192; 
		$categoria->parroquia = "Eloy Paredes";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 573; 
		$categoria->municipio_id = 192; 
		$categoria->parroquia = "San Rafael de Alcázar";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 574; 
		$categoria->municipio_id = 192; 
		$categoria->parroquia = "Santa Elena de Arenales";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 575; 
		$categoria->municipio_id = 193; 
		$categoria->parroquia = "Santa María de Caparo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 576; 
		$categoria->municipio_id = 194; 
		$categoria->parroquia = "Pueblo Llano";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 577; 
		$categoria->municipio_id = 195; 
		$categoria->parroquia = "Cacute";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 578; 
		$categoria->municipio_id = 195; 
		$categoria->parroquia = "La Toma";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 579; 
		$categoria->municipio_id = 195; 
		$categoria->parroquia = "Mucuchíes";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 580; 
		$categoria->municipio_id = 195; 
		$categoria->parroquia = "Mucurubá";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 581; 
		$categoria->municipio_id = 195; 
		$categoria->parroquia = "San Rafael";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 582; 
		$categoria->municipio_id = 196; 
		$categoria->parroquia = "Gerónimo Maldonado";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 583; 
		$categoria->municipio_id = 196; 
		$categoria->parroquia = "Bailadores";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 584; 
		$categoria->municipio_id = 197; 
		$categoria->parroquia = "Tabay";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 585; 
		$categoria->municipio_id = 198; 
		$categoria->parroquia = "Chiguará";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 586; 
		$categoria->municipio_id = 198; 
		$categoria->parroquia = "Estánquez";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 587; 
		$categoria->municipio_id = 198; 
		$categoria->parroquia = "Lagunillas";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 588; 
		$categoria->municipio_id = 198; 
		$categoria->parroquia = "La Trampa";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 589; 
		$categoria->municipio_id = 198; 
		$categoria->parroquia = "Pueblo Nuevo del Sur";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 590; 
		$categoria->municipio_id = 198; 
		$categoria->parroquia = "San Juan";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 591; 
		$categoria->municipio_id = 199; 
		$categoria->parroquia = "El Amparo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 592; 
		$categoria->municipio_id = 199; 
		$categoria->parroquia = "El Llano";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 593; 
		$categoria->municipio_id = 199; 
		$categoria->parroquia = "San Francisco";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 594; 
		$categoria->municipio_id = 199; 
		$categoria->parroquia = "Tovar";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 595; 
		$categoria->municipio_id = 200; 
		$categoria->parroquia = "Independencia";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 596; 
		$categoria->municipio_id = 200; 
		$categoria->parroquia = "María de la Concepción Palacios Blanco";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 597; 
		$categoria->municipio_id = 200; 
		$categoria->parroquia = "Nueva Bolivia";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 598; 
		$categoria->municipio_id = 200; 
		$categoria->parroquia = "Santa Apolonia";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 599; 
		$categoria->municipio_id = 201; 
		$categoria->parroquia = "Caño El Tigre";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 600; 
		$categoria->municipio_id = 201; 
		$categoria->parroquia = "Zea";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 601; 
		$categoria->municipio_id = 223; 
		$categoria->parroquia = "Aragüita";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 602; 
		$categoria->municipio_id = 223; 
		$categoria->parroquia = "Arévalo González";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 603; 
		$categoria->municipio_id = 223; 
		$categoria->parroquia = "Capaya";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 604; 
		$categoria->municipio_id = 223; 
		$categoria->parroquia = "Caucagua";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 605; 
		$categoria->municipio_id = 223; 
		$categoria->parroquia = "Panaquire";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 606; 
		$categoria->municipio_id = 223; 
		$categoria->parroquia = "Ribas";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 607; 
		$categoria->municipio_id = 223; 
		$categoria->parroquia = "El Café";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 608; 
		$categoria->municipio_id = 223; 
		$categoria->parroquia = "Marizapa";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 609; 
		$categoria->municipio_id = 224; 
		$categoria->parroquia = "Cumbo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 610; 
		$categoria->municipio_id = 224; 
		$categoria->parroquia = "San José de Barlovento";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 611; 
		$categoria->municipio_id = 225; 
		$categoria->parroquia = "El Cafetal";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 612; 
		$categoria->municipio_id = 225; 
		$categoria->parroquia = "Las Minas";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 613; 
		$categoria->municipio_id = 225; 
		$categoria->parroquia = "Nuestra Señora del Rosario";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 614; 
		$categoria->municipio_id = 226; 
		$categoria->parroquia = "Higuerote";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 615; 
		$categoria->municipio_id = 226; 
		$categoria->parroquia = "Curiepe";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 616; 
		$categoria->municipio_id = 226; 
		$categoria->parroquia = "Tacarigua de Brión";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 617; 
		$categoria->municipio_id = 227; 
		$categoria->parroquia = "Mamporal";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 618; 
		$categoria->municipio_id = 228; 
		$categoria->parroquia = "Carrizal";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 619; 
		$categoria->municipio_id = 229; 
		$categoria->parroquia = "Chacao";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 620; 
		$categoria->municipio_id = 230; 
		$categoria->parroquia = "Charallave";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 621; 
		$categoria->municipio_id = 230; 
		$categoria->parroquia = "Las Brisas";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 622; 
		$categoria->municipio_id = 231; 
		$categoria->parroquia = "El Hatillo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 623; 
		$categoria->municipio_id = 232; 
		$categoria->parroquia = "Altagracia de la Montaña";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 624; 
		$categoria->municipio_id = 232; 
		$categoria->parroquia = "Cecilio Acosta";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 625; 
		$categoria->municipio_id = 232; 
		$categoria->parroquia = "Los Teques";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 626; 
		$categoria->municipio_id = 232; 
		$categoria->parroquia = "El Jarillo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 627; 
		$categoria->municipio_id = 232; 
		$categoria->parroquia = "San Pedro";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 628; 
		$categoria->municipio_id = 232; 
		$categoria->parroquia = "Tácata";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 629; 
		$categoria->municipio_id = 232; 
		$categoria->parroquia = "Paracotos";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 630; 
		$categoria->municipio_id = 233; 
		$categoria->parroquia = "Cartanal";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 631; 
		$categoria->municipio_id = 233; 
		$categoria->parroquia = "Santa Teresa del Tuy";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 632; 
		$categoria->municipio_id = 234; 
		$categoria->parroquia = "La Democracia";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 633; 
		$categoria->municipio_id = 234; 
		$categoria->parroquia = "Ocumare del Tuy";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 634; 
		$categoria->municipio_id = 234; 
		$categoria->parroquia = "Santa Bárbara";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 635; 
		$categoria->municipio_id = 235; 
		$categoria->parroquia = "San Antonio de los Altos";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 636; 
		$categoria->municipio_id = 236; 
		$categoria->parroquia = "Río Chico";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 637; 
		$categoria->municipio_id = 236; 
		$categoria->parroquia = "El Guapo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 638; 
		$categoria->municipio_id = 236; 
		$categoria->parroquia = "Tacarigua de la Laguna";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 639; 
		$categoria->municipio_id = 236; 
		$categoria->parroquia = "Paparo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 640; 
		$categoria->municipio_id = 236; 
		$categoria->parroquia = "San Fernando del Guapo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 641; 
		$categoria->municipio_id = 237; 
		$categoria->parroquia = "Santa Lucía del Tuy";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 642; 
		$categoria->municipio_id = 238; 
		$categoria->parroquia = "Cúpira";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 643; 
		$categoria->municipio_id = 238; 
		$categoria->parroquia = "Machurucuto";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 644; 
		$categoria->municipio_id = 239; 
		$categoria->parroquia = "Guarenas";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 645; 
		$categoria->municipio_id = 240; 
		$categoria->parroquia = "San Antonio de Yare";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 646; 
		$categoria->municipio_id = 240; 
		$categoria->parroquia = "San Francisco de Yare";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 647; 
		$categoria->municipio_id = 241; 
		$categoria->parroquia = "Leoncio Martínez";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 648; 
		$categoria->municipio_id = 241; 
		$categoria->parroquia = "Petare";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 649; 
		$categoria->municipio_id = 241; 
		$categoria->parroquia = "Caucagüita";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 650; 
		$categoria->municipio_id = 241; 
		$categoria->parroquia = "Filas de Mariche";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 651; 
		$categoria->municipio_id = 241; 
		$categoria->parroquia = "La Dolorita";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 652; 
		$categoria->municipio_id = 242; 
		$categoria->parroquia = "Cúa";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 653; 
		$categoria->municipio_id = 242; 
		$categoria->parroquia = "Nueva Cúa";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 654; 
		$categoria->municipio_id = 243; 
		$categoria->parroquia = "Guatire";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 655; 
		$categoria->municipio_id = 243; 
		$categoria->parroquia = "Bolívar";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 656; 
		$categoria->municipio_id = 258; 
		$categoria->parroquia = "San Antonio de Maturín";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 657; 
		$categoria->municipio_id = 258; 
		$categoria->parroquia = "San Francisco de Maturín";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 658; 
		$categoria->municipio_id = 259; 
		$categoria->parroquia = "Aguasay";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 659; 
		$categoria->municipio_id = 260; 
		$categoria->parroquia = "Caripito";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 660; 
		$categoria->municipio_id = 261; 
		$categoria->parroquia = "El Guácharo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 661; 
		$categoria->municipio_id = 261; 
		$categoria->parroquia = "La Guanota";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 662; 
		$categoria->municipio_id = 261; 
		$categoria->parroquia = "Sabana de Piedra";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 663; 
		$categoria->municipio_id = 261; 
		$categoria->parroquia = "San Agustín";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 664; 
		$categoria->municipio_id = 261; 
		$categoria->parroquia = "Teresen";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 665; 
		$categoria->municipio_id = 261; 
		$categoria->parroquia = "Caripe";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 666; 
		$categoria->municipio_id = 262; 
		$categoria->parroquia = "Areo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 667; 
		$categoria->municipio_id = 262; 
		$categoria->parroquia = "Capital Cedeño";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 668; 
		$categoria->municipio_id = 262; 
		$categoria->parroquia = "San Félix de Cantalicio";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 669; 
		$categoria->municipio_id = 262; 
		$categoria->parroquia = "Viento Fresco";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 670; 
		$categoria->municipio_id = 263; 
		$categoria->parroquia = "El Tejero";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 671; 
		$categoria->municipio_id = 263; 
		$categoria->parroquia = "Punta de Mata";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 672; 
		$categoria->municipio_id = 264; 
		$categoria->parroquia = "Chaguaramas";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 673; 
		$categoria->municipio_id = 264; 
		$categoria->parroquia = "Las Alhuacas";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 674; 
		$categoria->municipio_id = 264; 
		$categoria->parroquia = "Tabasca";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 675; 
		$categoria->municipio_id = 264; 
		$categoria->parroquia = "Temblador";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 676; 
		$categoria->municipio_id = 265; 
		$categoria->parroquia = "Alto de los Godos";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 677; 
		$categoria->municipio_id = 265; 
		$categoria->parroquia = "Boquerón";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 678; 
		$categoria->municipio_id = 265; 
		$categoria->parroquia = "Las Cocuizas";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 679; 
		$categoria->municipio_id = 265; 
		$categoria->parroquia = "La Cruz";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 680; 
		$categoria->municipio_id = 265; 
		$categoria->parroquia = "San Simón";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 681; 
		$categoria->municipio_id = 265; 
		$categoria->parroquia = "El Corozo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 682; 
		$categoria->municipio_id = 265; 
		$categoria->parroquia = "El Furrial";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 683; 
		$categoria->municipio_id = 265; 
		$categoria->parroquia = "Jusepín";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 684; 
		$categoria->municipio_id = 265; 
		$categoria->parroquia = "La Pica";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 685; 
		$categoria->municipio_id = 265; 
		$categoria->parroquia = "San Vicente";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 686; 
		$categoria->municipio_id = 266; 
		$categoria->parroquia = "Aparicio";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 687; 
		$categoria->municipio_id = 266; 
		$categoria->parroquia = "Aragua de Maturín";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 688; 
		$categoria->municipio_id = 266; 
		$categoria->parroquia = "Chaguamal";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 689; 
		$categoria->municipio_id = 266; 
		$categoria->parroquia = "El Pinto";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 690; 
		$categoria->municipio_id = 266; 
		$categoria->parroquia = "Guanaguana";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 691; 
		$categoria->municipio_id = 266; 
		$categoria->parroquia = "La Toscana";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 692; 
		$categoria->municipio_id = 266; 
		$categoria->parroquia = "Taguaya";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 693; 
		$categoria->municipio_id = 267; 
		$categoria->parroquia = "Cachipo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 694; 
		$categoria->municipio_id = 267; 
		$categoria->parroquia = "Quiriquire";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 695; 
		$categoria->municipio_id = 268; 
		$categoria->parroquia = "Santa Bárbara";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 696; 
		$categoria->municipio_id = 269; 
		$categoria->parroquia = "Barrancas";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 697; 
		$categoria->municipio_id = 269; 
		$categoria->parroquia = "Los Barrancos de Fajardo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 698; 
		$categoria->municipio_id = 270; 
		$categoria->parroquia = "Uracoa";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 699; 
		$categoria->municipio_id = 271; 
		$categoria->parroquia = "Antolín del Campo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 700; 
		$categoria->municipio_id = 272; 
		$categoria->parroquia = "Arismendi";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 701; 
		$categoria->municipio_id = 273; 
		$categoria->parroquia = "García";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 702; 
		$categoria->municipio_id = 273; 
		$categoria->parroquia = "Francisco Fajardo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 703; 
		$categoria->municipio_id = 274; 
		$categoria->parroquia = "Bolívar";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 704; 
		$categoria->municipio_id = 274; 
		$categoria->parroquia = "Guevara";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 705; 
		$categoria->municipio_id = 274; 
		$categoria->parroquia = "Matasiete";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 706; 
		$categoria->municipio_id = 274; 
		$categoria->parroquia = "Santa Ana";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 707; 
		$categoria->municipio_id = 274; 
		$categoria->parroquia = "Sucre";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 708; 
		$categoria->municipio_id = 275; 
		$categoria->parroquia = "Aguirre";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 709; 
		$categoria->municipio_id = 275; 
		$categoria->parroquia = "Maneiro";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 710; 
		$categoria->municipio_id = 276; 
		$categoria->parroquia = "Adrián";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 711; 
		$categoria->municipio_id = 276; 
		$categoria->parroquia = "Juan Griego";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 712; 
		$categoria->municipio_id = 276; 
		$categoria->parroquia = "Yaguaraparo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 713; 
		$categoria->municipio_id = 277; 
		$categoria->parroquia = "Porlamar";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 714; 
		$categoria->municipio_id = 278; 
		$categoria->parroquia = "San Francisco de Macanao";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 715; 
		$categoria->municipio_id = 278; 
		$categoria->parroquia = "Boca de Río";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 716; 
		$categoria->municipio_id = 279; 
		$categoria->parroquia = "Tubores";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 717; 
		$categoria->municipio_id = 279; 
		$categoria->parroquia = "Los Baleales";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 718; 
		$categoria->municipio_id = 280; 
		$categoria->parroquia = "Vicente Fuentes";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 719; 
		$categoria->municipio_id = 280; 
		$categoria->parroquia = "Villalba";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 720; 
		$categoria->municipio_id = 281; 
		$categoria->parroquia = "San Juan Bautista";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 721; 
		$categoria->municipio_id = 281; 
		$categoria->parroquia = "Zabala";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 722; 
		$categoria->municipio_id = 283; 
		$categoria->parroquia = "Capital Araure";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 723; 
		$categoria->municipio_id = 283; 
		$categoria->parroquia = "Río Acarigua";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 724; 
		$categoria->municipio_id = 284; 
		$categoria->parroquia = "Capital Esteller";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 725; 
		$categoria->municipio_id = 284; 
		$categoria->parroquia = "Uveral";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 726; 
		$categoria->municipio_id = 285; 
		$categoria->parroquia = "Guanare";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 727; 
		$categoria->municipio_id = 285; 
		$categoria->parroquia = "Córdoba";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 728; 
		$categoria->municipio_id = 285; 
		$categoria->parroquia = "San José de la Montaña";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 729; 
		$categoria->municipio_id = 285; 
		$categoria->parroquia = "San Juan de Guanaguanare";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 730; 
		$categoria->municipio_id = 285; 
		$categoria->parroquia = "Virgen de la Coromoto";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 731; 
		$categoria->municipio_id = 286; 
		$categoria->parroquia = "Guanarito";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 732; 
		$categoria->municipio_id = 286; 
		$categoria->parroquia = "Trinidad de la Capilla";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 733; 
		$categoria->municipio_id = 286; 
		$categoria->parroquia = "Divina Pastora";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 734; 
		$categoria->municipio_id = 287; 
		$categoria->parroquia = "Monseñor José Vicente de Unda";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 735; 
		$categoria->municipio_id = 287; 
		$categoria->parroquia = "Peña Blanca";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 736; 
		$categoria->municipio_id = 288; 
		$categoria->parroquia = "Capital Ospino";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 737; 
		$categoria->municipio_id = 288; 
		$categoria->parroquia = "Aparición";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 738; 
		$categoria->municipio_id = 288; 
		$categoria->parroquia = "La Estación";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 739; 
		$categoria->municipio_id = 289; 
		$categoria->parroquia = "Páez";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 740; 
		$categoria->municipio_id = 289; 
		$categoria->parroquia = "Payara";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 741; 
		$categoria->municipio_id = 289; 
		$categoria->parroquia = "Pimpinela";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 742; 
		$categoria->municipio_id = 289; 
		$categoria->parroquia = "Ramón Peraza";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 743; 
		$categoria->municipio_id = 290; 
		$categoria->parroquia = "Papelón";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 744; 
		$categoria->municipio_id = 290; 
		$categoria->parroquia = "Caño Delgadito";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 745; 
		$categoria->municipio_id = 291; 
		$categoria->parroquia = "San Genaro de Boconoito";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 746; 
		$categoria->municipio_id = 291; 
		$categoria->parroquia = "Antolín Tovar";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 747; 
		$categoria->municipio_id = 292; 
		$categoria->parroquia = "San Rafael de Onoto";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 748; 
		$categoria->municipio_id = 292; 
		$categoria->parroquia = "Santa Fe";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 749; 
		$categoria->municipio_id = 292; 
		$categoria->parroquia = "Thermo Morles";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 750; 
		$categoria->municipio_id = 293; 
		$categoria->parroquia = "Santa Rosalía";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 751; 
		$categoria->municipio_id = 293; 
		$categoria->parroquia = "Florida";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 752; 
		$categoria->municipio_id = 294; 
		$categoria->parroquia = "Sucre";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 753; 
		$categoria->municipio_id = 294; 
		$categoria->parroquia = "Concepción";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 754; 
		$categoria->municipio_id = 294; 
		$categoria->parroquia = "San Rafael de Palo Alzado";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 755; 
		$categoria->municipio_id = 294; 
		$categoria->parroquia = "Uvencio Antonio Velásquez";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 756; 
		$categoria->municipio_id = 294; 
		$categoria->parroquia = "San José de Saguaz";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 757; 
		$categoria->municipio_id = 294; 
		$categoria->parroquia = "Villa Rosa";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 758; 
		$categoria->municipio_id = 295; 
		$categoria->parroquia = "Turén";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 759; 
		$categoria->municipio_id = 295; 
		$categoria->parroquia = "Canelones";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 760; 
		$categoria->municipio_id = 295; 
		$categoria->parroquia = "Santa Cruz";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 761; 
		$categoria->municipio_id = 295; 
		$categoria->parroquia = "San Isidro Labrador";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 762; 
		$categoria->municipio_id = 296; 
		$categoria->parroquia = "Mariño";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 763; 
		$categoria->municipio_id = 296; 
		$categoria->parroquia = "Rómulo Gallegos";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 764; 
		$categoria->municipio_id = 297; 
		$categoria->parroquia = "San José de Aerocuar";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 765; 
		$categoria->municipio_id = 297; 
		$categoria->parroquia = "Tavera Acosta";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 766; 
		$categoria->municipio_id = 298; 
		$categoria->parroquia = "Río Caribe";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 767; 
		$categoria->municipio_id = 298; 
		$categoria->parroquia = "Antonio José de Sucre";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 768; 
		$categoria->municipio_id = 298; 
		$categoria->parroquia = "El Morro de Puerto Santo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 769; 
		$categoria->municipio_id = 298; 
		$categoria->parroquia = "Puerto Santo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 770; 
		$categoria->municipio_id = 298; 
		$categoria->parroquia = "San Juan de las Galdonas";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 771; 
		$categoria->municipio_id = 299; 
		$categoria->parroquia = "El Pilar";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 772; 
		$categoria->municipio_id = 299; 
		$categoria->parroquia = "El Rincón";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 773; 
		$categoria->municipio_id = 299; 
		$categoria->parroquia = "General Francisco Antonio Váquez";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 774; 
		$categoria->municipio_id = 299; 
		$categoria->parroquia = "Guaraúnos";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 775; 
		$categoria->municipio_id = 299; 
		$categoria->parroquia = "Tunapuicito";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 776; 
		$categoria->municipio_id = 299; 
		$categoria->parroquia = "Unión";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 777; 
		$categoria->municipio_id = 300; 
		$categoria->parroquia = "Santa Catalina";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 778; 
		$categoria->municipio_id = 300; 
		$categoria->parroquia = "Santa Rosa";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 779; 
		$categoria->municipio_id = 300; 
		$categoria->parroquia = "Santa Teresa";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 780; 
		$categoria->municipio_id = 300; 
		$categoria->parroquia = "Bolívar";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 781; 
		$categoria->municipio_id = 300; 
		$categoria->parroquia = "Maracapana";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 782; 
		$categoria->municipio_id = 302; 
		$categoria->parroquia = "Libertad";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 783; 
		$categoria->municipio_id = 302; 
		$categoria->parroquia = "El Paujil";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 784; 
		$categoria->municipio_id = 302; 
		$categoria->parroquia = "Yaguaraparo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 785; 
		$categoria->municipio_id = 303; 
		$categoria->parroquia = "Cruz Salmerón Acosta";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 786; 
		$categoria->municipio_id = 303; 
		$categoria->parroquia = "Chacopata";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 787; 
		$categoria->municipio_id = 303; 
		$categoria->parroquia = "Manicuare";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 788; 
		$categoria->municipio_id = 304; 
		$categoria->parroquia = "Tunapuy";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 789; 
		$categoria->municipio_id = 304; 
		$categoria->parroquia = "Campo Elías";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 790; 
		$categoria->municipio_id = 305; 
		$categoria->parroquia = "Irapa";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 791; 
		$categoria->municipio_id = 305; 
		$categoria->parroquia = "Campo Claro";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 792; 
		$categoria->municipio_id = 305; 
		$categoria->parroquia = "Maraval";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 793; 
		$categoria->municipio_id = 305; 
		$categoria->parroquia = "San Antonio de Irapa";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 794; 
		$categoria->municipio_id = 305; 
		$categoria->parroquia = "Soro";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 795; 
		$categoria->municipio_id = 306; 
		$categoria->parroquia = "Mejía";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 796; 
		$categoria->municipio_id = 307; 
		$categoria->parroquia = "Cumanacoa";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 797; 
		$categoria->municipio_id = 307; 
		$categoria->parroquia = "Arenas";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 798; 
		$categoria->municipio_id = 307; 
		$categoria->parroquia = "Aricagua";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 799; 
		$categoria->municipio_id = 307; 
		$categoria->parroquia = "Cogollar";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 800; 
		$categoria->municipio_id = 307; 
		$categoria->parroquia = "San Fernando";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 801; 
		$categoria->municipio_id = 307; 
		$categoria->parroquia = "San Lorenzo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 802; 
		$categoria->municipio_id = 308; 
		$categoria->parroquia = "Villa Frontado (Muelle de Cariaco)";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 803; 
		$categoria->municipio_id = 308; 
		$categoria->parroquia = "Catuaro";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 804; 
		$categoria->municipio_id = 308; 
		$categoria->parroquia = "Rendón";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 805; 
		$categoria->municipio_id = 308; 
		$categoria->parroquia = "San Cruz";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 806; 
		$categoria->municipio_id = 308; 
		$categoria->parroquia = "Santa María";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 807; 
		$categoria->municipio_id = 309; 
		$categoria->parroquia = "Altagracia";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 808; 
		$categoria->municipio_id = 309; 
		$categoria->parroquia = "Santa Inés";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 809; 
		$categoria->municipio_id = 309; 
		$categoria->parroquia = "Valentín Valiente";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 810; 
		$categoria->municipio_id = 309; 
		$categoria->parroquia = "Ayacucho";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 811; 
		$categoria->municipio_id = 309; 
		$categoria->parroquia = "San Juan";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 812; 
		$categoria->municipio_id = 309; 
		$categoria->parroquia = "Raúl Leoni";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 813; 
		$categoria->municipio_id = 309; 
		$categoria->parroquia = "Gran Mariscal";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 814; 
		$categoria->municipio_id = 310; 
		$categoria->parroquia = "Cristóbal Colón";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 815; 
		$categoria->municipio_id = 310; 
		$categoria->parroquia = "Bideau";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 816; 
		$categoria->municipio_id = 310; 
		$categoria->parroquia = "Punta de Piedras";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 817; 
		$categoria->municipio_id = 310; 
		$categoria->parroquia = "Güiria";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 818; 
		$categoria->municipio_id = 341; 
		$categoria->parroquia = "Andrés Bello";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 819; 
		$categoria->municipio_id = 342; 
		$categoria->parroquia = "Antonio Rómulo Costa";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 820; 
		$categoria->municipio_id = 343; 
		$categoria->parroquia = "Ayacucho";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 821; 
		$categoria->municipio_id = 343; 
		$categoria->parroquia = "Rivas Berti";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 822; 
		$categoria->municipio_id = 343; 
		$categoria->parroquia = "San Pedro del Río";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 823; 
		$categoria->municipio_id = 344; 
		$categoria->parroquia = "Bolívar";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 824; 
		$categoria->municipio_id = 344; 
		$categoria->parroquia = "Palotal";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 825; 
		$categoria->municipio_id = 344; 
		$categoria->parroquia = "General Juan Vicente Gómez";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 826; 
		$categoria->municipio_id = 344; 
		$categoria->parroquia = "Isaías Medina Angarita";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 827; 
		$categoria->municipio_id = 345; 
		$categoria->parroquia = "Cárdenas";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 828; 
		$categoria->municipio_id = 345; 
		$categoria->parroquia = "Amenodoro Ángel Lamus";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 829; 
		$categoria->municipio_id = 345; 
		$categoria->parroquia = "La Florida";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 830; 
		$categoria->municipio_id = 346; 
		$categoria->parroquia = "Córdoba";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 831; 
		$categoria->municipio_id = 347; 
		$categoria->parroquia = "Fernández Feo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 832; 
		$categoria->municipio_id = 347; 
		$categoria->parroquia = "Alberto Adriani";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 833; 
		$categoria->municipio_id = 347; 
		$categoria->parroquia = "Santo Domingo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 834; 
		$categoria->municipio_id = 348; 
		$categoria->parroquia = "Francisco de Miranda";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 835; 
		$categoria->municipio_id = 349; 
		$categoria->parroquia = "García de Hevia";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 836; 
		$categoria->municipio_id = 349; 
		$categoria->parroquia = "Boca de Grita";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 837; 
		$categoria->municipio_id = 349; 
		$categoria->parroquia = "José Antonio Páez";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 838; 
		$categoria->municipio_id = 350; 
		$categoria->parroquia = "Guásimos";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 839; 
		$categoria->municipio_id = 351; 
		$categoria->parroquia = "Independencia";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 840; 
		$categoria->municipio_id = 351; 
		$categoria->parroquia = "Juan Germán Roscio";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 841; 
		$categoria->municipio_id = 351; 
		$categoria->parroquia = "Román Cárdenas";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 842; 
		$categoria->municipio_id = 352; 
		$categoria->parroquia = "Jáuregui";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 843; 
		$categoria->municipio_id = 352; 
		$categoria->parroquia = "Emilio Constantino Guerrero";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 844; 
		$categoria->municipio_id = 352; 
		$categoria->parroquia = "Monseñor Miguel Antonio Salas";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 845; 
		$categoria->municipio_id = 353; 
		$categoria->parroquia = "José María Vargas";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 846; 
		$categoria->municipio_id = 354; 
		$categoria->parroquia = "Junín";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 847; 
		$categoria->municipio_id = 354; 
		$categoria->parroquia = "La Petrólea";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 848; 
		$categoria->municipio_id = 354; 
		$categoria->parroquia = "Quinimarí";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 849; 
		$categoria->municipio_id = 354; 
		$categoria->parroquia = "Bramón";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 850; 
		$categoria->municipio_id = 355; 
		$categoria->parroquia = "Libertad";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 851; 
		$categoria->municipio_id = 355; 
		$categoria->parroquia = "Cipriano Castro";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 852; 
		$categoria->municipio_id = 355; 
		$categoria->parroquia = "Manuel Felipe Rugeles";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 853; 
		$categoria->municipio_id = 356; 
		$categoria->parroquia = "Libertador";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 854; 
		$categoria->municipio_id = 356; 
		$categoria->parroquia = "Doradas";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 855; 
		$categoria->municipio_id = 356; 
		$categoria->parroquia = "Emeterio Ochoa";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 856; 
		$categoria->municipio_id = 356; 
		$categoria->parroquia = "San Joaquín de Navay";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 857; 
		$categoria->municipio_id = 357; 
		$categoria->parroquia = "Lobatera";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 858; 
		$categoria->municipio_id = 357; 
		$categoria->parroquia = "Constitución";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 859; 
		$categoria->municipio_id = 358; 
		$categoria->parroquia = "Michelena";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 860; 
		$categoria->municipio_id = 359; 
		$categoria->parroquia = "Panamericano";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 861; 
		$categoria->municipio_id = 359; 
		$categoria->parroquia = "La Palmita";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 862; 
		$categoria->municipio_id = 360; 
		$categoria->parroquia = "Pedro María Ureña";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 863; 
		$categoria->municipio_id = 360; 
		$categoria->parroquia = "Nueva Arcadia";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 864; 
		$categoria->municipio_id = 361; 
		$categoria->parroquia = "Delicias";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 865; 
		$categoria->municipio_id = 361; 
		$categoria->parroquia = "Pecaya";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 866; 
		$categoria->municipio_id = 362; 
		$categoria->parroquia = "Samuel Darío Maldonado";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 867; 
		$categoria->municipio_id = 362; 
		$categoria->parroquia = "Boconó";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 868; 
		$categoria->municipio_id = 362; 
		$categoria->parroquia = "Hernández";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 869; 
		$categoria->municipio_id = 363; 
		$categoria->parroquia = "La Concordia";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 870; 
		$categoria->municipio_id = 363; 
		$categoria->parroquia = "San Juan Bautista";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 871; 
		$categoria->municipio_id = 363; 
		$categoria->parroquia = "Pedro María Morantes";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 872; 
		$categoria->municipio_id = 363; 
		$categoria->parroquia = "San Sebastián";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 873; 
		$categoria->municipio_id = 363; 
		$categoria->parroquia = "Dr. Francisco Romero Lobo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 874; 
		$categoria->municipio_id = 364; 
		$categoria->parroquia = "Seboruco";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 875; 
		$categoria->municipio_id = 365; 
		$categoria->parroquia = "Simón Rodríguez";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 876; 
		$categoria->municipio_id = 366; 
		$categoria->parroquia = "Sucre";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 877; 
		$categoria->municipio_id = 366; 
		$categoria->parroquia = "Eleazar López Contreras";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 878; 
		$categoria->municipio_id = 366; 
		$categoria->parroquia = "San Pablo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 879; 
		$categoria->municipio_id = 367; 
		$categoria->parroquia = "Torbes";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 880; 
		$categoria->municipio_id = 368; 
		$categoria->parroquia = "Uribante";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 881; 
		$categoria->municipio_id = 368; 
		$categoria->parroquia = "Cárdenas";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 882; 
		$categoria->municipio_id = 368; 
		$categoria->parroquia = "Juan Pablo Peñalosa";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 883; 
		$categoria->municipio_id = 368; 
		$categoria->parroquia = "Potosí";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 884; 
		$categoria->municipio_id = 369; 
		$categoria->parroquia = "San Judas Tadeo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 885; 
		$categoria->municipio_id = 370; 
		$categoria->parroquia = "Araguaney";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 886; 
		$categoria->municipio_id = 370; 
		$categoria->parroquia = "El Jaguito";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 887; 
		$categoria->municipio_id = 370; 
		$categoria->parroquia = "La Esperanza";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 888; 
		$categoria->municipio_id = 370; 
		$categoria->parroquia = "Santa Isabel";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 889; 
		$categoria->municipio_id = 371; 
		$categoria->parroquia = "Boconó";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 890; 
		$categoria->municipio_id = 371; 
		$categoria->parroquia = "El Carmen";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 891; 
		$categoria->municipio_id = 371; 
		$categoria->parroquia = "Mosquey";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 892; 
		$categoria->municipio_id = 371; 
		$categoria->parroquia = "Ayacucho";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 893; 
		$categoria->municipio_id = 371; 
		$categoria->parroquia = "Burbusay";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 894; 
		$categoria->municipio_id = 371; 
		$categoria->parroquia = "General Ribas";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 895; 
		$categoria->municipio_id = 371; 
		$categoria->parroquia = "Guaramacal";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 896; 
		$categoria->municipio_id = 371; 
		$categoria->parroquia = "Vega de Guaramacal";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 897; 
		$categoria->municipio_id = 371; 
		$categoria->parroquia = "Monseñor Jáuregui";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 898; 
		$categoria->municipio_id = 371; 
		$categoria->parroquia = "Rafael Rangel";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 899; 
		$categoria->municipio_id = 371; 
		$categoria->parroquia = "San Miguel";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 900; 
		$categoria->municipio_id = 371; 
		$categoria->parroquia = "San José";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 901; 
		$categoria->municipio_id = 372; 
		$categoria->parroquia = "Sabana Grande";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 902; 
		$categoria->municipio_id = 372; 
		$categoria->parroquia = "Cheregüé";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 903; 
		$categoria->municipio_id = 372; 
		$categoria->parroquia = "Granados";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 904; 
		$categoria->municipio_id = 373; 
		$categoria->parroquia = "Arnoldo Gabaldón";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 905; 
		$categoria->municipio_id = 373; 
		$categoria->parroquia = "Bolivia";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 906; 
		$categoria->municipio_id = 373; 
		$categoria->parroquia = "Carrillo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 907; 
		$categoria->municipio_id = 373; 
		$categoria->parroquia = "Cegarra";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 908; 
		$categoria->municipio_id = 373; 
		$categoria->parroquia = "Chejendé";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 909; 
		$categoria->municipio_id = 373; 
		$categoria->parroquia = "Manuel Salvador Ulloa";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 910; 
		$categoria->municipio_id = 373; 
		$categoria->parroquia = "San José";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 911; 
		$categoria->municipio_id = 374; 
		$categoria->parroquia = "Carache";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 912; 
		$categoria->municipio_id = 374; 
		$categoria->parroquia = "La Concepción";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 913; 
		$categoria->municipio_id = 374; 
		$categoria->parroquia = "Cuicas";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 914; 
		$categoria->municipio_id = 374; 
		$categoria->parroquia = "Panamericana";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 915; 
		$categoria->municipio_id = 374; 
		$categoria->parroquia = "Santa Cruz";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 916; 
		$categoria->municipio_id = 375; 
		$categoria->parroquia = "Escuque";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 917; 
		$categoria->municipio_id = 375; 
		$categoria->parroquia = "La Unión";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 918; 
		$categoria->municipio_id = 375; 
		$categoria->parroquia = "Santa Rita";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 919; 
		$categoria->municipio_id = 375; 
		$categoria->parroquia = "Sabana Libre";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 920; 
		$categoria->municipio_id = 376; 
		$categoria->parroquia = "El Socorro";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 921; 
		$categoria->municipio_id = 376; 
		$categoria->parroquia = "Los Caprichos";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 922; 
		$categoria->municipio_id = 376; 
		$categoria->parroquia = "Antonio José de Sucre";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 923; 
		$categoria->municipio_id = 377; 
		$categoria->parroquia = "Campo Elías";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 924; 
		$categoria->municipio_id = 377; 
		$categoria->parroquia = "Arnoldo Gabaldón";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 925; 
		$categoria->municipio_id = 378; 
		$categoria->parroquia = "Santa Apolonia";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 926; 
		$categoria->municipio_id = 378; 
		$categoria->parroquia = "El Progreso";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 927; 
		$categoria->municipio_id = 378; 
		$categoria->parroquia = "La Ceiba";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 928; 
		$categoria->municipio_id = 378; 
		$categoria->parroquia = "Tres de Febrero";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 929; 
		$categoria->municipio_id = 379; 
		$categoria->parroquia = "El Dividive";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 930; 
		$categoria->municipio_id = 379; 
		$categoria->parroquia = "Agua Santa";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 931; 
		$categoria->municipio_id = 379; 
		$categoria->parroquia = "Agua Caliente";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 932; 
		$categoria->municipio_id = 379; 
		$categoria->parroquia = "El Cenizo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 933; 
		$categoria->municipio_id = 379; 
		$categoria->parroquia = "Valerita";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 934; 
		$categoria->municipio_id = 380; 
		$categoria->parroquia = "Monte Carmelo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 935; 
		$categoria->municipio_id = 380; 
		$categoria->parroquia = "Buena Vista";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 936; 
		$categoria->municipio_id = 380; 
		$categoria->parroquia = "Santa María del Horcón";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 937; 
		$categoria->municipio_id = 381; 
		$categoria->parroquia = "Motatán";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 938; 
		$categoria->municipio_id = 381; 
		$categoria->parroquia = "El Baño";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 939; 
		$categoria->municipio_id = 381; 
		$categoria->parroquia = "Jalisco";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 940; 
		$categoria->municipio_id = 382; 
		$categoria->parroquia = "Pampán";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 941; 
		$categoria->municipio_id = 382; 
		$categoria->parroquia = "Flor de Patria";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 942; 
		$categoria->municipio_id = 382; 
		$categoria->parroquia = "La Paz";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 943; 
		$categoria->municipio_id = 382; 
		$categoria->parroquia = "Santa Ana";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 944; 
		$categoria->municipio_id = 383; 
		$categoria->parroquia = "Pampanito";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 945; 
		$categoria->municipio_id = 383; 
		$categoria->parroquia = "La Concepción";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 946; 
		$categoria->municipio_id = 383; 
		$categoria->parroquia = "Pampanito II";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 947; 
		$categoria->municipio_id = 384; 
		$categoria->parroquia = "Betijoque";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 948; 
		$categoria->municipio_id = 384; 
		$categoria->parroquia = "José Gregorio Hernández";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 949; 
		$categoria->municipio_id = 384; 
		$categoria->parroquia = "La Pueblita";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 950; 
		$categoria->municipio_id = 384; 
		$categoria->parroquia = "Los Cedros";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 951; 
		$categoria->municipio_id = 385; 
		$categoria->parroquia = "Carvajal";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 952; 
		$categoria->municipio_id = 385; 
		$categoria->parroquia = "Campo Alegre";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 953; 
		$categoria->municipio_id = 385; 
		$categoria->parroquia = "Antonio Nicolás Briceño";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 954; 
		$categoria->municipio_id = 385; 
		$categoria->parroquia = "José Leonardo Suárez";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 955; 
		$categoria->municipio_id = 386; 
		$categoria->parroquia = "Sabana de Mendoza";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 956; 
		$categoria->municipio_id = 386; 
		$categoria->parroquia = "Junín";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 957; 
		$categoria->municipio_id = 386; 
		$categoria->parroquia = "Valmore Rodríguez";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 958; 
		$categoria->municipio_id = 386; 
		$categoria->parroquia = "El Paraíso";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 959; 
		$categoria->municipio_id = 387; 
		$categoria->parroquia = "Andrés Linares";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 960; 
		$categoria->municipio_id = 387; 
		$categoria->parroquia = "Chiquinquirá";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 961; 
		$categoria->municipio_id = 387; 
		$categoria->parroquia = "Cristóbal Mendoza";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 962; 
		$categoria->municipio_id = 387; 
		$categoria->parroquia = "Cruz Carrillo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 963; 
		$categoria->municipio_id = 387; 
		$categoria->parroquia = "Matriz";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 964; 
		$categoria->municipio_id = 387; 
		$categoria->parroquia = "Monseñor Carrillo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 965; 
		$categoria->municipio_id = 387; 
		$categoria->parroquia = "Tres Esquinas";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 966; 
		$categoria->municipio_id = 388; 
		$categoria->parroquia = "Cabimbú";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 967; 
		$categoria->municipio_id = 388; 
		$categoria->parroquia = "Jajó";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 968; 
		$categoria->municipio_id = 388; 
		$categoria->parroquia = "La Mesa de Esnujaque";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 969; 
		$categoria->municipio_id = 388; 
		$categoria->parroquia = "Santiago";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 970; 
		$categoria->municipio_id = 388; 
		$categoria->parroquia = "Tuñame";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 971; 
		$categoria->municipio_id = 388; 
		$categoria->parroquia = "La Quebrada";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 972; 
		$categoria->municipio_id = 389; 
		$categoria->parroquia = "Juan Ignacio Montilla";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 973; 
		$categoria->municipio_id = 389; 
		$categoria->parroquia = "La Beatriz";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 974; 
		$categoria->municipio_id = 389; 
		$categoria->parroquia = "La Puerta";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 975; 
		$categoria->municipio_id = 389; 
		$categoria->parroquia = "Mendoza del Valle de Momboy";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 976; 
		$categoria->municipio_id = 389; 
		$categoria->parroquia = "Mercedes Díaz";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 977; 
		$categoria->municipio_id = 389; 
		$categoria->parroquia = "San Luis";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 978; 
		$categoria->municipio_id = 390; 
		$categoria->parroquia = "Caraballeda";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 979; 
		$categoria->municipio_id = 390; 
		$categoria->parroquia = "Carayaca";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 980; 
		$categoria->municipio_id = 390; 
		$categoria->parroquia = "Carlos Soublette";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 981; 
		$categoria->municipio_id = 390; 
		$categoria->parroquia = "Caruao Chuspa";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 982; 
		$categoria->municipio_id = 390; 
		$categoria->parroquia = "Catia La Mar";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 983; 
		$categoria->municipio_id = 390; 
		$categoria->parroquia = "El Junko";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 984; 
		$categoria->municipio_id = 390; 
		$categoria->parroquia = "La Guaira";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 985; 
		$categoria->municipio_id = 390; 
		$categoria->parroquia = "Macuto";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 986; 
		$categoria->municipio_id = 390; 
		$categoria->parroquia = "Maiquetía";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 987; 
		$categoria->municipio_id = 390; 
		$categoria->parroquia = "Naiguatá";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 988; 
		$categoria->municipio_id = 390; 
		$categoria->parroquia = "Urimare";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 989; 
		$categoria->municipio_id = 391; 
		$categoria->parroquia = "Arístides Bastidas";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 990; 
		$categoria->municipio_id = 392; 
		$categoria->parroquia = "Bolívar";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 991; 
		$categoria->municipio_id = 407; 
		$categoria->parroquia = "Chivacoa";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 992; 
		$categoria->municipio_id = 407; 
		$categoria->parroquia = "Campo Elías";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 993; 
		$categoria->municipio_id = 408; 
		$categoria->parroquia = "Cocorote";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 994; 
		$categoria->municipio_id = 409; 
		$categoria->parroquia = "Independencia";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 995; 
		$categoria->municipio_id = 410; 
		$categoria->parroquia = "José Antonio Páez";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 996; 
		$categoria->municipio_id = 411; 
		$categoria->parroquia = "La Trinidad";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 997; 
		$categoria->municipio_id = 412; 
		$categoria->parroquia = "Manuel Monge";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 998; 
		$categoria->municipio_id = 413; 
		$categoria->parroquia = "Salóm";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 999; 
		$categoria->municipio_id = 413; 
		$categoria->parroquia = "Temerla";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1000; 
		$categoria->municipio_id = 413; 
		$categoria->parroquia = "Nirgua";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1001; 
		$categoria->municipio_id = 414; 
		$categoria->parroquia = "San Andrés";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1002; 
		$categoria->municipio_id = 414; 
		$categoria->parroquia = "Yaritagua";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1003; 
		$categoria->municipio_id = 415; 
		$categoria->parroquia = "San Javier";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1004; 
		$categoria->municipio_id = 415; 
		$categoria->parroquia = "Albarico";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1005; 
		$categoria->municipio_id = 415; 
		$categoria->parroquia = "San Felipe";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1006; 
		$categoria->municipio_id = 416; 
		$categoria->parroquia = "Sucre";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1007; 
		$categoria->municipio_id = 417; 
		$categoria->parroquia = "Urachiche";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1008; 
		$categoria->municipio_id = 418; 
		$categoria->parroquia = "El Guayabo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1009; 
		$categoria->municipio_id = 418; 
		$categoria->parroquia = "Farriar";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1010; 
		$categoria->municipio_id = 441; 
		$categoria->parroquia = "Isla de Toas";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1011; 
		$categoria->municipio_id = 441; 
		$categoria->parroquia = "Monagas";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1012; 
		$categoria->municipio_id = 442; 
		$categoria->parroquia = "San Timoteo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1013; 
		$categoria->municipio_id = 442; 
		$categoria->parroquia = "General Urdaneta";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1014; 
		$categoria->municipio_id = 442; 
		$categoria->parroquia = "Libertador";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1015; 
		$categoria->municipio_id = 442; 
		$categoria->parroquia = "Marcelino Briceño";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1016; 
		$categoria->municipio_id = 442; 
		$categoria->parroquia = "Pueblo Nuevo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1017; 
		$categoria->municipio_id = 442; 
		$categoria->parroquia = "Manuel Guanipa Matos";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1018; 
		$categoria->municipio_id = 443; 
		$categoria->parroquia = "Ambrosio";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1019; 
		$categoria->municipio_id = 443; 
		$categoria->parroquia = "Carmen Herrera";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1020; 
		$categoria->municipio_id = 443; 
		$categoria->parroquia = "La Rosa";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1021; 
		$categoria->municipio_id = 443; 
		$categoria->parroquia = "Germán Ríos Linares";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1022; 
		$categoria->municipio_id = 443; 
		$categoria->parroquia = "San Benito";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1023; 
		$categoria->municipio_id = 443; 
		$categoria->parroquia = "Rómulo Betancourt";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1024; 
		$categoria->municipio_id = 443; 
		$categoria->parroquia = "Jorge Hernández";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1025; 
		$categoria->municipio_id = 443; 
		$categoria->parroquia = "Punta Gorda";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1026; 
		$categoria->municipio_id = 443; 
		$categoria->parroquia = "Arístides Calvani";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1027; 
		$categoria->municipio_id = 444; 
		$categoria->parroquia = "Encontrados";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1028; 
		$categoria->municipio_id = 444; 
		$categoria->parroquia = "Udón Pérez";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1029; 
		$categoria->municipio_id = 445; 
		$categoria->parroquia = "Moralito";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1030; 
		$categoria->municipio_id = 445; 
		$categoria->parroquia = "San Carlos del Zulia";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1031; 
		$categoria->municipio_id = 445; 
		$categoria->parroquia = "Santa Cruz del Zulia";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1032; 
		$categoria->municipio_id = 445; 
		$categoria->parroquia = "Santa Bárbara";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1033; 
		$categoria->municipio_id = 445; 
		$categoria->parroquia = "Urribarrí";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1034; 
		$categoria->municipio_id = 446; 
		$categoria->parroquia = "Carlos Quevedo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1035; 
		$categoria->municipio_id = 446; 
		$categoria->parroquia = "Francisco Javier Pulgar";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1036; 
		$categoria->municipio_id = 446; 
		$categoria->parroquia = "Simón Rodríguez";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1037; 
		$categoria->municipio_id = 446; 
		$categoria->parroquia = "Guamo-Gavilanes";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1038; 
		$categoria->municipio_id = 448; 
		$categoria->parroquia = "La Concepción";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1039; 
		$categoria->municipio_id = 448; 
		$categoria->parroquia = "San José";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1040; 
		$categoria->municipio_id = 448; 
		$categoria->parroquia = "Mariano Parra León";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1041; 
		$categoria->municipio_id = 448; 
		$categoria->parroquia = "José Ramón Yépez";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1042; 
		$categoria->municipio_id = 449; 
		$categoria->parroquia = "Jesús María Semprún";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1043; 
		$categoria->municipio_id = 449; 
		$categoria->parroquia = "Barí";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1044; 
		$categoria->municipio_id = 450; 
		$categoria->parroquia = "Concepción";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1045; 
		$categoria->municipio_id = 450; 
		$categoria->parroquia = "Andrés Bello";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1046; 
		$categoria->municipio_id = 450; 
		$categoria->parroquia = "Chiquinquirá";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1047; 
		$categoria->municipio_id = 450; 
		$categoria->parroquia = "El Carmelo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1048; 
		$categoria->municipio_id = 450; 
		$categoria->parroquia = "Potreritos";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1049; 
		$categoria->municipio_id = 451; 
		$categoria->parroquia = "Libertad";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1050; 
		$categoria->municipio_id = 451; 
		$categoria->parroquia = "Alonso de Ojeda";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1051; 
		$categoria->municipio_id = 451; 
		$categoria->parroquia = "Venezuela";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1052; 
		$categoria->municipio_id = 451; 
		$categoria->parroquia = "Eleazar López Contreras";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1053; 
		$categoria->municipio_id = 451; 
		$categoria->parroquia = "Campo Lara";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1054; 
		$categoria->municipio_id = 452; 
		$categoria->parroquia = "Bartolomé de las Casas";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1055; 
		$categoria->municipio_id = 452; 
		$categoria->parroquia = "Libertad";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1056; 
		$categoria->municipio_id = 452; 
		$categoria->parroquia = "Río Negro";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1057; 
		$categoria->municipio_id = 452; 
		$categoria->parroquia = "San José de Perijá";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1058; 
		$categoria->municipio_id = 453; 
		$categoria->parroquia = "San Rafael";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1059; 
		$categoria->municipio_id = 453; 
		$categoria->parroquia = "La Sierrita";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1060; 
		$categoria->municipio_id = 453; 
		$categoria->parroquia = "Las Parcelas";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1061; 
		$categoria->municipio_id = 453; 
		$categoria->parroquia = "Luis de Vicente";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1062; 
		$categoria->municipio_id = 453; 
		$categoria->parroquia = "Monseñor Marcos Sergio Godoy";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1063; 
		$categoria->municipio_id = 453; 
		$categoria->parroquia = "Ricaurte";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1064; 
		$categoria->municipio_id = 453; 
		$categoria->parroquia = "Tamare";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1065; 
		$categoria->municipio_id = 454; 
		$categoria->parroquia = "Antonio Borjas Romero";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1066; 
		$categoria->municipio_id = 454; 
		$categoria->parroquia = "Bolívar";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1067; 
		$categoria->municipio_id = 454; 
		$categoria->parroquia = "Cacique Mara";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1068; 
		$categoria->municipio_id = 454; 
		$categoria->parroquia = "Carracciolo Parra Pérez";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1069; 
		$categoria->municipio_id = 454; 
		$categoria->parroquia = "Cecilio Acosta";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1070; 
		$categoria->municipio_id = 454; 
		$categoria->parroquia = "Cristo de Aranza";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1071; 
		$categoria->municipio_id = 454; 
		$categoria->parroquia = "Coquivacoa";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1072; 
		$categoria->municipio_id = 454; 
		$categoria->parroquia = "Chiquinquirá";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1073; 
		$categoria->municipio_id = 454; 
		$categoria->parroquia = "Francisco Eugenio Bustamante";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1074; 
		$categoria->municipio_id = 454; 
		$categoria->parroquia = "Idelfonzo Vásquez";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1075; 
		$categoria->municipio_id = 454; 
		$categoria->parroquia = "Juana de Ávila";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1076; 
		$categoria->municipio_id = 454; 
		$categoria->parroquia = "Luis Hurtado Higuera";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1077; 
		$categoria->municipio_id = 454; 
		$categoria->parroquia = "Manuel Dagnino";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1078; 
		$categoria->municipio_id = 454; 
		$categoria->parroquia = "Olegario Villalobos";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1079; 
		$categoria->municipio_id = 454; 
		$categoria->parroquia = "Raúl Leoni";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1080; 
		$categoria->municipio_id = 454; 
		$categoria->parroquia = "Santa Lucía";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1081; 
		$categoria->municipio_id = 454; 
		$categoria->parroquia = "Venancio Pulgar";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1082; 
		$categoria->municipio_id = 454; 
		$categoria->parroquia = "San Isidro";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1083; 
		$categoria->municipio_id = 455; 
		$categoria->parroquia = "Altagracia";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1084; 
		$categoria->municipio_id = 455; 
		$categoria->parroquia = "Faría";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1085; 
		$categoria->municipio_id = 455; 
		$categoria->parroquia = "Ana María Campos";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1086; 
		$categoria->municipio_id = 455; 
		$categoria->parroquia = "San Antonio";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1087; 
		$categoria->municipio_id = 455; 
		$categoria->parroquia = "San José";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1088; 
		$categoria->municipio_id = 456; 
		$categoria->parroquia = "Donaldo García";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1089; 
		$categoria->municipio_id = 456; 
		$categoria->parroquia = "El Rosario";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1090; 
		$categoria->municipio_id = 456; 
		$categoria->parroquia = "Sixto Zambrano";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1091; 
		$categoria->municipio_id = 457; 
		$categoria->parroquia = "San Francisco";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1092; 
		$categoria->municipio_id = 457; 
		$categoria->parroquia = "El Bajo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1093; 
		$categoria->municipio_id = 457; 
		$categoria->parroquia = "Domitila Flores";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1094; 
		$categoria->municipio_id = 457; 
		$categoria->parroquia = "Francisco Ochoa";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1095; 
		$categoria->municipio_id = 457; 
		$categoria->parroquia = "Los Cortijos";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1096; 
		$categoria->municipio_id = 457; 
		$categoria->parroquia = "Marcial Hernández";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1097; 
		$categoria->municipio_id = 458; 
		$categoria->parroquia = "Santa Rita";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1098; 
		$categoria->municipio_id = 458; 
		$categoria->parroquia = "El Mene";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1099; 
		$categoria->municipio_id = 458; 
		$categoria->parroquia = "Pedro Lucas Urribarrí";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1100; 
		$categoria->municipio_id = 458; 
		$categoria->parroquia = "José Cenobio Urribarrí";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1101; 
		$categoria->municipio_id = 459; 
		$categoria->parroquia = "Rafael Maria Baralt";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1102; 
		$categoria->municipio_id = 459; 
		$categoria->parroquia = "Manuel Manrique";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1103; 
		$categoria->municipio_id = 459; 
		$categoria->parroquia = "Rafael Urdaneta";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1104; 
		$categoria->municipio_id = 460; 
		$categoria->parroquia = "Bobures";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1105; 
		$categoria->municipio_id = 460; 
		$categoria->parroquia = "Gibraltar";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1106; 
		$categoria->municipio_id = 460; 
		$categoria->parroquia = "Heras";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1107; 
		$categoria->municipio_id = 460; 
		$categoria->parroquia = "Monseñor Arturo Álvarez";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1108; 
		$categoria->municipio_id = 460; 
		$categoria->parroquia = "Rómulo Gallegos";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1109; 
		$categoria->municipio_id = 460; 
		$categoria->parroquia = "El Batey";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1110; 
		$categoria->municipio_id = 461; 
		$categoria->parroquia = "Rafael Urdaneta";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1111; 
		$categoria->municipio_id = 461; 
		$categoria->parroquia = "La Victoria";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1112; 
		$categoria->municipio_id = 461; 
		$categoria->parroquia = "Raúl Cuenca";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1113; 
		$categoria->municipio_id = 447; 
		$categoria->parroquia = "Sinamaica";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1114; 
		$categoria->municipio_id = 447; 
		$categoria->parroquia = "Alta Guajira";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1115; 
		$categoria->municipio_id = 447; 
		$categoria->parroquia = "Elías Sánchez Rubio";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1116; 
		$categoria->municipio_id = 447; 
		$categoria->parroquia = "Guajira";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1117; 
		$categoria->municipio_id = 462; 
		$categoria->parroquia = "Altagracia";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1118; 
		$categoria->municipio_id = 462; 
		$categoria->parroquia = "Antímano";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1119; 
		$categoria->municipio_id = 462; 
		$categoria->parroquia = "Caricuao";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1120; 
		$categoria->municipio_id = 462; 
		$categoria->parroquia = "Catedral";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1121; 
		$categoria->municipio_id = 462; 
		$categoria->parroquia = "Coche";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1122; 
		$categoria->municipio_id = 462; 
		$categoria->parroquia = "El Junquito";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1123; 
		$categoria->municipio_id = 462; 
		$categoria->parroquia = "El Paraíso";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1124; 
		$categoria->municipio_id = 462; 
		$categoria->parroquia = "El Recreo";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1125; 
		$categoria->municipio_id = 462; 
		$categoria->parroquia = "El Valle";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1126; 
		$categoria->municipio_id = 462; 
		$categoria->parroquia = "La Candelaria";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1127; 
		$categoria->municipio_id = 462; 
		$categoria->parroquia = "La Pastora";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1128; 
		$categoria->municipio_id = 462; 
		$categoria->parroquia = "La Vega";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1129; 
		$categoria->municipio_id = 462; 
		$categoria->parroquia = "Macarao";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1130; 
		$categoria->municipio_id = 462; 
		$categoria->parroquia = "San Agustín";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1131; 
		$categoria->municipio_id = 462; 
		$categoria->parroquia = "San Bernardino";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1132; 
		$categoria->municipio_id = 462; 
		$categoria->parroquia = "San José";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1133; 
		$categoria->municipio_id = 462; 
		$categoria->parroquia = "San Juan";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1134; 
		$categoria->municipio_id = 462; 
		$categoria->parroquia = "San Pedro";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1135; 
		$categoria->municipio_id = 462; 
		$categoria->parroquia = "Santa Rosalía";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1136; 
		$categoria->municipio_id = 462; 
		$categoria->parroquia = "Santa Teresa";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1137; 
		$categoria->municipio_id = 462; 
		$categoria->parroquia = "Sucre (Catia)";
		$categoria->save();

		$categoria = new Parroquia();
		$categoria->id = 1138; 
		$categoria->municipio_id = 462; 
		$categoria->parroquia = "23 de enero";
		$categoria->save();
	}

}
