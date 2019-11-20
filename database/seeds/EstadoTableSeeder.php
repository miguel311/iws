<?php

use Illuminate\Database\Seeder;
use App\State;
use App\Municipality;
use App\Parish;


class EstadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
public function run()
	{

		/* states */
		$categoria = new State();
		$categoria->id = 1; 
		$categoria->state = "Amazonas"; 
		$categoria->save();

		$categoria = new State();
		$categoria->id = 2; 
		$categoria->state = "Anzoátegui"; 
		$categoria->save();

		$categoria = new State();
		$categoria->id = 3; 
		$categoria->state = "Apure"; 
		$categoria->save();

		$categoria = new State();
		$categoria->id = 4; 
		$categoria->state = "Aragua"; 
		$categoria->save();

		$categoria = new State();
		$categoria->id = 5; 
		$categoria->state = "Barinas"; 
		$categoria->save();

		$categoria = new State();
		$categoria->id = 6; 
		$categoria->state = "Bolívar"; 
		$categoria->save();

		$categoria = new State();
		$categoria->id = 7; 
		$categoria->state = "Carabobo"; 
		$categoria->save();

		$categoria = new State();
		$categoria->id = 8; 
		$categoria->state = "Cojedes"; 
		$categoria->save();

		$categoria = new State();
		$categoria->id = 9; 
		$categoria->state = "Delta Amacuro"; 
		$categoria->save();

		$categoria = new State();
		$categoria->id = 10; 
		$categoria->state = "Falcón"; 
		$categoria->save();

		$categoria = new State();
		$categoria->id = 11; 
		$categoria->state = "Guárico"; 
		$categoria->save();

		$categoria = new State();
		$categoria->id = 12; 
		$categoria->state = "Lara"; 
		$categoria->save();

		$categoria = new State();
		$categoria->id = 13; 
		$categoria->state = "Mérida";
		$categoria->save();

		$categoria = new State();
		$categoria->id = 14; 
		$categoria->state = "Miranda"; 
		$categoria->save();

		$categoria = new State();
		$categoria->id = 15; 
		$categoria->state = "Monagas"; 
		$categoria->save();

		$categoria = new State();
		$categoria->id = 16; 
		$categoria->state = "Nueva Esparta"; 
		$categoria->save();

		$categoria = new State();
		$categoria->id = 17; 
		$categoria->state = "Portuguesa"; 
		$categoria->save();

		$categoria = new State();
		$categoria->id = 18; 
		$categoria->state = "Sucre"; 
		$categoria->save();

		$categoria = new State();
		$categoria->id = 19; 
		$categoria->state = "Táchira"; 
		$categoria->save();

		$categoria = new State();
		$categoria->id = 20; 
		$categoria->state = "Trujillo"; 
		$categoria->save();

		$categoria = new State();
		$categoria->id = 21; 
		$categoria->state = "Vargas"; 
		$categoria->save();

		$categoria = new State();
		$categoria->id = 22; 
		$categoria->state = "Yaracuy"; 
		$categoria->save();

		$categoria = new State();
		$categoria->id = 23; 
		$categoria->state = "Zulia"; 
		$categoria->save();

		$categoria = new State();
		$categoria->id = 24; 
		$categoria->state = "Distrito Capital"; 
		$categoria->save();

		$categoria = new State();
		$categoria->id = 25; 
		$categoria->state = "Dependencias Federales"; 
		$categoria->save();




		/* municipalitiesS */
		$categoria = new Municipality();
		$categoria->id = 1; 
		$categoria->states_id = 1; 
		$categoria->municipalities = "Alto Orinoco";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 2; 
		$categoria->states_id = 1; 
		$categoria->municipalities = "Atabapo";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 3; 
		$categoria->states_id = 1; 
		$categoria->municipalities = "Atures";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 4; 
		$categoria->states_id = 1; 
		$categoria->municipalities = "Autana";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 5; 
		$categoria->states_id = 1; 
		$categoria->municipalities = "Manapiare";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 6; 
		$categoria->states_id = 1; 
		$categoria->municipalities = "Maroa";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 7; 
		$categoria->states_id = 1; 
		$categoria->municipalities = "Río Negro";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 8; 
		$categoria->states_id = 2; 
		$categoria->municipalities = "Anaco";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 9; 
		$categoria->states_id = 2; 
		$categoria->municipalities = "Aragua";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 10; 
		$categoria->states_id = 2; 
		$categoria->municipalities = "Manuel Ezequiel Bruzual";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 11; 
		$categoria->states_id = 2; 
		$categoria->municipalities = "Diego Bautista Urbaneja";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 12; 
		$categoria->states_id = 2; 
		$categoria->municipalities = "Fernando Peñalver";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 13; 
		$categoria->states_id = 2; 
		$categoria->municipalities = "Francisco Del Carmen Carvajal";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 14; 
		$categoria->states_id = 2; 
		$categoria->municipalities = "General Sir Arthur McGregor";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 15; 
		$categoria->states_id = 2; 
		$categoria->municipalities = "Guanta";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 16; 
		$categoria->states_id = 2; 
		$categoria->municipalities = "Independencia";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 17; 
		$categoria->states_id = 2; 
		$categoria->municipalities = "José Gregorio Monagas";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 18; 
		$categoria->states_id = 2; 
		$categoria->municipalities = "Juan Antonio Sotillo";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 19; 
		$categoria->states_id = 2; 
		$categoria->municipalities = "Juan Manuel Cajigal";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 20; 
		$categoria->states_id = 2; 
		$categoria->municipalities = "Libertad";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 21; 
		$categoria->states_id = 2; 
		$categoria->municipalities = "Francisco de Miranda";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 22; 
		$categoria->states_id = 2; 
		$categoria->municipalities = "Pedro María Freites";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 23; 
		$categoria->states_id = 2; 
		$categoria->municipalities = "Píritu";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 24; 
		$categoria->states_id = 2; 
		$categoria->municipalities = "San José de Guanipa";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 25; 
		$categoria->states_id = 2; 
		$categoria->municipalities = "San Juan de Capistrano";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 26; 
		$categoria->states_id = 2; 
		$categoria->municipalities = "Santa Ana";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 27; 
		$categoria->states_id = 2; 
		$categoria->municipalities = "Simón Bolívar";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 28; 
		$categoria->states_id = 2; 
		$categoria->municipalities = "Simón Rodríguez";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 29; 
		$categoria->states_id = 3; 
		$categoria->municipalities = "Achaguas";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 30; 
		$categoria->states_id = 3; 
		$categoria->municipalities = "Biruaca";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 31; 
		$categoria->states_id = 3; 
		$categoria->municipalities = "Muñóz";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 32; 
		$categoria->states_id = 3; 
		$categoria->municipalities = "Páez";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 33; 
		$categoria->states_id = 3; 
		$categoria->municipalities = "Pedro Camejo";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 34; 
		$categoria->states_id = 3; 
		$categoria->municipalities = "Rómulo Gallegos";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 35; 
		$categoria->states_id = 3; 
		$categoria->municipalities = "San Fernando";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 36; 
		$categoria->states_id = 4; 
		$categoria->municipalities = "Atanasio Girardot";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 37; 
		$categoria->states_id = 4; 
		$categoria->municipalities = "Bolívar";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 38; 
		$categoria->states_id = 4; 
		$categoria->municipalities = "Camatagua";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 39; 
		$categoria->states_id = 4; 
		$categoria->municipalities = "Francisco Linares Alcántara";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 40; 
		$categoria->states_id = 4; 
		$categoria->municipalities = "José Ángel Lamas";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 41; 
		$categoria->states_id = 4; 
		$categoria->municipalities = "José Félix Ribas";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 42; 
		$categoria->states_id = 4; 
		$categoria->municipalities = "José Rafael Revenga";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 43; 
		$categoria->states_id = 4; 
		$categoria->municipalities = "Libertador";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 44; 
		$categoria->states_id = 4; 
		$categoria->municipalities = "Mario Briceño Iragorry";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 45; 
		$categoria->states_id = 4; 
		$categoria->municipalities = "Ocumare de la Costa de Oro";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 46; 
		$categoria->states_id = 4; 
		$categoria->municipalities = "San Casimiro";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 47; 
		$categoria->states_id = 4; 
		$categoria->municipalities = "San Sebastián";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 48; 
		$categoria->states_id = 4; 
		$categoria->municipalities = "Santiago Mariño";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 49; 
		$categoria->states_id = 4; 
		$categoria->municipalities = "Santos Michelena";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 50; 
		$categoria->states_id = 4; 
		$categoria->municipalities = "Sucre";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 51; 
		$categoria->states_id = 4; 
		$categoria->municipalities = "Tovar";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 52; 
		$categoria->states_id = 4; 
		$categoria->municipalities = "Urdaneta";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 53; 
		$categoria->states_id = 4; 
		$categoria->municipalities = "Zamora";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 54; 
		$categoria->states_id = 5; 
		$categoria->municipalities = "Alberto Arvelo Torrealba";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 55; 
		$categoria->states_id = 5; 
		$categoria->municipalities = "Andrés Eloy Blanco";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 56; 
		$categoria->states_id = 5; 
		$categoria->municipalities = "Antonio José de Sucre";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 57; 
		$categoria->states_id = 5; 
		$categoria->municipalities = "Arismendi";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 58; 
		$categoria->states_id = 5; 
		$categoria->municipalities = "Barinas";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 59; 
		$categoria->states_id = 5; 
		$categoria->municipalities = "Bolívar";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 60; 
		$categoria->states_id = 5; 
		$categoria->municipalities = "Cruz Paredes";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 61; 
		$categoria->states_id = 5; 
		$categoria->municipalities = "Ezequiel Zamora";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 62; 
		$categoria->states_id = 5; 
		$categoria->municipalities = "Obispos";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 63; 
		$categoria->states_id = 5; 
		$categoria->municipalities = "Pedraza";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 64; 
		$categoria->states_id = 5; 
		$categoria->municipalities = "Rojas";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 65; 
		$categoria->states_id = 5; 
		$categoria->municipalities = "Sosa";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 66; 
		$categoria->states_id = 6; 
		$categoria->municipalities = "Caroní";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 67; 
		$categoria->states_id = 6; 
		$categoria->municipalities = "Cedeño";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 68; 
		$categoria->states_id = 6; 
		$categoria->municipalities = "El Callao";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 69; 
		$categoria->states_id = 6; 
		$categoria->municipalities = "Gran Sabana";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 70; 
		$categoria->states_id = 6; 
		$categoria->municipalities = "Heres";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 71; 
		$categoria->states_id = 6; 
		$categoria->municipalities = "Piar";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 72; 
		$categoria->states_id = 6; 
		$categoria->municipalities = "Angostura (Raúl Leoni)";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 73; 
		$categoria->states_id = 6; 
		$categoria->municipalities = "Roscio";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 74; 
		$categoria->states_id = 6; 
		$categoria->municipalities = "Sifontes";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 75; 
		$categoria->states_id = 6; 
		$categoria->municipalities = "Sucre";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 76; 
		$categoria->states_id = 6; 
		$categoria->municipalities = "Padre Pedro Chien";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 77; 
		$categoria->states_id = 7; 
		$categoria->municipalities = "Bejuma";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 78; 
		$categoria->states_id = 7; 
		$categoria->municipalities = "Carlos Arvelo";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 79; 
		$categoria->states_id = 7; 
		$categoria->municipalities = "Diego Ibarra";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 80; 
		$categoria->states_id = 7; 
		$categoria->municipalities = "Guacara";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 81; 
		$categoria->states_id = 7; 
		$categoria->municipalities = "Juan José Mora";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 82; 
		$categoria->states_id = 7; 
		$categoria->municipalities = "Libertador";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 83; 
		$categoria->states_id = 7; 
		$categoria->municipalities = "Los Guayos";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 84; 
		$categoria->states_id = 7; 
		$categoria->municipalities = "Miranda";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 85; 
		$categoria->states_id = 7; 
		$categoria->municipalities = "Montalbán";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 86; 
		$categoria->states_id = 7; 
		$categoria->municipalities = "Naguanagua";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 87; 
		$categoria->states_id = 7; 
		$categoria->municipalities = "Puerto Cabello";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 88; 
		$categoria->states_id = 7; 
		$categoria->municipalities = "San Diego";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 89; 
		$categoria->states_id = 7; 
		$categoria->municipalities = "San Joaquín";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 90; 
		$categoria->states_id = 7; 
		$categoria->municipalities = "Valencia";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 91; 
		$categoria->states_id = 8; 
		$categoria->municipalities = "Anzoátegui";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 92; 
		$categoria->states_id = 8; 
		$categoria->municipalities = "Tinaquillo";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 93; 
		$categoria->states_id = 8; 
		$categoria->municipalities = "Girardot";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 94; 
		$categoria->states_id = 8; 
		$categoria->municipalities = "Lima Blanco";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 95; 
		$categoria->states_id = 8; 
		$categoria->municipalities = "Pao de San Juan Bautista";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 96; 
		$categoria->states_id = 8; 
		$categoria->municipalities = "Ricaurte";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 97; 
		$categoria->states_id = 8; 
		$categoria->municipalities = "Rómulo Gallegos";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 98; 
		$categoria->states_id = 8; 
		$categoria->municipalities = "San Carlos";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 99; 
		$categoria->states_id = 8; 
		$categoria->municipalities = "Tinaco";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 100; 
		$categoria->states_id = 9; 
		$categoria->municipalities = "Antonio Díaz";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 101; 
		$categoria->states_id = 9; 
		$categoria->municipalities = "Casacoima";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 102; 
		$categoria->states_id = 9; 
		$categoria->municipalities = "Pedernales";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 103; 
		$categoria->states_id = 9; 
		$categoria->municipalities = "Tucupita";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 104; 
		$categoria->states_id = 10; 
		$categoria->municipalities = "Acosta";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 105; 
		$categoria->states_id = 10; 
		$categoria->municipalities = "Bolívar";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 106; 
		$categoria->states_id = 10; 
		$categoria->municipalities = "Buchivacoa";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 107; 
		$categoria->states_id = 10; 
		$categoria->municipalities = "Cacique Manaure";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 108; 
		$categoria->states_id = 10; 
		$categoria->municipalities = "Carirubana";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 109; 
		$categoria->states_id = 10; 
		$categoria->municipalities = "Colina";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 110; 
		$categoria->states_id = 10; 
		$categoria->municipalities = "Dabajuro";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 111; 
		$categoria->states_id = 10; 
		$categoria->municipalities = "Democracia";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 112; 
		$categoria->states_id = 10; 
		$categoria->municipalities = "Falcón";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 113; 
		$categoria->states_id = 10; 
		$categoria->municipalities = "Federación";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 114; 
		$categoria->states_id = 10; 
		$categoria->municipalities = "Jacura";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 115; 
		$categoria->states_id = 10; 
		$categoria->municipalities = "José Laurencio Silva";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 116; 
		$categoria->states_id = 10; 
		$categoria->municipalities = "Los Taques";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 117; 
		$categoria->states_id = 10; 
		$categoria->municipalities = "Mauroa";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 118; 
		$categoria->states_id = 10; 
		$categoria->municipalities = "Miranda";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 119; 
		$categoria->states_id = 10; 
		$categoria->municipalities = "Monseñor Iturriza";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 120; 
		$categoria->states_id = 10; 
		$categoria->municipalities = "Palmasola";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 121; 
		$categoria->states_id = 10; 
		$categoria->municipalities = "Petit";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 122; 
		$categoria->states_id = 10; 
		$categoria->municipalities = "Píritu";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 123; 
		$categoria->states_id = 10; 
		$categoria->municipalities = "San Francisco";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 124; 
		$categoria->states_id = 10; 
		$categoria->municipalities = "Sucre";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 125; 
		$categoria->states_id = 10; 
		$categoria->municipalities = "Tocópero";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 126; 
		$categoria->states_id = 10; 
		$categoria->municipalities = "Unión";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 127; 
		$categoria->states_id = 10; 
		$categoria->municipalities = "Urumaco";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 128; 
		$categoria->states_id = 10; 
		$categoria->municipalities = "Zamora";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 129; 
		$categoria->states_id = 11; 
		$categoria->municipalities = "Camaguán";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 130; 
		$categoria->states_id = 11; 
		$categoria->municipalities = "Chaguaramas";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 131; 
		$categoria->states_id = 11; 
		$categoria->municipalities = "El Socorro";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 132; 
		$categoria->states_id = 11; 
		$categoria->municipalities = "José Félix Ribas";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 133; 
		$categoria->states_id = 11; 
		$categoria->municipalities = "José Tadeo Monagas";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 134; 
		$categoria->states_id = 11; 
		$categoria->municipalities = "Juan Germán Roscio";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 135; 
		$categoria->states_id = 11; 
		$categoria->municipalities = "Julián Mellado";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 136; 
		$categoria->states_id = 11; 
		$categoria->municipalities = "Las Mercedes";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 137; 
		$categoria->states_id = 11; 
		$categoria->municipalities = "Leonardo Infante";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 138; 
		$categoria->states_id = 11; 
		$categoria->municipalities = "Pedro Zaraza";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 139; 
		$categoria->states_id = 11; 
		$categoria->municipalities = "Ortíz";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 140; 
		$categoria->states_id = 11; 
		$categoria->municipalities = "San Gerónimo de Guayabal";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 141; 
		$categoria->states_id = 11; 
		$categoria->municipalities = "San José de Guaribe";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 142; 
		$categoria->states_id = 11; 
		$categoria->municipalities = "Santa María de Ipire";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 143; 
		$categoria->states_id = 11; 
		$categoria->municipalities = "Sebastián Francisco de Miranda";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 144; 
		$categoria->states_id = 12; 
		$categoria->municipalities = "Andrés Eloy Blanco";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 145; 
		$categoria->states_id = 12; 
		$categoria->municipalities = "Crespo";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 146; 
		$categoria->states_id = 12; 
		$categoria->municipalities = "Iribarren";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 147; 
		$categoria->states_id = 12; 
		$categoria->municipalities = "Jiménez";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 148; 
		$categoria->states_id = 12; 
		$categoria->municipalities = "Morán";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 149; 
		$categoria->states_id = 12; 
		$categoria->municipalities = "Palavecino";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 150; 
		$categoria->states_id = 12; 
		$categoria->municipalities = "Simón Planas";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 151; 
		$categoria->states_id = 12; 
		$categoria->municipalities = "Torres";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 152; 
		$categoria->states_id = 12; 
		$categoria->municipalities = "Urdaneta";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 179; 
		$categoria->states_id = 13; 
		$categoria->municipalities = "Alberto Adriani";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 180; 
		$categoria->states_id = 13; 
		$categoria->municipalities = "Andrés Bello";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 181; 
		$categoria->states_id = 13; 
		$categoria->municipalities = "Antonio Pinto Salinas";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 182; 
		$categoria->states_id = 13; 
		$categoria->municipalities = "Aricagua";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 183; 
		$categoria->states_id = 13; 
		$categoria->municipalities = "Arzobispo Chacón";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 184; 
		$categoria->states_id = 13; 
		$categoria->municipalities = "Campo Elías";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 185; 
		$categoria->states_id = 13; 
		$categoria->municipalities = "Caracciolo Parra Olmedo";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 186; 
		$categoria->states_id = 13; 
		$categoria->municipalities = "Cardenal Quintero";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 187; 
		$categoria->states_id = 13; 
		$categoria->municipalities = "Guaraque";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 188; 
		$categoria->states_id = 13; 
		$categoria->municipalities = "Julio César Salas";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 189; 
		$categoria->states_id = 13; 
		$categoria->municipalities = "Justo Briceño";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 190; 
		$categoria->states_id = 13; 
		$categoria->municipalities = "Libertador";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 191; 
		$categoria->states_id = 13; 
		$categoria->municipalities = "Miranda";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 192; 
		$categoria->states_id = 13; 
		$categoria->municipalities = "Obispo Ramos de Lora";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 193; 
		$categoria->states_id = 13; 
		$categoria->municipalities = "Padre Noguera";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 194; 
		$categoria->states_id = 13; 
		$categoria->municipalities = "Pueblo Llano";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 195; 
		$categoria->states_id = 13; 
		$categoria->municipalities = "Rangel";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 196; 
		$categoria->states_id = 13; 
		$categoria->municipalities = "Rivas Dávila";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 197; 
		$categoria->states_id = 13; 
		$categoria->municipalities = "Santos Marquina";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 198; 
		$categoria->states_id = 13; 
		$categoria->municipalities = "Sucre";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 199; 
		$categoria->states_id = 13; 
		$categoria->municipalities = "Tovar";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 200; 
		$categoria->states_id = 13; 
		$categoria->municipalities = "Tulio Febres Cordero";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 201; 
		$categoria->states_id = 13; 
		$categoria->municipalities = "Zea";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 223; 
		$categoria->states_id = 14; 
		$categoria->municipalities = "Acevedo";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 224; 
		$categoria->states_id = 14; 
		$categoria->municipalities = "Andrés Bello";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 225; 
		$categoria->states_id = 14; 
		$categoria->municipalities = "Baruta";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 226; 
		$categoria->states_id = 14; 
		$categoria->municipalities = "Brión";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 227; 
		$categoria->states_id = 14; 
		$categoria->municipalities = "Buroz";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 228; 
		$categoria->states_id = 14; 
		$categoria->municipalities = "Carrizal";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 229; 
		$categoria->states_id = 14; 
		$categoria->municipalities = "Chacao";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 230; 
		$categoria->states_id = 14; 
		$categoria->municipalities = "Cristóbal Rojas";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 231; 
		$categoria->states_id = 14; 
		$categoria->municipalities = "El Hatillo";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 232; 
		$categoria->states_id = 14; 
		$categoria->municipalities = "Guaicaipuro";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 233; 
		$categoria->states_id = 14; 
		$categoria->municipalities = "Independencia";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 234; 
		$categoria->states_id = 14; 
		$categoria->municipalities = "Lander";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 235; 
		$categoria->states_id = 14; 
		$categoria->municipalities = "Los Salias";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 236; 
		$categoria->states_id = 14; 
		$categoria->municipalities = "Páez";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 237; 
		$categoria->states_id = 14; 
		$categoria->municipalities = "Paz Castillo";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 238; 
		$categoria->states_id = 14; 
		$categoria->municipalities = "Pedro Gual";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 239; 
		$categoria->states_id = 14; 
		$categoria->municipalities = "Plaza";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 240; 
		$categoria->states_id = 14; 
		$categoria->municipalities = "Simón Bolívar";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 241; 
		$categoria->states_id = 14; 
		$categoria->municipalities = "Sucre";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 242; 
		$categoria->states_id = 14; 
		$categoria->municipalities = "Urdaneta";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 243; 
		$categoria->states_id = 14; 
		$categoria->municipalities = "Zamora";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 258; 
		$categoria->states_id = 15; 
		$categoria->municipalities = "Acosta";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 259; 
		$categoria->states_id = 15; 
		$categoria->municipalities = "Aguasay";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 260; 
		$categoria->states_id = 15; 
		$categoria->municipalities = "Bolívar";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 261; 
		$categoria->states_id = 15; 
		$categoria->municipalities = "Caripe";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 262; 
		$categoria->states_id = 15; 
		$categoria->municipalities = "Cedeño";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 263; 
		$categoria->states_id = 15; 
		$categoria->municipalities = "Ezequiel Zamora";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 264; 
		$categoria->states_id = 15; 
		$categoria->municipalities = "Libertador";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 265; 
		$categoria->states_id = 15; 
		$categoria->municipalities = "Maturín";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 266; 
		$categoria->states_id = 15; 
		$categoria->municipalities = "Piar";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 267; 
		$categoria->states_id = 15; 
		$categoria->municipalities = "Punceres";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 268; 
		$categoria->states_id = 15; 
		$categoria->municipalities = "Santa Bárbara";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 269; 
		$categoria->states_id = 15; 
		$categoria->municipalities = "Sotillo";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 270; 
		$categoria->states_id = 15; 
		$categoria->municipalities = "Uracoa";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 271; 
		$categoria->states_id = 16; 
		$categoria->municipalities = "Antolín del Campo";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 272; 
		$categoria->states_id = 16; 
		$categoria->municipalities = "Arismendi";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 273; 
		$categoria->states_id = 16; 
		$categoria->municipalities = "García";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 274; 
		$categoria->states_id = 16; 
		$categoria->municipalities = "Gómez";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 275; 
		$categoria->states_id = 16; 
		$categoria->municipalities = "Maneiro";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 276; 
		$categoria->states_id = 16; 
		$categoria->municipalities = "Marcano";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 277; 
		$categoria->states_id = 16; 
		$categoria->municipalities = "Mariño";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 278; 
		$categoria->states_id = 16; 
		$categoria->municipalities = "Península de Macanao";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 279; 
		$categoria->states_id = 16; 
		$categoria->municipalities = "Tubores";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 280; 
		$categoria->states_id = 16; 
		$categoria->municipalities = "Villalba";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 281; 
		$categoria->states_id = 16; 
		$categoria->municipalities = "Díaz";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 282; 
		$categoria->states_id = 17; 
		$categoria->municipalities = "Agua Blanca";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 283; 
		$categoria->states_id = 17; 
		$categoria->municipalities = "Araure";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 284; 
		$categoria->states_id = 17; 
		$categoria->municipalities = "Esteller";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 285; 
		$categoria->states_id = 17; 
		$categoria->municipalities = "Guanare";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 286; 
		$categoria->states_id = 17; 
		$categoria->municipalities = "Guanarito";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 287; 
		$categoria->states_id = 17; 
		$categoria->municipalities = "Monseñor José Vicente de Unda";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 288; 
		$categoria->states_id = 17; 
		$categoria->municipalities = "Ospino";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 289; 
		$categoria->states_id = 17; 
		$categoria->municipalities = "Páez";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 290; 
		$categoria->states_id = 17; 
		$categoria->municipalities = "Papelón";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 291; 
		$categoria->states_id = 17; 
		$categoria->municipalities = "San Genaro de Boconoíto";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 292; 
		$categoria->states_id = 17; 
		$categoria->municipalities = "San Rafael de Onoto";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 293; 
		$categoria->states_id = 17; 
		$categoria->municipalities = "Santa Rosalía";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 294; 
		$categoria->states_id = 17; 
		$categoria->municipalities = "Sucre";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 295; 
		$categoria->states_id = 17; 
		$categoria->municipalities = "Turén";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 296; 
		$categoria->states_id = 18; 
		$categoria->municipalities = "Andrés Eloy Blanco";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 297; 
		$categoria->states_id = 18; 
		$categoria->municipalities = "Andrés Mata";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 298; 
		$categoria->states_id = 18; 
		$categoria->municipalities = "Arismendi";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 299; 
		$categoria->states_id = 18; 
		$categoria->municipalities = "Benítez";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 300; 
		$categoria->states_id = 18; 
		$categoria->municipalities = "Bermúdez";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 301; 
		$categoria->states_id = 18; 
		$categoria->municipalities = "Bolívar";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 302; 
		$categoria->states_id = 18; 
		$categoria->municipalities = "Cajigal";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 303; 
		$categoria->states_id = 18; 
		$categoria->municipalities = "Cruz Salmerón Acosta";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 304; 
		$categoria->states_id = 18; 
		$categoria->municipalities = "Libertador";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 305; 
		$categoria->states_id = 18; 
		$categoria->municipalities = "Mariño";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 306; 
		$categoria->states_id = 18; 
		$categoria->municipalities = "Mejía";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 307; 
		$categoria->states_id = 18; 
		$categoria->municipalities = "Montes";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 308; 
		$categoria->states_id = 18; 
		$categoria->municipalities = "Ribero";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 309; 
		$categoria->states_id = 18; 
		$categoria->municipalities = "Sucre";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 310; 
		$categoria->states_id = 18; 
		$categoria->municipalities = "Valdéz";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 341; 
		$categoria->states_id = 19; 
		$categoria->municipalities = "Andrés Bello";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 342; 
		$categoria->states_id = 19; 
		$categoria->municipalities = "Antonio Rómulo Costa";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 343; 
		$categoria->states_id = 19; 
		$categoria->municipalities = "Ayacucho";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 344; 
		$categoria->states_id = 19; 
		$categoria->municipalities = "Bolívar";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 345; 
		$categoria->states_id = 19; 
		$categoria->municipalities = "Cárdenas";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 346; 
		$categoria->states_id = 19; 
		$categoria->municipalities = "Córdoba";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 347; 
		$categoria->states_id = 19; 
		$categoria->municipalities = "Fernández Feo";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 348; 
		$categoria->states_id = 19; 
		$categoria->municipalities = "Francisco de Miranda";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 349; 
		$categoria->states_id = 19; 
		$categoria->municipalities = "García de Hevia";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 350; 
		$categoria->states_id = 19; 
		$categoria->municipalities = "Guásimos";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 351; 
		$categoria->states_id = 19; 
		$categoria->municipalities = "Independencia";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 352; 
		$categoria->states_id = 19; 
		$categoria->municipalities = "Jáuregui";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 353; 
		$categoria->states_id = 19; 
		$categoria->municipalities = "José María Vargas";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 354; 
		$categoria->states_id = 19; 
		$categoria->municipalities = "Junín";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 355; 
		$categoria->states_id = 19; 
		$categoria->municipalities = "Libertad";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 356; 
		$categoria->states_id = 19; 
		$categoria->municipalities = "Libertador";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 357; 
		$categoria->states_id = 19; 
		$categoria->municipalities = "Lobatera";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 358; 
		$categoria->states_id = 19; 
		$categoria->municipalities = "Michelena";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 359; 
		$categoria->states_id = 19; 
		$categoria->municipalities = "Panamericano";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 360; 
		$categoria->states_id = 19; 
		$categoria->municipalities = "Pedro María Ureña";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 361; 
		$categoria->states_id = 19; 
		$categoria->municipalities = "Rafael Urdaneta";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 362; 
		$categoria->states_id = 19; 
		$categoria->municipalities = "Samuel Darío Maldonado";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 363; 
		$categoria->states_id = 19; 
		$categoria->municipalities = "San Cristóbal";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 364; 
		$categoria->states_id = 19; 
		$categoria->municipalities = "Seboruco";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 365; 
		$categoria->states_id = 19; 
		$categoria->municipalities = "Simón Rodríguez";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 366; 
		$categoria->states_id = 19; 
		$categoria->municipalities = "Sucre";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 367; 
		$categoria->states_id = 19; 
		$categoria->municipalities = "Torbes";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 368; 
		$categoria->states_id = 19; 
		$categoria->municipalities = "Uribante";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 369; 
		$categoria->states_id = 19; 
		$categoria->municipalities = "San Judas Tadeo";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 370; 
		$categoria->states_id = 20; 
		$categoria->municipalities = "Andrés Bello";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 371; 
		$categoria->states_id = 20; 
		$categoria->municipalities = "Boconó";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 372; 
		$categoria->states_id = 20; 
		$categoria->municipalities = "Bolívar";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 373; 
		$categoria->states_id = 20; 
		$categoria->municipalities = "Candelaria";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 374; 
		$categoria->states_id = 20; 
		$categoria->municipalities = "Carache";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 375; 
		$categoria->states_id = 20; 
		$categoria->municipalities = "Escuque";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 376; 
		$categoria->states_id = 20; 
		$categoria->municipalities = "José Felipe Márquez Cañizalez";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 377; 
		$categoria->states_id = 20; 
		$categoria->municipalities = "Juan Vicente Campos Elías";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 378; 
		$categoria->states_id = 20; 
		$categoria->municipalities = "La Ceiba";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 379; 
		$categoria->states_id = 20; 
		$categoria->municipalities = "Miranda";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 380; 
		$categoria->states_id = 20; 
		$categoria->municipalities = "Monte Carmelo";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 381; 
		$categoria->states_id = 20; 
		$categoria->municipalities = "Motatán";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 382; 
		$categoria->states_id = 20; 
		$categoria->municipalities = "Pampán";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 383; 
		$categoria->states_id = 20; 
		$categoria->municipalities = "Pampanito";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 384; 
		$categoria->states_id = 20; 
		$categoria->municipalities = "Rafael Rangel";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 385; 
		$categoria->states_id = 20; 
		$categoria->municipalities = "San Rafael de Carvajal";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 386; 
		$categoria->states_id = 20; 
		$categoria->municipalities = "Sucre";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 387; 
		$categoria->states_id = 20; 
		$categoria->municipalities = "Trujillo";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 388; 
		$categoria->states_id = 20; 
		$categoria->municipalities = "Urdaneta";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 389; 
		$categoria->states_id = 20; 
		$categoria->municipalities = "Valera";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 390; 
		$categoria->states_id = 21; 
		$categoria->municipalities = "Vargas";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 391; 
		$categoria->states_id = 22; 
		$categoria->municipalities = "Arístides Bastidas";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 392; 
		$categoria->states_id = 22; 
		$categoria->municipalities = "Bolívar";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 407; 
		$categoria->states_id = 22; 
		$categoria->municipalities = "Bruzual";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 408; 
		$categoria->states_id = 22; 
		$categoria->municipalities = "Cocorote";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 409; 
		$categoria->states_id = 22; 
		$categoria->municipalities = "Independencia";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 410; 
		$categoria->states_id = 22; 
		$categoria->municipalities = "José Antonio Páez";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 411; 
		$categoria->states_id = 22; 
		$categoria->municipalities = "La Trinidad";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 412; 
		$categoria->states_id = 22; 
		$categoria->municipalities = "Manuel Monge";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 413; 
		$categoria->states_id = 22; 
		$categoria->municipalities = "Nirgua";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 414; 
		$categoria->states_id = 22; 
		$categoria->municipalities = "Peña";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 415; 
		$categoria->states_id = 22; 
		$categoria->municipalities = "San Felipe";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 416; 
		$categoria->states_id = 22; 
		$categoria->municipalities = "Sucre";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 417; 
		$categoria->states_id = 22; 
		$categoria->municipalities = "Urachiche";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 418; 
		$categoria->states_id = 22; 
		$categoria->municipalities = "José Joaquín Veroes";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 441; 
		$categoria->states_id = 23; 
		$categoria->municipalities = "Almirante Padilla";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 442; 
		$categoria->states_id = 23; 
		$categoria->municipalities = "Baralt";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 443; 
		$categoria->states_id = 23; 
		$categoria->municipalities = "Cabimas";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 444; 
		$categoria->states_id = 23; 
		$categoria->municipalities = "Catatumbo";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 445; 
		$categoria->states_id = 23; 
		$categoria->municipalities = "Colón";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 446; 
		$categoria->states_id = 23; 
		$categoria->municipalities = "Francisco Javier Pulgar";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 447; 
		$categoria->states_id = 23; 
		$categoria->municipalities = "Páez";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 448; 
		$categoria->states_id = 23; 
		$categoria->municipalities = "Jesús Enrique Losada";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 449; 
		$categoria->states_id = 23; 
		$categoria->municipalities = "Jesús María Semprún";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 450; 
		$categoria->states_id = 23; 
		$categoria->municipalities = "La Cañada de Urdaneta";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 451; 
		$categoria->states_id = 23; 
		$categoria->municipalities = "Lagunillas";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 452; 
		$categoria->states_id = 23; 
		$categoria->municipalities = "Machiques de Perijá";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 453; 
		$categoria->states_id = 23; 
		$categoria->municipalities = "Mara";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 454; 
		$categoria->states_id = 23; 
		$categoria->municipalities = "Maracaibo";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 455; 
		$categoria->states_id = 23; 
		$categoria->municipalities = "Miranda";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 456; 
		$categoria->states_id = 23; 
		$categoria->municipalities = "Rosario de Perijá";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 457; 
		$categoria->states_id = 23; 
		$categoria->municipalities = "San Francisco";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 458; 
		$categoria->states_id = 23; 
		$categoria->municipalities = "Santa Rita";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 459; 
		$categoria->states_id = 23; 
		$categoria->municipalities = "Simón Bolívar";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 460; 
		$categoria->states_id = 23; 
		$categoria->municipalities = "Sucre";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 461; 
		$categoria->states_id = 23; 
		$categoria->municipalities = "Valmore Rodríguez";
		$categoria->save();

		$categoria = new Municipality();
		$categoria->id = 462; 
		$categoria->states_id = 24; 
		$categoria->municipalities = "Libertador";
		$categoria->save();




		/* parishes */
		$categoria = new Parish();
		$categoria->id = 1; 
		$categoria->municipalities_id = 1; 
		$categoria->parishes = "Alto Orinoco";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 2; 
		$categoria->municipalities_id = 1; 
		$categoria->parishes = "Huachamacare Acanaña";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 3; 
		$categoria->municipalities_id = 1; 
		$categoria->parishes = "Marawaka Toky Shamanaña";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 4; 
		$categoria->municipalities_id = 1; 
		$categoria->parishes = "Mavaka Mavaka";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 5; 
		$categoria->municipalities_id = 1; 
		$categoria->parishes = "Sierra Parima Parimabé";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 6; 
		$categoria->municipalities_id = 2; 
		$categoria->parishes = "Ucata Laja Lisa";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 7; 
		$categoria->municipalities_id = 2; 
		$categoria->parishes = "Yapacana Macuruco";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 8; 
		$categoria->municipalities_id = 2; 
		$categoria->parishes = "Caname Guarinuma";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 9; 
		$categoria->municipalities_id = 3; 
		$categoria->parishes = "Fernando Girón Tovar";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 10; 
		$categoria->municipalities_id = 3; 
		$categoria->parishes = "Luis Alberto Gómez";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 11; 
		$categoria->municipalities_id = 3; 
		$categoria->parishes = "Pahueña Limón de Parhueña";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 12; 
		$categoria->municipalities_id = 3; 
		$categoria->parishes = "Platanillal Platanillal";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 13; 
		$categoria->municipalities_id = 4; 
		$categoria->parishes = "Samariapo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 14; 
		$categoria->municipalities_id = 4; 
		$categoria->parishes = "Sipapo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 15; 
		$categoria->municipalities_id = 4; 
		$categoria->parishes = "Munduapo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 16; 
		$categoria->municipalities_id = 4; 
		$categoria->parishes = "Guayapo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 17; 
		$categoria->municipalities_id = 5; 
		$categoria->parishes = "Alto Ventuari";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 18; 
		$categoria->municipalities_id = 5; 
		$categoria->parishes = "Medio Ventuari";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 19; 
		$categoria->municipalities_id = 5; 
		$categoria->parishes = "Bajo Ventuari";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 20; 
		$categoria->municipalities_id = 6; 
		$categoria->parishes = "Victorino";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 21; 
		$categoria->municipalities_id = 6; 
		$categoria->parishes = "Comunidad";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 22; 
		$categoria->municipalities_id = 7; 
		$categoria->parishes = "Casiquiare";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 23; 
		$categoria->municipalities_id = 7; 
		$categoria->parishes = "Cocuy";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 24; 
		$categoria->municipalities_id = 7; 
		$categoria->parishes = "San Carlos de Río Negro";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 25; 
		$categoria->municipalities_id = 7; 
		$categoria->parishes = "Solano";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 26; 
		$categoria->municipalities_id = 8; 
		$categoria->parishes = "Anaco";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 27; 
		$categoria->municipalities_id = 8; 
		$categoria->parishes = "San Joaquín";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 28; 
		$categoria->municipalities_id = 9; 
		$categoria->parishes = "Cachipo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 29; 
		$categoria->municipalities_id = 9; 
		$categoria->parishes = "Aragua de Barcelona";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 30; 
		$categoria->municipalities_id = 11; 
		$categoria->parishes = "Lechería";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 31; 
		$categoria->municipalities_id = 11; 
		$categoria->parishes = "El Morro";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 32; 
		$categoria->municipalities_id = 12; 
		$categoria->parishes = "Puerto Píritu";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 33; 
		$categoria->municipalities_id = 12; 
		$categoria->parishes = "San Miguel";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 34; 
		$categoria->municipalities_id = 12; 
		$categoria->parishes = "Sucre";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 35; 
		$categoria->municipalities_id = 13; 
		$categoria->parishes = "Valle de Guanape";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 36; 
		$categoria->municipalities_id = 13; 
		$categoria->parishes = "Santa Bárbara";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 37; 
		$categoria->municipalities_id = 14; 
		$categoria->parishes = "El Chaparro";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 38; 
		$categoria->municipalities_id = 14; 
		$categoria->parishes = "Tomás Alfaro";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 39; 
		$categoria->municipalities_id = 14; 
		$categoria->parishes = "Calatrava";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 40; 
		$categoria->municipalities_id = 15; 
		$categoria->parishes = "Guanta";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 41; 
		$categoria->municipalities_id = 15; 
		$categoria->parishes = "Chorrerón";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 42; 
		$categoria->municipalities_id = 16; 
		$categoria->parishes = "Mamo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 43; 
		$categoria->municipalities_id = 16; 
		$categoria->parishes = "Soledad";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 44; 
		$categoria->municipalities_id = 17; 
		$categoria->parishes = "Mapire";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 45; 
		$categoria->municipalities_id = 17; 
		$categoria->parishes = "Piar";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 46; 
		$categoria->municipalities_id = 17; 
		$categoria->parishes = "Santa Clara";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 47; 
		$categoria->municipalities_id = 17; 
		$categoria->parishes = "San Diego de Cabrutica";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 48; 
		$categoria->municipalities_id = 17; 
		$categoria->parishes = "Uverito";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 49; 
		$categoria->municipalities_id = 17; 
		$categoria->parishes = "Zuata";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 50; 
		$categoria->municipalities_id = 18; 
		$categoria->parishes = "Puerto La Cruz";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 51; 
		$categoria->municipalities_id = 18; 
		$categoria->parishes = "Pozuelos";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 52; 
		$categoria->municipalities_id = 19; 
		$categoria->parishes = "Onoto";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 53; 
		$categoria->municipalities_id = 19; 
		$categoria->parishes = "San Pablo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 54; 
		$categoria->municipalities_id = 20; 
		$categoria->parishes = "San Mateo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 55; 
		$categoria->municipalities_id = 20; 
		$categoria->parishes = "El Carito";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 56; 
		$categoria->municipalities_id = 20; 
		$categoria->parishes = "Santa Inés";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 57; 
		$categoria->municipalities_id = 20; 
		$categoria->parishes = "La Romereña";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 58; 
		$categoria->municipalities_id = 21; 
		$categoria->parishes = "Atapirire";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 59; 
		$categoria->municipalities_id = 21; 
		$categoria->parishes = "Boca del Pao";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 60; 
		$categoria->municipalities_id = 21; 
		$categoria->parishes = "El Pao";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 61; 
		$categoria->municipalities_id = 21; 
		$categoria->parishes = "Pariaguán";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 62; 
		$categoria->municipalities_id = 22; 
		$categoria->parishes = "Cantaura";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 63; 
		$categoria->municipalities_id = 22; 
		$categoria->parishes = "Libertador";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 64; 
		$categoria->municipalities_id = 22; 
		$categoria->parishes = "Santa Rosa";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 65; 
		$categoria->municipalities_id = 22; 
		$categoria->parishes = "Urica";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 66; 
		$categoria->municipalities_id = 23; 
		$categoria->parishes = "Píritu";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 67; 
		$categoria->municipalities_id = 23; 
		$categoria->parishes = "San Francisco";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 68; 
		$categoria->municipalities_id = 24; 
		$categoria->parishes = "San José de Guanipa";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 69; 
		$categoria->municipalities_id = 25; 
		$categoria->parishes = "Boca de Uchire";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 70; 
		$categoria->municipalities_id = 25; 
		$categoria->parishes = "Boca de Chávez";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 71; 
		$categoria->municipalities_id = 26; 
		$categoria->parishes = "Pueblo Nuevo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 72; 
		$categoria->municipalities_id = 26; 
		$categoria->parishes = "Santa Ana";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 73; 
		$categoria->municipalities_id = 27; 
		$categoria->parishes = "Bergatín";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 74; 
		$categoria->municipalities_id = 27; 
		$categoria->parishes = "Caigua";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 75; 
		$categoria->municipalities_id = 27; 
		$categoria->parishes = "El Carmen";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 76; 
		$categoria->municipalities_id = 27; 
		$categoria->parishes = "El Pilar";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 77; 
		$categoria->municipalities_id = 27; 
		$categoria->parishes = "Naricual";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 78; 
		$categoria->municipalities_id = 27; 
		$categoria->parishes = "San Crsitóbal";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 79; 
		$categoria->municipalities_id = 28; 
		$categoria->parishes = "Edmundo Barrios";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 80; 
		$categoria->municipalities_id = 28; 
		$categoria->parishes = "Miguel Otero Silva";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 81; 
		$categoria->municipalities_id = 29; 
		$categoria->parishes = "Achaguas";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 82; 
		$categoria->municipalities_id = 29; 
		$categoria->parishes = "Apurito";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 83; 
		$categoria->municipalities_id = 29; 
		$categoria->parishes = "El Yagual";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 84; 
		$categoria->municipalities_id = 29; 
		$categoria->parishes = "Guachara";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 85; 
		$categoria->municipalities_id = 29; 
		$categoria->parishes = "Mucuritas";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 86; 
		$categoria->municipalities_id = 29; 
		$categoria->parishes = "Queseras del medio";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 87; 
		$categoria->municipalities_id = 30; 
		$categoria->parishes = "Biruaca";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 88; 
		$categoria->municipalities_id = 31; 
		$categoria->parishes = "Bruzual";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 89; 
		$categoria->municipalities_id = 31; 
		$categoria->parishes = "Mantecal";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 90; 
		$categoria->municipalities_id = 31; 
		$categoria->parishes = "Quintero";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 91; 
		$categoria->municipalities_id = 31; 
		$categoria->parishes = "Rincón Hondo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 92; 
		$categoria->municipalities_id = 31; 
		$categoria->parishes = "San Vicente";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 93; 
		$categoria->municipalities_id = 32; 
		$categoria->parishes = "Guasdualito";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 94; 
		$categoria->municipalities_id = 32; 
		$categoria->parishes = "Aramendi";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 95; 
		$categoria->municipalities_id = 32; 
		$categoria->parishes = "El Amparo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 96; 
		$categoria->municipalities_id = 32; 
		$categoria->parishes = "San Camilo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 97; 
		$categoria->municipalities_id = 32; 
		$categoria->parishes = "Urdaneta";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 98; 
		$categoria->municipalities_id = 33; 
		$categoria->parishes = "San Juan de Payara";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 99; 
		$categoria->municipalities_id = 33; 
		$categoria->parishes = "Codazzi";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 100; 
		$categoria->municipalities_id = 33; 
		$categoria->parishes = "Cunaviche";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 101; 
		$categoria->municipalities_id = 34; 
		$categoria->parishes = "Elorza";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 102; 
		$categoria->municipalities_id = 34; 
		$categoria->parishes = "La Trinidad";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 103; 
		$categoria->municipalities_id = 35; 
		$categoria->parishes = "San Fernando";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 104; 
		$categoria->municipalities_id = 35; 
		$categoria->parishes = "El Recreo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 105; 
		$categoria->municipalities_id = 35; 
		$categoria->parishes = "Peñalver";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 106; 
		$categoria->municipalities_id = 35; 
		$categoria->parishes = "San Rafael de Atamaica";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 107; 
		$categoria->municipalities_id = 36; 
		$categoria->parishes = "Pedro José Ovalles";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 108; 
		$categoria->municipalities_id = 36; 
		$categoria->parishes = "Joaquín Crespo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 109; 
		$categoria->municipalities_id = 36; 
		$categoria->parishes = "José Casanova Godoy";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 110; 
		$categoria->municipalities_id = 36; 
		$categoria->parishes = "Madre María de San José";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 111; 
		$categoria->municipalities_id = 36; 
		$categoria->parishes = "Andrés Eloy Blanco";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 112; 
		$categoria->municipalities_id = 36; 
		$categoria->parishes = "Los Tacarigua";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 113; 
		$categoria->municipalities_id = 36; 
		$categoria->parishes = "Las Delicias";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 114; 
		$categoria->municipalities_id = 36; 
		$categoria->parishes = "Choroní";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 115; 
		$categoria->municipalities_id = 37; 
		$categoria->parishes = "Bolívar";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 116; 
		$categoria->municipalities_id = 38; 
		$categoria->parishes = "Camatagua";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 117; 
		$categoria->municipalities_id = 38; 
		$categoria->parishes = "Carmen de Cura";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 118; 
		$categoria->municipalities_id = 39; 
		$categoria->parishes = "Santa Rita";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 119; 
		$categoria->municipalities_id = 39; 
		$categoria->parishes = "Francisco de Miranda";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 120; 
		$categoria->municipalities_id = 39; 
		$categoria->parishes = "Moseñor Feliciano González";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 121; 
		$categoria->municipalities_id = 40; 
		$categoria->parishes = "Santa Cruz";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 122; 
		$categoria->municipalities_id = 41; 
		$categoria->parishes = "José Félix Ribas";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 123; 
		$categoria->municipalities_id = 41; 
		$categoria->parishes = "Castor Nieves Ríos";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 124; 
		$categoria->municipalities_id = 41; 
		$categoria->parishes = "Las Guacamayas";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 125; 
		$categoria->municipalities_id = 41; 
		$categoria->parishes = "Pao de Zárate";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 126; 
		$categoria->municipalities_id = 41; 
		$categoria->parishes = "Zuata";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 127; 
		$categoria->municipalities_id = 42; 
		$categoria->parishes = "José Rafael Revenga";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 128; 
		$categoria->municipalities_id = 43; 
		$categoria->parishes = "Palo Negro";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 129; 
		$categoria->municipalities_id = 43; 
		$categoria->parishes = "San Martín de Porres";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 130; 
		$categoria->municipalities_id = 44; 
		$categoria->parishes = "El Limón";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 131; 
		$categoria->municipalities_id = 44; 
		$categoria->parishes = "Caña de Azúcar";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 132; 
		$categoria->municipalities_id = 45; 
		$categoria->parishes = "Ocumare de la Costa";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 133; 
		$categoria->municipalities_id = 46; 
		$categoria->parishes = "San Casimiro";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 134; 
		$categoria->municipalities_id = 46; 
		$categoria->parishes = "Güiripa";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 135; 
		$categoria->municipalities_id = 46; 
		$categoria->parishes = "Ollas de Caramacate";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 136; 
		$categoria->municipalities_id = 46; 
		$categoria->parishes = "Valle Morín";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 137; 
		$categoria->municipalities_id = 47; 
		$categoria->parishes = "San Sebastían";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 138; 
		$categoria->municipalities_id = 48; 
		$categoria->parishes = "Turmero";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 139; 
		$categoria->municipalities_id = 48; 
		$categoria->parishes = "Arevalo Aponte";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 140; 
		$categoria->municipalities_id = 48; 
		$categoria->parishes = "Chuao";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 141; 
		$categoria->municipalities_id = 48; 
		$categoria->parishes = "Samán de Güere";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 142; 
		$categoria->municipalities_id = 48; 
		$categoria->parishes = "Alfredo Pacheco Miranda";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 143; 
		$categoria->municipalities_id = 49; 
		$categoria->parishes = "Santos Michelena";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 144; 
		$categoria->municipalities_id = 49; 
		$categoria->parishes = "Tiara";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 145; 
		$categoria->municipalities_id = 50; 
		$categoria->parishes = "Cagua";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 146; 
		$categoria->municipalities_id = 50; 
		$categoria->parishes = "Bella Vista";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 147; 
		$categoria->municipalities_id = 51; 
		$categoria->parishes = "Tovar";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 148; 
		$categoria->municipalities_id = 52; 
		$categoria->parishes = "Urdaneta";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 149; 
		$categoria->municipalities_id = 52; 
		$categoria->parishes = "Las Peñitas";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 150; 
		$categoria->municipalities_id = 52; 
		$categoria->parishes = "San Francisco de Cara";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 151; 
		$categoria->municipalities_id = 52; 
		$categoria->parishes = "Taguay";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 152; 
		$categoria->municipalities_id = 53; 
		$categoria->parishes = "Zamora";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 153; 
		$categoria->municipalities_id = 53; 
		$categoria->parishes = "Magdaleno";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 154; 
		$categoria->municipalities_id = 53; 
		$categoria->parishes = "San Francisco de Asís";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 155; 
		$categoria->municipalities_id = 53; 
		$categoria->parishes = "Valles de Tucutunemo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 156; 
		$categoria->municipalities_id = 53; 
		$categoria->parishes = "Augusto Mijares";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 157; 
		$categoria->municipalities_id = 54; 
		$categoria->parishes = "Sabaneta";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 158; 
		$categoria->municipalities_id = 54; 
		$categoria->parishes = "Juan Antonio Rodríguez Domínguez";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 159; 
		$categoria->municipalities_id = 55; 
		$categoria->parishes = "El Cantón";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 160; 
		$categoria->municipalities_id = 55; 
		$categoria->parishes = "Santa Cruz de Guacas";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 161; 
		$categoria->municipalities_id = 55; 
		$categoria->parishes = "Puerto Vivas";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 162; 
		$categoria->municipalities_id = 56; 
		$categoria->parishes = "Ticoporo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 163; 
		$categoria->municipalities_id = 56; 
		$categoria->parishes = "Nicolás Pulido";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 164; 
		$categoria->municipalities_id = 56; 
		$categoria->parishes = "Andrés Bello";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 165; 
		$categoria->municipalities_id = 57; 
		$categoria->parishes = "Arismendi";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 166; 
		$categoria->municipalities_id = 57; 
		$categoria->parishes = "Guadarrama";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 167; 
		$categoria->municipalities_id = 57; 
		$categoria->parishes = "La Unión";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 168; 
		$categoria->municipalities_id = 57; 
		$categoria->parishes = "San Antonio";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 169; 
		$categoria->municipalities_id = 58; 
		$categoria->parishes = "Barinas";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 170; 
		$categoria->municipalities_id = 58; 
		$categoria->parishes = "Alberto Arvelo Larriva";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 171; 
		$categoria->municipalities_id = 58; 
		$categoria->parishes = "San Silvestre";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 172; 
		$categoria->municipalities_id = 58; 
		$categoria->parishes = "Santa Inés";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 173; 
		$categoria->municipalities_id = 58; 
		$categoria->parishes = "Santa Lucía";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 174; 
		$categoria->municipalities_id = 58; 
		$categoria->parishes = "Torumos";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 175; 
		$categoria->municipalities_id = 58; 
		$categoria->parishes = "El Carmen";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 176; 
		$categoria->municipalities_id = 58; 
		$categoria->parishes = "Rómulo Betancourt";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 177; 
		$categoria->municipalities_id = 58; 
		$categoria->parishes = "Corazón de Jesús";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 178; 
		$categoria->municipalities_id = 58; 
		$categoria->parishes = "Ramón Ignacio Méndez";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 179; 
		$categoria->municipalities_id = 58; 
		$categoria->parishes = "Alto Barinas";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 180; 
		$categoria->municipalities_id = 58; 
		$categoria->parishes = "Manuel Palacio Fajardo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 181; 
		$categoria->municipalities_id = 58; 
		$categoria->parishes = "Juan Antonio Rodríguez Domínguez";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 182; 
		$categoria->municipalities_id = 58; 
		$categoria->parishes = "Dominga Ortiz de Páez";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 183; 
		$categoria->municipalities_id = 59; 
		$categoria->parishes = "Barinitas";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 184; 
		$categoria->municipalities_id = 59; 
		$categoria->parishes = "Altamira de Cáceres";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 185; 
		$categoria->municipalities_id = 59; 
		$categoria->parishes = "Calderas";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 186; 
		$categoria->municipalities_id = 60; 
		$categoria->parishes = "Barrancas";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 187; 
		$categoria->municipalities_id = 60; 
		$categoria->parishes = "El Socorro";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 188; 
		$categoria->municipalities_id = 60; 
		$categoria->parishes = "Mazparrito";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 189; 
		$categoria->municipalities_id = 61; 
		$categoria->parishes = "Santa Bárbara";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 190; 
		$categoria->municipalities_id = 61; 
		$categoria->parishes = "Pedro Briceño Méndez";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 191; 
		$categoria->municipalities_id = 61; 
		$categoria->parishes = "Ramón Ignacio Méndez";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 192; 
		$categoria->municipalities_id = 61; 
		$categoria->parishes = "José Ignacio del Pumar";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 193; 
		$categoria->municipalities_id = 62; 
		$categoria->parishes = "Obispos";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 194; 
		$categoria->municipalities_id = 62; 
		$categoria->parishes = "Guasimitos";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 195; 
		$categoria->municipalities_id = 62; 
		$categoria->parishes = "El Real";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 196; 
		$categoria->municipalities_id = 62; 
		$categoria->parishes = "La Luz";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 197; 
		$categoria->municipalities_id = 63; 
		$categoria->parishes = "Models\Ciudad Bolívia";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 198; 
		$categoria->municipalities_id = 63; 
		$categoria->parishes = "José Ignacio Briceño";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 199; 
		$categoria->municipalities_id = 63; 
		$categoria->parishes = "José Félix Ribas";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 200; 
		$categoria->municipalities_id = 63; 
		$categoria->parishes = "Páez";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 201; 
		$categoria->municipalities_id = 64; 
		$categoria->parishes = "Libertad";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 202; 
		$categoria->municipalities_id = 64; 
		$categoria->parishes = "Dolores";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 203; 
		$categoria->municipalities_id = 64; 
		$categoria->parishes = "Santa Rosa";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 204; 
		$categoria->municipalities_id = 64; 
		$categoria->parishes = "Palacio Fajardo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 205; 
		$categoria->municipalities_id = 65; 
		$categoria->parishes = "Models\Ciudad de Nutrias";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 206; 
		$categoria->municipalities_id = 65; 
		$categoria->parishes = "El Regalo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 207; 
		$categoria->municipalities_id = 65; 
		$categoria->parishes = "Puerto Nutrias";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 208; 
		$categoria->municipalities_id = 65; 
		$categoria->parishes = "Santa Catalina";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 209; 
		$categoria->municipalities_id = 66; 
		$categoria->parishes = "Cachamay";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 210; 
		$categoria->municipalities_id = 66; 
		$categoria->parishes = "Chirica";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 211; 
		$categoria->municipalities_id = 66; 
		$categoria->parishes = "Dalla Costa";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 212; 
		$categoria->municipalities_id = 66; 
		$categoria->parishes = "Once de Abril";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 213; 
		$categoria->municipalities_id = 66; 
		$categoria->parishes = "Simón Bolívar";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 214; 
		$categoria->municipalities_id = 66; 
		$categoria->parishes = "Unare";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 215; 
		$categoria->municipalities_id = 66; 
		$categoria->parishes = "Universidad";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 216; 
		$categoria->municipalities_id = 66; 
		$categoria->parishes = "Vista al Sol";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 217; 
		$categoria->municipalities_id = 66; 
		$categoria->parishes = "Pozo Verde";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 218; 
		$categoria->municipalities_id = 66; 
		$categoria->parishes = "Yocoima";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 219; 
		$categoria->municipalities_id = 66; 
		$categoria->parishes = "5 de Julio";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 220; 
		$categoria->municipalities_id = 67; 
		$categoria->parishes = "Cedeño";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 221; 
		$categoria->municipalities_id = 67; 
		$categoria->parishes = "Altagracia";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 222; 
		$categoria->municipalities_id = 67; 
		$categoria->parishes = "Ascensión Farreras";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 223; 
		$categoria->municipalities_id = 67; 
		$categoria->parishes = "Guaniamo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 224; 
		$categoria->municipalities_id = 67; 
		$categoria->parishes = "La Urbana";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 225; 
		$categoria->municipalities_id = 67; 
		$categoria->parishes = "Pijiguaos";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 226; 
		$categoria->municipalities_id = 68; 
		$categoria->parishes = "El Callao";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 227; 
		$categoria->municipalities_id = 69; 
		$categoria->parishes = "Gran Sabana";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 228; 
		$categoria->municipalities_id = 69; 
		$categoria->parishes = "Ikabarú";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 229; 
		$categoria->municipalities_id = 70; 
		$categoria->parishes = "Catedral";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 230; 
		$categoria->municipalities_id = 70; 
		$categoria->parishes = "Zea";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 231; 
		$categoria->municipalities_id = 70; 
		$categoria->parishes = "Orinoco";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 232; 
		$categoria->municipalities_id = 70; 
		$categoria->parishes = "José Antonio Páez";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 233; 
		$categoria->municipalities_id = 70; 
		$categoria->parishes = "Marhuanta";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 234; 
		$categoria->municipalities_id = 70; 
		$categoria->parishes = "Agua Salada";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 235; 
		$categoria->municipalities_id = 70; 
		$categoria->parishes = "Vista Hermosa";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 236; 
		$categoria->municipalities_id = 70; 
		$categoria->parishes = "La Sabanita";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 237; 
		$categoria->municipalities_id = 70; 
		$categoria->parishes = "Panapana";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 238; 
		$categoria->municipalities_id = 71; 
		$categoria->parishes = "Andrés Eloy Blanco";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 239; 
		$categoria->municipalities_id = 71; 
		$categoria->parishes = "Pedro Cova";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 240; 
		$categoria->municipalities_id = 72; 
		$categoria->parishes = "Raúl Leoni";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 241; 
		$categoria->municipalities_id = 72; 
		$categoria->parishes = "Barceloneta";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 242; 
		$categoria->municipalities_id = 72; 
		$categoria->parishes = "Santa Bárbara";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 243; 
		$categoria->municipalities_id = 72; 
		$categoria->parishes = "San Francisco";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 244; 
		$categoria->municipalities_id = 73; 
		$categoria->parishes = "Roscio";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 245; 
		$categoria->municipalities_id = 73; 
		$categoria->parishes = "Salóm";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 246; 
		$categoria->municipalities_id = 74; 
		$categoria->parishes = "Sifontes";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 247; 
		$categoria->municipalities_id = 74; 
		$categoria->parishes = "Dalla Costa";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 248; 
		$categoria->municipalities_id = 74; 
		$categoria->parishes = "San Isidro";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 249; 
		$categoria->municipalities_id = 75; 
		$categoria->parishes = "Sucre";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 250; 
		$categoria->municipalities_id = 75; 
		$categoria->parishes = "Aripao";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 251; 
		$categoria->municipalities_id = 75; 
		$categoria->parishes = "Guarataro";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 252; 
		$categoria->municipalities_id = 75; 
		$categoria->parishes = "Las Majadas";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 253; 
		$categoria->municipalities_id = 75; 
		$categoria->parishes = "Moitaco";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 254; 
		$categoria->municipalities_id = 76; 
		$categoria->parishes = "Padre Pedro Chien";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 255; 
		$categoria->municipalities_id = 76; 
		$categoria->parishes = "Río Grande";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 256; 
		$categoria->municipalities_id = 77; 
		$categoria->parishes = "Bejuma";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 257; 
		$categoria->municipalities_id = 77; 
		$categoria->parishes = "Canoabo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 258; 
		$categoria->municipalities_id = 77; 
		$categoria->parishes = "Simón Bolívar";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 259; 
		$categoria->municipalities_id = 78; 
		$categoria->parishes = "Güigüe";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 260; 
		$categoria->municipalities_id = 78; 
		$categoria->parishes = "Carabobo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 261; 
		$categoria->municipalities_id = 78; 
		$categoria->parishes = "Tacarigua";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 262; 
		$categoria->municipalities_id = 79; 
		$categoria->parishes = "Mariara";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 263; 
		$categoria->municipalities_id = 79; 
		$categoria->parishes = "Aguas Calientes";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 264; 
		$categoria->municipalities_id = 80; 
		$categoria->parishes = "Models\Ciudad Alianza";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 265; 
		$categoria->municipalities_id = 80; 
		$categoria->parishes = "Guacara";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 266; 
		$categoria->municipalities_id = 80; 
		$categoria->parishes = "Yagua";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 267; 
		$categoria->municipalities_id = 81; 
		$categoria->parishes = "Morón";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 268; 
		$categoria->municipalities_id = 81; 
		$categoria->parishes = "Yagua";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 269; 
		$categoria->municipalities_id = 82; 
		$categoria->parishes = "Tocuyito";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 270; 
		$categoria->municipalities_id = 82; 
		$categoria->parishes = "Independencia";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 271; 
		$categoria->municipalities_id = 83; 
		$categoria->parishes = "Los Guayos";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 272; 
		$categoria->municipalities_id = 84; 
		$categoria->parishes = "Miranda";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 273; 
		$categoria->municipalities_id = 85; 
		$categoria->parishes = "Montalbán";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 274; 
		$categoria->municipalities_id = 86; 
		$categoria->parishes = "Naguanagua";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 275; 
		$categoria->municipalities_id = 87; 
		$categoria->parishes = "Bartolomé Salóm";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 276; 
		$categoria->municipalities_id = 87; 
		$categoria->parishes = "Democracia";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 277; 
		$categoria->municipalities_id = 87; 
		$categoria->parishes = "Fraternidad";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 278; 
		$categoria->municipalities_id = 87; 
		$categoria->parishes = "Goaigoaza";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 279; 
		$categoria->municipalities_id = 87; 
		$categoria->parishes = "Juan José Flores";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 280; 
		$categoria->municipalities_id = 87; 
		$categoria->parishes = "Unión";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 281; 
		$categoria->municipalities_id = 87; 
		$categoria->parishes = "Borburata";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 282; 
		$categoria->municipalities_id = 87; 
		$categoria->parishes = "Patanemo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 283; 
		$categoria->municipalities_id = 88; 
		$categoria->parishes = "San Diego";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 284; 
		$categoria->municipalities_id = 89; 
		$categoria->parishes = "San Joaquín";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 285; 
		$categoria->municipalities_id = 90; 
		$categoria->parishes = "Candelaria";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 286; 
		$categoria->municipalities_id = 90; 
		$categoria->parishes = "Catedral";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 287; 
		$categoria->municipalities_id = 90; 
		$categoria->parishes = "El Socorro";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 288; 
		$categoria->municipalities_id = 90; 
		$categoria->parishes = "Miguel Peña";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 289; 
		$categoria->municipalities_id = 90; 
		$categoria->parishes = "Rafael Urdaneta";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 290; 
		$categoria->municipalities_id = 90; 
		$categoria->parishes = "San Blas";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 291; 
		$categoria->municipalities_id = 90; 
		$categoria->parishes = "San José";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 292; 
		$categoria->municipalities_id = 90; 
		$categoria->parishes = "Santa Rosa";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 293; 
		$categoria->municipalities_id = 90; 
		$categoria->parishes = "Negro Primero";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 294; 
		$categoria->municipalities_id = 91; 
		$categoria->parishes = "Cojedes";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 295; 
		$categoria->municipalities_id = 91; 
		$categoria->parishes = "Juan de Mata Suárez";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 296; 
		$categoria->municipalities_id = 92; 
		$categoria->parishes = "Tinaquillo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 297; 
		$categoria->municipalities_id = 93; 
		$categoria->parishes = "El Baúl";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 298; 
		$categoria->municipalities_id = 93; 
		$categoria->parishes = "Sucre";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 299; 
		$categoria->municipalities_id = 94; 
		$categoria->parishes = "La Aguadita";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 300; 
		$categoria->municipalities_id = 94; 
		$categoria->parishes = "Macapo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 301; 
		$categoria->municipalities_id = 95; 
		$categoria->parishes = "El Pao";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 302; 
		$categoria->municipalities_id = 96; 
		$categoria->parishes = "El Amparo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 303; 
		$categoria->municipalities_id = 96; 
		$categoria->parishes = "Libertad de Cojedes";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 304; 
		$categoria->municipalities_id = 97; 
		$categoria->parishes = "Rómulo Gallegos";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 305; 
		$categoria->municipalities_id = 98; 
		$categoria->parishes = "San Carlos de Austria";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 306; 
		$categoria->municipalities_id = 98; 
		$categoria->parishes = "Juan Ángel Bravo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 307; 
		$categoria->municipalities_id = 98; 
		$categoria->parishes = "Manuel Manrique";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 308; 
		$categoria->municipalities_id = 99; 
		$categoria->parishes = "General en Jefe José Laurencio Silva";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 309; 
		$categoria->municipalities_id = 100; 
		$categoria->parishes = "Curiapo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 310; 
		$categoria->municipalities_id = 100; 
		$categoria->parishes = "Almirante Luis Brión";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 311; 
		$categoria->municipalities_id = 100; 
		$categoria->parishes = "Francisco Aniceto Lugo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 312; 
		$categoria->municipalities_id = 100; 
		$categoria->parishes = "Manuel Renaud";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 313; 
		$categoria->municipalities_id = 100; 
		$categoria->parishes = "Padre Barral";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 314; 
		$categoria->municipalities_id = 100; 
		$categoria->parishes = "Santos de Abelgas";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 315; 
		$categoria->municipalities_id = 101; 
		$categoria->parishes = "Imataca";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 316; 
		$categoria->municipalities_id = 101; 
		$categoria->parishes = "Cinco de Julio";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 317; 
		$categoria->municipalities_id = 101; 
		$categoria->parishes = "Juan Bautista Arismendi";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 318; 
		$categoria->municipalities_id = 101; 
		$categoria->parishes = "Manuel Piar";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 319; 
		$categoria->municipalities_id = 101; 
		$categoria->parishes = "Rómulo Gallegos";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 320; 
		$categoria->municipalities_id = 102; 
		$categoria->parishes = "Pedernales";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 321; 
		$categoria->municipalities_id = 102; 
		$categoria->parishes = "Luis Beltrán Prieto Figueroa";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 322; 
		$categoria->municipalities_id = 103; 
		$categoria->parishes = "San José (Delta Amacuro)";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 323; 
		$categoria->municipalities_id = 103; 
		$categoria->parishes = "José Vidal Marcano";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 324; 
		$categoria->municipalities_id = 103; 
		$categoria->parishes = "Juan Millán";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 325; 
		$categoria->municipalities_id = 103; 
		$categoria->parishes = "Leonardo Ruíz Pineda";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 326; 
		$categoria->municipalities_id = 103; 
		$categoria->parishes = "Mariscal Antonio José de Sucre";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 327; 
		$categoria->municipalities_id = 103; 
		$categoria->parishes = "Monseñor Argimiro García";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 328; 
		$categoria->municipalities_id = 103; 
		$categoria->parishes = "San Rafael (Delta Amacuro)";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 329; 
		$categoria->municipalities_id = 103; 
		$categoria->parishes = "Virgen del Valle";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 330; 
		$categoria->municipalities_id = 10; 
		$categoria->parishes = "Clarines";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 331; 
		$categoria->municipalities_id = 10; 
		$categoria->parishes = "Guanape";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 332; 
		$categoria->municipalities_id = 10; 
		$categoria->parishes = "Sabana de Uchire";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 333; 
		$categoria->municipalities_id = 104; 
		$categoria->parishes = "Capadare";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 334; 
		$categoria->municipalities_id = 104; 
		$categoria->parishes = "La Pastora";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 335; 
		$categoria->municipalities_id = 104; 
		$categoria->parishes = "Libertador";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 336; 
		$categoria->municipalities_id = 104; 
		$categoria->parishes = "San Juan de los Cayos";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 337; 
		$categoria->municipalities_id = 105; 
		$categoria->parishes = "Aracua";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 338; 
		$categoria->municipalities_id = 105; 
		$categoria->parishes = "La Peña";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 339; 
		$categoria->municipalities_id = 105; 
		$categoria->parishes = "San Luis";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 340; 
		$categoria->municipalities_id = 106; 
		$categoria->parishes = "Bariro";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 341; 
		$categoria->municipalities_id = 106; 
		$categoria->parishes = "Borojó";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 342; 
		$categoria->municipalities_id = 106; 
		$categoria->parishes = "Capatárida";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 343; 
		$categoria->municipalities_id = 106; 
		$categoria->parishes = "Guajiro";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 344; 
		$categoria->municipalities_id = 106; 
		$categoria->parishes = "Seque";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 345; 
		$categoria->municipalities_id = 106; 
		$categoria->parishes = "Zazárida";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 346; 
		$categoria->municipalities_id = 106; 
		$categoria->parishes = "Valle de Eroa";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 347; 
		$categoria->municipalities_id = 107; 
		$categoria->parishes = "Cacique Manaure";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 348; 
		$categoria->municipalities_id = 108; 
		$categoria->parishes = "Norte";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 349; 
		$categoria->municipalities_id = 108; 
		$categoria->parishes = "Carirubana";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 350; 
		$categoria->municipalities_id = 108; 
		$categoria->parishes = "Santa Ana";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 351; 
		$categoria->municipalities_id = 108; 
		$categoria->parishes = "Urbana Punta Cardón";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 352; 
		$categoria->municipalities_id = 109; 
		$categoria->parishes = "La Vela de Coro";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 353; 
		$categoria->municipalities_id = 109; 
		$categoria->parishes = "Acurigua";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 354; 
		$categoria->municipalities_id = 109; 
		$categoria->parishes = "Guaibacoa";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 355; 
		$categoria->municipalities_id = 109; 
		$categoria->parishes = "Las Calderas";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 356; 
		$categoria->municipalities_id = 109; 
		$categoria->parishes = "Macoruca";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 357; 
		$categoria->municipalities_id = 110; 
		$categoria->parishes = "Dabajuro";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 358; 
		$categoria->municipalities_id = 111; 
		$categoria->parishes = "Agua Clara";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 359; 
		$categoria->municipalities_id = 111; 
		$categoria->parishes = "Avaria";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 360; 
		$categoria->municipalities_id = 111; 
		$categoria->parishes = "Pedregal";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 361; 
		$categoria->municipalities_id = 111; 
		$categoria->parishes = "Piedra Grande";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 362; 
		$categoria->municipalities_id = 111; 
		$categoria->parishes = "Purureche";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 363; 
		$categoria->municipalities_id = 112; 
		$categoria->parishes = "Adaure";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 364; 
		$categoria->municipalities_id = 112; 
		$categoria->parishes = "Adícora";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 365; 
		$categoria->municipalities_id = 112; 
		$categoria->parishes = "Baraived";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 366; 
		$categoria->municipalities_id = 112; 
		$categoria->parishes = "Buena Vista";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 367; 
		$categoria->municipalities_id = 112; 
		$categoria->parishes = "Jadacaquiva";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 368; 
		$categoria->municipalities_id = 112; 
		$categoria->parishes = "El Vínculo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 369; 
		$categoria->municipalities_id = 112; 
		$categoria->parishes = "El Hato";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 370; 
		$categoria->municipalities_id = 112; 
		$categoria->parishes = "Moruy";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 371; 
		$categoria->municipalities_id = 112; 
		$categoria->parishes = "Pueblo Nuevo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 372; 
		$categoria->municipalities_id = 113; 
		$categoria->parishes = "Agua Larga";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 373; 
		$categoria->municipalities_id = 113; 
		$categoria->parishes = "El Paují";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 374; 
		$categoria->municipalities_id = 113; 
		$categoria->parishes = "Independencia";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 375; 
		$categoria->municipalities_id = 113; 
		$categoria->parishes = "Mapararí";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 376; 
		$categoria->municipalities_id = 114; 
		$categoria->parishes = "Agua Linda";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 377; 
		$categoria->municipalities_id = 114; 
		$categoria->parishes = "Araurima";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 378; 
		$categoria->municipalities_id = 114; 
		$categoria->parishes = "Jacura";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 379; 
		$categoria->municipalities_id = 115; 
		$categoria->parishes = "Tucacas";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 380; 
		$categoria->municipalities_id = 115; 
		$categoria->parishes = "Boca de Aroa";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 381; 
		$categoria->municipalities_id = 116; 
		$categoria->parishes = "Los Taques";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 382; 
		$categoria->municipalities_id = 116; 
		$categoria->parishes = "Judibana";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 383; 
		$categoria->municipalities_id = 117; 
		$categoria->parishes = "Mene de Mauroa";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 384; 
		$categoria->municipalities_id = 117; 
		$categoria->parishes = "San Félix";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 385; 
		$categoria->municipalities_id = 117; 
		$categoria->parishes = "Casigua";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 386; 
		$categoria->municipalities_id = 118; 
		$categoria->parishes = "Guzmán Guillermo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 387; 
		$categoria->municipalities_id = 118; 
		$categoria->parishes = "Mitare";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 388; 
		$categoria->municipalities_id = 118; 
		$categoria->parishes = "Río Seco";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 389; 
		$categoria->municipalities_id = 118; 
		$categoria->parishes = "Sabaneta";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 390; 
		$categoria->municipalities_id = 118; 
		$categoria->parishes = "San Antonio";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 391; 
		$categoria->municipalities_id = 118; 
		$categoria->parishes = "San Gabriel";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 392; 
		$categoria->municipalities_id = 118; 
		$categoria->parishes = "Santa Ana";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 393; 
		$categoria->municipalities_id = 119; 
		$categoria->parishes = "Boca del Tocuyo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 394; 
		$categoria->municipalities_id = 119; 
		$categoria->parishes = "Chichiriviche";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 395; 
		$categoria->municipalities_id = 119; 
		$categoria->parishes = "Tocuyo de la Costa";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 396; 
		$categoria->municipalities_id = 120; 
		$categoria->parishes = "Palmasola";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 397; 
		$categoria->municipalities_id = 121; 
		$categoria->parishes = "Cabure";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 398; 
		$categoria->municipalities_id = 121; 
		$categoria->parishes = "Colina";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 399; 
		$categoria->municipalities_id = 121; 
		$categoria->parishes = "Curimagua";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 400; 
		$categoria->municipalities_id = 122; 
		$categoria->parishes = "San José de la Costa";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 401; 
		$categoria->municipalities_id = 122; 
		$categoria->parishes = "Píritu";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 402; 
		$categoria->municipalities_id = 123; 
		$categoria->parishes = "San Francisco";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 403; 
		$categoria->municipalities_id = 124; 
		$categoria->parishes = "Sucre";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 404; 
		$categoria->municipalities_id = 124; 
		$categoria->parishes = "Pecaya";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 405; 
		$categoria->municipalities_id = 125; 
		$categoria->parishes = "Tocópero";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 406; 
		$categoria->municipalities_id = 126; 
		$categoria->parishes = "El Charal";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 407; 
		$categoria->municipalities_id = 126; 
		$categoria->parishes = "Las Vegas del Tuy";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 408; 
		$categoria->municipalities_id = 126; 
		$categoria->parishes = "Santa Cruz de Bucaral";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 409; 
		$categoria->municipalities_id = 127; 
		$categoria->parishes = "Bruzual";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 410; 
		$categoria->municipalities_id = 127; 
		$categoria->parishes = "Urumaco";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 411; 
		$categoria->municipalities_id = 128; 
		$categoria->parishes = "Puerto Cumarebo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 412; 
		$categoria->municipalities_id = 128; 
		$categoria->parishes = "La Ciénaga";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 413; 
		$categoria->municipalities_id = 128; 
		$categoria->parishes = "La Soledad";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 414; 
		$categoria->municipalities_id = 128; 
		$categoria->parishes = "Pueblo Cumarebo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 415; 
		$categoria->municipalities_id = 128; 
		$categoria->parishes = "Zazárida";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 416; 
		$categoria->municipalities_id = 113; 
		$categoria->parishes = "Churuguara";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 417; 
		$categoria->municipalities_id = 129; 
		$categoria->parishes = "Camaguán";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 418; 
		$categoria->municipalities_id = 129; 
		$categoria->parishes = "Puerto Miranda";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 419; 
		$categoria->municipalities_id = 129; 
		$categoria->parishes = "Uverito";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 420; 
		$categoria->municipalities_id = 130; 
		$categoria->parishes = "Chaguaramas";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 421; 
		$categoria->municipalities_id = 131; 
		$categoria->parishes = "El Socorro";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 422; 
		$categoria->municipalities_id = 132; 
		$categoria->parishes = "Tucupido";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 423; 
		$categoria->municipalities_id = 132; 
		$categoria->parishes = "San Rafael de Laya";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 424; 
		$categoria->municipalities_id = 133; 
		$categoria->parishes = "Altagracia de Orituco";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 425; 
		$categoria->municipalities_id = 133; 
		$categoria->parishes = "San Rafael de Orituco";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 426; 
		$categoria->municipalities_id = 133; 
		$categoria->parishes = "San Francisco Javier de Lezama";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 427; 
		$categoria->municipalities_id = 133; 
		$categoria->parishes = "Paso Real de Macaira";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 428; 
		$categoria->municipalities_id = 133; 
		$categoria->parishes = "Carlos Soublette";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 429; 
		$categoria->municipalities_id = 133; 
		$categoria->parishes = "San Francisco de Macaira";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 430; 
		$categoria->municipalities_id = 133; 
		$categoria->parishes = "Libertad de Orituco";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 431; 
		$categoria->municipalities_id = 134; 
		$categoria->parishes = "Cantaclaro";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 432; 
		$categoria->municipalities_id = 134; 
		$categoria->parishes = "San Juan de los Morros";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 433; 
		$categoria->municipalities_id = 134; 
		$categoria->parishes = "Parapara";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 434; 
		$categoria->municipalities_id = 135; 
		$categoria->parishes = "El Sombrero";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 435; 
		$categoria->municipalities_id = 135; 
		$categoria->parishes = "Sosa";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 436; 
		$categoria->municipalities_id = 136; 
		$categoria->parishes = "Las Mercedes";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 437; 
		$categoria->municipalities_id = 136; 
		$categoria->parishes = "Cabruta";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 438; 
		$categoria->municipalities_id = 136; 
		$categoria->parishes = "Santa Rita de Manapire";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 439; 
		$categoria->municipalities_id = 137; 
		$categoria->parishes = "Valle de la Pascua";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 440; 
		$categoria->municipalities_id = 137; 
		$categoria->parishes = "Espino";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 441; 
		$categoria->municipalities_id = 138; 
		$categoria->parishes = "San José de Unare";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 442; 
		$categoria->municipalities_id = 138; 
		$categoria->parishes = "Zaraza";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 443; 
		$categoria->municipalities_id = 139; 
		$categoria->parishes = "San José de Tiznados";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 444; 
		$categoria->municipalities_id = 139; 
		$categoria->parishes = "San Francisco de Tiznados";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 445; 
		$categoria->municipalities_id = 139; 
		$categoria->parishes = "San Lorenzo de Tiznados";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 446; 
		$categoria->municipalities_id = 139; 
		$categoria->parishes = "Ortiz";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 447; 
		$categoria->municipalities_id = 140; 
		$categoria->parishes = "Guayabal";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 448; 
		$categoria->municipalities_id = 140; 
		$categoria->parishes = "Cazorla";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 449; 
		$categoria->municipalities_id = 141; 
		$categoria->parishes = "San José de Guaribe";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 450; 
		$categoria->municipalities_id = 141; 
		$categoria->parishes = "Uveral";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 451; 
		$categoria->municipalities_id = 142; 
		$categoria->parishes = "Santa María de Ipire";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 452; 
		$categoria->municipalities_id = 142; 
		$categoria->parishes = "Altamira";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 453; 
		$categoria->municipalities_id = 143; 
		$categoria->parishes = "El Calvario";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 454; 
		$categoria->municipalities_id = 143; 
		$categoria->parishes = "El Rastro";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 455; 
		$categoria->municipalities_id = 143; 
		$categoria->parishes = "Guardatinajas";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 456; 
		$categoria->municipalities_id = 143; 
		$categoria->parishes = "Capital Urbana Calabozo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 457; 
		$categoria->municipalities_id = 144; 
		$categoria->parishes = "Quebrada Honda de Guache";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 458; 
		$categoria->municipalities_id = 144; 
		$categoria->parishes = "Pío Tamayo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 459; 
		$categoria->municipalities_id = 144; 
		$categoria->parishes = "Yacambú";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 460; 
		$categoria->municipalities_id = 145; 
		$categoria->parishes = "Fréitez";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 461; 
		$categoria->municipalities_id = 145; 
		$categoria->parishes = "José María Blanco";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 462; 
		$categoria->municipalities_id = 146; 
		$categoria->parishes = "Catedral";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 463; 
		$categoria->municipalities_id = 146; 
		$categoria->parishes = "Concepción";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 464; 
		$categoria->municipalities_id = 146; 
		$categoria->parishes = "El Cují";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 465; 
		$categoria->municipalities_id = 146; 
		$categoria->parishes = "Juan de Villegas";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 466; 
		$categoria->municipalities_id = 146; 
		$categoria->parishes = "Santa Rosa";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 467; 
		$categoria->municipalities_id = 146; 
		$categoria->parishes = "Tamaca";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 468; 
		$categoria->municipalities_id = 146; 
		$categoria->parishes = "Unión";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 469; 
		$categoria->municipalities_id = 146; 
		$categoria->parishes = "Aguedo Felipe Alvarado";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 470; 
		$categoria->municipalities_id = 146; 
		$categoria->parishes = "Buena Vista";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 471; 
		$categoria->municipalities_id = 146; 
		$categoria->parishes = "Juárez";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 472; 
		$categoria->municipalities_id = 147; 
		$categoria->parishes = "Juan Bautista Rodríguez";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 473; 
		$categoria->municipalities_id = 147; 
		$categoria->parishes = "Cuara";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 474; 
		$categoria->municipalities_id = 147; 
		$categoria->parishes = "Diego de Lozada";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 475; 
		$categoria->municipalities_id = 147; 
		$categoria->parishes = "Paraíso de San José";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 476; 
		$categoria->municipalities_id = 147; 
		$categoria->parishes = "San Miguel";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 477; 
		$categoria->municipalities_id = 147; 
		$categoria->parishes = "Tintorero";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 478; 
		$categoria->municipalities_id = 147; 
		$categoria->parishes = "José Bernardo Dorante";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 479; 
		$categoria->municipalities_id = 147; 
		$categoria->parishes = "Coronel Mariano Peraza ";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 480; 
		$categoria->municipalities_id = 148; 
		$categoria->parishes = "Bolívar";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 481; 
		$categoria->municipalities_id = 148; 
		$categoria->parishes = "Anzoátegui";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 482; 
		$categoria->municipalities_id = 148; 
		$categoria->parishes = "Guarico";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 483; 
		$categoria->municipalities_id = 148; 
		$categoria->parishes = "Hilario Luna y Luna";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 484; 
		$categoria->municipalities_id = 148; 
		$categoria->parishes = "Humocaro Alto";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 485; 
		$categoria->municipalities_id = 148; 
		$categoria->parishes = "Humocaro Bajo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 486; 
		$categoria->municipalities_id = 148; 
		$categoria->parishes = "La Candelaria";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 487; 
		$categoria->municipalities_id = 148; 
		$categoria->parishes = "Morán";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 488; 
		$categoria->municipalities_id = 149; 
		$categoria->parishes = "Cabudare";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 489; 
		$categoria->municipalities_id = 149; 
		$categoria->parishes = "José Gregorio Bastidas";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 490; 
		$categoria->municipalities_id = 149; 
		$categoria->parishes = "Agua Viva";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 491; 
		$categoria->municipalities_id = 150; 
		$categoria->parishes = "Sarare";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 492; 
		$categoria->municipalities_id = 150; 
		$categoria->parishes = "Buría";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 493; 
		$categoria->municipalities_id = 150; 
		$categoria->parishes = "Gustavo Vegas León";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 494; 
		$categoria->municipalities_id = 151; 
		$categoria->parishes = "Trinidad Samuel";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 495; 
		$categoria->municipalities_id = 151; 
		$categoria->parishes = "Antonio Díaz";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 496; 
		$categoria->municipalities_id = 151; 
		$categoria->parishes = "Camacaro";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 497; 
		$categoria->municipalities_id = 151; 
		$categoria->parishes = "Castañeda";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 498; 
		$categoria->municipalities_id = 151; 
		$categoria->parishes = "Cecilio Zubillaga";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 499; 
		$categoria->municipalities_id = 151; 
		$categoria->parishes = "Chiquinquirá";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 500; 
		$categoria->municipalities_id = 151; 
		$categoria->parishes = "El Blanco";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 501; 
		$categoria->municipalities_id = 151; 
		$categoria->parishes = "Espinoza de los Monteros";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 502; 
		$categoria->municipalities_id = 151; 
		$categoria->parishes = "Lara";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 503; 
		$categoria->municipalities_id = 151; 
		$categoria->parishes = "Las Mercedes";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 504; 
		$categoria->municipalities_id = 151; 
		$categoria->parishes = "Manuel Morillo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 505; 
		$categoria->municipalities_id = 151; 
		$categoria->parishes = "Montaña Verde";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 506; 
		$categoria->municipalities_id = 151; 
		$categoria->parishes = "Montes de Oca";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 507; 
		$categoria->municipalities_id = 151; 
		$categoria->parishes = "Torres";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 508; 
		$categoria->municipalities_id = 151; 
		$categoria->parishes = "Heriberto Arroyo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 509; 
		$categoria->municipalities_id = 151; 
		$categoria->parishes = "Reyes Vargas";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 510; 
		$categoria->municipalities_id = 151; 
		$categoria->parishes = "Altagracia";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 511; 
		$categoria->municipalities_id = 152; 
		$categoria->parishes = "Siquisique";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 512; 
		$categoria->municipalities_id = 152; 
		$categoria->parishes = "Moroturo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 513; 
		$categoria->municipalities_id = 152; 
		$categoria->parishes = "San Miguel";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 514; 
		$categoria->municipalities_id = 152; 
		$categoria->parishes = "Xaguas";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 515; 
		$categoria->municipalities_id = 179; 
		$categoria->parishes = "Presidente Betancourt";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 516; 
		$categoria->municipalities_id = 179; 
		$categoria->parishes = "Presidente Páez";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 517; 
		$categoria->municipalities_id = 179; 
		$categoria->parishes = "Presidente Rómulo Gallegos";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 518; 
		$categoria->municipalities_id = 179; 
		$categoria->parishes = "Gabriel Picón González";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 519; 
		$categoria->municipalities_id = 179; 
		$categoria->parishes = "Héctor Amable Mora";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 520; 
		$categoria->municipalities_id = 179; 
		$categoria->parishes = "José Nucete Sardi";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 521; 
		$categoria->municipalities_id = 179; 
		$categoria->parishes = "Pulido Méndez";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 522; 
		$categoria->municipalities_id = 180; 
		$categoria->parishes = "La Azulita";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 523; 
		$categoria->municipalities_id = 181; 
		$categoria->parishes = "Santa Cruz de Mora";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 524; 
		$categoria->municipalities_id = 181; 
		$categoria->parishes = "Mesa Bolívar";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 525; 
		$categoria->municipalities_id = 181; 
		$categoria->parishes = "Mesa de Las Palmas";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 526; 
		$categoria->municipalities_id = 182; 
		$categoria->parishes = "Aricagua";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 527; 
		$categoria->municipalities_id = 182; 
		$categoria->parishes = "San Antonio";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 528; 
		$categoria->municipalities_id = 183; 
		$categoria->parishes = "Canagua";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 529; 
		$categoria->municipalities_id = 183; 
		$categoria->parishes = "Capurí";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 530; 
		$categoria->municipalities_id = 183; 
		$categoria->parishes = "Chacantá";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 531; 
		$categoria->municipalities_id = 183; 
		$categoria->parishes = "El Molino";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 532; 
		$categoria->municipalities_id = 183; 
		$categoria->parishes = "Guaimaral";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 533; 
		$categoria->municipalities_id = 183; 
		$categoria->parishes = "Mucutuy";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 534; 
		$categoria->municipalities_id = 183; 
		$categoria->parishes = "Mucuchachí";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 535; 
		$categoria->municipalities_id = 184; 
		$categoria->parishes = "Fernández Peña";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 536; 
		$categoria->municipalities_id = 184; 
		$categoria->parishes = "Matriz";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 537; 
		$categoria->municipalities_id = 184; 
		$categoria->parishes = "Montalbán";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 538; 
		$categoria->municipalities_id = 184; 
		$categoria->parishes = "Acequias";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 539; 
		$categoria->municipalities_id = 184; 
		$categoria->parishes = "Jají";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 540; 
		$categoria->municipalities_id = 184; 
		$categoria->parishes = "La Mesa";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 541; 
		$categoria->municipalities_id = 184; 
		$categoria->parishes = "San José del Sur";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 542; 
		$categoria->municipalities_id = 185; 
		$categoria->parishes = "Tucaní";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 543; 
		$categoria->municipalities_id = 185; 
		$categoria->parishes = "Florencio Ramírez";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 544; 
		$categoria->municipalities_id = 186; 
		$categoria->parishes = "Santo Domingo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 545; 
		$categoria->municipalities_id = 186; 
		$categoria->parishes = "Las Piedras";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 546; 
		$categoria->municipalities_id = 187; 
		$categoria->parishes = "Guaraque";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 547; 
		$categoria->municipalities_id = 187; 
		$categoria->parishes = "Mesa de Quintero";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 548; 
		$categoria->municipalities_id = 187; 
		$categoria->parishes = "Río Negro";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 549; 
		$categoria->municipalities_id = 188; 
		$categoria->parishes = "Arapuey";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 550; 
		$categoria->municipalities_id = 188; 
		$categoria->parishes = "Palmira";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 551; 
		$categoria->municipalities_id = 189; 
		$categoria->parishes = "San Cristóbal de Torondoy";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 552; 
		$categoria->municipalities_id = 189; 
		$categoria->parishes = "Torondoy";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 553; 
		$categoria->municipalities_id = 190; 
		$categoria->parishes = "Antonio Spinetti Dini";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 554; 
		$categoria->municipalities_id = 190; 
		$categoria->parishes = "Arias";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 555; 
		$categoria->municipalities_id = 190; 
		$categoria->parishes = "Caracciolo Parra Pérez";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 556; 
		$categoria->municipalities_id = 190; 
		$categoria->parishes = "Domingo Peña";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 557; 
		$categoria->municipalities_id = 190; 
		$categoria->parishes = "El Llano";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 558; 
		$categoria->municipalities_id = 190; 
		$categoria->parishes = "Gonzalo Picón Febres";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 559; 
		$categoria->municipalities_id = 190; 
		$categoria->parishes = "Jacinto Plaza";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 560; 
		$categoria->municipalities_id = 190; 
		$categoria->parishes = "Juan Rodríguez Suárez";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 561; 
		$categoria->municipalities_id = 190; 
		$categoria->parishes = "Lasso de la Vega";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 562; 
		$categoria->municipalities_id = 190; 
		$categoria->parishes = "Mariano Picón Salas";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 563; 
		$categoria->municipalities_id = 190; 
		$categoria->parishes = "Milla";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 564; 
		$categoria->municipalities_id = 190; 
		$categoria->parishes = "Osuna Rodríguez";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 565; 
		$categoria->municipalities_id = 190; 
		$categoria->parishes = "Sagrario";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 566; 
		$categoria->municipalities_id = 190; 
		$categoria->parishes = "El Morro";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 567; 
		$categoria->municipalities_id = 190; 
		$categoria->parishes = "Los Nevados";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 568; 
		$categoria->municipalities_id = 191; 
		$categoria->parishes = "Andrés Eloy Blanco";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 569; 
		$categoria->municipalities_id = 191; 
		$categoria->parishes = "La Venta";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 570; 
		$categoria->municipalities_id = 191; 
		$categoria->parishes = "Piñango";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 571; 
		$categoria->municipalities_id = 191; 
		$categoria->parishes = "Timotes";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 572; 
		$categoria->municipalities_id = 192; 
		$categoria->parishes = "Eloy Paredes";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 573; 
		$categoria->municipalities_id = 192; 
		$categoria->parishes = "San Rafael de Alcázar";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 574; 
		$categoria->municipalities_id = 192; 
		$categoria->parishes = "Santa Elena de Arenales";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 575; 
		$categoria->municipalities_id = 193; 
		$categoria->parishes = "Santa María de Caparo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 576; 
		$categoria->municipalities_id = 194; 
		$categoria->parishes = "Pueblo Llano";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 577; 
		$categoria->municipalities_id = 195; 
		$categoria->parishes = "Cacute";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 578; 
		$categoria->municipalities_id = 195; 
		$categoria->parishes = "La Toma";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 579; 
		$categoria->municipalities_id = 195; 
		$categoria->parishes = "Mucuchíes";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 580; 
		$categoria->municipalities_id = 195; 
		$categoria->parishes = "Mucurubá";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 581; 
		$categoria->municipalities_id = 195; 
		$categoria->parishes = "San Rafael";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 582; 
		$categoria->municipalities_id = 196; 
		$categoria->parishes = "Gerónimo Maldonado";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 583; 
		$categoria->municipalities_id = 196; 
		$categoria->parishes = "Bailadores";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 584; 
		$categoria->municipalities_id = 197; 
		$categoria->parishes = "Tabay";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 585; 
		$categoria->municipalities_id = 198; 
		$categoria->parishes = "Chiguará";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 586; 
		$categoria->municipalities_id = 198; 
		$categoria->parishes = "Estánquez";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 587; 
		$categoria->municipalities_id = 198; 
		$categoria->parishes = "Lagunillas";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 588; 
		$categoria->municipalities_id = 198; 
		$categoria->parishes = "La Trampa";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 589; 
		$categoria->municipalities_id = 198; 
		$categoria->parishes = "Pueblo Nuevo del Sur";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 590; 
		$categoria->municipalities_id = 198; 
		$categoria->parishes = "San Juan";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 591; 
		$categoria->municipalities_id = 199; 
		$categoria->parishes = "El Amparo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 592; 
		$categoria->municipalities_id = 199; 
		$categoria->parishes = "El Llano";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 593; 
		$categoria->municipalities_id = 199; 
		$categoria->parishes = "San Francisco";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 594; 
		$categoria->municipalities_id = 199; 
		$categoria->parishes = "Tovar";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 595; 
		$categoria->municipalities_id = 200; 
		$categoria->parishes = "Independencia";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 596; 
		$categoria->municipalities_id = 200; 
		$categoria->parishes = "María de la Concepción Palacios Blanco";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 597; 
		$categoria->municipalities_id = 200; 
		$categoria->parishes = "Nueva Bolivia";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 598; 
		$categoria->municipalities_id = 200; 
		$categoria->parishes = "Santa Apolonia";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 599; 
		$categoria->municipalities_id = 201; 
		$categoria->parishes = "Caño El Tigre";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 600; 
		$categoria->municipalities_id = 201; 
		$categoria->parishes = "Zea";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 601; 
		$categoria->municipalities_id = 223; 
		$categoria->parishes = "Aragüita";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 602; 
		$categoria->municipalities_id = 223; 
		$categoria->parishes = "Arévalo González";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 603; 
		$categoria->municipalities_id = 223; 
		$categoria->parishes = "Capaya";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 604; 
		$categoria->municipalities_id = 223; 
		$categoria->parishes = "Caucagua";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 605; 
		$categoria->municipalities_id = 223; 
		$categoria->parishes = "Panaquire";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 606; 
		$categoria->municipalities_id = 223; 
		$categoria->parishes = "Ribas";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 607; 
		$categoria->municipalities_id = 223; 
		$categoria->parishes = "El Café";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 608; 
		$categoria->municipalities_id = 223; 
		$categoria->parishes = "Marizapa";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 609; 
		$categoria->municipalities_id = 224; 
		$categoria->parishes = "Cumbo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 610; 
		$categoria->municipalities_id = 224; 
		$categoria->parishes = "San José de Barlovento";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 611; 
		$categoria->municipalities_id = 225; 
		$categoria->parishes = "El Cafetal";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 612; 
		$categoria->municipalities_id = 225; 
		$categoria->parishes = "Las Minas";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 613; 
		$categoria->municipalities_id = 225; 
		$categoria->parishes = "Nuestra Señora del Rosario";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 614; 
		$categoria->municipalities_id = 226; 
		$categoria->parishes = "Higuerote";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 615; 
		$categoria->municipalities_id = 226; 
		$categoria->parishes = "Curiepe";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 616; 
		$categoria->municipalities_id = 226; 
		$categoria->parishes = "Tacarigua de Brión";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 617; 
		$categoria->municipalities_id = 227; 
		$categoria->parishes = "Mamporal";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 618; 
		$categoria->municipalities_id = 228; 
		$categoria->parishes = "Carrizal";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 619; 
		$categoria->municipalities_id = 229; 
		$categoria->parishes = "Chacao";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 620; 
		$categoria->municipalities_id = 230; 
		$categoria->parishes = "Charallave";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 621; 
		$categoria->municipalities_id = 230; 
		$categoria->parishes = "Las Brisas";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 622; 
		$categoria->municipalities_id = 231; 
		$categoria->parishes = "El Hatillo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 623; 
		$categoria->municipalities_id = 232; 
		$categoria->parishes = "Altagracia de la Montaña";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 624; 
		$categoria->municipalities_id = 232; 
		$categoria->parishes = "Cecilio Acosta";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 625; 
		$categoria->municipalities_id = 232; 
		$categoria->parishes = "Los Teques";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 626; 
		$categoria->municipalities_id = 232; 
		$categoria->parishes = "El Jarillo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 627; 
		$categoria->municipalities_id = 232; 
		$categoria->parishes = "San Pedro";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 628; 
		$categoria->municipalities_id = 232; 
		$categoria->parishes = "Tácata";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 629; 
		$categoria->municipalities_id = 232; 
		$categoria->parishes = "Paracotos";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 630; 
		$categoria->municipalities_id = 233; 
		$categoria->parishes = "Cartanal";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 631; 
		$categoria->municipalities_id = 233; 
		$categoria->parishes = "Santa Teresa del Tuy";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 632; 
		$categoria->municipalities_id = 234; 
		$categoria->parishes = "La Democracia";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 633; 
		$categoria->municipalities_id = 234; 
		$categoria->parishes = "Ocumare del Tuy";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 634; 
		$categoria->municipalities_id = 234; 
		$categoria->parishes = "Santa Bárbara";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 635; 
		$categoria->municipalities_id = 235; 
		$categoria->parishes = "San Antonio de los Altos";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 636; 
		$categoria->municipalities_id = 236; 
		$categoria->parishes = "Río Chico";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 637; 
		$categoria->municipalities_id = 236; 
		$categoria->parishes = "El Guapo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 638; 
		$categoria->municipalities_id = 236; 
		$categoria->parishes = "Tacarigua de la Laguna";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 639; 
		$categoria->municipalities_id = 236; 
		$categoria->parishes = "Paparo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 640; 
		$categoria->municipalities_id = 236; 
		$categoria->parishes = "San Fernando del Guapo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 641; 
		$categoria->municipalities_id = 237; 
		$categoria->parishes = "Santa Lucía del Tuy";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 642; 
		$categoria->municipalities_id = 238; 
		$categoria->parishes = "Cúpira";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 643; 
		$categoria->municipalities_id = 238; 
		$categoria->parishes = "Machurucuto";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 644; 
		$categoria->municipalities_id = 239; 
		$categoria->parishes = "Guarenas";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 645; 
		$categoria->municipalities_id = 240; 
		$categoria->parishes = "San Antonio de Yare";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 646; 
		$categoria->municipalities_id = 240; 
		$categoria->parishes = "San Francisco de Yare";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 647; 
		$categoria->municipalities_id = 241; 
		$categoria->parishes = "Leoncio Martínez";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 648; 
		$categoria->municipalities_id = 241; 
		$categoria->parishes = "Petare";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 649; 
		$categoria->municipalities_id = 241; 
		$categoria->parishes = "Caucagüita";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 650; 
		$categoria->municipalities_id = 241; 
		$categoria->parishes = "Filas de Mariche";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 651; 
		$categoria->municipalities_id = 241; 
		$categoria->parishes = "La Dolorita";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 652; 
		$categoria->municipalities_id = 242; 
		$categoria->parishes = "Cúa";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 653; 
		$categoria->municipalities_id = 242; 
		$categoria->parishes = "Nueva Cúa";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 654; 
		$categoria->municipalities_id = 243; 
		$categoria->parishes = "Guatire";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 655; 
		$categoria->municipalities_id = 243; 
		$categoria->parishes = "Bolívar";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 656; 
		$categoria->municipalities_id = 258; 
		$categoria->parishes = "San Antonio de Maturín";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 657; 
		$categoria->municipalities_id = 258; 
		$categoria->parishes = "San Francisco de Maturín";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 658; 
		$categoria->municipalities_id = 259; 
		$categoria->parishes = "Aguasay";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 659; 
		$categoria->municipalities_id = 260; 
		$categoria->parishes = "Caripito";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 660; 
		$categoria->municipalities_id = 261; 
		$categoria->parishes = "El Guácharo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 661; 
		$categoria->municipalities_id = 261; 
		$categoria->parishes = "La Guanota";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 662; 
		$categoria->municipalities_id = 261; 
		$categoria->parishes = "Sabana de Piedra";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 663; 
		$categoria->municipalities_id = 261; 
		$categoria->parishes = "San Agustín";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 664; 
		$categoria->municipalities_id = 261; 
		$categoria->parishes = "Teresen";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 665; 
		$categoria->municipalities_id = 261; 
		$categoria->parishes = "Caripe";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 666; 
		$categoria->municipalities_id = 262; 
		$categoria->parishes = "Areo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 667; 
		$categoria->municipalities_id = 262; 
		$categoria->parishes = "Capital Cedeño";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 668; 
		$categoria->municipalities_id = 262; 
		$categoria->parishes = "San Félix de Cantalicio";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 669; 
		$categoria->municipalities_id = 262; 
		$categoria->parishes = "Viento Fresco";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 670; 
		$categoria->municipalities_id = 263; 
		$categoria->parishes = "El Tejero";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 671; 
		$categoria->municipalities_id = 263; 
		$categoria->parishes = "Punta de Mata";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 672; 
		$categoria->municipalities_id = 264; 
		$categoria->parishes = "Chaguaramas";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 673; 
		$categoria->municipalities_id = 264; 
		$categoria->parishes = "Las Alhuacas";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 674; 
		$categoria->municipalities_id = 264; 
		$categoria->parishes = "Tabasca";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 675; 
		$categoria->municipalities_id = 264; 
		$categoria->parishes = "Temblador";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 676; 
		$categoria->municipalities_id = 265; 
		$categoria->parishes = "Alto de los Godos";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 677; 
		$categoria->municipalities_id = 265; 
		$categoria->parishes = "Boquerón";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 678; 
		$categoria->municipalities_id = 265; 
		$categoria->parishes = "Las Cocuizas";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 679; 
		$categoria->municipalities_id = 265; 
		$categoria->parishes = "La Cruz";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 680; 
		$categoria->municipalities_id = 265; 
		$categoria->parishes = "San Simón";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 681; 
		$categoria->municipalities_id = 265; 
		$categoria->parishes = "El Corozo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 682; 
		$categoria->municipalities_id = 265; 
		$categoria->parishes = "El Furrial";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 683; 
		$categoria->municipalities_id = 265; 
		$categoria->parishes = "Jusepín";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 684; 
		$categoria->municipalities_id = 265; 
		$categoria->parishes = "La Pica";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 685; 
		$categoria->municipalities_id = 265; 
		$categoria->parishes = "San Vicente";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 686; 
		$categoria->municipalities_id = 266; 
		$categoria->parishes = "Aparicio";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 687; 
		$categoria->municipalities_id = 266; 
		$categoria->parishes = "Aragua de Maturín";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 688; 
		$categoria->municipalities_id = 266; 
		$categoria->parishes = "Chaguamal";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 689; 
		$categoria->municipalities_id = 266; 
		$categoria->parishes = "El Pinto";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 690; 
		$categoria->municipalities_id = 266; 
		$categoria->parishes = "Guanaguana";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 691; 
		$categoria->municipalities_id = 266; 
		$categoria->parishes = "La Toscana";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 692; 
		$categoria->municipalities_id = 266; 
		$categoria->parishes = "Taguaya";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 693; 
		$categoria->municipalities_id = 267; 
		$categoria->parishes = "Cachipo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 694; 
		$categoria->municipalities_id = 267; 
		$categoria->parishes = "Quiriquire";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 695; 
		$categoria->municipalities_id = 268; 
		$categoria->parishes = "Santa Bárbara";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 696; 
		$categoria->municipalities_id = 269; 
		$categoria->parishes = "Barrancas";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 697; 
		$categoria->municipalities_id = 269; 
		$categoria->parishes = "Los Barrancos de Fajardo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 698; 
		$categoria->municipalities_id = 270; 
		$categoria->parishes = "Uracoa";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 699; 
		$categoria->municipalities_id = 271; 
		$categoria->parishes = "Antolín del Campo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 700; 
		$categoria->municipalities_id = 272; 
		$categoria->parishes = "Arismendi";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 701; 
		$categoria->municipalities_id = 273; 
		$categoria->parishes = "García";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 702; 
		$categoria->municipalities_id = 273; 
		$categoria->parishes = "Francisco Fajardo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 703; 
		$categoria->municipalities_id = 274; 
		$categoria->parishes = "Bolívar";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 704; 
		$categoria->municipalities_id = 274; 
		$categoria->parishes = "Guevara";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 705; 
		$categoria->municipalities_id = 274; 
		$categoria->parishes = "Matasiete";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 706; 
		$categoria->municipalities_id = 274; 
		$categoria->parishes = "Santa Ana";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 707; 
		$categoria->municipalities_id = 274; 
		$categoria->parishes = "Sucre";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 708; 
		$categoria->municipalities_id = 275; 
		$categoria->parishes = "Aguirre";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 709; 
		$categoria->municipalities_id = 275; 
		$categoria->parishes = "Maneiro";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 710; 
		$categoria->municipalities_id = 276; 
		$categoria->parishes = "Adrián";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 711; 
		$categoria->municipalities_id = 276; 
		$categoria->parishes = "Juan Griego";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 712; 
		$categoria->municipalities_id = 276; 
		$categoria->parishes = "Yaguaraparo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 713; 
		$categoria->municipalities_id = 277; 
		$categoria->parishes = "Porlamar";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 714; 
		$categoria->municipalities_id = 278; 
		$categoria->parishes = "San Francisco de Macanao";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 715; 
		$categoria->municipalities_id = 278; 
		$categoria->parishes = "Boca de Río";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 716; 
		$categoria->municipalities_id = 279; 
		$categoria->parishes = "Tubores";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 717; 
		$categoria->municipalities_id = 279; 
		$categoria->parishes = "Los Baleales";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 718; 
		$categoria->municipalities_id = 280; 
		$categoria->parishes = "Vicente Fuentes";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 719; 
		$categoria->municipalities_id = 280; 
		$categoria->parishes = "Villalba";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 720; 
		$categoria->municipalities_id = 281; 
		$categoria->parishes = "San Juan Bautista";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 721; 
		$categoria->municipalities_id = 281; 
		$categoria->parishes = "Zabala";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 722; 
		$categoria->municipalities_id = 283; 
		$categoria->parishes = "Capital Araure";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 723; 
		$categoria->municipalities_id = 283; 
		$categoria->parishes = "Río Acarigua";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 724; 
		$categoria->municipalities_id = 284; 
		$categoria->parishes = "Capital Esteller";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 725; 
		$categoria->municipalities_id = 284; 
		$categoria->parishes = "Uveral";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 726; 
		$categoria->municipalities_id = 285; 
		$categoria->parishes = "Guanare";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 727; 
		$categoria->municipalities_id = 285; 
		$categoria->parishes = "Córdoba";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 728; 
		$categoria->municipalities_id = 285; 
		$categoria->parishes = "San José de la Montaña";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 729; 
		$categoria->municipalities_id = 285; 
		$categoria->parishes = "San Juan de Guanaguanare";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 730; 
		$categoria->municipalities_id = 285; 
		$categoria->parishes = "Virgen de la Coromoto";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 731; 
		$categoria->municipalities_id = 286; 
		$categoria->parishes = "Guanarito";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 732; 
		$categoria->municipalities_id = 286; 
		$categoria->parishes = "Trinidad de la Capilla";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 733; 
		$categoria->municipalities_id = 286; 
		$categoria->parishes = "Divina Pastora";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 734; 
		$categoria->municipalities_id = 287; 
		$categoria->parishes = "Monseñor José Vicente de Unda";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 735; 
		$categoria->municipalities_id = 287; 
		$categoria->parishes = "Peña Blanca";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 736; 
		$categoria->municipalities_id = 288; 
		$categoria->parishes = "Capital Ospino";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 737; 
		$categoria->municipalities_id = 288; 
		$categoria->parishes = "Aparición";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 738; 
		$categoria->municipalities_id = 288; 
		$categoria->parishes = "La Estación";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 739; 
		$categoria->municipalities_id = 289; 
		$categoria->parishes = "Páez";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 740; 
		$categoria->municipalities_id = 289; 
		$categoria->parishes = "Payara";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 741; 
		$categoria->municipalities_id = 289; 
		$categoria->parishes = "Pimpinela";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 742; 
		$categoria->municipalities_id = 289; 
		$categoria->parishes = "Ramón Peraza";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 743; 
		$categoria->municipalities_id = 290; 
		$categoria->parishes = "Papelón";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 744; 
		$categoria->municipalities_id = 290; 
		$categoria->parishes = "Caño Delgadito";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 745; 
		$categoria->municipalities_id = 291; 
		$categoria->parishes = "San Genaro de Boconoito";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 746; 
		$categoria->municipalities_id = 291; 
		$categoria->parishes = "Antolín Tovar";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 747; 
		$categoria->municipalities_id = 292; 
		$categoria->parishes = "San Rafael de Onoto";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 748; 
		$categoria->municipalities_id = 292; 
		$categoria->parishes = "Santa Fe";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 749; 
		$categoria->municipalities_id = 292; 
		$categoria->parishes = "Thermo Morles";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 750; 
		$categoria->municipalities_id = 293; 
		$categoria->parishes = "Santa Rosalía";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 751; 
		$categoria->municipalities_id = 293; 
		$categoria->parishes = "Florida";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 752; 
		$categoria->municipalities_id = 294; 
		$categoria->parishes = "Sucre";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 753; 
		$categoria->municipalities_id = 294; 
		$categoria->parishes = "Concepción";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 754; 
		$categoria->municipalities_id = 294; 
		$categoria->parishes = "San Rafael de Palo Alzado";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 755; 
		$categoria->municipalities_id = 294; 
		$categoria->parishes = "Uvencio Antonio Velásquez";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 756; 
		$categoria->municipalities_id = 294; 
		$categoria->parishes = "San José de Saguaz";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 757; 
		$categoria->municipalities_id = 294; 
		$categoria->parishes = "Villa Rosa";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 758; 
		$categoria->municipalities_id = 295; 
		$categoria->parishes = "Turén";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 759; 
		$categoria->municipalities_id = 295; 
		$categoria->parishes = "Canelones";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 760; 
		$categoria->municipalities_id = 295; 
		$categoria->parishes = "Santa Cruz";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 761; 
		$categoria->municipalities_id = 295; 
		$categoria->parishes = "San Isidro Labrador";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 762; 
		$categoria->municipalities_id = 296; 
		$categoria->parishes = "Mariño";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 763; 
		$categoria->municipalities_id = 296; 
		$categoria->parishes = "Rómulo Gallegos";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 764; 
		$categoria->municipalities_id = 297; 
		$categoria->parishes = "San José de Aerocuar";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 765; 
		$categoria->municipalities_id = 297; 
		$categoria->parishes = "Tavera Acosta";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 766; 
		$categoria->municipalities_id = 298; 
		$categoria->parishes = "Río Caribe";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 767; 
		$categoria->municipalities_id = 298; 
		$categoria->parishes = "Antonio José de Sucre";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 768; 
		$categoria->municipalities_id = 298; 
		$categoria->parishes = "El Morro de Puerto Santo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 769; 
		$categoria->municipalities_id = 298; 
		$categoria->parishes = "Puerto Santo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 770; 
		$categoria->municipalities_id = 298; 
		$categoria->parishes = "San Juan de las Galdonas";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 771; 
		$categoria->municipalities_id = 299; 
		$categoria->parishes = "El Pilar";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 772; 
		$categoria->municipalities_id = 299; 
		$categoria->parishes = "El Rincón";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 773; 
		$categoria->municipalities_id = 299; 
		$categoria->parishes = "General Francisco Antonio Váquez";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 774; 
		$categoria->municipalities_id = 299; 
		$categoria->parishes = "Guaraúnos";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 775; 
		$categoria->municipalities_id = 299; 
		$categoria->parishes = "Tunapuicito";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 776; 
		$categoria->municipalities_id = 299; 
		$categoria->parishes = "Unión";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 777; 
		$categoria->municipalities_id = 300; 
		$categoria->parishes = "Santa Catalina";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 778; 
		$categoria->municipalities_id = 300; 
		$categoria->parishes = "Santa Rosa";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 779; 
		$categoria->municipalities_id = 300; 
		$categoria->parishes = "Santa Teresa";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 780; 
		$categoria->municipalities_id = 300; 
		$categoria->parishes = "Bolívar";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 781; 
		$categoria->municipalities_id = 300; 
		$categoria->parishes = "Maracapana";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 782; 
		$categoria->municipalities_id = 302; 
		$categoria->parishes = "Libertad";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 783; 
		$categoria->municipalities_id = 302; 
		$categoria->parishes = "El Paujil";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 784; 
		$categoria->municipalities_id = 302; 
		$categoria->parishes = "Yaguaraparo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 785; 
		$categoria->municipalities_id = 303; 
		$categoria->parishes = "Cruz Salmerón Acosta";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 786; 
		$categoria->municipalities_id = 303; 
		$categoria->parishes = "Chacopata";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 787; 
		$categoria->municipalities_id = 303; 
		$categoria->parishes = "Manicuare";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 788; 
		$categoria->municipalities_id = 304; 
		$categoria->parishes = "Tunapuy";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 789; 
		$categoria->municipalities_id = 304; 
		$categoria->parishes = "Campo Elías";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 790; 
		$categoria->municipalities_id = 305; 
		$categoria->parishes = "Irapa";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 791; 
		$categoria->municipalities_id = 305; 
		$categoria->parishes = "Campo Claro";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 792; 
		$categoria->municipalities_id = 305; 
		$categoria->parishes = "Maraval";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 793; 
		$categoria->municipalities_id = 305; 
		$categoria->parishes = "San Antonio de Irapa";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 794; 
		$categoria->municipalities_id = 305; 
		$categoria->parishes = "Soro";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 795; 
		$categoria->municipalities_id = 306; 
		$categoria->parishes = "Mejía";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 796; 
		$categoria->municipalities_id = 307; 
		$categoria->parishes = "Cumanacoa";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 797; 
		$categoria->municipalities_id = 307; 
		$categoria->parishes = "Arenas";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 798; 
		$categoria->municipalities_id = 307; 
		$categoria->parishes = "Aricagua";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 799; 
		$categoria->municipalities_id = 307; 
		$categoria->parishes = "Cogollar";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 800; 
		$categoria->municipalities_id = 307; 
		$categoria->parishes = "San Fernando";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 801; 
		$categoria->municipalities_id = 307; 
		$categoria->parishes = "San Lorenzo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 802; 
		$categoria->municipalities_id = 308; 
		$categoria->parishes = "Villa Frontado (Muelle de Cariaco)";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 803; 
		$categoria->municipalities_id = 308; 
		$categoria->parishes = "Catuaro";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 804; 
		$categoria->municipalities_id = 308; 
		$categoria->parishes = "Rendón";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 805; 
		$categoria->municipalities_id = 308; 
		$categoria->parishes = "San Cruz";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 806; 
		$categoria->municipalities_id = 308; 
		$categoria->parishes = "Santa María";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 807; 
		$categoria->municipalities_id = 309; 
		$categoria->parishes = "Altagracia";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 808; 
		$categoria->municipalities_id = 309; 
		$categoria->parishes = "Santa Inés";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 809; 
		$categoria->municipalities_id = 309; 
		$categoria->parishes = "Valentín Valiente";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 810; 
		$categoria->municipalities_id = 309; 
		$categoria->parishes = "Ayacucho";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 811; 
		$categoria->municipalities_id = 309; 
		$categoria->parishes = "San Juan";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 812; 
		$categoria->municipalities_id = 309; 
		$categoria->parishes = "Raúl Leoni";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 813; 
		$categoria->municipalities_id = 309; 
		$categoria->parishes = "Gran Mariscal";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 814; 
		$categoria->municipalities_id = 310; 
		$categoria->parishes = "Cristóbal Colón";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 815; 
		$categoria->municipalities_id = 310; 
		$categoria->parishes = "Bideau";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 816; 
		$categoria->municipalities_id = 310; 
		$categoria->parishes = "Punta de Piedras";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 817; 
		$categoria->municipalities_id = 310; 
		$categoria->parishes = "Güiria";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 818; 
		$categoria->municipalities_id = 341; 
		$categoria->parishes = "Andrés Bello";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 819; 
		$categoria->municipalities_id = 342; 
		$categoria->parishes = "Antonio Rómulo Costa";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 820; 
		$categoria->municipalities_id = 343; 
		$categoria->parishes = "Ayacucho";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 821; 
		$categoria->municipalities_id = 343; 
		$categoria->parishes = "Rivas Berti";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 822; 
		$categoria->municipalities_id = 343; 
		$categoria->parishes = "San Pedro del Río";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 823; 
		$categoria->municipalities_id = 344; 
		$categoria->parishes = "Bolívar";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 824; 
		$categoria->municipalities_id = 344; 
		$categoria->parishes = "Palotal";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 825; 
		$categoria->municipalities_id = 344; 
		$categoria->parishes = "General Juan Vicente Gómez";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 826; 
		$categoria->municipalities_id = 344; 
		$categoria->parishes = "Isaías Medina Angarita";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 827; 
		$categoria->municipalities_id = 345; 
		$categoria->parishes = "Cárdenas";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 828; 
		$categoria->municipalities_id = 345; 
		$categoria->parishes = "Amenodoro Ángel Lamus";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 829; 
		$categoria->municipalities_id = 345; 
		$categoria->parishes = "La Florida";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 830; 
		$categoria->municipalities_id = 346; 
		$categoria->parishes = "Córdoba";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 831; 
		$categoria->municipalities_id = 347; 
		$categoria->parishes = "Fernández Feo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 832; 
		$categoria->municipalities_id = 347; 
		$categoria->parishes = "Alberto Adriani";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 833; 
		$categoria->municipalities_id = 347; 
		$categoria->parishes = "Santo Domingo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 834; 
		$categoria->municipalities_id = 348; 
		$categoria->parishes = "Francisco de Miranda";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 835; 
		$categoria->municipalities_id = 349; 
		$categoria->parishes = "García de Hevia";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 836; 
		$categoria->municipalities_id = 349; 
		$categoria->parishes = "Boca de Grita";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 837; 
		$categoria->municipalities_id = 349; 
		$categoria->parishes = "José Antonio Páez";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 838; 
		$categoria->municipalities_id = 350; 
		$categoria->parishes = "Guásimos";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 839; 
		$categoria->municipalities_id = 351; 
		$categoria->parishes = "Independencia";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 840; 
		$categoria->municipalities_id = 351; 
		$categoria->parishes = "Juan Germán Roscio";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 841; 
		$categoria->municipalities_id = 351; 
		$categoria->parishes = "Román Cárdenas";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 842; 
		$categoria->municipalities_id = 352; 
		$categoria->parishes = "Jáuregui";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 843; 
		$categoria->municipalities_id = 352; 
		$categoria->parishes = "Emilio Constantino Guerrero";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 844; 
		$categoria->municipalities_id = 352; 
		$categoria->parishes = "Monseñor Miguel Antonio Salas";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 845; 
		$categoria->municipalities_id = 353; 
		$categoria->parishes = "José María Vargas";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 846; 
		$categoria->municipalities_id = 354; 
		$categoria->parishes = "Junín";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 847; 
		$categoria->municipalities_id = 354; 
		$categoria->parishes = "La Petrólea";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 848; 
		$categoria->municipalities_id = 354; 
		$categoria->parishes = "Quinimarí";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 849; 
		$categoria->municipalities_id = 354; 
		$categoria->parishes = "Bramón";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 850; 
		$categoria->municipalities_id = 355; 
		$categoria->parishes = "Libertad";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 851; 
		$categoria->municipalities_id = 355; 
		$categoria->parishes = "Cipriano Castro";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 852; 
		$categoria->municipalities_id = 355; 
		$categoria->parishes = "Manuel Felipe Rugeles";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 853; 
		$categoria->municipalities_id = 356; 
		$categoria->parishes = "Libertador";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 854; 
		$categoria->municipalities_id = 356; 
		$categoria->parishes = "Doradas";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 855; 
		$categoria->municipalities_id = 356; 
		$categoria->parishes = "Emeterio Ochoa";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 856; 
		$categoria->municipalities_id = 356; 
		$categoria->parishes = "San Joaquín de Navay";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 857; 
		$categoria->municipalities_id = 357; 
		$categoria->parishes = "Lobatera";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 858; 
		$categoria->municipalities_id = 357; 
		$categoria->parishes = "Constitución";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 859; 
		$categoria->municipalities_id = 358; 
		$categoria->parishes = "Michelena";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 860; 
		$categoria->municipalities_id = 359; 
		$categoria->parishes = "Panamericano";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 861; 
		$categoria->municipalities_id = 359; 
		$categoria->parishes = "La Palmita";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 862; 
		$categoria->municipalities_id = 360; 
		$categoria->parishes = "Pedro María Ureña";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 863; 
		$categoria->municipalities_id = 360; 
		$categoria->parishes = "Nueva Arcadia";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 864; 
		$categoria->municipalities_id = 361; 
		$categoria->parishes = "Delicias";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 865; 
		$categoria->municipalities_id = 361; 
		$categoria->parishes = "Pecaya";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 866; 
		$categoria->municipalities_id = 362; 
		$categoria->parishes = "Samuel Darío Maldonado";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 867; 
		$categoria->municipalities_id = 362; 
		$categoria->parishes = "Boconó";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 868; 
		$categoria->municipalities_id = 362; 
		$categoria->parishes = "Hernández";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 869; 
		$categoria->municipalities_id = 363; 
		$categoria->parishes = "La Concordia";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 870; 
		$categoria->municipalities_id = 363; 
		$categoria->parishes = "San Juan Bautista";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 871; 
		$categoria->municipalities_id = 363; 
		$categoria->parishes = "Pedro María Morantes";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 872; 
		$categoria->municipalities_id = 363; 
		$categoria->parishes = "San Sebastián";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 873; 
		$categoria->municipalities_id = 363; 
		$categoria->parishes = "Dr. Francisco Romero Lobo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 874; 
		$categoria->municipalities_id = 364; 
		$categoria->parishes = "Seboruco";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 875; 
		$categoria->municipalities_id = 365; 
		$categoria->parishes = "Simón Rodríguez";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 876; 
		$categoria->municipalities_id = 366; 
		$categoria->parishes = "Sucre";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 877; 
		$categoria->municipalities_id = 366; 
		$categoria->parishes = "Eleazar López Contreras";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 878; 
		$categoria->municipalities_id = 366; 
		$categoria->parishes = "San Pablo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 879; 
		$categoria->municipalities_id = 367; 
		$categoria->parishes = "Torbes";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 880; 
		$categoria->municipalities_id = 368; 
		$categoria->parishes = "Uribante";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 881; 
		$categoria->municipalities_id = 368; 
		$categoria->parishes = "Cárdenas";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 882; 
		$categoria->municipalities_id = 368; 
		$categoria->parishes = "Juan Pablo Peñalosa";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 883; 
		$categoria->municipalities_id = 368; 
		$categoria->parishes = "Potosí";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 884; 
		$categoria->municipalities_id = 369; 
		$categoria->parishes = "San Judas Tadeo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 885; 
		$categoria->municipalities_id = 370; 
		$categoria->parishes = "Araguaney";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 886; 
		$categoria->municipalities_id = 370; 
		$categoria->parishes = "El Jaguito";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 887; 
		$categoria->municipalities_id = 370; 
		$categoria->parishes = "La Esperanza";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 888; 
		$categoria->municipalities_id = 370; 
		$categoria->parishes = "Santa Isabel";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 889; 
		$categoria->municipalities_id = 371; 
		$categoria->parishes = "Boconó";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 890; 
		$categoria->municipalities_id = 371; 
		$categoria->parishes = "El Carmen";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 891; 
		$categoria->municipalities_id = 371; 
		$categoria->parishes = "Mosquey";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 892; 
		$categoria->municipalities_id = 371; 
		$categoria->parishes = "Ayacucho";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 893; 
		$categoria->municipalities_id = 371; 
		$categoria->parishes = "Burbusay";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 894; 
		$categoria->municipalities_id = 371; 
		$categoria->parishes = "General Ribas";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 895; 
		$categoria->municipalities_id = 371; 
		$categoria->parishes = "Guaramacal";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 896; 
		$categoria->municipalities_id = 371; 
		$categoria->parishes = "Vega de Guaramacal";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 897; 
		$categoria->municipalities_id = 371; 
		$categoria->parishes = "Monseñor Jáuregui";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 898; 
		$categoria->municipalities_id = 371; 
		$categoria->parishes = "Rafael Rangel";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 899; 
		$categoria->municipalities_id = 371; 
		$categoria->parishes = "San Miguel";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 900; 
		$categoria->municipalities_id = 371; 
		$categoria->parishes = "San José";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 901; 
		$categoria->municipalities_id = 372; 
		$categoria->parishes = "Sabana Grande";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 902; 
		$categoria->municipalities_id = 372; 
		$categoria->parishes = "Cheregüé";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 903; 
		$categoria->municipalities_id = 372; 
		$categoria->parishes = "Granados";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 904; 
		$categoria->municipalities_id = 373; 
		$categoria->parishes = "Arnoldo Gabaldón";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 905; 
		$categoria->municipalities_id = 373; 
		$categoria->parishes = "Bolivia";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 906; 
		$categoria->municipalities_id = 373; 
		$categoria->parishes = "Carrillo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 907; 
		$categoria->municipalities_id = 373; 
		$categoria->parishes = "Cegarra";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 908; 
		$categoria->municipalities_id = 373; 
		$categoria->parishes = "Chejendé";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 909; 
		$categoria->municipalities_id = 373; 
		$categoria->parishes = "Manuel Salvador Ulloa";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 910; 
		$categoria->municipalities_id = 373; 
		$categoria->parishes = "San José";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 911; 
		$categoria->municipalities_id = 374; 
		$categoria->parishes = "Carache";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 912; 
		$categoria->municipalities_id = 374; 
		$categoria->parishes = "La Concepción";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 913; 
		$categoria->municipalities_id = 374; 
		$categoria->parishes = "Cuicas";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 914; 
		$categoria->municipalities_id = 374; 
		$categoria->parishes = "Panamericana";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 915; 
		$categoria->municipalities_id = 374; 
		$categoria->parishes = "Santa Cruz";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 916; 
		$categoria->municipalities_id = 375; 
		$categoria->parishes = "Escuque";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 917; 
		$categoria->municipalities_id = 375; 
		$categoria->parishes = "La Unión";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 918; 
		$categoria->municipalities_id = 375; 
		$categoria->parishes = "Santa Rita";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 919; 
		$categoria->municipalities_id = 375; 
		$categoria->parishes = "Sabana Libre";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 920; 
		$categoria->municipalities_id = 376; 
		$categoria->parishes = "El Socorro";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 921; 
		$categoria->municipalities_id = 376; 
		$categoria->parishes = "Los Caprichos";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 922; 
		$categoria->municipalities_id = 376; 
		$categoria->parishes = "Antonio José de Sucre";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 923; 
		$categoria->municipalities_id = 377; 
		$categoria->parishes = "Campo Elías";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 924; 
		$categoria->municipalities_id = 377; 
		$categoria->parishes = "Arnoldo Gabaldón";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 925; 
		$categoria->municipalities_id = 378; 
		$categoria->parishes = "Santa Apolonia";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 926; 
		$categoria->municipalities_id = 378; 
		$categoria->parishes = "El Progreso";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 927; 
		$categoria->municipalities_id = 378; 
		$categoria->parishes = "La Ceiba";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 928; 
		$categoria->municipalities_id = 378; 
		$categoria->parishes = "Tres de Febrero";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 929; 
		$categoria->municipalities_id = 379; 
		$categoria->parishes = "El Dividive";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 930; 
		$categoria->municipalities_id = 379; 
		$categoria->parishes = "Agua Santa";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 931; 
		$categoria->municipalities_id = 379; 
		$categoria->parishes = "Agua Caliente";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 932; 
		$categoria->municipalities_id = 379; 
		$categoria->parishes = "El Cenizo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 933; 
		$categoria->municipalities_id = 379; 
		$categoria->parishes = "Valerita";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 934; 
		$categoria->municipalities_id = 380; 
		$categoria->parishes = "Monte Carmelo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 935; 
		$categoria->municipalities_id = 380; 
		$categoria->parishes = "Buena Vista";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 936; 
		$categoria->municipalities_id = 380; 
		$categoria->parishes = "Santa María del Horcón";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 937; 
		$categoria->municipalities_id = 381; 
		$categoria->parishes = "Motatán";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 938; 
		$categoria->municipalities_id = 381; 
		$categoria->parishes = "El Baño";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 939; 
		$categoria->municipalities_id = 381; 
		$categoria->parishes = "Jalisco";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 940; 
		$categoria->municipalities_id = 382; 
		$categoria->parishes = "Pampán";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 941; 
		$categoria->municipalities_id = 382; 
		$categoria->parishes = "Flor de Patria";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 942; 
		$categoria->municipalities_id = 382; 
		$categoria->parishes = "La Paz";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 943; 
		$categoria->municipalities_id = 382; 
		$categoria->parishes = "Santa Ana";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 944; 
		$categoria->municipalities_id = 383; 
		$categoria->parishes = "Pampanito";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 945; 
		$categoria->municipalities_id = 383; 
		$categoria->parishes = "La Concepción";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 946; 
		$categoria->municipalities_id = 383; 
		$categoria->parishes = "Pampanito II";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 947; 
		$categoria->municipalities_id = 384; 
		$categoria->parishes = "Betijoque";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 948; 
		$categoria->municipalities_id = 384; 
		$categoria->parishes = "José Gregorio Hernández";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 949; 
		$categoria->municipalities_id = 384; 
		$categoria->parishes = "La Pueblita";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 950; 
		$categoria->municipalities_id = 384; 
		$categoria->parishes = "Los Cedros";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 951; 
		$categoria->municipalities_id = 385; 
		$categoria->parishes = "Carvajal";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 952; 
		$categoria->municipalities_id = 385; 
		$categoria->parishes = "Campo Alegre";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 953; 
		$categoria->municipalities_id = 385; 
		$categoria->parishes = "Antonio Nicolás Briceño";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 954; 
		$categoria->municipalities_id = 385; 
		$categoria->parishes = "José Leonardo Suárez";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 955; 
		$categoria->municipalities_id = 386; 
		$categoria->parishes = "Sabana de Mendoza";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 956; 
		$categoria->municipalities_id = 386; 
		$categoria->parishes = "Junín";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 957; 
		$categoria->municipalities_id = 386; 
		$categoria->parishes = "Valmore Rodríguez";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 958; 
		$categoria->municipalities_id = 386; 
		$categoria->parishes = "El Paraíso";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 959; 
		$categoria->municipalities_id = 387; 
		$categoria->parishes = "Andrés Linares";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 960; 
		$categoria->municipalities_id = 387; 
		$categoria->parishes = "Chiquinquirá";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 961; 
		$categoria->municipalities_id = 387; 
		$categoria->parishes = "Cristóbal Mendoza";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 962; 
		$categoria->municipalities_id = 387; 
		$categoria->parishes = "Cruz Carrillo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 963; 
		$categoria->municipalities_id = 387; 
		$categoria->parishes = "Matriz";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 964; 
		$categoria->municipalities_id = 387; 
		$categoria->parishes = "Monseñor Carrillo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 965; 
		$categoria->municipalities_id = 387; 
		$categoria->parishes = "Tres Esquinas";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 966; 
		$categoria->municipalities_id = 388; 
		$categoria->parishes = "Cabimbú";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 967; 
		$categoria->municipalities_id = 388; 
		$categoria->parishes = "Jajó";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 968; 
		$categoria->municipalities_id = 388; 
		$categoria->parishes = "La Mesa de Esnujaque";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 969; 
		$categoria->municipalities_id = 388; 
		$categoria->parishes = "Santiago";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 970; 
		$categoria->municipalities_id = 388; 
		$categoria->parishes = "Tuñame";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 971; 
		$categoria->municipalities_id = 388; 
		$categoria->parishes = "La Quebrada";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 972; 
		$categoria->municipalities_id = 389; 
		$categoria->parishes = "Juan Ignacio Montilla";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 973; 
		$categoria->municipalities_id = 389; 
		$categoria->parishes = "La Beatriz";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 974; 
		$categoria->municipalities_id = 389; 
		$categoria->parishes = "La Puerta";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 975; 
		$categoria->municipalities_id = 389; 
		$categoria->parishes = "Mendoza del Valle de Momboy";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 976; 
		$categoria->municipalities_id = 389; 
		$categoria->parishes = "Mercedes Díaz";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 977; 
		$categoria->municipalities_id = 389; 
		$categoria->parishes = "San Luis";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 978; 
		$categoria->municipalities_id = 390; 
		$categoria->parishes = "Caraballeda";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 979; 
		$categoria->municipalities_id = 390; 
		$categoria->parishes = "Carayaca";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 980; 
		$categoria->municipalities_id = 390; 
		$categoria->parishes = "Carlos Soublette";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 981; 
		$categoria->municipalities_id = 390; 
		$categoria->parishes = "Caruao Chuspa";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 982; 
		$categoria->municipalities_id = 390; 
		$categoria->parishes = "Catia La Mar";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 983; 
		$categoria->municipalities_id = 390; 
		$categoria->parishes = "El Junko";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 984; 
		$categoria->municipalities_id = 390; 
		$categoria->parishes = "La Guaira";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 985; 
		$categoria->municipalities_id = 390; 
		$categoria->parishes = "Macuto";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 986; 
		$categoria->municipalities_id = 390; 
		$categoria->parishes = "Maiquetía";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 987; 
		$categoria->municipalities_id = 390; 
		$categoria->parishes = "Naiguatá";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 988; 
		$categoria->municipalities_id = 390; 
		$categoria->parishes = "Urimare";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 989; 
		$categoria->municipalities_id = 391; 
		$categoria->parishes = "Arístides Bastidas";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 990; 
		$categoria->municipalities_id = 392; 
		$categoria->parishes = "Bolívar";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 991; 
		$categoria->municipalities_id = 407; 
		$categoria->parishes = "Chivacoa";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 992; 
		$categoria->municipalities_id = 407; 
		$categoria->parishes = "Campo Elías";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 993; 
		$categoria->municipalities_id = 408; 
		$categoria->parishes = "Cocorote";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 994; 
		$categoria->municipalities_id = 409; 
		$categoria->parishes = "Independencia";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 995; 
		$categoria->municipalities_id = 410; 
		$categoria->parishes = "José Antonio Páez";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 996; 
		$categoria->municipalities_id = 411; 
		$categoria->parishes = "La Trinidad";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 997; 
		$categoria->municipalities_id = 412; 
		$categoria->parishes = "Manuel Monge";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 998; 
		$categoria->municipalities_id = 413; 
		$categoria->parishes = "Salóm";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 999; 
		$categoria->municipalities_id = 413; 
		$categoria->parishes = "Temerla";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1000; 
		$categoria->municipalities_id = 413; 
		$categoria->parishes = "Nirgua";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1001; 
		$categoria->municipalities_id = 414; 
		$categoria->parishes = "San Andrés";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1002; 
		$categoria->municipalities_id = 414; 
		$categoria->parishes = "Yaritagua";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1003; 
		$categoria->municipalities_id = 415; 
		$categoria->parishes = "San Javier";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1004; 
		$categoria->municipalities_id = 415; 
		$categoria->parishes = "Albarico";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1005; 
		$categoria->municipalities_id = 415; 
		$categoria->parishes = "San Felipe";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1006; 
		$categoria->municipalities_id = 416; 
		$categoria->parishes = "Sucre";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1007; 
		$categoria->municipalities_id = 417; 
		$categoria->parishes = "Urachiche";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1008; 
		$categoria->municipalities_id = 418; 
		$categoria->parishes = "El Guayabo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1009; 
		$categoria->municipalities_id = 418; 
		$categoria->parishes = "Farriar";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1010; 
		$categoria->municipalities_id = 441; 
		$categoria->parishes = "Isla de Toas";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1011; 
		$categoria->municipalities_id = 441; 
		$categoria->parishes = "Monagas";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1012; 
		$categoria->municipalities_id = 442; 
		$categoria->parishes = "San Timoteo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1013; 
		$categoria->municipalities_id = 442; 
		$categoria->parishes = "General Urdaneta";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1014; 
		$categoria->municipalities_id = 442; 
		$categoria->parishes = "Libertador";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1015; 
		$categoria->municipalities_id = 442; 
		$categoria->parishes = "Marcelino Briceño";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1016; 
		$categoria->municipalities_id = 442; 
		$categoria->parishes = "Pueblo Nuevo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1017; 
		$categoria->municipalities_id = 442; 
		$categoria->parishes = "Manuel Guanipa Matos";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1018; 
		$categoria->municipalities_id = 443; 
		$categoria->parishes = "Ambrosio";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1019; 
		$categoria->municipalities_id = 443; 
		$categoria->parishes = "Carmen Herrera";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1020; 
		$categoria->municipalities_id = 443; 
		$categoria->parishes = "La Rosa";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1021; 
		$categoria->municipalities_id = 443; 
		$categoria->parishes = "Germán Ríos Linares";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1022; 
		$categoria->municipalities_id = 443; 
		$categoria->parishes = "San Benito";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1023; 
		$categoria->municipalities_id = 443; 
		$categoria->parishes = "Rómulo Betancourt";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1024; 
		$categoria->municipalities_id = 443; 
		$categoria->parishes = "Jorge Hernández";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1025; 
		$categoria->municipalities_id = 443; 
		$categoria->parishes = "Punta Gorda";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1026; 
		$categoria->municipalities_id = 443; 
		$categoria->parishes = "Arístides Calvani";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1027; 
		$categoria->municipalities_id = 444; 
		$categoria->parishes = "Encontrados";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1028; 
		$categoria->municipalities_id = 444; 
		$categoria->parishes = "Udón Pérez";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1029; 
		$categoria->municipalities_id = 445; 
		$categoria->parishes = "Moralito";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1030; 
		$categoria->municipalities_id = 445; 
		$categoria->parishes = "San Carlos del Zulia";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1031; 
		$categoria->municipalities_id = 445; 
		$categoria->parishes = "Santa Cruz del Zulia";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1032; 
		$categoria->municipalities_id = 445; 
		$categoria->parishes = "Santa Bárbara";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1033; 
		$categoria->municipalities_id = 445; 
		$categoria->parishes = "Urribarrí";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1034; 
		$categoria->municipalities_id = 446; 
		$categoria->parishes = "Carlos Quevedo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1035; 
		$categoria->municipalities_id = 446; 
		$categoria->parishes = "Francisco Javier Pulgar";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1036; 
		$categoria->municipalities_id = 446; 
		$categoria->parishes = "Simón Rodríguez";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1037; 
		$categoria->municipalities_id = 446; 
		$categoria->parishes = "Guamo-Gavilanes";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1038; 
		$categoria->municipalities_id = 448; 
		$categoria->parishes = "La Concepción";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1039; 
		$categoria->municipalities_id = 448; 
		$categoria->parishes = "San José";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1040; 
		$categoria->municipalities_id = 448; 
		$categoria->parishes = "Mariano Parra León";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1041; 
		$categoria->municipalities_id = 448; 
		$categoria->parishes = "José Ramón Yépez";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1042; 
		$categoria->municipalities_id = 449; 
		$categoria->parishes = "Jesús María Semprún";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1043; 
		$categoria->municipalities_id = 449; 
		$categoria->parishes = "Barí";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1044; 
		$categoria->municipalities_id = 450; 
		$categoria->parishes = "Concepción";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1045; 
		$categoria->municipalities_id = 450; 
		$categoria->parishes = "Andrés Bello";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1046; 
		$categoria->municipalities_id = 450; 
		$categoria->parishes = "Chiquinquirá";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1047; 
		$categoria->municipalities_id = 450; 
		$categoria->parishes = "El Carmelo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1048; 
		$categoria->municipalities_id = 450; 
		$categoria->parishes = "Potreritos";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1049; 
		$categoria->municipalities_id = 451; 
		$categoria->parishes = "Libertad";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1050; 
		$categoria->municipalities_id = 451; 
		$categoria->parishes = "Alonso de Ojeda";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1051; 
		$categoria->municipalities_id = 451; 
		$categoria->parishes = "Venezuela";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1052; 
		$categoria->municipalities_id = 451; 
		$categoria->parishes = "Eleazar López Contreras";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1053; 
		$categoria->municipalities_id = 451; 
		$categoria->parishes = "Campo Lara";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1054; 
		$categoria->municipalities_id = 452; 
		$categoria->parishes = "Bartolomé de las Casas";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1055; 
		$categoria->municipalities_id = 452; 
		$categoria->parishes = "Libertad";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1056; 
		$categoria->municipalities_id = 452; 
		$categoria->parishes = "Río Negro";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1057; 
		$categoria->municipalities_id = 452; 
		$categoria->parishes = "San José de Perijá";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1058; 
		$categoria->municipalities_id = 453; 
		$categoria->parishes = "San Rafael";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1059; 
		$categoria->municipalities_id = 453; 
		$categoria->parishes = "La Sierrita";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1060; 
		$categoria->municipalities_id = 453; 
		$categoria->parishes = "Las Parcelas";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1061; 
		$categoria->municipalities_id = 453; 
		$categoria->parishes = "Luis de Vicente";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1062; 
		$categoria->municipalities_id = 453; 
		$categoria->parishes = "Monseñor Marcos Sergio Godoy";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1063; 
		$categoria->municipalities_id = 453; 
		$categoria->parishes = "Ricaurte";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1064; 
		$categoria->municipalities_id = 453; 
		$categoria->parishes = "Tamare";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1065; 
		$categoria->municipalities_id = 454; 
		$categoria->parishes = "Antonio Borjas Romero";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1066; 
		$categoria->municipalities_id = 454; 
		$categoria->parishes = "Bolívar";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1067; 
		$categoria->municipalities_id = 454; 
		$categoria->parishes = "Cacique Mara";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1068; 
		$categoria->municipalities_id = 454; 
		$categoria->parishes = "Carracciolo Parra Pérez";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1069; 
		$categoria->municipalities_id = 454; 
		$categoria->parishes = "Cecilio Acosta";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1070; 
		$categoria->municipalities_id = 454; 
		$categoria->parishes = "Cristo de Aranza";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1071; 
		$categoria->municipalities_id = 454; 
		$categoria->parishes = "Coquivacoa";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1072; 
		$categoria->municipalities_id = 454; 
		$categoria->parishes = "Chiquinquirá";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1073; 
		$categoria->municipalities_id = 454; 
		$categoria->parishes = "Francisco Eugenio Bustamante";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1074; 
		$categoria->municipalities_id = 454; 
		$categoria->parishes = "Idelfonzo Vásquez";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1075; 
		$categoria->municipalities_id = 454; 
		$categoria->parishes = "Juana de Ávila";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1076; 
		$categoria->municipalities_id = 454; 
		$categoria->parishes = "Luis Hurtado Higuera";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1077; 
		$categoria->municipalities_id = 454; 
		$categoria->parishes = "Manuel Dagnino";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1078; 
		$categoria->municipalities_id = 454; 
		$categoria->parishes = "Olegario Villalobos";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1079; 
		$categoria->municipalities_id = 454; 
		$categoria->parishes = "Raúl Leoni";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1080; 
		$categoria->municipalities_id = 454; 
		$categoria->parishes = "Santa Lucía";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1081; 
		$categoria->municipalities_id = 454; 
		$categoria->parishes = "Venancio Pulgar";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1082; 
		$categoria->municipalities_id = 454; 
		$categoria->parishes = "San Isidro";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1083; 
		$categoria->municipalities_id = 455; 
		$categoria->parishes = "Altagracia";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1084; 
		$categoria->municipalities_id = 455; 
		$categoria->parishes = "Faría";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1085; 
		$categoria->municipalities_id = 455; 
		$categoria->parishes = "Ana María Campos";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1086; 
		$categoria->municipalities_id = 455; 
		$categoria->parishes = "San Antonio";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1087; 
		$categoria->municipalities_id = 455; 
		$categoria->parishes = "San José";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1088; 
		$categoria->municipalities_id = 456; 
		$categoria->parishes = "Donaldo García";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1089; 
		$categoria->municipalities_id = 456; 
		$categoria->parishes = "El Rosario";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1090; 
		$categoria->municipalities_id = 456; 
		$categoria->parishes = "Sixto Zambrano";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1091; 
		$categoria->municipalities_id = 457; 
		$categoria->parishes = "San Francisco";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1092; 
		$categoria->municipalities_id = 457; 
		$categoria->parishes = "El Bajo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1093; 
		$categoria->municipalities_id = 457; 
		$categoria->parishes = "Domitila Flores";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1094; 
		$categoria->municipalities_id = 457; 
		$categoria->parishes = "Francisco Ochoa";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1095; 
		$categoria->municipalities_id = 457; 
		$categoria->parishes = "Los Cortijos";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1096; 
		$categoria->municipalities_id = 457; 
		$categoria->parishes = "Marcial Hernández";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1097; 
		$categoria->municipalities_id = 458; 
		$categoria->parishes = "Santa Rita";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1098; 
		$categoria->municipalities_id = 458; 
		$categoria->parishes = "El Mene";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1099; 
		$categoria->municipalities_id = 458; 
		$categoria->parishes = "Pedro Lucas Urribarrí";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1100; 
		$categoria->municipalities_id = 458; 
		$categoria->parishes = "José Cenobio Urribarrí";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1101; 
		$categoria->municipalities_id = 459; 
		$categoria->parishes = "Rafael Maria Baralt";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1102; 
		$categoria->municipalities_id = 459; 
		$categoria->parishes = "Manuel Manrique";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1103; 
		$categoria->municipalities_id = 459; 
		$categoria->parishes = "Rafael Urdaneta";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1104; 
		$categoria->municipalities_id = 460; 
		$categoria->parishes = "Bobures";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1105; 
		$categoria->municipalities_id = 460; 
		$categoria->parishes = "Gibraltar";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1106; 
		$categoria->municipalities_id = 460; 
		$categoria->parishes = "Heras";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1107; 
		$categoria->municipalities_id = 460; 
		$categoria->parishes = "Monseñor Arturo Álvarez";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1108; 
		$categoria->municipalities_id = 460; 
		$categoria->parishes = "Rómulo Gallegos";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1109; 
		$categoria->municipalities_id = 460; 
		$categoria->parishes = "El Batey";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1110; 
		$categoria->municipalities_id = 461; 
		$categoria->parishes = "Rafael Urdaneta";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1111; 
		$categoria->municipalities_id = 461; 
		$categoria->parishes = "La Victoria";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1112; 
		$categoria->municipalities_id = 461; 
		$categoria->parishes = "Raúl Cuenca";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1113; 
		$categoria->municipalities_id = 447; 
		$categoria->parishes = "Sinamaica";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1114; 
		$categoria->municipalities_id = 447; 
		$categoria->parishes = "Alta Guajira";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1115; 
		$categoria->municipalities_id = 447; 
		$categoria->parishes = "Elías Sánchez Rubio";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1116; 
		$categoria->municipalities_id = 447; 
		$categoria->parishes = "Guajira";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1117; 
		$categoria->municipalities_id = 462; 
		$categoria->parishes = "Altagracia";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1118; 
		$categoria->municipalities_id = 462; 
		$categoria->parishes = "Antímano";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1119; 
		$categoria->municipalities_id = 462; 
		$categoria->parishes = "Caricuao";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1120; 
		$categoria->municipalities_id = 462; 
		$categoria->parishes = "Catedral";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1121; 
		$categoria->municipalities_id = 462; 
		$categoria->parishes = "Coche";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1122; 
		$categoria->municipalities_id = 462; 
		$categoria->parishes = "El Junquito";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1123; 
		$categoria->municipalities_id = 462; 
		$categoria->parishes = "El Paraíso";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1124; 
		$categoria->municipalities_id = 462; 
		$categoria->parishes = "El Recreo";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1125; 
		$categoria->municipalities_id = 462; 
		$categoria->parishes = "El Valle";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1126; 
		$categoria->municipalities_id = 462; 
		$categoria->parishes = "La Candelaria";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1127; 
		$categoria->municipalities_id = 462; 
		$categoria->parishes = "La Pastora";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1128; 
		$categoria->municipalities_id = 462; 
		$categoria->parishes = "La Vega";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1129; 
		$categoria->municipalities_id = 462; 
		$categoria->parishes = "Macarao";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1130; 
		$categoria->municipalities_id = 462; 
		$categoria->parishes = "San Agustín";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1131; 
		$categoria->municipalities_id = 462; 
		$categoria->parishes = "San Bernardino";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1132; 
		$categoria->municipalities_id = 462; 
		$categoria->parishes = "San José";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1133; 
		$categoria->municipalities_id = 462; 
		$categoria->parishes = "San Juan";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1134; 
		$categoria->municipalities_id = 462; 
		$categoria->parishes = "San Pedro";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1135; 
		$categoria->municipalities_id = 462; 
		$categoria->parishes = "Santa Rosalía";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1136; 
		$categoria->municipalities_id = 462; 
		$categoria->parishes = "Santa Teresa";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1137; 
		$categoria->municipalities_id = 462; 
		$categoria->parishes = "Sucre (Catia)";
		$categoria->save();

		$categoria = new Parish();
		$categoria->id = 1138; 
		$categoria->municipalities_id = 462; 
		$categoria->parishes = "23 de enero";
		$categoria->save();
	}

}
