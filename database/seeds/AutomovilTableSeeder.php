<?php

use Illuminate\Database\Seeder;
use App\Uso;
use App\Marca;
use App\Modelo;

class AutomovilTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

		// Uso
		$categoria = new Uso();
		$categoria->id =2;
		$categoria->uso ="PARTICULAR";
		$categoria->save();

		$categoria = new Uso();
		$categoria->id =3;
		$categoria->uso ="RUSTICO";
		$categoria->save();

		$categoria = new Uso();
		$categoria->id =4;
		$categoria->uso ="PICK UP";
		$categoria->save();

		$categoria = new Uso();
		$categoria->id =5;
		$categoria->uso ="CARGA";
		$categoria->save();

		$categoria = new Uso();
		$categoria->id =6;
		$categoria->uso ="MOTO";
		$categoria->save();

		$categoria = new Uso();
		$categoria->id =7;
		$categoria->uso ="AUTOBUSES / AUTOBUSETES";
		$categoria->save();

		$categoria = new Uso();
		$categoria->id =8;
		$categoria->uso ="TAXI";
		$categoria->save();



		try {
			
		} catch (Exception $e) {
			
		}


		// Marca
		$categoria = new Marca();
		$categoria->id =1;
		$categoria->uso_id =7;
		$categoria->marca = "AUTOBUSES";
		$categoria->save();


		$categoria = new Marca();
		$categoria->id =2;
		$categoria->uso_id =7;
		$categoria->marca = "BUSSCAR";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =3;
		$categoria->uso_id =7;
		$categoria->marca = "ENCAVA";
		$categoria->save();


		$categoria = new Marca();
		$categoria->id =4;
		$categoria->uso_id =7;
		$categoria->marca = "FIAT";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =5;
		$categoria->uso_id =7;
		$categoria->marca = "GOLDEN DRAGON";
		$categoria->save();


		$categoria = new Marca();
		$categoria->id =6;
		$categoria->uso_id =7;
		$categoria->marca = "IVECO";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =7;
		$categoria->uso_id =7;
		$categoria->marca = "MARCOPOLO";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =8;
		$categoria->uso_id =7;
		$categoria->marca = "MERCEDES BENZ";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =9;
		$categoria->uso_id =7;
		$categoria->marca = "SCANIA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =10;
		$categoria->uso_id =7;
		$categoria->marca = "VOLKSWAGEN";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =11;
		$categoria->uso_id =7;
		$categoria->marca = "VOLVO";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =12;
		$categoria->uso_id =7;
		$categoria->marca = "YUTONG";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =13;
		$categoria->uso_id =7;
		$categoria->marca = "ZHONG TONG";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =14;
		$categoria->uso_id =7;
		$categoria->marca = "ALKON";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =15;
		$categoria->uso_id =7;
		$categoria->marca = "ASIA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =16;
		$categoria->uso_id =7;
		$categoria->marca = "AUTOBUSES";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =17;
		$categoria->uso_id =7;
		$categoria->marca = "AUTOGAGO";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =18;
		$categoria->uso_id =7;
		$categoria->marca = "BLUE BIRD";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =19;
		$categoria->uso_id =7;
		$categoria->marca = "BUSSCAR";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =20;
		$categoria->uso_id =7;
		$categoria->marca = "CHERY";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =21;
		$categoria->uso_id =7;
		$categoria->marca = "CHEVROLET";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =22;
		$categoria->uso_id =7;
		$categoria->marca = "CITROEN";
		$categoria->save();


		$categoria = new Marca();
		$categoria->id =23;
		$categoria->uso_id =7;
		$categoria->marca = "DODGE";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =24;
		$categoria->uso_id =7;
		$categoria->marca = "DONG_FENG";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =25;
		$categoria->uso_id =7;
		$categoria->marca = "EBRO";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =26;
		$categoria->uso_id =7;
		$categoria->marca = "ENCAVA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =27;
		$categoria->uso_id =7;
		$categoria->marca = "FANABUS";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =28;
		$categoria->uso_id =7;
		$categoria->marca = "FIAT";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =29;
		$categoria->uso_id =7;
		$categoria->marca = "FORD";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =30;
		$categoria->uso_id =7;
		$categoria->marca = "FOTON";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =31;
		$categoria->uso_id =7;
		$categoria->marca = "GMC";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =32;
		$categoria->uso_id =7;
		$categoria->marca = "GOLDEN DRAGON";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =33;
		$categoria->uso_id =7;
		$categoria->marca = "GREAT WALL MOTORS";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =34;
		$categoria->uso_id =7;
		$categoria->marca = "HAFEI";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =35;
		$categoria->uso_id =7;
		$categoria->marca = "HINO";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =36;
		$categoria->uso_id =7;
		$categoria->marca = "HYUNDAI";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =37;
		$categoria->uso_id =7;
		$categoria->marca = "INNOCENTI";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =38;
		$categoria->uso_id =7;
		$categoria->marca = "INTERNATIONAL";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =39;
		$categoria->uso_id =7;
		$categoria->marca = "IPV";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =40;
		$categoria->uso_id =7;
		$categoria->marca = "IVECO";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =41;
		$categoria->uso_id =7;
		$categoria->marca = "JAC";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =42;
		$categoria->uso_id =7;
		$categoria->marca = "KAMAZ";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =43;
		$categoria->uso_id =7;
		$categoria->marca = "KIA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =44;
		$categoria->uso_id =7;
		$categoria->marca = "MARCOPOLO";
		$categoria->save();


		$categoria = new Marca();
		$categoria->id =45;
		$categoria->uso_id =7;
		$categoria->marca = "MAZ";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =46;
		$categoria->uso_id =7;
		$categoria->marca = "MERCEDES BENZ";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =47;
		$categoria->uso_id =7;
		$categoria->marca = "MITSUBISHI";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =48;
		$categoria->uso_id =7;
		$categoria->marca = "MUDAN";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =49;
		$categoria->uso_id =7;
		$categoria->marca = "NEOBUS";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =50;
		$categoria->uso_id =7;
		$categoria->marca = "NISSAN";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =51;
		$categoria->uso_id =7;
		$categoria->marca = "PEGASO";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =52;
		$categoria->uso_id =7;
		$categoria->marca = "PEUGEOT";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =53;
		$categoria->uso_id =7;
		$categoria->marca = "POLARSUN";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =54;
		$categoria->uso_id =7;
		$categoria->marca = "SCANIA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =55;
		$categoria->uso_id =7;
		$categoria->marca = "SUMO";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =56;
		$categoria->uso_id =7;
		$categoria->marca = "TOYOTA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =57;
		$categoria->uso_id =7;
		$categoria->marca = "VOLARE";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =58;
		$categoria->uso_id =7;
		$categoria->marca = "VOLKSWAGEN";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =59;
		$categoria->uso_id =7;
		$categoria->marca = "VOLVO";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =60;
		$categoria->uso_id =7;
		$categoria->marca = "YUTONG";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =61;
		$categoria->uso_id =7;
		$categoria->marca = "ZHONG TONG";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =62;
		$categoria->uso_id =5;
		$categoria->marca = "AQ";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =63;
		$categoria->uso_id =5;
		$categoria->marca = "ASTRA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =64;
		$categoria->uso_id =5;
		$categoria->marca = "BAIEC";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =65;
		$categoria->uso_id =5;
		$categoria->marca = "CAPACITY";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =66;
		$categoria->uso_id =5;
		$categoria->marca = "CHERY";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =67;
		$categoria->uso_id =5;
		$categoria->marca = "CHEVROLET";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =68;
		$categoria->uso_id =5;
		$categoria->marca = "CITROEN";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =69;
		$categoria->uso_id =5;
		$categoria->marca = "DAEWOO";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =70;
		$categoria->uso_id =5;
		$categoria->marca = "DAF";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =71;
		$categoria->uso_id =5;
		$categoria->marca = "DAIHATSU";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =72;
		$categoria->uso_id =5;
		$categoria->marca = "DODGE";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =73;
		$categoria->uso_id =5;
		$categoria->marca = "DONG_FENG";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =74;
		$categoria->uso_id =5;
		$categoria->marca = "FANABUS";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =75;
		$categoria->uso_id =5;
		$categoria->marca = "FARGO";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =76;
		$categoria->uso_id =5;
		$categoria->marca = "FAW";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =77;
		$categoria->uso_id =5;
		$categoria->marca = "FIAT";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =78;
		$categoria->uso_id =5;
		$categoria->marca = "FORD";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =79;
		$categoria->uso_id =5;
		$categoria->marca = "FOTON";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =80;
		$categoria->uso_id =5;
		$categoria->marca = "FREIGHTLINER";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =81;
		$categoria->uso_id =5;
		$categoria->marca = "GMC";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =82;
		$categoria->uso_id =5;
		$categoria->marca = "GREAT WALL MOTORS";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =83;
		$categoria->uso_id =5;
		$categoria->marca = "HAFEI";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =84;
		$categoria->uso_id =5;
		$categoria->marca = "HEIBAO";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =85;
		$categoria->uso_id =5;
		$categoria->marca = "HINO";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =86;
		$categoria->uso_id =5;
		$categoria->marca = "HYUNDAI";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =87;
		$categoria->uso_id =5;
		$categoria->marca = "INTERNATIONAL";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =88;
		$categoria->uso_id =5;
		$categoria->marca = "IPV";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =89;
		$categoria->uso_id =5;
		$categoria->marca = "ISUZU";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =90;
		$categoria->uso_id =5;
		$categoria->marca = "IVECO";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =91;
		$categoria->uso_id =5;
		$categoria->marca = "JAC";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =92;
		$categoria->uso_id =5;
		$categoria->marca = "JINBEI";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =93;
		$categoria->uso_id =5;
		$categoria->marca = "JMC";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =94;
		$categoria->uso_id =5;
		$categoria->marca = "KAMA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =95;
		$categoria->uso_id =5;
		$categoria->marca = "KAMAZ";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =96;
		$categoria->uso_id =5;
		$categoria->marca = "KENWORTH";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =97;
		$categoria->uso_id =5;
		$categoria->marca = "KIA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =98;
		$categoria->uso_id =5;
		$categoria->marca = "LADA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =99;
		$categoria->uso_id =5;
		$categoria->marca = "LDV";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =100;
		$categoria->uso_id =5;
		$categoria->marca = "LIFAN";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =101;
		$categoria->uso_id =5;
		$categoria->marca = "MACK";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =102;
		$categoria->uso_id =5;
		$categoria->marca = "MAN";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =103;
		$categoria->uso_id =5;
		$categoria->marca = "MARCHETTI";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =104;
		$categoria->uso_id =5;
		$categoria->marca = "MAZ";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =105;
		$categoria->uso_id =5;
		$categoria->marca = "MAZDA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =106;
		$categoria->uso_id =5;
		$categoria->marca = "MAZVEN";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =107;
		$categoria->uso_id =5;
		$categoria->marca = "MERCEDES BENZ";
		$categoria->save();
		
		$categoria = new Marca();
		$categoria->id =108;
		$categoria->uso_id =5;
		$categoria->marca = "MERCURY";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =109;
		$categoria->uso_id =5;
		$categoria->marca = "MITSUBISHI";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =110;
		$categoria->uso_id =5;
		$categoria->marca = "MUDAN";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =111;
		$categoria->uso_id =5;
		$categoria->marca = "NISSAN";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =112;
		$categoria->uso_id =5;
		$categoria->marca = "OSHKOSH";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =113;
		$categoria->uso_id =5;
		$categoria->marca = "PEGASO";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =114;
		$categoria->uso_id =5;
		$categoria->marca = "PETERBILT";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =115;
		$categoria->uso_id =5;
		$categoria->marca = "PEUGEOT";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =116;
		$categoria->uso_id =5;
		$categoria->marca = "POWERPLUS";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =117;
		$categoria->uso_id =5;
		$categoria->marca = "REMOLQUES";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =118;
		$categoria->uso_id =5;
		$categoria->marca = "RENAULT";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =119;
		$categoria->uso_id =5;
		$categoria->marca = "SAIC WULING";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =120;
		$categoria->uso_id =5;
		$categoria->marca = "SANY";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =121;
		$categoria->uso_id =5;
		$categoria->marca = "SCANIA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =122;
		$categoria->uso_id =5;
		$categoria->marca = "SEAT";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =123;
		$categoria->uso_id =5;
		$categoria->marca = "SINOTRUK";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =124;
		$categoria->uso_id =5;
		$categoria->marca = "STERLING";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =125;
		$categoria->uso_id =5;
		$categoria->marca = "SUZUKI";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =126;
		$categoria->uso_id =5;
		$categoria->marca = "TATRA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =127;
		$categoria->uso_id =5;
		$categoria->marca = "TOYOTA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =128;
		$categoria->uso_id =5;
		$categoria->marca = "UAZ";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =129;
		$categoria->uso_id =5;
		$categoria->marca = "VOLKSWAGEN";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =130;
		$categoria->uso_id =5;
		$categoria->marca = "VOLVO";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =131;
		$categoria->uso_id =5;
		$categoria->marca = "XCMG";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =132;
		$categoria->uso_id =5;
		$categoria->marca = "YUEJIN";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =133;
		$categoria->uso_id =6;
		$categoria->marca = "ADLY";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =134;
		$categoria->uso_id =6;
		$categoria->marca = "AG";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =135;
		$categoria->uso_id =6;
		$categoria->marca = "ALPHA STAR";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =136;
		$categoria->uso_id =6;
		$categoria->marca = "AMERICAN MOTORCYCLE";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =137;
		$categoria->uso_id =6;
		$categoria->marca = "APRILIA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =138;
		$categoria->uso_id =6;
		$categoria->marca = "ARCTIC_CAT";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =139;
		$categoria->uso_id =6;
		$categoria->marca = "ATALA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =140;
		$categoria->uso_id =6;
		$categoria->marca = "AVA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =141;
		$categoria->uso_id =6;
		$categoria->marca = "BAJAJ";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =142;
		$categoria->uso_id =6;
		$categoria->marca = "BENELLI";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =143;
		$categoria->uso_id =6;
		$categoria->marca = "BERA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =144;
		$categoria->uso_id =6;
		$categoria->marca = "BIG_BEAR_CHOPPERS";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =145;
		$categoria->uso_id =6;
		$categoria->marca = "BMW";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =146;
		$categoria->uso_id =6;
		$categoria->marca = "BOMBARDIER";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =147;
		$categoria->uso_id =6;
		$categoria->marca = "BUELL";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =148;
		$categoria->uso_id =6;
		$categoria->marca = "CAGIVA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =149;
		$categoria->uso_id =6;
		$categoria->marca = "CAN_AM";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =150;
		$categoria->uso_id =6;
		$categoria->marca = "CHUNFENG";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =151;
		$categoria->uso_id =6;
		$categoria->marca = "DADDY";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =152;
		$categoria->uso_id =6;
		$categoria->marca = "DAIFO";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =153;
		$categoria->uso_id =6;
		$categoria->marca = "DAYANG";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =154;
		$categoria->uso_id =6;
		$categoria->marca = "DAZON";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =155;
		$categoria->uso_id =6;
		$categoria->marca = "DENUTA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =156;
		$categoria->uso_id =6;
		$categoria->marca = "DERBI";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =157;
		$categoria->uso_id =6;
		$categoria->marca = "DUCATI";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =158;
		$categoria->uso_id =6;
		$categoria->marca = "E_TON";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =159;
		$categoria->uso_id =6;
		$categoria->marca = "FEIYING";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =160;
		$categoria->uso_id =6;
		$categoria->marca = "GAS GAS";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =161;
		$categoria->uso_id =6;
		$categoria->marca = "GEELY";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =162;
		$categoria->uso_id =6;
		$categoria->marca = "GILERA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =163;
		$categoria->uso_id =6;
		$categoria->marca = "GUANJUN";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =164;
		$categoria->uso_id =6;
		$categoria->marca = "GUZZI";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =165;
		$categoria->uso_id =6;
		$categoria->marca = "HAOJIN";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =166;
		$categoria->uso_id =6;
		$categoria->marca = "HAOJUE";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =167;
		$categoria->uso_id =6;
		$categoria->marca = "HAOTIAN";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =168;
		$categoria->uso_id =6;
		$categoria->marca = "HARLEY_DAVIDSON";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =169;
		$categoria->uso_id =6;
		$categoria->marca = "HONDA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =170;
		$categoria->uso_id =6;
		$categoria->marca = "HUAWIN";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =171;
		$categoria->uso_id =6;
		$categoria->marca = "HUSQVARNA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =172;
		$categoria->uso_id =6;
		$categoria->marca = "HYOSUNG";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =173;
		$categoria->uso_id =6;
		$categoria->marca = "ITALJET";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =174;
		$categoria->uso_id =6;
		$categoria->marca = "JAWA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =175;
		$categoria->uso_id =6;
		$categoria->marca = "JIALING";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =176;
		$categoria->uso_id =6;
		$categoria->marca = "JIANCHE";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =177;
		$categoria->uso_id =6;
		$categoria->marca = "JIEDA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =178;
		$categoria->uso_id =6;
		$categoria->marca = "JINCHENG";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =179;
		$categoria->uso_id =6;
		$categoria->marca = "JINLUN";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =180;
		$categoria->uso_id =6;
		$categoria->marca = "JONWAY";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =181;
		$categoria->uso_id =6;
		$categoria->marca = "JUVE";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =182;
		$categoria->uso_id =6;
		$categoria->marca = "KAWASAKI";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =183;
		$categoria->uso_id =6;
		$categoria->marca = "KEEWAY";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =184;
		$categoria->uso_id =6;
		$categoria->marca = "KINROAD";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =185;
		$categoria->uso_id =6;
		$categoria->marca = "KTM";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =186;
		$categoria->uso_id =6;
		$categoria->marca = "KUMOTO";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =187;
		$categoria->uso_id =6;
		$categoria->marca = "KYMCO";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =188;
		$categoria->uso_id =6;
		$categoria->marca = "KYOTO";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =189;
		$categoria->uso_id =6;
		$categoria->marca = "LAVERDA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =190;
		$categoria->uso_id =6;
		$categoria->marca = "LIFAN";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =191;
		$categoria->uso_id =6;
		$categoria->marca = "LINGYUN";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =192;
		$categoria->uso_id =6;
		$categoria->marca = "LINHAI";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =193;
		$categoria->uso_id =6;
		$categoria->marca = "LML";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =194;
		$categoria->uso_id =6;
		$categoria->marca = "LONCIN";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =195;
		$categoria->uso_id =6;
		$categoria->marca = "MALAGUTI";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =196;
		$categoria->uso_id =6;
		$categoria->marca = "MINSK";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =197;
		$categoria->uso_id =6;
		$categoria->marca = "MV AGUSTA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =198;
		$categoria->uso_id =6;
		$categoria->marca = "NANFANG";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =199;
		$categoria->uso_id =6;
		$categoria->marca = "NIPPONIA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =200;
		$categoria->uso_id =6;
		$categoria->marca = "PEUGEOT";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =201;
		$categoria->uso_id =6;
		$categoria->marca = "PGO";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =202;
		$categoria->uso_id =6;
		$categoria->marca = "PIAGGIO";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =203;
		$categoria->uso_id =6;
		$categoria->marca = "PIONEER";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =204;
		$categoria->uso_id =6;
		$categoria->marca = "POLARIS";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =205;
		$categoria->uso_id =6;
		$categoria->marca = "QINGQI";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =206;
		$categoria->uso_id =6;
		$categoria->marca = "RIO";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =207;
		$categoria->uso_id =6;
		$categoria->marca = "ROFERCA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =208;
		$categoria->uso_id =6;
		$categoria->marca = "SENKE";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =209;
		$categoria->uso_id =6;
		$categoria->marca = "SHINERAY";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =210;
		$categoria->uso_id =6;
		$categoria->marca = "SKYGO";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =211;
		$categoria->uso_id =6;
		$categoria->marca = "SNOW";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =212;
		$categoria->uso_id =6;
		$categoria->marca = "SUKIDA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =213;
		$categoria->uso_id =6;
		$categoria->marca = "SUMO";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =214;
		$categoria->uso_id =6;
		$categoria->marca = "SUNDIRO";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =215;
		$categoria->uso_id =6;
		$categoria->marca = "SUZUKI";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =216;
		$categoria->uso_id =6;
		$categoria->marca = "SYM";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =217;
		$categoria->uso_id =6;
		$categoria->marca = "TRIUMPH";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =218;
		$categoria->uso_id =6;
		$categoria->marca = "TVS";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =219;
		$categoria->uso_id =6;
		$categoria->marca = "UNICO";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =220;
		$categoria->uso_id =6;
		$categoria->marca = "UNITED MOTORS";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =221;
		$categoria->uso_id =6;
		$categoria->marca = "VENSUN";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =222;
		$categoria->uso_id =6;
		$categoria->marca = "VENTO";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =223;
		$categoria->uso_id =6;
		$categoria->marca = "VERUCCI";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =224;
		$categoria->uso_id =6;
		$categoria->marca = "VOSJDO";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =225;
		$categoria->uso_id =6;
		$categoria->marca = "WANGYE";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =226;
		$categoria->uso_id =6;
		$categoria->marca = "XINGFU";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =227;
		$categoria->uso_id =6;
		$categoria->marca = "YAMAHA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =228;
		$categoria->uso_id =6;
		$categoria->marca = "YAMATI";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =229;
		$categoria->uso_id =6;
		$categoria->marca = "YAMOTO";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =230;
		$categoria->uso_id =6;
		$categoria->marca = "YASUKI";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =231;
		$categoria->uso_id =6;
		$categoria->marca = "YIBEN";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =232;
		$categoria->uso_id =6;
		$categoria->marca = "YINGANG";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =233;
		$categoria->uso_id =6;
		$categoria->marca = "YUMBO";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =234;
		$categoria->uso_id =6;
		$categoria->marca = "ZNEN";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =235;
		$categoria->uso_id =6;
		$categoria->marca = "ZONGZHEN";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =236;
		$categoria->uso_id =6;
		$categoria->marca = "ZXMCO";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =237;
		$categoria->uso_id =2;
		$categoria->marca = "ACURA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =238;
		$categoria->uso_id =2;
		$categoria->marca = "ALFA ROMEO";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =239;
		$categoria->uso_id =2;
		$categoria->marca = "AMERICAN MOTORS";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =240;
		$categoria->uso_id =2;
		$categoria->marca = "ASIA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =241;
		$categoria->uso_id =2;
		$categoria->marca = "ASTON MARTIN";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =242;
		$categoria->uso_id =2;
		$categoria->marca = "AUDI";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =243;
		$categoria->uso_id =2;
		$categoria->marca = "BENTLEY";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =244;
		$categoria->uso_id =2;
		$categoria->marca = "BMW";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =245;
		$categoria->uso_id =2;
		$categoria->marca = "BRILLIANCE";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =246;
		$categoria->uso_id =2;
		$categoria->marca = "BUGATTI";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =247;
		$categoria->uso_id =2;
		$categoria->marca = "BUICK";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =248;
		$categoria->uso_id =2;
		$categoria->marca = "BYD AUTOS";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =249;
		$categoria->uso_id =2;
		$categoria->marca = "CADILLAC";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =250;
		$categoria->uso_id =2;
		$categoria->marca = "CHANA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =251;
		$categoria->uso_id =2;
		$categoria->marca = "CHANGHE";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =252;
		$categoria->uso_id =2;
		$categoria->marca = "CHERY";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =253;
		$categoria->uso_id =2;
		$categoria->marca = "CHEVROLET";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =254;
		$categoria->uso_id =2;
		$categoria->marca = "CHRYSLER";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =255;
		$categoria->uso_id =2;
		$categoria->marca = "CITROEN";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =256;
		$categoria->uso_id =2;
		$categoria->marca = "DACIA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =257;
		$categoria->uso_id =2;
		$categoria->marca = "DAEWOO";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =258;
		$categoria->uso_id =2;
		$categoria->marca = "DAIHATSU";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =259;
		$categoria->uso_id =2;
		$categoria->marca = "DMC";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =260;
		$categoria->uso_id =2;
		$categoria->marca = "DODGE";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =261;
		$categoria->uso_id =2;
		$categoria->marca = "DONG_FENG";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =262;
		$categoria->uso_id =2;
		$categoria->marca = "EAGLE";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =263;
		$categoria->uso_id =2;
		$categoria->marca = "FAMI";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =264;
		$categoria->uso_id =2;
		$categoria->marca = "FERRARI";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =265;
		$categoria->uso_id =2;
		$categoria->marca = "FIAT";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =266;
		$categoria->uso_id =2;
		$categoria->marca = "FORD";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =267;
		$categoria->uso_id =2;
		$categoria->marca = "GEELY";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =268;
		$categoria->uso_id =2;
		$categoria->marca = "GEO";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =269;
		$categoria->uso_id =2;
		$categoria->marca = "GMC";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =270;
		$categoria->uso_id =2;
		$categoria->marca = "GONOW";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =271;
		$categoria->uso_id =2;
		$categoria->marca = "GREAT WALL MOTORS";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =272;
		$categoria->uso_id =2;
		$categoria->marca = "HAFEI";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =273;
		$categoria->uso_id =2;
		$categoria->marca = "HAIMA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =274;
		$categoria->uso_id =2;
		$categoria->marca = "HAOQING";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =275;
		$categoria->uso_id =2;
		$categoria->marca = "HAWTAI";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =276;
		$categoria->uso_id =2;
		$categoria->marca = "HILLMAN";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =277;
		$categoria->uso_id =2;
		$categoria->marca = "HINO";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =278;
		$categoria->uso_id =2;
		$categoria->marca = "HONDA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =279;
		$categoria->uso_id =2;
		$categoria->marca = "HYUNDAI";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =280;
		$categoria->uso_id =2;
		$categoria->marca = "IKCO";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =281;
		$categoria->uso_id =2;
		$categoria->marca = "INFINITI";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =282;
		$categoria->uso_id =2;
		$categoria->marca = "ISUZU";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =283;
		$categoria->uso_id =2;
		$categoria->marca = "IVECO";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =284;
		$categoria->uso_id =2;
		$categoria->marca = "JADA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =285;
		$categoria->uso_id =2;
		$categoria->marca = "JAGUAR";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =286;
		$categoria->uso_id =2;
		$categoria->marca = "JEEP";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =287;
		$categoria->uso_id =2;
		$categoria->marca = "JIANGNAN";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =288;
		$categoria->uso_id =2;
		$categoria->marca = "JMC";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =289;
		$categoria->uso_id =2;
		$categoria->marca = "KIA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =290;
		$categoria->uso_id =2;
		$categoria->marca = "LADA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =291;
		$categoria->uso_id =2;
		$categoria->marca = "LAMBORGHINI";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =292;
		$categoria->uso_id =2;
		$categoria->marca = "LANCIA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =293;
		$categoria->uso_id =2;
		$categoria->marca = "LANDWIND";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =294;
		$categoria->uso_id =2;
		$categoria->marca = "LEXUS";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =295;
		$categoria->uso_id =2;
		$categoria->marca = "LIFAN";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =296;
		$categoria->uso_id =2;
		$categoria->marca = "LINCOLN";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =297;
		$categoria->uso_id =2;
		$categoria->marca = "LOTUS";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =298;
		$categoria->uso_id =2;
		$categoria->marca = "MASERATI";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =299;
		$categoria->uso_id =2;
		$categoria->marca = "MAYBACH";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =300;
		$categoria->uso_id =2;
		$categoria->marca = "MAZDA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =301;
		$categoria->uso_id =2;
		$categoria->marca = "MERCEDES BENZ";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =302;
		$categoria->uso_id =2;
		$categoria->marca = "MERCURY";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =303;
		$categoria->uso_id =2;
		$categoria->marca = "MG";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =304;
		$categoria->uso_id =2;
		$categoria->marca = "MINI";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =305;
		$categoria->uso_id =2;
		$categoria->marca = "MITSUBISHI";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =306;
		$categoria->uso_id =2;
		$categoria->marca = "NISSAN";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =307;
		$categoria->uso_id =2;
		$categoria->marca = "OLDSMOBILE";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =308;
		$categoria->uso_id =2;
		$categoria->marca = "OPEL";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =309;
		$categoria->uso_id =2;
		$categoria->marca = "PACKARD";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =310;
		$categoria->uso_id =2;
		$categoria->marca = "PANTHER";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =311;
		$categoria->uso_id =2;
		$categoria->marca = "PEUGEOT";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =312;
		$categoria->uso_id =2;
		$categoria->marca = "PLYMOUTH";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =313;
		$categoria->uso_id =2;
		$categoria->marca = "PONTIAC";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =314;
		$categoria->uso_id =2;
		$categoria->marca = "PORSCHE";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =315;
		$categoria->uso_id =2;
		$categoria->marca = "RAMBLER";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =316;
		$categoria->uso_id =2;
		$categoria->marca = "RENAULT";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =317;
		$categoria->uso_id =2;
		$categoria->marca = "ROLLS ROYCE";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =318;
		$categoria->uso_id =2;
		$categoria->marca = "ROSENGART";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =319;
		$categoria->uso_id =2;
		$categoria->marca = "ROVER";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =320;
		$categoria->uso_id =2;
		$categoria->marca = "RUSTICOS VENEZUELA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =321;
		$categoria->uso_id =2;
		$categoria->marca = "SAAB";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =322;
		$categoria->uso_id =2;
		$categoria->marca = "SAIC WULING";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =323;
		$categoria->uso_id =2;
		$categoria->marca = "SAIPA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =324;
		$categoria->uso_id =2;
		$categoria->marca = "SATURN";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =325;
		$categoria->uso_id =2;
		$categoria->marca = "SCANIA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =326;
		$categoria->uso_id =2;
		$categoria->marca = "SCION";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =327;
		$categoria->uso_id =2;
		$categoria->marca = "SEAT";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =328;
		$categoria->uso_id =2;
		$categoria->marca = "SKODA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =329;
		$categoria->uso_id =2;
		$categoria->marca = "SMART";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =330;
		$categoria->uso_id =2;
		$categoria->marca = "SUBARU";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =331;
		$categoria->uso_id =2;
		$categoria->marca = "SUZUKI";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =332;
		$categoria->uso_id =2;
		$categoria->marca = "TATA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =333;
		$categoria->uso_id =2;
		$categoria->marca = "TESLA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =334;
		$categoria->uso_id =2;
		$categoria->marca = "TOYOTA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =335;
		$categoria->uso_id =2;
		$categoria->marca = "VENIRAUTO";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =336;
		$categoria->uso_id =2;
		$categoria->marca = "VOLKSWAGEN";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =337;
		$categoria->uso_id =2;
		$categoria->marca = "VOLVO";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =338;
		$categoria->uso_id =2;
		$categoria->marca = "WULING";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =339;
		$categoria->uso_id =2;
		$categoria->marca = "YUGO";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =340;
		$categoria->uso_id =2;
		$categoria->marca = "ZOTYE";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =341;
		$categoria->uso_id =4;
		$categoria->marca = "ARO";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =342;
		$categoria->uso_id =4;
		$categoria->marca = "CADILLAC";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =343;
		$categoria->uso_id =4;
		$categoria->marca = "CHANA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =344;
		$categoria->uso_id =4;
		$categoria->marca = "CHANGHE";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =345;
		$categoria->uso_id =4;
		$categoria->marca = "CHERY";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =346;
		$categoria->uso_id =4;
		$categoria->marca = "CHEVROLET";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =347;
		$categoria->uso_id =4;
		$categoria->marca = "DADI";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =348;
		$categoria->uso_id =4;
		$categoria->marca = "DAEWOO";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =349;
		$categoria->uso_id =4;
		$categoria->marca = "DAIHATSU";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =350;
		$categoria->uso_id =4;
		$categoria->marca = "DODGE";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =351;
		$categoria->uso_id =4;
		$categoria->marca = "DONG_FENG";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =352;
		$categoria->uso_id =4;
		$categoria->marca = "FIAT";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =353;
		$categoria->uso_id =4;
		$categoria->marca = "FORD";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =354;
		$categoria->uso_id =4;
		$categoria->marca = "GEELY";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =355;
		$categoria->uso_id =4;
		$categoria->marca = "GMC";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =356;
		$categoria->uso_id =4;
		$categoria->marca = "GONOW";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =357;
		$categoria->uso_id =4;
		$categoria->marca = "GREAT WALL MOTORS";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =358;
		$categoria->uso_id =4;
		$categoria->marca = "HAFEI";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =359;
		$categoria->uso_id =4;
		$categoria->marca = "HEIBAO";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =360;
		$categoria->uso_id =4;
		$categoria->marca = "HONDA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =361;
		$categoria->uso_id =4;
		$categoria->marca = "HUMMER";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =362;
		$categoria->uso_id =4;
		$categoria->marca = "HYUNDAI";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =363;
		$categoria->uso_id =4;
		$categoria->marca = "INTERNATIONAL";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =364;
		$categoria->uso_id =4;
		$categoria->marca = "ISUZU";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =365;
		$categoria->uso_id =4;
		$categoria->marca = "JADA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =366;
		$categoria->uso_id =4;
		$categoria->marca = "JEEP";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =367;
		$categoria->uso_id =4;
		$categoria->marca = "JMC";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =368;
		$categoria->uso_id =4;
		$categoria->marca = "KAWEI";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =369;
		$categoria->uso_id =4;
		$categoria->marca = "KIA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =370;
		$categoria->uso_id =4;
		$categoria->marca = "LADA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =371;
		$categoria->uso_id =4;
		$categoria->marca = "LAND ROVER";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =372;
		$categoria->uso_id =4;
		$categoria->marca = "MAZDA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =373;
		$categoria->uso_id =4;
		$categoria->marca = "MERCURY";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =374;
		$categoria->uso_id =4;
		$categoria->marca = "MITSUBISHI";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =375;
		$categoria->uso_id =4;
		$categoria->marca = "NISSAN";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =376;
		$categoria->uso_id =4;
		$categoria->marca = "QINGQI";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =377;
		$categoria->uso_id =4;
		$categoria->marca = "SAIC WULING";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =378;
		$categoria->uso_id =4;
		$categoria->marca = "SG";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =379;
		$categoria->uso_id =4;
		$categoria->marca = "SKODA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =380;
		$categoria->uso_id =4;
		$categoria->marca = "SUBARU";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =381;
		$categoria->uso_id =4;
		$categoria->marca = "SUZUKI";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =382;
		$categoria->uso_id =4;
		$categoria->marca = "TOYOTA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =383;
		$categoria->uso_id =4;
		$categoria->marca = "UAZ";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =384;
		$categoria->uso_id =4;
		$categoria->marca = "VOLKSWAGEN";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =385;
		$categoria->uso_id =4;
		$categoria->marca = "WULING";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =386;
		$categoria->uso_id =4;
		$categoria->marca = "ZHONGXING";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =387;
		$categoria->uso_id =3;
		$categoria->marca = "ACURA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =388;
		$categoria->uso_id =3;
		$categoria->marca = "AM GENERAL";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =389;
		$categoria->uso_id =3;
		$categoria->marca = "ARO";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =390;
		$categoria->uso_id =3;
		$categoria->marca = "AUDI";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =391;
		$categoria->uso_id =3;
		$categoria->marca = "BERTONE";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =392;
		$categoria->uso_id =3;
		$categoria->marca = "BMW";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =393;
		$categoria->uso_id =3;
		$categoria->marca = "BUICK";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =394;
		$categoria->uso_id =3;
		$categoria->marca = "CADILLAC";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =395;
		$categoria->uso_id =3;
		$categoria->marca = "CHERY";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =396;
		$categoria->uso_id =3;
		$categoria->marca = "CHEVROLET";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =397;
		$categoria->uso_id =3;
		$categoria->marca = "CHRYSLER";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =398;
		$categoria->uso_id =3;
		$categoria->marca = "DACIA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =399;
		$categoria->uso_id =3;
		$categoria->marca = "DAEWOO";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =400;
		$categoria->uso_id =3;
		$categoria->marca = "DAIHATSU";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =401;
		$categoria->uso_id =3;
		$categoria->marca = "DODGE";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =402;
		$categoria->uso_id =3;
		$categoria->marca = "DONG_FENG";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =403;
		$categoria->uso_id =3;
		$categoria->marca = "FORD";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =404;
		$categoria->uso_id =3;
		$categoria->marca = "GEO";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =405;
		$categoria->uso_id =3;
		$categoria->marca = "GMC";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =406;
		$categoria->uso_id =3;
		$categoria->marca = "GONOW";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =407;
		$categoria->uso_id =3;
		$categoria->marca = "GREAT WALL MOTORS";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =408;
		$categoria->uso_id =3;
		$categoria->marca = "HAIMA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =409;
		$categoria->uso_id =3;
		$categoria->marca = "HONDA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =410;
		$categoria->uso_id =3;
		$categoria->marca = "HONGXING";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =411;
		$categoria->uso_id =3;
		$categoria->marca = "HUMMER";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =412;
		$categoria->uso_id =3;
		$categoria->marca = "HYUNDAI";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =413;
		$categoria->uso_id =3;
		$categoria->marca = "INFINITI";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =414;
		$categoria->uso_id =3;
		$categoria->marca = "ISUZU";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =415;
		$categoria->uso_id =3;
		$categoria->marca = "JAC";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =416;
		$categoria->uso_id =3;
		$categoria->marca = "JADA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =417;
		$categoria->uso_id =3;
		$categoria->marca = "JEEP";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =418;
		$categoria->uso_id =3;
		$categoria->marca = "JMC";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =419;
		$categoria->uso_id =3;
		$categoria->marca = "KIA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =420;
		$categoria->uso_id =3;
		$categoria->marca = "LADA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =421;
		$categoria->uso_id =3;
		$categoria->marca = "LAND ROVER";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =422;
		$categoria->uso_id =3;
		$categoria->marca = "LANDWIND";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =423;
		$categoria->uso_id =3;
		$categoria->marca = "LEXUS";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =424;
		$categoria->uso_id =3;
		$categoria->marca = "LINCOLN";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =425;
		$categoria->uso_id =3;
		$categoria->marca = "MAZDA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =426;
		$categoria->uso_id =3;
		$categoria->marca = "MERCEDES BENZ";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =427;
		$categoria->uso_id =3;
		$categoria->marca = "MERCURY";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =428;
		$categoria->uso_id =3;
		$categoria->marca = "MITSUBISHI";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =429;
		$categoria->uso_id =3;
		$categoria->marca = "MOKE";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =430;
		$categoria->uso_id =3;
		$categoria->marca = "NISSAN";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =431;
		$categoria->uso_id =3;
		$categoria->marca = "OLDSMOBILE";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =432;
		$categoria->uso_id =3;
		$categoria->marca = "OPEL";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =433;
		$categoria->uso_id =3;
		$categoria->marca = "PEUGEOT";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =434;
		$categoria->uso_id =3;
		$categoria->marca = "PONTIAC";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =435;
		$categoria->uso_id =3;
		$categoria->marca = "PORSCHE";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =436;
		$categoria->uso_id =3;
		$categoria->marca = "RENAULT";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =437;
		$categoria->uso_id =3;
		$categoria->marca = "SAAB";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =438;
		$categoria->uso_id =3;
		$categoria->marca = "SATURN";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =439;
		$categoria->uso_id =3;
		$categoria->marca = "SG";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =440;
		$categoria->uso_id =3;
		$categoria->marca = "SHUANGHUAN AUTO";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =441;
		$categoria->uso_id =3;
		$categoria->marca = "SSANGYONG";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =442;
		$categoria->uso_id =3;
		$categoria->marca = "STEYR PUCH";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =443;
		$categoria->uso_id =3;
		$categoria->marca = "SUBARU";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =444;
		$categoria->uso_id =3;
		$categoria->marca = "SUZUKI";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =445;
		$categoria->uso_id =3;
		$categoria->marca = "TATA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =446;
		$categoria->uso_id =3;
		$categoria->marca = "TIUNA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =447;
		$categoria->uso_id =3;
		$categoria->marca = "TOYOTA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =448;
		$categoria->uso_id =3;
		$categoria->marca = "UAZ";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =449;
		$categoria->uso_id =3;
		$categoria->marca = "UFO";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =450;
		$categoria->uso_id =3;
		$categoria->marca = "VOLKSWAGEN";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =451;
		$categoria->uso_id =3;
		$categoria->marca = "VOLVO";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =452;
		$categoria->uso_id =3;
		$categoria->marca = "ZHONGXING";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =453;
		$categoria->uso_id =3;
		$categoria->marca = "ZOTYE";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =454;
		$categoria->uso_id =8;
		$categoria->marca = "ARO";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =455;
		$categoria->uso_id =8;
		$categoria->marca = "CHEVROLET";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =456;
		$categoria->uso_id =8;
		$categoria->marca = "DACIA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =457;
		$categoria->uso_id =8;
		$categoria->marca = "DAEWOO";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =458;
		$categoria->uso_id =8;
		$categoria->marca = "FIAT";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =459;
		$categoria->uso_id =8;
		$categoria->marca = "HYUNDAI";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =460;
		$categoria->uso_id =8;
		$categoria->marca = "KIA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =461;
		$categoria->uso_id =8;
		$categoria->marca = "MAZDA";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =462;
		$categoria->uso_id =8;
		$categoria->marca = "MITSUBISHI";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =463;
		$categoria->uso_id =8;
		$categoria->marca = "NISSAN";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =464;
		$categoria->uso_id =8;
		$categoria->marca = "RENAULT";
		$categoria->save();

		$categoria = new Marca();
		$categoria->id =465;
		$categoria->uso_id =8;
		$categoria->marca = "VOLKSWAGEN";
		$categoria->save();



		// Modelo
		$categoria = new Modelo();
		$categoria->id = 9;
		$categoria->marca_id =1;
		$categoria->modelo = "TURISMO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 10;
		$categoria->marca_id =1;
		$categoria->modelo = "TURISMO DE LUJO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 11;
		$categoria->marca_id =2;
		$categoria->modelo = "JUMBUSS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 12;
		$categoria->marca_id =3;
		$categoria->modelo = "610";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 13;
		$categoria->marca_id =3;
		$categoria->modelo = "E";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 14;
		$categoria->marca_id =3;
		$categoria->modelo = "E-NT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 15;
		$categoria->marca_id =3;
		$categoria->modelo = "E-NT 3.100";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 16;
		$categoria->marca_id =3;
		$categoria->modelo = "E-NT2000";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 17;
		$categoria->marca_id =4;
		$categoria->modelo = "418/165";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 18;
		$categoria->marca_id =5;
		$categoria->modelo = "AMAZONAS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 19;
		$categoria->marca_id =5;
		$categoria->modelo = "ORINOCO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 20;
		$categoria->marca_id =6;
		$categoria->modelo = "CC";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 21;
		$categoria->marca_id =7;
		$categoria->modelo = "ANDARE CLASS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 22;
		$categoria->marca_id =7;
		$categoria->modelo = "PARADISO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 23;
		$categoria->marca_id =7;
		$categoria->modelo = "VIAGGIO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 24;
		$categoria->marca_id =8;
		$categoria->modelo = "CENTURY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 25;
		$categoria->marca_id =8;
		$categoria->modelo = "OF";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 26;
		$categoria->marca_id =8;
		$categoria->modelo = "OH";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 27;
		$categoria->marca_id =8;
		$categoria->modelo = "RSD";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 28;
		$categoria->marca_id =9;
		$categoria->modelo = "BUSSCAR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 29;
		$categoria->marca_id =9;
		$categoria->modelo = "CENTURY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 30;
		$categoria->marca_id =9;
		$categoria->modelo = "JUN BUSS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 31;
		$categoria->marca_id =9;
		$categoria->modelo = "MARCOPOLO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 32;
		$categoria->marca_id =9;
		$categoria->modelo = "NIELSON";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 33;
		$categoria->marca_id =10;
		$categoria->modelo = "17.210";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 34;
		$categoria->marca_id =10;
		$categoria->modelo = "18.310";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 35;
		$categoria->marca_id =11;
		$categoria->modelo = "ANDARE CLASS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 36;
		$categoria->marca_id =11;
		$categoria->modelo = "B10M";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 37;
		$categoria->marca_id =11;
		$categoria->modelo = "B12";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 38;
		$categoria->marca_id =11;
		$categoria->modelo = "PARADISO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 39;
		$categoria->marca_id =12;
		$categoria->modelo = "ZK";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 40;
		$categoria->marca_id =13;
		$categoria->modelo = "LCK";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 41;
		$categoria->marca_id =14;
		$categoria->modelo = "1,20E+20";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 42;
		$categoria->marca_id =14;
		$categoria->modelo = "Minibus";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 43;
		$categoria->marca_id =14;
		$categoria->modelo = "Periferico";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 44;
		$categoria->marca_id =15;
		$categoria->modelo = "TOPIC";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 45;
		$categoria->marca_id =16;
		$categoria->modelo = "TURISMO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 46;
		$categoria->marca_id =16;
		$categoria->modelo = "TURISMO DE LUJO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 47;
		$categoria->marca_id =16;
		$categoria->modelo = "URBANO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 48;
		$categoria->marca_id =17;
		$categoria->modelo = "GAVIOTA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 49;
		$categoria->marca_id =17;
		$categoria->modelo = "LEYLAND";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 50;
		$categoria->marca_id =17;
		$categoria->modelo = "METROBUS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 51;
		$categoria->marca_id =17;
		$categoria->modelo = "ORINOCO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 52;
		$categoria->marca_id =18;
		$categoria->modelo = "ALL AMERICAN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 53;
		$categoria->marca_id =18;
		$categoria->modelo = "BLUE BIRD";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 54;
		$categoria->marca_id =18;
		$categoria->modelo = "BUS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 55;
		$categoria->marca_id =19;
		$categoria->modelo = "MASSTER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 56;
		$categoria->marca_id =20;
		$categoria->modelo = "H5";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 57;
		$categoria->marca_id =21;
		$categoria->modelo = "CHEVY METRO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 58;
		$categoria->marca_id =21;
		$categoria->modelo = "CHR 660";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 59;
		$categoria->marca_id =21;
		$categoria->modelo = "CONDOR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 60;
		$categoria->marca_id =21;
		$categoria->modelo = "EXPRESS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 61;
		$categoria->marca_id =21;
		$categoria->modelo = "LV";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 62;
		$categoria->marca_id =21;
		$categoria->modelo = "NPR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 63;
		$categoria->marca_id =21;
		$categoria->modelo = "P 31";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 64;
		$categoria->marca_id =21;
		$categoria->modelo = "SPORT VAN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 65;
		$categoria->marca_id =21;
		$categoria->modelo = "SUPER CARRY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 66;
		$categoria->marca_id =21;
		$categoria->modelo = "TITAN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 67;
		$categoria->marca_id =21;
		$categoria->modelo = "WAYNE TRANSETTE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 68;
		$categoria->marca_id =22;
		$categoria->modelo = "JUMPER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 69;
		$categoria->marca_id =22;
		$categoria->modelo = "JUMPY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 70;
		$categoria->marca_id =23;
		$categoria->modelo = "B";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 71;
		$categoria->marca_id =23;
		$categoria->modelo = "B 350";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 72;
		$categoria->marca_id =23;
		$categoria->modelo = "RAM VAN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 73;
		$categoria->marca_id =24;
		$categoria->modelo = "EQ";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 74;
		$categoria->marca_id =25;
		$categoria->modelo = "60/6T";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 75;
		$categoria->marca_id =25;
		$categoria->modelo = "METROBUS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 76;
		$categoria->marca_id =25;
		$categoria->modelo = "MINIBUS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 77;
		$categoria->marca_id =26;
		$categoria->modelo = "600";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 78;
		$categoria->marca_id =26;
		$categoria->modelo = "610";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 79;
		$categoria->marca_id =26;
		$categoria->modelo = "E";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 80;
		$categoria->marca_id =26;
		$categoria->modelo = "E 410";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 81;
		$categoria->marca_id =26;
		$categoria->modelo = "E 5053";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 82;
		$categoria->marca_id =26;
		$categoria->modelo = "E 600";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 83;
		$categoria->marca_id =26;
		$categoria->modelo = "E NT 610";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 84;
		$categoria->marca_id =26;
		$categoria->modelo = "E-NT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 85;
		$categoria->marca_id =26;
		$categoria->modelo = "E-NT 3.100";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 86;
		$categoria->marca_id =26;
		$categoria->modelo = "E-NT 3.200";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 87;
		$categoria->marca_id =27;
		$categoria->modelo = "F";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 88;
		$categoria->marca_id =28;
		$categoria->modelo = "DUCATO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 89;
		$categoria->marca_id =29;
		$categoria->modelo = "B 350";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 90;
		$categoria->marca_id =29;
		$categoria->modelo = "B 600";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 91;
		$categoria->marca_id =29;
		$categoria->modelo = "B 750";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 92;
		$categoria->marca_id =29;
		$categoria->modelo = "CLUB WAGON";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 93;
		$categoria->marca_id =29;
		$categoria->modelo = "ECONOLINE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 94;
		$categoria->marca_id =29;
		$categoria->modelo = "F 350";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 95;
		$categoria->marca_id =29;
		$categoria->modelo = "F 550";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 96;
		$categoria->marca_id =30;
		$categoria->modelo = "VIEW";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 97;
		$categoria->marca_id =31;
		$categoria->modelo = "SAVANA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 98;
		$categoria->marca_id =31;
		$categoria->modelo = "VAN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 99;
		$categoria->marca_id =32;
		$categoria->modelo = "CARONI";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 100;
		$categoria->marca_id =32;
		$categoria->modelo = "NEVERI";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 101;
		$categoria->marca_id =32;
		$categoria->modelo = "SAFARI";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 102;
		$categoria->marca_id =33;
		$categoria->modelo = "PROTEUS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 103;
		$categoria->marca_id =34;
		$categoria->modelo = "ZHONGY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 104;
		$categoria->marca_id =35;
		$categoria->modelo = "FC4J";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 105;
		$categoria->marca_id =36;
		$categoria->modelo = "CHORUS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 106;
		$categoria->marca_id =36;
		$categoria->modelo = "COUNTY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 107;
		$categoria->marca_id =36;
		$categoria->modelo = "GRACE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 108;
		$categoria->marca_id =36;
		$categoria->modelo = "H 1";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 109;
		$categoria->marca_id =37;
		$categoria->modelo = "1981";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 110;
		$categoria->marca_id =38;
		$categoria->modelo = "1977";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 111;
		$categoria->marca_id =38;
		$categoria->modelo = "3000";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 112;
		$categoria->marca_id =39;
		$categoria->modelo = "M";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 113;
		$categoria->marca_id =40;
		$categoria->modelo = "40.12";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 114;
		$categoria->marca_id =40;
		$categoria->modelo = "49.12";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 115;
		$categoria->marca_id =40;
		$categoria->modelo = "59.12";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 116;
		$categoria->marca_id =40;
		$categoria->modelo = "70C16";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 117;
		$categoria->marca_id =40;
		$categoria->modelo = "CC";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 118;
		$categoria->marca_id =40;
		$categoria->modelo = "Turbo Daily";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 119;
		$categoria->marca_id =41;
		$categoria->modelo = "HK";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 120;
		$categoria->marca_id =42;
		$categoria->modelo = "4308";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 121;
		$categoria->marca_id =43;
		$categoria->modelo = "BESTA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 122;
		$categoria->marca_id =43;
		$categoria->modelo = "COMBI";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 123;
		$categoria->marca_id =43;
		$categoria->modelo = "K 2700";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 124;
		$categoria->marca_id =43;
		$categoria->modelo = "PREGIO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 125;
		$categoria->marca_id =44;
		$categoria->modelo = "PARADISO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 126;
		$categoria->marca_id =44;
		$categoria->modelo = "TORINO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 127;
		$categoria->marca_id =45;
		$categoria->modelo = "256";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 128;
		$categoria->marca_id =46;
		$categoria->modelo = "LO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 129;
		$categoria->marca_id =46;
		$categoria->modelo = "MB 100";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 130;
		$categoria->marca_id =46;
		$categoria->modelo = "MB 140";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 131;
		$categoria->marca_id =46;
		$categoria->modelo = "OF";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 132;
		$categoria->marca_id =46;
		$categoria->modelo = "OH";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 133;
		$categoria->marca_id =46;
		$categoria->modelo = "SPRINTER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 134;
		$categoria->marca_id =46;
		$categoria->modelo = "V";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 135;
		$categoria->marca_id =47;
		$categoria->modelo = "CANTER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 136;
		$categoria->marca_id =48;
		$categoria->modelo = "MD";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 137;
		$categoria->marca_id =49;
		$categoria->modelo = "THUNDER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 138;
		$categoria->marca_id =50;
		$categoria->modelo = "CIVILIAN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 139;
		$categoria->marca_id =50;
		$categoria->modelo = "URVAN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 140;
		$categoria->marca_id =51;
		$categoria->modelo = "5.036";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 141;
		$categoria->marca_id =51;
		$categoria->modelo = "5.231";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 142;
		$categoria->marca_id =51;
		$categoria->modelo = "5232";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 143;
		$categoria->marca_id =52;
		$categoria->modelo = "EXPERT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 144;
		$categoria->marca_id =52;
		$categoria->modelo = "J5";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 145;
		$categoria->marca_id =53;
		$categoria->modelo = "SZS6503A21401";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 146;
		$categoria->marca_id =54;
		$categoria->modelo = "MARCOPOLO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 147;
		$categoria->marca_id =54;
		$categoria->modelo = "PARADISO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 148;
		$categoria->marca_id =55;
		$categoria->modelo = "KOSTER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 149;
		$categoria->marca_id =56;
		$categoria->modelo = "COASTER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 150;
		$categoria->marca_id =56;
		$categoria->modelo = "HIACE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 151;
		$categoria->marca_id =56;
		$categoria->modelo = "LAND CRUISER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 152;
		$categoria->marca_id =57;
		$categoria->modelo = "W9";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 153;
		$categoria->marca_id =58;
		$categoria->modelo = "17.240";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 154;
		$categoria->marca_id =58;
		$categoria->modelo = "9.150";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 155;
		$categoria->marca_id =58;
		$categoria->modelo = "KOMBI";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 156;
		$categoria->marca_id =59;
		$categoria->modelo = "B12";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 157;
		$categoria->marca_id =60;
		$categoria->modelo = "ZK";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 158;
		$categoria->marca_id =61;
		$categoria->modelo = "LCK";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 159;
		$categoria->marca_id =62;
		$categoria->modelo = "11200";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 160;
		$categoria->marca_id =63;
		$categoria->modelo = "HD6";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 161;
		$categoria->marca_id =63;
		$categoria->modelo = "HD7";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 162;
		$categoria->marca_id =63;
		$categoria->modelo = "HD8";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 163;
		$categoria->marca_id =64;
		$categoria->modelo = "BJ";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 164;
		$categoria->marca_id =65;
		$categoria->modelo = "TJ";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 165;
		$categoria->marca_id =66;
		$categoria->modelo = "H5";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 166;
		$categoria->marca_id =67;
		$categoria->modelo = "6200";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 167;
		$categoria->marca_id =67;
		$categoria->modelo = "ARGOSY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 168;
		$categoria->marca_id =67;
		$categoria->modelo = "ASTRO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 169;
		$categoria->marca_id =67;
		$categoria->modelo = "BRIGADIER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 170;
		$categoria->marca_id =67;
		$categoria->modelo = "C 3500";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 171;
		$categoria->marca_id =67;
		$categoria->modelo = "C30";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 172;
		$categoria->marca_id =67;
		$categoria->modelo = "C31";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 173;
		$categoria->marca_id =67;
		$categoria->modelo = "C40";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 174;
		$categoria->marca_id =67;
		$categoria->modelo = "C50";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 175;
		$categoria->marca_id =67;
		$categoria->modelo = "C5500";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 176;
		$categoria->marca_id =67;
		$categoria->modelo = "C60";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 177;
		$categoria->marca_id =67;
		$categoria->modelo = "C600";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 178;
		$categoria->marca_id =67;
		$categoria->modelo = "C6500";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 179;
		$categoria->marca_id =67;
		$categoria->modelo = "C70";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 180;
		$categoria->marca_id =67;
		$categoria->modelo = "C7000";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 181;
		$categoria->marca_id =67;
		$categoria->modelo = "C7500";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 182;
		$categoria->marca_id =67;
		$categoria->modelo = "C8500";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 183;
		$categoria->marca_id =67;
		$categoria->modelo = "CHASIS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 184;
		$categoria->marca_id =67;
		$categoria->modelo = "CHEVY VAN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 185;
		$categoria->marca_id =67;
		$categoria->modelo = "EXPRESS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 186;
		$categoria->marca_id =67;
		$categoria->modelo = "EXR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 187;
		$categoria->marca_id =67;
		$categoria->modelo = "EXZ";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 188;
		$categoria->marca_id =67;
		$categoria->modelo = "FSR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 189;
		$categoria->marca_id =67;
		$categoria->modelo = "FVR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 190;
		$categoria->marca_id =67;
		$categoria->modelo = "HHR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 191;
		$categoria->marca_id =67;
		$categoria->modelo = "NHR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 192;
		$categoria->marca_id =67;
		$categoria->modelo = "NKR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 193;
		$categoria->marca_id =67;
		$categoria->modelo = "NPR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 194;
		$categoria->marca_id =67;
		$categoria->modelo = "R";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 195;
		$categoria->marca_id =67;
		$categoria->modelo = "SILVERADO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 196;
		$categoria->marca_id =67;
		$categoria->modelo = "SUPER BRIGADIER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 197;
		$categoria->marca_id =67;
		$categoria->modelo = "SUPER CARRY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 198;
		$categoria->marca_id =67;
		$categoria->modelo = "T6500";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 199;
		$categoria->marca_id =67;
		$categoria->modelo = "T7500";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 200;
		$categoria->marca_id =67;
		$categoria->modelo = "T8500";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 201;
		$categoria->marca_id =67;
		$categoria->modelo = "UPLANDER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 202;
		$categoria->marca_id =67;
		$categoria->modelo = "VENTURE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 203;
		$categoria->marca_id =67;
		$categoria->modelo = "W";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 204;
		$categoria->marca_id =68;
		$categoria->modelo = "BERLINGO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 205;
		$categoria->marca_id =68;
		$categoria->modelo = "JUMPER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 206;
		$categoria->marca_id =68;
		$categoria->modelo = "JUMPY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 207;
		$categoria->marca_id =69;
		$categoria->modelo = "CHUTO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 208;
		$categoria->marca_id =69;
		$categoria->modelo = "DAMAS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 209;
		$categoria->marca_id =69;
		$categoria->modelo = "LUBLIN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 210;
		$categoria->marca_id =70;
		$categoria->modelo = "2500";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 211;
		$categoria->marca_id =71;
		$categoria->modelo = "DELTA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 212;
		$categoria->marca_id =71;
		$categoria->modelo = "HIJET";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 213;
		$categoria->marca_id =72;
		$categoria->modelo = "D 300";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 214;
		$categoria->marca_id =72;
		$categoria->modelo = "D 350";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 215;
		$categoria->marca_id =72;
		$categoria->modelo = "D 600";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 216;
		$categoria->marca_id =72;
		$categoria->modelo = "D500";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 217;
		$categoria->marca_id =72;
		$categoria->modelo = "RAM";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 218;
		$categoria->marca_id =72;
		$categoria->modelo = "RAM CHARGER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 219;
		$categoria->marca_id =72;
		$categoria->modelo = "RAM VAN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 220;
		$categoria->marca_id =72;
		$categoria->modelo = "SPRINTER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 221;
		$categoria->marca_id =73;
		$categoria->modelo = "CM";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 222;
		$categoria->marca_id =73;
		$categoria->modelo = "CP";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 223;
		$categoria->marca_id =73;
		$categoria->modelo = "DUOLIKA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 224;
		$categoria->marca_id =73;
		$categoria->modelo = "EQ";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 225;
		$categoria->marca_id =73;
		$categoria->modelo = "JINBA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 226;
		$categoria->marca_id =73;
		$categoria->modelo = "JINGANG";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 227;
		$categoria->marca_id =73;
		$categoria->modelo = "MINI CARGO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 228;
		$categoria->marca_id =73;
		$categoria->modelo = "PADROTE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 229;
		$categoria->marca_id =73;
		$categoria->modelo = "STAR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 230;
		$categoria->marca_id =73;
		$categoria->modelo = "XIAOBA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 231;
		$categoria->marca_id =74;
		$categoria->modelo = "ANHUI";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 232;
		$categoria->marca_id =75;
		$categoria->modelo = "F500";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 233;
		$categoria->marca_id =76;
		$categoria->modelo = "CA1040";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 234;
		$categoria->marca_id =76;
		$categoria->modelo = "CA4190P2K15A80";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 235;
		$categoria->marca_id =76;
		$categoria->modelo = "CA4322P21K15T1YA82";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 236;
		$categoria->marca_id =77;
		$categoria->modelo = "135";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 237;
		$categoria->marca_id =77;
		$categoria->modelo = "238";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 238;
		$categoria->marca_id =77;
		$categoria->modelo = "330.30";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 239;
		$categoria->marca_id =77;
		$categoria->modelo = "619";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 240;
		$categoria->marca_id =77;
		$categoria->modelo = "628";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 241;
		$categoria->marca_id =77;
		$categoria->modelo = "643";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 242;
		$categoria->marca_id =77;
		$categoria->modelo = "65.9";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 243;
		$categoria->marca_id =77;
		$categoria->modelo = "682";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 244;
		$categoria->marca_id =77;
		$categoria->modelo = "691";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 245;
		$categoria->marca_id =77;
		$categoria->modelo = "693";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 246;
		$categoria->marca_id =77;
		$categoria->modelo = "697";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 247;
		$categoria->marca_id =77;
		$categoria->modelo = "DOBLO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 248;
		$categoria->marca_id =77;
		$categoria->modelo = "DUCATO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 249;
		$categoria->marca_id =77;
		$categoria->modelo = "FIORINO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 250;
		$categoria->marca_id =77;
		$categoria->modelo = "OM";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 251;
		$categoria->marca_id =77;
		$categoria->modelo = "PREMIO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 252;
		$categoria->marca_id =78;
		$categoria->modelo = "AEROSTAR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 253;
		$categoria->marca_id =78;
		$categoria->modelo = "CARGO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 254;
		$categoria->marca_id =78;
		$categoria->modelo = "ECONOLINE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 255;
		$categoria->marca_id =78;
		$categoria->modelo = "F 250";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 256;
		$categoria->marca_id =78;
		$categoria->modelo = "F 350";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 257;
		$categoria->marca_id =78;
		$categoria->modelo = "F 4000";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 258;
		$categoria->marca_id =78;
		$categoria->modelo = "F 450";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 259;
		$categoria->marca_id =78;
		$categoria->modelo = "F 47";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 260;
		$categoria->marca_id =78;
		$categoria->modelo = "F 500";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 261;
		$categoria->marca_id =78;
		$categoria->modelo = "F 550";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 262;
		$categoria->marca_id =78;
		$categoria->modelo = "F 600";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 263;
		$categoria->marca_id =78;
		$categoria->modelo = "F 650";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 264;
		$categoria->marca_id =78;
		$categoria->modelo = "F 70";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 265;
		$categoria->marca_id =78;
		$categoria->modelo = "F 700";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 266;
		$categoria->marca_id =78;
		$categoria->modelo = "F 7000";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 267;
		$categoria->marca_id =78;
		$categoria->modelo = "F 750";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 268;
		$categoria->marca_id =78;
		$categoria->modelo = "F 800";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 269;
		$categoria->marca_id =78;
		$categoria->modelo = "F 8000";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 270;
		$categoria->marca_id =78;
		$categoria->modelo = "F 900";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 271;
		$categoria->marca_id =78;
		$categoria->modelo = "F5000";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 272;
		$categoria->marca_id =78;
		$categoria->modelo = "FLEETWOOD";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 273;
		$categoria->marca_id =78;
		$categoria->modelo = "GURI";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 274;
		$categoria->marca_id =78;
		$categoria->modelo = "L";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 275;
		$categoria->marca_id =78;
		$categoria->modelo = "TRANSIT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 276;
		$categoria->marca_id =79;
		$categoria->modelo = "AUMAN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 277;
		$categoria->marca_id =79;
		$categoria->modelo = "FOTON";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 278;
		$categoria->marca_id =79;
		$categoria->modelo = "OLLIN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 279;
		$categoria->marca_id =79;
		$categoria->modelo = "VIEW";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 280;
		$categoria->marca_id =80;
		$categoria->modelo = "CL 120";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 281;
		$categoria->marca_id =80;
		$categoria->modelo = "COLUMBIA CL 120";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 282;
		$categoria->marca_id =80;
		$categoria->modelo = "FL 106";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 283;
		$categoria->marca_id =80;
		$categoria->modelo = "FL 80";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 284;
		$categoria->marca_id =80;
		$categoria->modelo = "FLD 120";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 285;
		$categoria->marca_id =80;
		$categoria->modelo = "FLT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 286;
		$categoria->marca_id =80;
		$categoria->modelo = "M2";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 287;
		$categoria->marca_id =81;
		$categoria->modelo = "3500";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 288;
		$categoria->marca_id =81;
		$categoria->modelo = "4000";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 289;
		$categoria->marca_id =81;
		$categoria->modelo = "5000";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 290;
		$categoria->marca_id =81;
		$categoria->modelo = "6000";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 291;
		$categoria->marca_id =81;
		$categoria->modelo = "7000";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 292;
		$categoria->marca_id =81;
		$categoria->modelo = "8000";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 293;
		$categoria->marca_id =81;
		$categoria->modelo = "BRIGADIER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 294;
		$categoria->marca_id =81;
		$categoria->modelo = "C";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 295;
		$categoria->marca_id =81;
		$categoria->modelo = "C 8500";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 296;
		$categoria->marca_id =81;
		$categoria->modelo = "NPR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 297;
		$categoria->marca_id =81;
		$categoria->modelo = "SAFARI";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 298;
		$categoria->marca_id =81;
		$categoria->modelo = "SAVANA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 299;
		$categoria->marca_id =81;
		$categoria->modelo = "VAN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 300;
		$categoria->marca_id =82;
		$categoria->modelo = "PROTEUS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 301;
		$categoria->marca_id =83;
		$categoria->modelo = "XINYI";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 302;
		$categoria->marca_id =83;
		$categoria->modelo = "ZHONGY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 303;
		$categoria->marca_id =84;
		$categoria->modelo = "HFJ";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 304;
		$categoria->marca_id =85;
		$categoria->modelo = "338";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 305;
		$categoria->marca_id =85;
		$categoria->modelo = "816";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 306;
		$categoria->marca_id =85;
		$categoria->modelo = "FF 17";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 307;
		$categoria->marca_id =86;
		$categoria->modelo = "H 1";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 308;
		$categoria->marca_id =86;
		$categoria->modelo = "H 100";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 309;
		$categoria->marca_id =86;
		$categoria->modelo = "HD";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 310;
		$categoria->marca_id =87;
		$categoria->modelo = "1650";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 311;
		$categoria->marca_id =87;
		$categoria->modelo = "1654";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 312;
		$categoria->marca_id =87;
		$categoria->modelo = "1700";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 313;
		$categoria->marca_id =87;
		$categoria->modelo = "1750";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 314;
		$categoria->marca_id =87;
		$categoria->modelo = "1754";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 315;
		$categoria->marca_id =87;
		$categoria->modelo = "1850";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 316;
		$categoria->marca_id =87;
		$categoria->modelo = "1854";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 317;
		$categoria->marca_id =87;
		$categoria->modelo = "1900";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 318;
		$categoria->marca_id =87;
		$categoria->modelo = "1950";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 319;
		$categoria->marca_id =87;
		$categoria->modelo = "1952";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 320;
		$categoria->marca_id =87;
		$categoria->modelo = "1954";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 321;
		$categoria->marca_id =87;
		$categoria->modelo = "2200";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 322;
		$categoria->marca_id =87;
		$categoria->modelo = "2554";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 323;
		$categoria->marca_id =87;
		$categoria->modelo = "2574";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 324;
		$categoria->marca_id =87;
		$categoria->modelo = "2575";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 325;
		$categoria->marca_id =87;
		$categoria->modelo = "2674";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 326;
		$categoria->marca_id =87;
		$categoria->modelo = "4200";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 327;
		$categoria->marca_id =87;
		$categoria->modelo = "4300";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 328;
		$categoria->marca_id =87;
		$categoria->modelo = "4400";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 329;
		$categoria->marca_id =87;
		$categoria->modelo = "4600";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 330;
		$categoria->marca_id =87;
		$categoria->modelo = "4700";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 331;
		$categoria->marca_id =87;
		$categoria->modelo = "4800";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 332;
		$categoria->marca_id =87;
		$categoria->modelo = "4900";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 333;
		$categoria->marca_id =87;
		$categoria->modelo = "5070";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 334;
		$categoria->marca_id =87;
		$categoria->modelo = "5600";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 335;
		$categoria->marca_id =87;
		$categoria->modelo = "7100";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 336;
		$categoria->marca_id =87;
		$categoria->modelo = "7300";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 337;
		$categoria->marca_id =87;
		$categoria->modelo = "7400";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 338;
		$categoria->marca_id =87;
		$categoria->modelo = "7600";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 339;
		$categoria->marca_id =87;
		$categoria->modelo = "8000";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 340;
		$categoria->marca_id =87;
		$categoria->modelo = "8100";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 341;
		$categoria->marca_id =87;
		$categoria->modelo = "8200";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 342;
		$categoria->marca_id =87;
		$categoria->modelo = "9100";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 343;
		$categoria->marca_id =87;
		$categoria->modelo = "9200";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 344;
		$categoria->marca_id =87;
		$categoria->modelo = "9300";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 345;
		$categoria->marca_id =87;
		$categoria->modelo = "9400";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 346;
		$categoria->marca_id =87;
		$categoria->modelo = "9670";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 347;
		$categoria->marca_id =87;
		$categoria->modelo = "9800";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 348;
		$categoria->marca_id =87;
		$categoria->modelo = "CF";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 349;
		$categoria->marca_id =87;
		$categoria->modelo = "F";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 350;
		$categoria->marca_id =87;
		$categoria->modelo = "PAYSTAR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 351;
		$categoria->marca_id =88;
		$categoria->modelo = "M";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 352;
		$categoria->marca_id =88;
		$categoria->modelo = "M 14.16";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 353;
		$categoria->marca_id =89;
		$categoria->modelo = "FSR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 354;
		$categoria->marca_id =89;
		$categoria->modelo = "FTR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 355;
		$categoria->marca_id =89;
		$categoria->modelo = "NKR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 356;
		$categoria->marca_id =89;
		$categoria->modelo = "NPR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 357;
		$categoria->marca_id =90;
		$categoria->modelo = "(EC)100E";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 358;
		$categoria->marca_id =90;
		$categoria->modelo = "(EC)120E";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 359;
		$categoria->marca_id =90;
		$categoria->modelo = "(EC)150E";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 360;
		$categoria->marca_id =90;
		$categoria->modelo = "(EC)230";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 361;
		$categoria->marca_id =90;
		$categoria->modelo = "(ET) MP 190";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 362;
		$categoria->marca_id =90;
		$categoria->modelo = "(ET)AD";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 363;
		$categoria->marca_id =90;
		$categoria->modelo = "(ET)MP";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 364;
		$categoria->marca_id =90;
		$categoria->modelo = "(ET)MP 380 E";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 365;
		$categoria->marca_id =90;
		$categoria->modelo = "200";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 366;
		$categoria->marca_id =90;
		$categoria->modelo = "240";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 367;
		$categoria->marca_id =90;
		$categoria->modelo = "330.30";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 368;
		$categoria->marca_id =90;
		$categoria->modelo = "35.10";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 369;
		$categoria->marca_id =90;
		$categoria->modelo = "38.13";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 370;
		$categoria->marca_id =90;
		$categoria->modelo = "391.35";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 371;
		$categoria->marca_id =90;
		$categoria->modelo = "40.10";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 372;
		$categoria->marca_id =90;
		$categoria->modelo = "40.12";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 373;
		$categoria->marca_id =90;
		$categoria->modelo = "40.13";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 374;
		$categoria->marca_id =90;
		$categoria->modelo = "440";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 375;
		$categoria->marca_id =90;
		$categoria->modelo = "450";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 376;
		$categoria->marca_id =90;
		$categoria->modelo = "49.12";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 377;
		$categoria->marca_id =90;
		$categoria->modelo = "49.19";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 378;
		$categoria->marca_id =90;
		$categoria->modelo = "490";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 379;
		$categoria->marca_id =90;
		$categoria->modelo = "50.12";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 380;
		$categoria->marca_id =90;
		$categoria->modelo = "50.13";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 381;
		$categoria->marca_id =90;
		$categoria->modelo = "5232";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 382;
		$categoria->marca_id =90;
		$categoria->modelo = "570";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 383;
		$categoria->marca_id =90;
		$categoria->modelo = "59.12";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 384;
		$categoria->marca_id =90;
		$categoria->modelo = "60.12";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 385;
		$categoria->marca_id =90;
		$categoria->modelo = "619";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 386;
		$categoria->marca_id =90;
		$categoria->modelo = "65.9";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 387;
		$categoria->marca_id =90;
		$categoria->modelo = "697";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 388;
		$categoria->marca_id =90;
		$categoria->modelo = "70.12";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 389;
		$categoria->marca_id =90;
		$categoria->modelo = "70.13";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 390;
		$categoria->marca_id =90;
		$categoria->modelo = "740";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 391;
		$categoria->marca_id =90;
		$categoria->modelo = "A120E";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 392;
		$categoria->marca_id =90;
		$categoria->modelo = "A40.10";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 393;
		$categoria->marca_id =90;
		$categoria->modelo = "A410T";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 394;
		$categoria->marca_id =90;
		$categoria->modelo = "A5912";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 395;
		$categoria->marca_id =90;
		$categoria->modelo = "CC";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 396;
		$categoria->marca_id =90;
		$categoria->modelo = "ML";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 397;
		$categoria->marca_id =90;
		$categoria->modelo = "TURBODAILY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 398;
		$categoria->marca_id =90;
		$categoria->modelo = "VERTIS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 399;
		$categoria->marca_id =91;
		$categoria->modelo = "HFC";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 400;
		$categoria->marca_id =92;
		$categoria->modelo = "ARAYA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 401;
		$categoria->marca_id =92;
		$categoria->modelo = "MINI ARAYA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 402;
		$categoria->marca_id =93;
		$categoria->modelo = "JX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 403;
		$categoria->marca_id =93;
		$categoria->modelo = "YUMBA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 404;
		$categoria->marca_id =94;
		$categoria->modelo = "KMC";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 405;
		$categoria->marca_id =94;
		$categoria->modelo = "ZB";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 406;
		$categoria->marca_id =95;
		$categoria->modelo = "54112";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 407;
		$categoria->marca_id =95;
		$categoria->modelo = "6460";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 408;
		$categoria->marca_id =95;
		$categoria->modelo = "6520";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 409;
		$categoria->marca_id =95;
		$categoria->modelo = "65201";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 410;
		$categoria->marca_id =96;
		$categoria->modelo = "K";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 411;
		$categoria->marca_id =96;
		$categoria->modelo = "T";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 412;
		$categoria->marca_id =96;
		$categoria->modelo = "T 300";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 413;
		$categoria->marca_id =96;
		$categoria->modelo = "T 600";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 414;
		$categoria->marca_id =96;
		$categoria->modelo = "W";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 415;
		$categoria->marca_id =97;
		$categoria->modelo = "K 2700";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 416;
		$categoria->marca_id =97;
		$categoria->modelo = "PREGIO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 417;
		$categoria->marca_id =97;
		$categoria->modelo = "TOWNER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 418;
		$categoria->marca_id =98;
		$categoria->modelo = "27150";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 419;
		$categoria->marca_id =99;
		$categoria->modelo = "CONVOY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 420;
		$categoria->marca_id =100;
		$categoria->modelo = "LF";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 421;
		$categoria->marca_id =101;
		$categoria->modelo = "B";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 422;
		$categoria->marca_id =101;
		$categoria->modelo = "CH 612";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 423;
		$categoria->marca_id =101;
		$categoria->modelo = "CH 613";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 424;
		$categoria->marca_id =101;
		$categoria->modelo = "CL";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 425;
		$categoria->marca_id =101;
		$categoria->modelo = "CT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 426;
		$categoria->marca_id =101;
		$categoria->modelo = "CV";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 427;
		$categoria->marca_id =101;
		$categoria->modelo = "CX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 428;
		$categoria->marca_id =101;
		$categoria->modelo = "CXN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 429;
		$categoria->marca_id =101;
		$categoria->modelo = "CXU";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 430;
		$categoria->marca_id =101;
		$categoria->modelo = "DM";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 431;
		$categoria->marca_id =101;
		$categoria->modelo = "DM 685";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 432;
		$categoria->marca_id =101;
		$categoria->modelo = "DM 811";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 433;
		$categoria->marca_id =101;
		$categoria->modelo = "DM 812";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 434;
		$categoria->marca_id =101;
		$categoria->modelo = "F";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 435;
		$categoria->marca_id =101;
		$categoria->modelo = "G";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 436;
		$categoria->marca_id =101;
		$categoria->modelo = "GU";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 437;
		$categoria->marca_id =101;
		$categoria->modelo = "MH";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 438;
		$categoria->marca_id =101;
		$categoria->modelo = "MR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 439;
		$categoria->marca_id =101;
		$categoria->modelo = "MS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 440;
		$categoria->marca_id =101;
		$categoria->modelo = "R";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 441;
		$categoria->marca_id =101;
		$categoria->modelo = "R 609";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 442;
		$categoria->marca_id =101;
		$categoria->modelo = "R 611";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 443;
		$categoria->marca_id =101;
		$categoria->modelo = "R 612";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 444;
		$categoria->marca_id =101;
		$categoria->modelo = "R 685";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 445;
		$categoria->marca_id =101;
		$categoria->modelo = "R 686";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 446;
		$categoria->marca_id =101;
		$categoria->modelo = "R 688";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 447;
		$categoria->marca_id =101;
		$categoria->modelo = "RD 685";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 448;
		$categoria->marca_id =101;
		$categoria->modelo = "RD 688";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 449;
		$categoria->marca_id =101;
		$categoria->modelo = "RD 690";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 450;
		$categoria->marca_id =102;
		$categoria->modelo = "6x6";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 451;
		$categoria->marca_id =102;
		$categoria->modelo = "8x8";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 452;
		$categoria->marca_id =102;
		$categoria->modelo = "TGA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 453;
		$categoria->marca_id =102;
		$categoria->modelo = "TGL";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 454;
		$categoria->marca_id =102;
		$categoria->modelo = "TGM";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 455;
		$categoria->marca_id =103;
		$categoria->modelo = "1.9.8.0";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 456;
		$categoria->marca_id =104;
		$categoria->modelo = "533632";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 457;
		$categoria->marca_id =104;
		$categoria->modelo = "54323";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 458;
		$categoria->marca_id =104;
		$categoria->modelo = "551605";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 459;
		$categoria->marca_id =104;
		$categoria->modelo = "630333";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 460;
		$categoria->marca_id =104;
		$categoria->modelo = "643008";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 461;
		$categoria->marca_id =104;
		$categoria->modelo = "643018";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 462;
		$categoria->marca_id =104;
		$categoria->modelo = "643069";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 463;
		$categoria->marca_id =105;
		$categoria->modelo = "B";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 464;
		$categoria->marca_id =105;
		$categoria->modelo = "CARGO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 465;
		$categoria->marca_id =105;
		$categoria->modelo = "T 45";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 466;
		$categoria->marca_id =106;
		$categoria->modelo = "MASPARRO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 467;
		$categoria->marca_id =107;
		$categoria->modelo = "1218";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 468;
		$categoria->marca_id =107;
		$categoria->modelo = "1418";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 469;
		$categoria->marca_id =107;
		$categoria->modelo = "1720/48";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 470;
		$categoria->marca_id =107;
		$categoria->modelo = "2320";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 471;
		$categoria->marca_id =107;
		$categoria->modelo = "ACCELO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 472;
		$categoria->marca_id =107;
		$categoria->modelo = "ACTROS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 473;
		$categoria->marca_id =107;
		$categoria->modelo = "ATEGO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 474;
		$categoria->marca_id =107;
		$categoria->modelo = "AXOR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 475;
		$categoria->marca_id =107;
		$categoria->modelo = "L";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 476;
		$categoria->marca_id =107;
		$categoria->modelo = "L 1319";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 477;
		$categoria->marca_id =107;
		$categoria->modelo = "L1924";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 478;
		$categoria->marca_id =107;
		$categoria->modelo = "L2213 42";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 479;
		$categoria->marca_id =107;
		$categoria->modelo = "LA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 480;
		$categoria->marca_id =107;
		$categoria->modelo = "LK";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 481;
		$categoria->marca_id =107;
		$categoria->modelo = "LN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 482;
		$categoria->marca_id =107;
		$categoria->modelo = "LS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 483;
		$categoria->marca_id =107;
		$categoria->modelo = "MB 100";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 484;
		$categoria->marca_id =107;
		$categoria->modelo = "MB 140";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 485;
		$categoria->marca_id =107;
		$categoria->modelo = "MB 800";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 486;
		$categoria->marca_id =107;
		$categoria->modelo = "SPRINTER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 487;
		$categoria->marca_id =107;
		$categoria->modelo = "UNIMOG";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 488;
		$categoria->marca_id =107;
		$categoria->modelo = "VARIO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 489;
		$categoria->marca_id =107;
		$categoria->modelo = "VITO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 490;
		$categoria->marca_id =108;
		$categoria->modelo = "950";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 491;
		$categoria->marca_id =108;
		$categoria->modelo = "VILLAGER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 492;
		$categoria->marca_id =109;
		$categoria->modelo = "BUS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 493;
		$categoria->marca_id =109;
		$categoria->modelo = "CANTER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 494;
		$categoria->marca_id =109;
		$categoria->modelo = "FH";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 495;
		$categoria->marca_id =109;
		$categoria->modelo = "FK";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 496;
		$categoria->marca_id =109;
		$categoria->modelo = "FM";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 497;
		$categoria->marca_id =109;
		$categoria->modelo = "FP";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 498;
		$categoria->marca_id =109;
		$categoria->modelo = "FUSO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 499;
		$categoria->marca_id =109;
		$categoria->modelo = "FV";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 500;
		$categoria->marca_id =109;
		$categoria->modelo = "L300";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 501;
		$categoria->marca_id =109;
		$categoria->modelo = "MINIBUS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 502;
		$categoria->marca_id =110;
		$categoria->modelo = "MD";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 503;
		$categoria->marca_id =111;
		$categoria->modelo = "ATLEON";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 504;
		$categoria->marca_id =111;
		$categoria->modelo = "CABSTAR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 505;
		$categoria->marca_id =111;
		$categoria->modelo = "QUEST";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 506;
		$categoria->marca_id =111;
		$categoria->modelo = "TRADE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 507;
		$categoria->marca_id =111;
		$categoria->modelo = "UD";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 508;
		$categoria->marca_id =111;
		$categoria->modelo = "URVAN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 509;
		$categoria->marca_id =112;
		$categoria->modelo = "F";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 510;
		$categoria->marca_id =113;
		$categoria->modelo = "1080";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 511;
		$categoria->marca_id =113;
		$categoria->modelo = "1089";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 512;
		$categoria->marca_id =113;
		$categoria->modelo = "1207";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 513;
		$categoria->marca_id =113;
		$categoria->modelo = "1217";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 514;
		$categoria->marca_id =113;
		$categoria->modelo = "1223";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 515;
		$categoria->marca_id =113;
		$categoria->modelo = "2081";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 516;
		$categoria->marca_id =113;
		$categoria->modelo = "3089";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 517;
		$categoria->marca_id =114;
		$categoria->modelo = "335";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 518;
		$categoria->marca_id =114;
		$categoria->modelo = "348";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 519;
		$categoria->marca_id =114;
		$categoria->modelo = "357";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 520;
		$categoria->marca_id =114;
		$categoria->modelo = "378";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 521;
		$categoria->marca_id =114;
		$categoria->modelo = "385";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 522;
		$categoria->marca_id =114;
		$categoria->modelo = "387";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 523;
		$categoria->marca_id =115;
		$categoria->modelo = "J5";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 524;
		$categoria->marca_id =115;
		$categoria->modelo = "PARTNER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 525;
		$categoria->marca_id =116;
		$categoria->modelo = "PD";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 526;
		$categoria->marca_id =116;
		$categoria->modelo = "PF";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 527;
		$categoria->marca_id =116;
		$categoria->modelo = "PW";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 528;
		$categoria->marca_id =117;
		$categoria->modelo = "CAR CARRIER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 529;
		$categoria->marca_id =117;
		$categoria->modelo = "CASA RODANTE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 530;
		$categoria->marca_id =117;
		$categoria->modelo = "LOWBOY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 531;
		$categoria->marca_id =117;
		$categoria->modelo = "REMOLQUE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 532;
		$categoria->marca_id =117;
		$categoria->modelo = "SEMIREMOLQUE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 533;
		$categoria->marca_id =117;
		$categoria->modelo = "TANQUE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 534;
		$categoria->marca_id =117;
		$categoria->modelo = "TANQUE DE GASOLINA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 535;
		$categoria->marca_id =118;
		$categoria->modelo = "EXPRESS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 536;
		$categoria->marca_id =118;
		$categoria->modelo = "G";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 537;
		$categoria->marca_id =118;
		$categoria->modelo = "KANGOO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 538;
		$categoria->marca_id =118;
		$categoria->modelo = "KERAX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 539;
		$categoria->marca_id =118;
		$categoria->modelo = "MASCOTT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 540;
		$categoria->marca_id =118;
		$categoria->modelo = "MASTER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 541;
		$categoria->marca_id =118;
		$categoria->modelo = "MIDLINER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 542;
		$categoria->marca_id =118;
		$categoria->modelo = "TRAFIC";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 543;
		$categoria->marca_id =119;
		$categoria->modelo = "CARGO VAN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 544;
		$categoria->marca_id =120;
		$categoria->modelo = "SY5250GJB4";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 545;
		$categoria->marca_id =121;
		$categoria->modelo = "C";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 546;
		$categoria->marca_id =121;
		$categoria->modelo = "D";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 547;
		$categoria->marca_id =121;
		$categoria->modelo = "G";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 548;
		$categoria->marca_id =121;
		$categoria->modelo = "L";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 549;
		$categoria->marca_id =121;
		$categoria->modelo = "P";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 550;
		$categoria->marca_id =121;
		$categoria->modelo = "R113";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 551;
		$categoria->marca_id =121;
		$categoria->modelo = "T";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 552;
		$categoria->marca_id =122;
		$categoria->modelo = "TERRA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 553;
		$categoria->marca_id =123;
		$categoria->modelo = "HOWO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 554;
		$categoria->marca_id =123;
		$categoria->modelo = "STYER KING";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 555;
		$categoria->marca_id =124;
		$categoria->modelo = "L";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 556;
		$categoria->marca_id =124;
		$categoria->modelo = "LT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 557;
		$categoria->marca_id =125;
		$categoria->modelo = "SUPER CARRY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 558;
		$categoria->marca_id =126;
		$categoria->modelo = "T 815";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 559;
		$categoria->marca_id =127;
		$categoria->modelo = "DYNA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 560;
		$categoria->marca_id =127;
		$categoria->modelo = "HIACE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 561;
		$categoria->marca_id =127;
		$categoria->modelo = "LAND CRUISER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 562;
		$categoria->marca_id =128;
		$categoria->modelo = "220602";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 563;
		$categoria->marca_id =128;
		$categoria->modelo = "39629";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 564;
		$categoria->marca_id =129;
		$categoria->modelo = "11.130";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 565;
		$categoria->marca_id =129;
		$categoria->modelo = "15.180";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 566;
		$categoria->marca_id =129;
		$categoria->modelo = "17.210";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 567;
		$categoria->marca_id =129;
		$categoria->modelo = "17.220";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 568;
		$categoria->marca_id =129;
		$categoria->modelo = "18.310";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 569;
		$categoria->marca_id =129;
		$categoria->modelo = "24.220";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 570;
		$categoria->marca_id =129;
		$categoria->modelo = "24.250";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 571;
		$categoria->marca_id =129;
		$categoria->modelo = "31.310";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 572;
		$categoria->marca_id =129;
		$categoria->modelo = "8.150E";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 573;
		$categoria->marca_id =129;
		$categoria->modelo = "9.150";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 574;
		$categoria->marca_id =129;
		$categoria->modelo = "CADDY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 575;
		$categoria->marca_id =129;
		$categoria->modelo = "CRAFTER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 576;
		$categoria->marca_id =129;
		$categoria->modelo = "KOMBI";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 577;
		$categoria->marca_id =130;
		$categoria->modelo = "F";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 578;
		$categoria->marca_id =130;
		$categoria->modelo = "FE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 579;
		$categoria->marca_id =130;
		$categoria->modelo = "FH";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 580;
		$categoria->marca_id =130;
		$categoria->modelo = "FM";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 581;
		$categoria->marca_id =130;
		$categoria->modelo = "NH";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 582;
		$categoria->marca_id =130;
		$categoria->modelo = "VHD";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 583;
		$categoria->marca_id =130;
		$categoria->modelo = "VM";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 584;
		$categoria->marca_id =130;
		$categoria->modelo = "WAH";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 585;
		$categoria->marca_id =131;
		$categoria->modelo = "NXG5250KGJB3B";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 586;
		$categoria->marca_id =132;
		$categoria->modelo = "NJ4180DAW";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 587;
		$categoria->marca_id =132;
		$categoria->modelo = "NJ5063DA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 588;
		$categoria->marca_id =133;
		$categoria->modelo = "SILVER FOX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 589;
		$categoria->marca_id =133;
		$categoria->modelo = "TB";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 590;
		$categoria->marca_id =133;
		$categoria->modelo = "THUNDER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 591;
		$categoria->marca_id =134;
		$categoria->modelo = "ADVENTURE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 592;
		$categoria->marca_id =134;
		$categoria->modelo = "BWK";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 593;
		$categoria->marca_id =134;
		$categoria->modelo = "GPR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 594;
		$categoria->marca_id =134;
		$categoria->modelo = "GTR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 595;
		$categoria->marca_id =134;
		$categoria->modelo = "LH";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 596;
		$categoria->marca_id =134;
		$categoria->modelo = "MAGNETIC";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 597;
		$categoria->marca_id =134;
		$categoria->modelo = "MATRIX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 598;
		$categoria->marca_id =135;
		$categoria->modelo = "BETTA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 599;
		$categoria->marca_id =135;
		$categoria->modelo = "CG";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 600;
		$categoria->marca_id =135;
		$categoria->modelo = "GAMMA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 601;
		$categoria->marca_id =136;
		$categoria->modelo = "SY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 602;
		$categoria->marca_id =136;
		$categoria->modelo = "XR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 603;
		$categoria->marca_id =137;
		$categoria->modelo = "ATLANTIC";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 604;
		$categoria->marca_id =137;
		$categoria->modelo = "DORSODURO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 605;
		$categoria->marca_id =137;
		$categoria->modelo = "PEGASO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 606;
		$categoria->marca_id =137;
		$categoria->modelo = "RST";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 607;
		$categoria->marca_id =137;
		$categoria->modelo = "RSV";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 608;
		$categoria->marca_id =137;
		$categoria->modelo = "SCARABEO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 609;
		$categoria->marca_id =137;
		$categoria->modelo = "SHIVER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 610;
		$categoria->marca_id =137;
		$categoria->modelo = "SPORT CITY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 611;
		$categoria->marca_id =137;
		$categoria->modelo = "TUONO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 612;
		$categoria->marca_id =138;
		$categoria->modelo = "TRV";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 613;
		$categoria->marca_id =139;
		$categoria->modelo = "HACKER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 614;
		$categoria->marca_id =140;
		$categoria->modelo = "AGUILA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 615;
		$categoria->marca_id =140;
		$categoria->modelo = "BRONCO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 616;
		$categoria->marca_id =140;
		$categoria->modelo = "CONDOR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 617;
		$categoria->marca_id =140;
		$categoria->modelo = "GY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 618;
		$categoria->marca_id =140;
		$categoria->modelo = "JS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 619;
		$categoria->marca_id =140;
		$categoria->modelo = "MATRIX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 620;
		$categoria->marca_id =141;
		$categoria->modelo = "AVENGER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 621;
		$categoria->marca_id =141;
		$categoria->modelo = "BOXER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 622;
		$categoria->marca_id =141;
		$categoria->modelo = "CHETAK";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 623;
		$categoria->marca_id =141;
		$categoria->modelo = "CLASSIC";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 624;
		$categoria->marca_id =141;
		$categoria->modelo = "CT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 625;
		$categoria->marca_id =141;
		$categoria->modelo = "DISCOVER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 626;
		$categoria->marca_id =141;
		$categoria->modelo = "KB";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 627;
		$categoria->marca_id =141;
		$categoria->modelo = "PULSAR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 628;
		$categoria->marca_id =142;
		$categoria->modelo = "ADIVA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 629;
		$categoria->marca_id =142;
		$categoria->modelo = "CAFFE NERO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 630;
		$categoria->marca_id =142;
		$categoria->modelo = "SCHEDA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 631;
		$categoria->marca_id =142;
		$categoria->modelo = "TNT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 632;
		$categoria->marca_id =142;
		$categoria->modelo = "TREK";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 633;
		$categoria->marca_id =142;
		$categoria->modelo = "VELVET";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 634;
		$categoria->marca_id =143;
		$categoria->modelo = "BR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 635;
		$categoria->marca_id =143;
		$categoria->modelo = "BRX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 636;
		$categoria->marca_id =143;
		$categoria->modelo = "BRZ";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 637;
		$categoria->marca_id =144;
		$categoria->modelo = "SLED";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 638;
		$categoria->marca_id =145;
		$categoria->modelo = "C1";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 639;
		$categoria->marca_id =145;
		$categoria->modelo = "F";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 640;
		$categoria->marca_id =145;
		$categoria->modelo = "G";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 641;
		$categoria->marca_id =145;
		$categoria->modelo = "HP";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 642;
		$categoria->marca_id =145;
		$categoria->modelo = "K";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 643;
		$categoria->marca_id =145;
		$categoria->modelo = "R";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 644;
		$categoria->marca_id =146;
		$categoria->modelo = "DS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 645;
		$categoria->marca_id =147;
		$categoria->modelo = "BLAST";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 646;
		$categoria->marca_id =147;
		$categoria->modelo = "XB";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 647;
		$categoria->marca_id =148;
		$categoria->modelo = "CANYON";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 648;
		$categoria->marca_id =148;
		$categoria->modelo = "CUCCIOLO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 649;
		$categoria->marca_id =148;
		$categoria->modelo = "G CANYON";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 650;
		$categoria->marca_id =148;
		$categoria->modelo = "MITO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 651;
		$categoria->marca_id =148;
		$categoria->modelo = "NAVIGATOR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 652;
		$categoria->marca_id =148;
		$categoria->modelo = "PLANET";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 653;
		$categoria->marca_id =148;
		$categoria->modelo = "RAPTOR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 654;
		$categoria->marca_id =148;
		$categoria->modelo = "RIVER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 655;
		$categoria->marca_id =148;
		$categoria->modelo = "V RAPTOR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 656;
		$categoria->marca_id =149;
		$categoria->modelo = "OUTLANDER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 657;
		$categoria->marca_id =149;
		$categoria->modelo = "RENEGADE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 658;
		$categoria->marca_id =149;
		$categoria->modelo = "SPYDER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 659;
		$categoria->marca_id =150;
		$categoria->modelo = "CF";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 660;
		$categoria->marca_id =151;
		$categoria->modelo = "REGAL RAPTOR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 661;
		$categoria->marca_id =152;
		$categoria->modelo = "DF";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 662;
		$categoria->marca_id =153;
		$categoria->modelo = "DY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 663;
		$categoria->marca_id =154;
		$categoria->modelo = "RAIDER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 664;
		$categoria->marca_id =155;
		$categoria->modelo = "KT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 665;
		$categoria->marca_id =156;
		$categoria->modelo = "PADDOCK";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 666;
		$categoria->marca_id =156;
		$categoria->modelo = "PREDATOR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 667;
		$categoria->marca_id =157;
		$categoria->modelo = "748";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 668;
		$categoria->marca_id =157;
		$categoria->modelo = "749";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 669;
		$categoria->marca_id =157;
		$categoria->modelo = "888";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 670;
		$categoria->marca_id =157;
		$categoria->modelo = "916";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 671;
		$categoria->marca_id =157;
		$categoria->modelo = "996";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 672;
		$categoria->marca_id =157;
		$categoria->modelo = "999";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 673;
		$categoria->marca_id =157;
		$categoria->modelo = "E";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 674;
		$categoria->marca_id =157;
		$categoria->modelo = "HYPERMOTARD";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 675;
		$categoria->marca_id =157;
		$categoria->modelo = "M";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 676;
		$categoria->marca_id =157;
		$categoria->modelo = "MULTISTRADA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 677;
		$categoria->marca_id =157;
		$categoria->modelo = "SS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 678;
		$categoria->marca_id =157;
		$categoria->modelo = "ST";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 679;
		$categoria->marca_id =157;
		$categoria->modelo = "SUPERBIKE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 680;
		$categoria->marca_id =158;
		$categoria->modelo = "EASY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 681;
		$categoria->marca_id =159;
		$categoria->modelo = "FY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 682;
		$categoria->marca_id =160;
		$categoria->modelo = "MC";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 683;
		$categoria->marca_id =160;
		$categoria->modelo = "PAMPERA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 684;
		$categoria->marca_id =160;
		$categoria->modelo = "SM";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 685;
		$categoria->marca_id =160;
		$categoria->modelo = "TXT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 686;
		$categoria->marca_id =161;
		$categoria->modelo = "JL";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 687;
		$categoria->marca_id =162;
		$categoria->modelo = "BEVERLY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 688;
		$categoria->marca_id =162;
		$categoria->modelo = "COUGAR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 689;
		$categoria->marca_id =162;
		$categoria->modelo = "DNA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 690;
		$categoria->marca_id =162;
		$categoria->modelo = "EAGLET";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 691;
		$categoria->marca_id =162;
		$categoria->modelo = "EASY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 692;
		$categoria->marca_id =162;
		$categoria->modelo = "ICE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 693;
		$categoria->marca_id =162;
		$categoria->modelo = "NEXUS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 694;
		$categoria->marca_id =162;
		$categoria->modelo = "RUNNER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 695;
		$categoria->marca_id =162;
		$categoria->modelo = "TYPHOON";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 696;
		$categoria->marca_id =163;
		$categoria->modelo = "GJ";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 697;
		$categoria->marca_id =164;
		$categoria->modelo = "BREVA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 698;
		$categoria->marca_id =164;
		$categoria->modelo = "GRISO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 699;
		$categoria->marca_id =164;
		$categoria->modelo = "NORGE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 700;
		$categoria->marca_id =164;
		$categoria->modelo = "STELVIO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 701;
		$categoria->marca_id =164;
		$categoria->modelo = "V7";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 702;
		$categoria->marca_id =165;
		$categoria->modelo = "HJ";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 703;
		$categoria->marca_id =166;
		$categoria->modelo = "HJ";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 704;
		$categoria->marca_id =167;
		$categoria->modelo = "HT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 705;
		$categoria->marca_id =168;
		$categoria->modelo = "BAD BOY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 706;
		$categoria->marca_id =168;
		$categoria->modelo = "CLASSIC";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 707;
		$categoria->marca_id =168;
		$categoria->modelo = "DYNA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 708;
		$categoria->marca_id =168;
		$categoria->modelo = "FAT BOY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 709;
		$categoria->marca_id =168;
		$categoria->modelo = "HERITAGE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 710;
		$categoria->marca_id =168;
		$categoria->modelo = "NIGHT TRAIN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 711;
		$categoria->marca_id =168;
		$categoria->modelo = "ROAD";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 712;
		$categoria->marca_id =168;
		$categoria->modelo = "SOFTAIL";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 713;
		$categoria->marca_id =168;
		$categoria->modelo = "SPORTSTER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 714;
		$categoria->marca_id =168;
		$categoria->modelo = "SPRINGER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 715;
		$categoria->marca_id =168;
		$categoria->modelo = "STANDAR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 716;
		$categoria->marca_id =168;
		$categoria->modelo = "SUPER GLIDE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 717;
		$categoria->marca_id =168;
		$categoria->modelo = "TOUR GLIDE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 718;
		$categoria->marca_id =168;
		$categoria->modelo = "TOURING";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 719;
		$categoria->marca_id =168;
		$categoria->modelo = "ULTRA GLIDE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 720;
		$categoria->marca_id =168;
		$categoria->modelo = "VRSC";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 721;
		$categoria->marca_id =169;
		$categoria->modelo = "AERO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 722;
		$categoria->marca_id =169;
		$categoria->modelo = "BCV";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 723;
		$categoria->marca_id =169;
		$categoria->modelo = "C";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 724;
		$categoria->marca_id =169;
		$categoria->modelo = "C100";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 725;
		$categoria->marca_id =169;
		$categoria->modelo = "CB";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 726;
		$categoria->marca_id =169;
		$categoria->modelo = "CBR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 727;
		$categoria->marca_id =169;
		$categoria->modelo = "CBX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 728;
		$categoria->marca_id =169;
		$categoria->modelo = "CD";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 729;
		$categoria->marca_id =169;
		$categoria->modelo = "CG";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 730;
		$categoria->marca_id =169;
		$categoria->modelo = "CH";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 731;
		$categoria->marca_id =169;
		$categoria->modelo = "CHA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 732;
		$categoria->marca_id =169;
		$categoria->modelo = "CHF";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 733;
		$categoria->marca_id =169;
		$categoria->modelo = "CMX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 734;
		$categoria->marca_id =169;
		$categoria->modelo = "CN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 735;
		$categoria->marca_id =169;
		$categoria->modelo = "CR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 736;
		$categoria->marca_id =169;
		$categoria->modelo = "CRF";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 737;
		$categoria->marca_id =169;
		$categoria->modelo = "CT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 738;
		$categoria->marca_id =169;
		$categoria->modelo = "CVX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 739;
		$categoria->marca_id =169;
		$categoria->modelo = "ELITE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 740;
		$categoria->marca_id =169;
		$categoria->modelo = "FES";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 741;
		$categoria->marca_id =169;
		$categoria->modelo = "FJS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 742;
		$categoria->marca_id =169;
		$categoria->modelo = "FMX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 743;
		$categoria->marca_id =169;
		$categoria->modelo = "FORESIGHT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 744;
		$categoria->marca_id =169;
		$categoria->modelo = "FORZA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 745;
		$categoria->marca_id =169;
		$categoria->modelo = "GL";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 746;
		$categoria->marca_id =169;
		$categoria->modelo = "GYRO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 747;
		$categoria->marca_id =169;
		$categoria->modelo = "H";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 748;
		$categoria->marca_id =169;
		$categoria->modelo = "HELIX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 749;
		$categoria->marca_id =169;
		$categoria->modelo = "HX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 750;
		$categoria->marca_id =169;
		$categoria->modelo = "LEAD";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 751;
		$categoria->marca_id =169;
		$categoria->modelo = "MARVEL";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 752;
		$categoria->marca_id =169;
		$categoria->modelo = "NH";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 753;
		$categoria->marca_id =169;
		$categoria->modelo = "NHA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 754;
		$categoria->marca_id =169;
		$categoria->modelo = "NRX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 755;
		$categoria->marca_id =169;
		$categoria->modelo = "NSS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 756;
		$categoria->marca_id =169;
		$categoria->modelo = "NT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 757;
		$categoria->marca_id =169;
		$categoria->modelo = "NV";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 758;
		$categoria->marca_id =169;
		$categoria->modelo = "NX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 759;
		$categoria->marca_id =169;
		$categoria->modelo = "NXR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 760;
		$categoria->marca_id =169;
		$categoria->modelo = "OR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 761;
		$categoria->marca_id =169;
		$categoria->modelo = "PC";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 762;
		$categoria->marca_id =169;
		$categoria->modelo = "QR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 763;
		$categoria->marca_id =169;
		$categoria->modelo = "RC";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 764;
		$categoria->marca_id =169;
		$categoria->modelo = "RS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 765;
		$categoria->marca_id =169;
		$categoria->modelo = "SC";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 766;
		$categoria->marca_id =169;
		$categoria->modelo = "SDH";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 767;
		$categoria->marca_id =169;
		$categoria->modelo = "SK";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 768;
		$categoria->marca_id =169;
		$categoria->modelo = "SRX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 769;
		$categoria->marca_id =169;
		$categoria->modelo = "ST";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 770;
		$categoria->marca_id =169;
		$categoria->modelo = "TRX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 771;
		$categoria->marca_id =169;
		$categoria->modelo = "VF";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 772;
		$categoria->marca_id =169;
		$categoria->modelo = "VFR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 773;
		$categoria->marca_id =169;
		$categoria->modelo = "VT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 774;
		$categoria->marca_id =169;
		$categoria->modelo = "VTR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 775;
		$categoria->marca_id =169;
		$categoria->modelo = "VTX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 776;
		$categoria->marca_id =169;
		$categoria->modelo = "XL";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 777;
		$categoria->marca_id =169;
		$categoria->modelo = "XLR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 778;
		$categoria->marca_id =169;
		$categoria->modelo = "XR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 779;
		$categoria->marca_id =169;
		$categoria->modelo = "XRV";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 780;
		$categoria->marca_id =169;
		$categoria->modelo = "Z";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 781;
		$categoria->marca_id =170;
		$categoria->modelo = "FORZA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 782;
		$categoria->marca_id =170;
		$categoria->modelo = "HY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 783;
		$categoria->marca_id =171;
		$categoria->modelo = "CR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 784;
		$categoria->marca_id =171;
		$categoria->modelo = "HUSKY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 785;
		$categoria->marca_id =171;
		$categoria->modelo = "SM";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 786;
		$categoria->marca_id =171;
		$categoria->modelo = "TC";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 787;
		$categoria->marca_id =171;
		$categoria->modelo = "TE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 788;
		$categoria->marca_id =171;
		$categoria->modelo = "WR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 789;
		$categoria->marca_id =172;
		$categoria->modelo = "GT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 790;
		$categoria->marca_id =172;
		$categoria->modelo = "GV";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 791;
		$categoria->marca_id =173;
		$categoria->modelo = "DRAGSTER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 792;
		$categoria->marca_id =173;
		$categoria->modelo = "FORMULA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 793;
		$categoria->marca_id =173;
		$categoria->modelo = "TORPEDO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 794;
		$categoria->marca_id =173;
		$categoria->modelo = "VELOCIFERO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 795;
		$categoria->marca_id =174;
		$categoria->modelo = "CHOPPER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 796;
		$categoria->marca_id =174;
		$categoria->modelo = "JW";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 797;
		$categoria->marca_id =174;
		$categoria->modelo = "STYLE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 798;
		$categoria->marca_id =174;
		$categoria->modelo = "TWIN SPORT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 799;
		$categoria->marca_id =175;
		$categoria->modelo = "JH";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 800;
		$categoria->marca_id =175;
		$categoria->modelo = "JL";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 801;
		$categoria->marca_id =175;
		$categoria->modelo = "TX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 802;
		$categoria->marca_id =176;
		$categoria->modelo = "JS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 803;
		$categoria->marca_id =177;
		$categoria->modelo = "JD";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 804;
		$categoria->marca_id =177;
		$categoria->modelo = "JD 50QT4";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 805;
		$categoria->marca_id =177;
		$categoria->modelo = "JD125T-8";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 806;
		$categoria->marca_id =177;
		$categoria->modelo = "JD150GY-2";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 807;
		$categoria->marca_id =177;
		$categoria->modelo = "JD250-2";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 808;
		$categoria->marca_id =178;
		$categoria->modelo = "JC";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 809;
		$categoria->marca_id =178;
		$categoria->modelo = "JH";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 810;
		$categoria->marca_id =179;
		$categoria->modelo = "CG";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 811;
		$categoria->marca_id =179;
		$categoria->modelo = "DB";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 812;
		$categoria->marca_id =179;
		$categoria->modelo = "JL";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 813;
		$categoria->marca_id =180;
		$categoria->modelo = "YY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 814;
		$categoria->marca_id =181;
		$categoria->modelo = "CD";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 815;
		$categoria->marca_id =181;
		$categoria->modelo = "CG";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 816;
		$categoria->marca_id =181;
		$categoria->modelo = "JH";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 817;
		$categoria->marca_id =182;
		$categoria->modelo = "CONCOURS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 818;
		$categoria->marca_id =182;
		$categoria->modelo = "EL";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 819;
		$categoria->marca_id =182;
		$categoria->modelo = "ELIMINATOR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 820;
		$categoria->marca_id =182;
		$categoria->modelo = "EN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 821;
		$categoria->marca_id =182;
		$categoria->modelo = "ER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 822;
		$categoria->marca_id =182;
		$categoria->modelo = "KB";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 823;
		$categoria->marca_id =182;
		$categoria->modelo = "KDX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 824;
		$categoria->marca_id =182;
		$categoria->modelo = "KE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 825;
		$categoria->marca_id =182;
		$categoria->modelo = "KFX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 826;
		$categoria->marca_id =182;
		$categoria->modelo = "KLE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 827;
		$categoria->marca_id =182;
		$categoria->modelo = "KLF";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 828;
		$categoria->marca_id =182;
		$categoria->modelo = "KLR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 829;
		$categoria->marca_id =182;
		$categoria->modelo = "KLX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 830;
		$categoria->marca_id =182;
		$categoria->modelo = "KR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 831;
		$categoria->marca_id =182;
		$categoria->modelo = "KX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 832;
		$categoria->marca_id =182;
		$categoria->modelo = "KZ";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 833;
		$categoria->marca_id =182;
		$categoria->modelo = "NINJA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 834;
		$categoria->marca_id =182;
		$categoria->modelo = "VOYAGER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 835;
		$categoria->marca_id =182;
		$categoria->modelo = "VULCAN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 836;
		$categoria->marca_id =182;
		$categoria->modelo = "Z";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 837;
		$categoria->marca_id =182;
		$categoria->modelo = "ZG";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 838;
		$categoria->marca_id =182;
		$categoria->modelo = "ZRX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 839;
		$categoria->marca_id =182;
		$categoria->modelo = "ZZR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 840;
		$categoria->marca_id =183;
		$categoria->modelo = "ARSEN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 841;
		$categoria->marca_id =183;
		$categoria->modelo = "CRUISER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 842;
		$categoria->marca_id =183;
		$categoria->modelo = "F";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 843;
		$categoria->marca_id =183;
		$categoria->modelo = "HORSE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 844;
		$categoria->marca_id =183;
		$categoria->modelo = "MATRIX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 845;
		$categoria->marca_id =183;
		$categoria->modelo = "OUTLOOK";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 846;
		$categoria->marca_id =183;
		$categoria->modelo = "OWEN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 847;
		$categoria->marca_id =183;
		$categoria->modelo = "RK";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 848;
		$categoria->marca_id =183;
		$categoria->modelo = "RKV";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 849;
		$categoria->marca_id =183;
		$categoria->modelo = "SPEED";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 850;
		$categoria->marca_id =183;
		$categoria->modelo = "SUPERLIGHT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 851;
		$categoria->marca_id =183;
		$categoria->modelo = "SUPERSHADOW";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 852;
		$categoria->marca_id =183;
		$categoria->modelo = "TX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 853;
		$categoria->marca_id =184;
		$categoria->modelo = "XT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 854;
		$categoria->marca_id =185;
		$categoria->modelo = "ADVENTURE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 855;
		$categoria->marca_id =185;
		$categoria->modelo = "EXC";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 856;
		$categoria->marca_id =185;
		$categoria->modelo = "RC";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 857;
		$categoria->marca_id =185;
		$categoria->modelo = "SMC";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 858;
		$categoria->marca_id =185;
		$categoria->modelo = "SMR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 859;
		$categoria->marca_id =185;
		$categoria->modelo = "SUPERDUKE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 860;
		$categoria->marca_id =185;
		$categoria->modelo = "SUPERMOTO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 861;
		$categoria->marca_id =185;
		$categoria->modelo = "SX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 862;
		$categoria->marca_id =185;
		$categoria->modelo = "XC";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 863;
		$categoria->marca_id =185;
		$categoria->modelo = "XCF";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 864;
		$categoria->marca_id =185;
		$categoria->modelo = "XCR-W";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 865;
		$categoria->marca_id =186;
		$categoria->modelo = "XF";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 866;
		$categoria->marca_id =187;
		$categoria->modelo = "ACTIV";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 867;
		$categoria->marca_id =187;
		$categoria->modelo = "BET & WIN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 868;
		$categoria->marca_id =187;
		$categoria->modelo = "GRAND DRINK";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 869;
		$categoria->marca_id =187;
		$categoria->modelo = "VENOX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 870;
		$categoria->marca_id =187;
		$categoria->modelo = "XCITING";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 871;
		$categoria->marca_id =188;
		$categoria->modelo = "AX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 872;
		$categoria->marca_id =188;
		$categoria->modelo = "KY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 873;
		$categoria->marca_id =188;
		$categoria->modelo = "MX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 874;
		$categoria->marca_id =188;
		$categoria->modelo = "YY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 875;
		$categoria->marca_id =189;
		$categoria->modelo = "750";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 876;
		$categoria->marca_id =190;
		$categoria->modelo = "LF";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 877;
		$categoria->marca_id =191;
		$categoria->modelo = "DF";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 878;
		$categoria->marca_id =191;
		$categoria->modelo = "LY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 879;
		$categoria->marca_id =192;
		$categoria->modelo = "LH";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 880;
		$categoria->marca_id =193;
		$categoria->modelo = "VESPA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 881;
		$categoria->marca_id =194;
		$categoria->modelo = "COMANCHE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 882;
		$categoria->marca_id =194;
		$categoria->modelo = "EAGLE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 883;
		$categoria->marca_id =194;
		$categoria->modelo = "JL";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 884;
		$categoria->marca_id =195;
		$categoria->modelo = "F";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 885;
		$categoria->marca_id =195;
		$categoria->modelo = "MADISON";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 886;
		$categoria->marca_id =196;
		$categoria->modelo = "C";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 887;
		$categoria->marca_id =197;
		$categoria->modelo = "BRUTALE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 888;
		$categoria->marca_id =197;
		$categoria->modelo = "F4";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 889;
		$categoria->marca_id =198;
		$categoria->modelo = "NF";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 890;
		$categoria->marca_id =199;
		$categoria->modelo = "ELEGANCE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 891;
		$categoria->marca_id =199;
		$categoria->modelo = "NR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 892;
		$categoria->marca_id =200;
		$categoria->modelo = "ELYSEO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 893;
		$categoria->marca_id =200;
		$categoria->modelo = "FOX MEX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 894;
		$categoria->marca_id =200;
		$categoria->modelo = "SPEEDFIGHT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 895;
		$categoria->marca_id =200;
		$categoria->modelo = "TREKKER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 896;
		$categoria->marca_id =200;
		$categoria->modelo = "VIVACITY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 897;
		$categoria->marca_id =201;
		$categoria->modelo = "BIG MAX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 898;
		$categoria->marca_id =201;
		$categoria->modelo = "CHARGE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 899;
		$categoria->marca_id =201;
		$categoria->modelo = "PMX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 900;
		$categoria->marca_id =201;
		$categoria->modelo = "T REX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 901;
		$categoria->marca_id =201;
		$categoria->modelo = "TORNADO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 902;
		$categoria->marca_id =201;
		$categoria->modelo = "XR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 903;
		$categoria->marca_id =202;
		$categoria->modelo = "ADIVA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 904;
		$categoria->marca_id =202;
		$categoria->modelo = "APE TM";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 905;
		$categoria->marca_id =202;
		$categoria->modelo = "BEVERLY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 906;
		$categoria->marca_id =202;
		$categoria->modelo = "COUGAR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 907;
		$categoria->marca_id =202;
		$categoria->modelo = "DIESIS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 908;
		$categoria->marca_id =202;
		$categoria->modelo = "DNA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 909;
		$categoria->marca_id =202;
		$categoria->modelo = "HEXAGON";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 910;
		$categoria->marca_id =202;
		$categoria->modelo = "LIBERTY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 911;
		$categoria->marca_id =202;
		$categoria->modelo = "MP3";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 912;
		$categoria->marca_id =202;
		$categoria->modelo = "NRG";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 913;
		$categoria->marca_id =202;
		$categoria->modelo = "PUCH";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 914;
		$categoria->marca_id =202;
		$categoria->modelo = "PX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 915;
		$categoria->marca_id =202;
		$categoria->modelo = "RUNNER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 916;
		$categoria->marca_id =202;
		$categoria->modelo = "SFERA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 917;
		$categoria->marca_id =202;
		$categoria->modelo = "SKIPPER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 918;
		$categoria->marca_id =202;
		$categoria->modelo = "STALKER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 919;
		$categoria->marca_id =202;
		$categoria->modelo = "SUPER HEXAGON";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 920;
		$categoria->marca_id =202;
		$categoria->modelo = "TYPHOON";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 921;
		$categoria->marca_id =202;
		$categoria->modelo = "VESPA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 922;
		$categoria->marca_id =202;
		$categoria->modelo = "WINNER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 923;
		$categoria->marca_id =202;
		$categoria->modelo = "X9";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 924;
		$categoria->marca_id =202;
		$categoria->modelo = "ZIP";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 925;
		$categoria->marca_id =203;
		$categoria->modelo = "XF";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 926;
		$categoria->marca_id =204;
		$categoria->modelo = "SPORTMAN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 927;
		$categoria->marca_id =205;
		$categoria->modelo = "QM";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 928;
		$categoria->marca_id =205;
		$categoria->modelo = "QS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 929;
		$categoria->marca_id =206;
		$categoria->modelo = "BISIA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 930;
		$categoria->marca_id =206;
		$categoria->modelo = "BOXER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 931;
		$categoria->marca_id =206;
		$categoria->modelo = "BX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 932;
		$categoria->marca_id =206;
		$categoria->modelo = "PEGASUS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 933;
		$categoria->marca_id =206;
		$categoria->modelo = "R10";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 934;
		$categoria->marca_id =206;
		$categoria->modelo = "R15";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 935;
		$categoria->marca_id =206;
		$categoria->modelo = "SRX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 936;
		$categoria->marca_id =207;
		$categoria->modelo = "BUXA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 937;
		$categoria->marca_id =207;
		$categoria->modelo = "CARRERA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 938;
		$categoria->marca_id =207;
		$categoria->modelo = "FORTALEZA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 939;
		$categoria->marca_id =207;
		$categoria->modelo = "INOX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 940;
		$categoria->marca_id =207;
		$categoria->modelo = "RFX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 941;
		$categoria->marca_id =207;
		$categoria->modelo = "SPORT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 942;
		$categoria->marca_id =208;
		$categoria->modelo = "SK";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 943;
		$categoria->marca_id =209;
		$categoria->modelo = "BANDIT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 944;
		$categoria->marca_id =209;
		$categoria->modelo = "NINJA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 945;
		$categoria->marca_id =209;
		$categoria->modelo = "T-REX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 946;
		$categoria->marca_id =209;
		$categoria->modelo = "TIGER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 947;
		$categoria->marca_id =209;
		$categoria->modelo = "XY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 948;
		$categoria->marca_id =210;
		$categoria->modelo = "AX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 949;
		$categoria->marca_id =210;
		$categoria->modelo = "SG";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 950;
		$categoria->marca_id =211;
		$categoria->modelo = "SL 150";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 951;
		$categoria->marca_id =212;
		$categoria->modelo = "BR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 952;
		$categoria->marca_id =212;
		$categoria->modelo = "SK";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 953;
		$categoria->marca_id =213;
		$categoria->modelo = "ATV";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 954;
		$categoria->marca_id =213;
		$categoria->modelo = "AX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 955;
		$categoria->marca_id =213;
		$categoria->modelo = "BIRAGO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 956;
		$categoria->marca_id =213;
		$categoria->modelo = "CG";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 957;
		$categoria->marca_id =213;
		$categoria->modelo = "INTRUDER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 958;
		$categoria->marca_id =213;
		$categoria->modelo = "SB";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 959;
		$categoria->marca_id =213;
		$categoria->modelo = "SBR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 960;
		$categoria->marca_id =213;
		$categoria->modelo = "SG";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 961;
		$categoria->marca_id =213;
		$categoria->modelo = "SL";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 962;
		$categoria->marca_id =213;
		$categoria->modelo = "STUD";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 963;
		$categoria->marca_id =214;
		$categoria->modelo = "ECLIPSE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 964;
		$categoria->marca_id =215;
		$categoria->modelo = "ADDRESS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 965;
		$categoria->marca_id =215;
		$categoria->modelo = "AN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 966;
		$categoria->marca_id =215;
		$categoria->modelo = "AX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 967;
		$categoria->marca_id =215;
		$categoria->modelo = "BEST";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 968;
		$categoria->marca_id =215;
		$categoria->modelo = "BOULEVARD";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 969;
		$categoria->marca_id =215;
		$categoria->modelo = "BURGMAN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 970;
		$categoria->marca_id =215;
		$categoria->modelo = "DF";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 971;
		$categoria->marca_id =215;
		$categoria->modelo = "DL";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 972;
		$categoria->marca_id =215;
		$categoria->modelo = "DR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 973;
		$categoria->marca_id =215;
		$categoria->modelo = "DS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 974;
		$categoria->marca_id =215;
		$categoria->modelo = "EN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 975;
		$categoria->marca_id =215;
		$categoria->modelo = "FA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 976;
		$categoria->marca_id =215;
		$categoria->modelo = "FR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 977;
		$categoria->marca_id =215;
		$categoria->modelo = "GN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 978;
		$categoria->marca_id =215;
		$categoria->modelo = "GS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 979;
		$categoria->marca_id =215;
		$categoria->modelo = "GSF";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 980;
		$categoria->marca_id =215;
		$categoria->modelo = "GSR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 981;
		$categoria->marca_id =215;
		$categoria->modelo = "GSX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 982;
		$categoria->marca_id =215;
		$categoria->modelo = "GT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 983;
		$categoria->marca_id =215;
		$categoria->modelo = "GZ";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 984;
		$categoria->marca_id =215;
		$categoria->modelo = "INTRUDER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 985;
		$categoria->marca_id =215;
		$categoria->modelo = "JR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 986;
		$categoria->marca_id =215;
		$categoria->modelo = "LT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 987;
		$categoria->marca_id =215;
		$categoria->modelo = "MARAUDER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 988;
		$categoria->marca_id =215;
		$categoria->modelo = "RF";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 989;
		$categoria->marca_id =215;
		$categoria->modelo = "RM";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 990;
		$categoria->marca_id =215;
		$categoria->modelo = "RMX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 991;
		$categoria->marca_id =215;
		$categoria->modelo = "SAVAGE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 992;
		$categoria->marca_id =215;
		$categoria->modelo = "SB";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 993;
		$categoria->marca_id =215;
		$categoria->modelo = "SKY WAVE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 994;
		$categoria->marca_id =215;
		$categoria->modelo = "SP";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 995;
		$categoria->marca_id =215;
		$categoria->modelo = "SV";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 996;
		$categoria->marca_id =215;
		$categoria->modelo = "TF";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 997;
		$categoria->marca_id =215;
		$categoria->modelo = "TL";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 998;
		$categoria->marca_id =215;
		$categoria->modelo = "TR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 999;
		$categoria->marca_id =215;
		$categoria->modelo = "TS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1000;
		$categoria->marca_id =215;
		$categoria->modelo = "UY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1001;
		$categoria->marca_id =215;
		$categoria->modelo = "VIVAX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1002;
		$categoria->marca_id =215;
		$categoria->modelo = "XF";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1003;
		$categoria->marca_id =216;
		$categoria->modelo = "JET";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1004;
		$categoria->marca_id =216;
		$categoria->modelo = "JOYRIDE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1005;
		$categoria->marca_id =217;
		$categoria->modelo = "ADVENTURER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1006;
		$categoria->marca_id =217;
		$categoria->modelo = "BABY SPEED";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1007;
		$categoria->marca_id =217;
		$categoria->modelo = "BONNEVILLE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1008;
		$categoria->marca_id =217;
		$categoria->modelo = "DAYTONA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1009;
		$categoria->marca_id =217;
		$categoria->modelo = "ROCKET";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1010;
		$categoria->marca_id =217;
		$categoria->modelo = "SCRAMBLER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1011;
		$categoria->marca_id =217;
		$categoria->modelo = "SPEED TRIPLE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1012;
		$categoria->marca_id =217;
		$categoria->modelo = "SPEEDMASTER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1013;
		$categoria->marca_id =217;
		$categoria->modelo = "SPRINT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1014;
		$categoria->marca_id =217;
		$categoria->modelo = "STREET TRIPLE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1015;
		$categoria->marca_id =217;
		$categoria->modelo = "THUNDERBIRD";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1016;
		$categoria->marca_id =217;
		$categoria->modelo = "TIGER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1017;
		$categoria->marca_id =217;
		$categoria->modelo = "TRIDENT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1018;
		$categoria->marca_id =217;
		$categoria->modelo = "TROPHY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1019;
		$categoria->marca_id =218;
		$categoria->modelo = "APACHE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1020;
		$categoria->marca_id =218;
		$categoria->modelo = "PEP";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1021;
		$categoria->marca_id =218;
		$categoria->modelo = "VICTOR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1022;
		$categoria->marca_id =219;
		$categoria->modelo = "ARTISTIC";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1023;
		$categoria->marca_id =219;
		$categoria->modelo = "BANDIT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1024;
		$categoria->marca_id =219;
		$categoria->modelo = "BIG STORM";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1025;
		$categoria->marca_id =219;
		$categoria->modelo = "DUNAS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1026;
		$categoria->marca_id =219;
		$categoria->modelo = "FORMULA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1027;
		$categoria->marca_id =219;
		$categoria->modelo = "FORZA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1028;
		$categoria->marca_id =219;
		$categoria->modelo = "JAGUAR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1029;
		$categoria->marca_id =219;
		$categoria->modelo = "MATRIX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1030;
		$categoria->marca_id =219;
		$categoria->modelo = "NEW JAGUAR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1031;
		$categoria->marca_id =219;
		$categoria->modelo = "NEW LYON";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1032;
		$categoria->marca_id =219;
		$categoria->modelo = "NINJA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1033;
		$categoria->marca_id =219;
		$categoria->modelo = "RALLY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1034;
		$categoria->marca_id =219;
		$categoria->modelo = "RAPTOR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1035;
		$categoria->marca_id =219;
		$categoria->modelo = "RUTAS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1036;
		$categoria->marca_id =219;
		$categoria->modelo = "T-REX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1037;
		$categoria->marca_id =219;
		$categoria->modelo = "THUNDER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1038;
		$categoria->marca_id =219;
		$categoria->modelo = "TIGER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1039;
		$categoria->marca_id =219;
		$categoria->modelo = "TORNADO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1040;
		$categoria->marca_id =219;
		$categoria->modelo = "TSUNAMI";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1041;
		$categoria->marca_id =219;
		$categoria->modelo = "TWISTER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1042;
		$categoria->marca_id =219;
		$categoria->modelo = "TYPHOON";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1043;
		$categoria->marca_id =219;
		$categoria->modelo = "WIND STREET";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1044;
		$categoria->marca_id =220;
		$categoria->modelo = "BWK";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1045;
		$categoria->marca_id =220;
		$categoria->modelo = "CONCEPT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1046;
		$categoria->marca_id =220;
		$categoria->modelo = "DUAL SPORT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1047;
		$categoria->marca_id =220;
		$categoria->modelo = "FASTWIND";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1048;
		$categoria->marca_id =220;
		$categoria->modelo = "GTR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1049;
		$categoria->marca_id =220;
		$categoria->modelo = "LINHAI";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1050;
		$categoria->marca_id =220;
		$categoria->modelo = "MAGNETIC";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1051;
		$categoria->marca_id =220;
		$categoria->modelo = "MAX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1052;
		$categoria->marca_id =220;
		$categoria->modelo = "MS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1053;
		$categoria->marca_id =220;
		$categoria->modelo = "NITROX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1054;
		$categoria->marca_id =220;
		$categoria->modelo = "SMF";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1055;
		$categoria->marca_id =220;
		$categoria->modelo = "V2";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1056;
		$categoria->marca_id =220;
		$categoria->modelo = "XTREET";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1057;
		$categoria->marca_id =220;
		$categoria->modelo = "ZF";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1058;
		$categoria->marca_id =221;
		$categoria->modelo = "VENSUN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1059;
		$categoria->marca_id =222;
		$categoria->modelo = "AVALANCHE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1060;
		$categoria->marca_id =222;
		$categoria->modelo = "PHANTERA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1061;
		$categoria->marca_id =222;
		$categoria->modelo = "PHANTOM";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1062;
		$categoria->marca_id =222;
		$categoria->modelo = "RHINO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1063;
		$categoria->marca_id =222;
		$categoria->modelo = "TRITON";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1064;
		$categoria->marca_id =222;
		$categoria->modelo = "V-THUNDER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1065;
		$categoria->marca_id =222;
		$categoria->modelo = "WORKMAN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1066;
		$categoria->marca_id =222;
		$categoria->modelo = "ZIP";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1067;
		$categoria->marca_id =223;
		$categoria->modelo = "VC";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1068;
		$categoria->marca_id =224;
		$categoria->modelo = "175";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1069;
		$categoria->marca_id =225;
		$categoria->modelo = "WY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1070;
		$categoria->marca_id =226;
		$categoria->modelo = "XF";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1071;
		$categoria->marca_id =227;
		$categoria->modelo = "AT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1072;
		$categoria->marca_id =227;
		$categoria->modelo = "AXIS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1073;
		$categoria->marca_id =227;
		$categoria->modelo = "BWS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1074;
		$categoria->marca_id =227;
		$categoria->modelo = "CABIN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1075;
		$categoria->marca_id =227;
		$categoria->modelo = "CHAMP";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1076;
		$categoria->marca_id =227;
		$categoria->modelo = "CP";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1077;
		$categoria->marca_id =227;
		$categoria->modelo = "CW";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1078;
		$categoria->marca_id =227;
		$categoria->modelo = "CY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1079;
		$categoria->marca_id =227;
		$categoria->modelo = "DT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1080;
		$categoria->marca_id =227;
		$categoria->modelo = "DX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1081;
		$categoria->marca_id =227;
		$categoria->modelo = "FJR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1082;
		$categoria->marca_id =227;
		$categoria->modelo = "FZ";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1083;
		$categoria->marca_id =227;
		$categoria->modelo = "FZR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1084;
		$categoria->marca_id =227;
		$categoria->modelo = "FZX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1085;
		$categoria->marca_id =227;
		$categoria->modelo = "GRAN AXIS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1086;
		$categoria->marca_id =227;
		$categoria->modelo = "GTS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1087;
		$categoria->marca_id =227;
		$categoria->modelo = "JYM";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1088;
		$categoria->marca_id =227;
		$categoria->modelo = "LB";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1089;
		$categoria->marca_id =227;
		$categoria->modelo = "MT01";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1090;
		$categoria->marca_id =227;
		$categoria->modelo = "PERLA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1091;
		$categoria->marca_id =227;
		$categoria->modelo = "PW";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1092;
		$categoria->marca_id =227;
		$categoria->modelo = "R1";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1093;
		$categoria->marca_id =227;
		$categoria->modelo = "RD";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1094;
		$categoria->marca_id =227;
		$categoria->modelo = "ROYAL STAR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1095;
		$categoria->marca_id =227;
		$categoria->modelo = "RS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1096;
		$categoria->marca_id =227;
		$categoria->modelo = "RT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1097;
		$categoria->marca_id =227;
		$categoria->modelo = "RX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1098;
		$categoria->marca_id =227;
		$categoria->modelo = "RXS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1099;
		$categoria->marca_id =227;
		$categoria->modelo = "RZ";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1100;
		$categoria->marca_id =227;
		$categoria->modelo = "SECA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1101;
		$categoria->marca_id =227;
		$categoria->modelo = "SR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1102;
		$categoria->marca_id =227;
		$categoria->modelo = "STRATOLINER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1103;
		$categoria->marca_id =227;
		$categoria->modelo = "T";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1104;
		$categoria->marca_id =227;
		$categoria->modelo = "T-MAX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1105;
		$categoria->marca_id =227;
		$categoria->modelo = "TDM";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1106;
		$categoria->marca_id =227;
		$categoria->modelo = "TDR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1107;
		$categoria->marca_id =227;
		$categoria->modelo = "TTR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1108;
		$categoria->marca_id =227;
		$categoria->modelo = "TW";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1109;
		$categoria->marca_id =227;
		$categoria->modelo = "TZ";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1110;
		$categoria->marca_id =227;
		$categoria->modelo = "TZR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1111;
		$categoria->marca_id =227;
		$categoria->modelo = "V";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1112;
		$categoria->marca_id =227;
		$categoria->modelo = "V MAX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1113;
		$categoria->marca_id =227;
		$categoria->modelo = "WARRIOR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1114;
		$categoria->marca_id =227;
		$categoria->modelo = "WR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1115;
		$categoria->marca_id =227;
		$categoria->modelo = "XJ";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1116;
		$categoria->marca_id =227;
		$categoria->modelo = "XJN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1117;
		$categoria->marca_id =227;
		$categoria->modelo = "XJR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1118;
		$categoria->marca_id =227;
		$categoria->modelo = "XP";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1119;
		$categoria->marca_id =227;
		$categoria->modelo = "XRW";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1120;
		$categoria->marca_id =227;
		$categoria->modelo = "XT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1121;
		$categoria->marca_id =227;
		$categoria->modelo = "XTZ";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1122;
		$categoria->marca_id =227;
		$categoria->modelo = "XV";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1123;
		$categoria->marca_id =227;
		$categoria->modelo = "XVS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1124;
		$categoria->marca_id =227;
		$categoria->modelo = "XVZ";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1125;
		$categoria->marca_id =227;
		$categoria->modelo = "YB";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1126;
		$categoria->marca_id =227;
		$categoria->modelo = "YBR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1127;
		$categoria->marca_id =227;
		$categoria->modelo = "YD";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1128;
		$categoria->marca_id =227;
		$categoria->modelo = "YFA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1129;
		$categoria->marca_id =227;
		$categoria->modelo = "YFB";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1130;
		$categoria->marca_id =227;
		$categoria->modelo = "YFM";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1131;
		$categoria->marca_id =227;
		$categoria->modelo = "YFS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1132;
		$categoria->marca_id =227;
		$categoria->modelo = "YFZ";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1133;
		$categoria->marca_id =227;
		$categoria->modelo = "YP";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1134;
		$categoria->marca_id =227;
		$categoria->modelo = "YS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1135;
		$categoria->marca_id =227;
		$categoria->modelo = "YT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1136;
		$categoria->marca_id =227;
		$categoria->modelo = "YXR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1137;
		$categoria->marca_id =227;
		$categoria->modelo = "YZ";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1138;
		$categoria->marca_id =227;
		$categoria->modelo = "YZF";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1139;
		$categoria->marca_id =227;
		$categoria->modelo = "YZZ";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1140;
		$categoria->marca_id =228;
		$categoria->modelo = "RX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1141;
		$categoria->marca_id =228;
		$categoria->modelo = "VISION";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1142;
		$categoria->marca_id =229;
		$categoria->modelo = "YH";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1143;
		$categoria->marca_id =230;
		$categoria->modelo = "JAGUAR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1144;
		$categoria->marca_id =230;
		$categoria->modelo = "RX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1145;
		$categoria->marca_id =231;
		$categoria->modelo = "YB";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1146;
		$categoria->marca_id =232;
		$categoria->modelo = "BY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1147;
		$categoria->marca_id =232;
		$categoria->modelo = "YG";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1148;
		$categoria->marca_id =232;
		$categoria->modelo = "ZH";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1149;
		$categoria->marca_id =233;
		$categoria->modelo = "GT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1150;
		$categoria->marca_id =233;
		$categoria->modelo = "RP";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1151;
		$categoria->marca_id =234;
		$categoria->modelo = "ZN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1152;
		$categoria->marca_id =235;
		$categoria->modelo = "ZS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1153;
		$categoria->marca_id =236;
		$categoria->modelo = "QT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1154;
		$categoria->marca_id =236;
		$categoria->modelo = "ZX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1155;
		$categoria->marca_id =237;
		$categoria->modelo = "1.6EL";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1156;
		$categoria->marca_id =237;
		$categoria->modelo = "CL";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1157;
		$categoria->marca_id =237;
		$categoria->modelo = "INTEGRA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1158;
		$categoria->marca_id =237;
		$categoria->modelo = "LEGEND";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1159;
		$categoria->marca_id =237;
		$categoria->modelo = "NSX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1160;
		$categoria->marca_id =237;
		$categoria->modelo = "RL";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1161;
		$categoria->marca_id =237;
		$categoria->modelo = "RSX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1162;
		$categoria->marca_id =237;
		$categoria->modelo = "TL";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1163;
		$categoria->marca_id =237;
		$categoria->modelo = "TSX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1164;
		$categoria->marca_id =237;
		$categoria->modelo = "VIGOR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1165;
		$categoria->marca_id =238;
		$categoria->modelo = "145";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1166;
		$categoria->marca_id =238;
		$categoria->modelo = "146";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1167;
		$categoria->marca_id =238;
		$categoria->modelo = "147";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1168;
		$categoria->marca_id =238;
		$categoria->modelo = "155";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1169;
		$categoria->marca_id =238;
		$categoria->modelo = "156";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1170;
		$categoria->marca_id =238;
		$categoria->modelo = "159";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1171;
		$categoria->marca_id =238;
		$categoria->modelo = "164";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1172;
		$categoria->marca_id =238;
		$categoria->modelo = "166";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1173;
		$categoria->marca_id =238;
		$categoria->modelo = "33";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1174;
		$categoria->marca_id =238;
		$categoria->modelo = "ALFETTA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1175;
		$categoria->marca_id =238;
		$categoria->modelo = "BRERA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1176;
		$categoria->marca_id =238;
		$categoria->modelo = "GTV";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1177;
		$categoria->marca_id =238;
		$categoria->modelo = "RZ";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1178;
		$categoria->marca_id =238;
		$categoria->modelo = "SPIDER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1179;
		$categoria->marca_id =238;
		$categoria->modelo = "SZ";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1180;
		$categoria->marca_id =239;
		$categoria->modelo = "HORNET";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1181;
		$categoria->marca_id =239;
		$categoria->modelo = "JAVELIN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1182;
		$categoria->marca_id =240;
		$categoria->modelo = "TOWNER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1183;
		$categoria->marca_id =241;
		$categoria->modelo = "DB7";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1184;
		$categoria->marca_id =241;
		$categoria->modelo = "DB9";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1185;
		$categoria->marca_id =241;
		$categoria->modelo = "DBS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1186;
		$categoria->marca_id =241;
		$categoria->modelo = "LAGONDA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1187;
		$categoria->marca_id =241;
		$categoria->modelo = "VANTAGE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1188;
		$categoria->marca_id =241;
		$categoria->modelo = "VIRAGE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1189;
		$categoria->marca_id =242;
		$categoria->modelo = "100";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1190;
		$categoria->marca_id =242;
		$categoria->modelo = "200";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1191;
		$categoria->marca_id =242;
		$categoria->modelo = "4000";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1192;
		$categoria->marca_id =242;
		$categoria->modelo = "80";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1193;
		$categoria->marca_id =242;
		$categoria->modelo = "90";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1194;
		$categoria->marca_id =242;
		$categoria->modelo = "A2";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1195;
		$categoria->marca_id =242;
		$categoria->modelo = "A3";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1196;
		$categoria->marca_id =242;
		$categoria->modelo = "A4";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1197;
		$categoria->marca_id =242;
		$categoria->modelo = "A5";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1198;
		$categoria->marca_id =242;
		$categoria->modelo = "A6";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1199;
		$categoria->marca_id =242;
		$categoria->modelo = "A7";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1200;
		$categoria->marca_id =242;
		$categoria->modelo = "A8";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1201;
		$categoria->marca_id =242;
		$categoria->modelo = "ALLROAD";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1202;
		$categoria->marca_id =242;
		$categoria->modelo = "CABRIOLET";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1203;
		$categoria->marca_id =242;
		$categoria->modelo = "R";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1204;
		$categoria->marca_id =242;
		$categoria->modelo = "RS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1205;
		$categoria->marca_id =242;
		$categoria->modelo = "S3";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1206;
		$categoria->marca_id =242;
		$categoria->modelo = "S4";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1207;
		$categoria->marca_id =242;
		$categoria->modelo = "S5";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1208;
		$categoria->marca_id =242;
		$categoria->modelo = "S6";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1209;
		$categoria->marca_id =242;
		$categoria->modelo = "S8";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1210;
		$categoria->marca_id =242;
		$categoria->modelo = "TT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1211;
		$categoria->marca_id =242;
		$categoria->modelo = "TTS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1212;
		$categoria->marca_id =242;
		$categoria->modelo = "V8";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1213;
		$categoria->marca_id =243;
		$categoria->modelo = "ARNAGE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1214;
		$categoria->marca_id =243;
		$categoria->modelo = "AZURE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1215;
		$categoria->marca_id =243;
		$categoria->modelo = "BROOKLANDS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1216;
		$categoria->marca_id =243;
		$categoria->modelo = "CONTINENTAL";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1217;
		$categoria->marca_id =243;
		$categoria->modelo = "EIGHT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1218;
		$categoria->marca_id =243;
		$categoria->modelo = "MULSANNE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1219;
		$categoria->marca_id =243;
		$categoria->modelo = "R";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1220;
		$categoria->marca_id =243;
		$categoria->modelo = "RT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1221;
		$categoria->marca_id =244;
		$categoria->modelo = "116";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1222;
		$categoria->marca_id =244;
		$categoria->modelo = "120";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1223;
		$categoria->marca_id =244;
		$categoria->modelo = "128";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1224;
		$categoria->marca_id =244;
		$categoria->modelo = "130";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1225;
		$categoria->marca_id =244;
		$categoria->modelo = "135";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1226;
		$categoria->marca_id =244;
		$categoria->modelo = "2002";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1227;
		$categoria->marca_id =244;
		$categoria->modelo = "3.0";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1228;
		$categoria->marca_id =244;
		$categoria->modelo = "316";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1229;
		$categoria->marca_id =244;
		$categoria->modelo = "318";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1230;
		$categoria->marca_id =244;
		$categoria->modelo = "320";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1231;
		$categoria->marca_id =244;
		$categoria->modelo = "323";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1232;
		$categoria->marca_id =244;
		$categoria->modelo = "325";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1233;
		$categoria->marca_id =244;
		$categoria->modelo = "328";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1234;
		$categoria->marca_id =244;
		$categoria->modelo = "330";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1235;
		$categoria->marca_id =244;
		$categoria->modelo = "335";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1236;
		$categoria->marca_id =244;
		$categoria->modelo = "518";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1237;
		$categoria->marca_id =244;
		$categoria->modelo = "520";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1238;
		$categoria->marca_id =244;
		$categoria->modelo = "523";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1239;
		$categoria->marca_id =244;
		$categoria->modelo = "524";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1240;
		$categoria->marca_id =244;
		$categoria->modelo = "525";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1241;
		$categoria->marca_id =244;
		$categoria->modelo = "528";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1242;
		$categoria->marca_id =244;
		$categoria->modelo = "530";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1243;
		$categoria->marca_id =244;
		$categoria->modelo = "533";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1244;
		$categoria->marca_id =244;
		$categoria->modelo = "535";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1245;
		$categoria->marca_id =244;
		$categoria->modelo = "540";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1246;
		$categoria->marca_id =244;
		$categoria->modelo = "545";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1247;
		$categoria->marca_id =244;
		$categoria->modelo = "550";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1248;
		$categoria->marca_id =244;
		$categoria->modelo = "630";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1249;
		$categoria->marca_id =244;
		$categoria->modelo = "633";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1250;
		$categoria->marca_id =244;
		$categoria->modelo = "635";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1251;
		$categoria->marca_id =244;
		$categoria->modelo = "645";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1252;
		$categoria->marca_id =244;
		$categoria->modelo = "650";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1253;
		$categoria->marca_id =244;
		$categoria->modelo = "728";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1254;
		$categoria->marca_id =244;
		$categoria->modelo = "730";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1255;
		$categoria->marca_id =244;
		$categoria->modelo = "733";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1256;
		$categoria->marca_id =244;
		$categoria->modelo = "735";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1257;
		$categoria->marca_id =244;
		$categoria->modelo = "740";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1258;
		$categoria->marca_id =244;
		$categoria->modelo = "745";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1259;
		$categoria->marca_id =244;
		$categoria->modelo = "750";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1260;
		$categoria->marca_id =244;
		$categoria->modelo = "760";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1261;
		$categoria->marca_id =244;
		$categoria->modelo = "840";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1262;
		$categoria->marca_id =244;
		$categoria->modelo = "850";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1263;
		$categoria->marca_id =244;
		$categoria->modelo = "ALPINA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1264;
		$categoria->marca_id =244;
		$categoria->modelo = "L6";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1265;
		$categoria->marca_id =244;
		$categoria->modelo = "L7";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1266;
		$categoria->marca_id =244;
		$categoria->modelo = "M";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1267;
		$categoria->marca_id =244;
		$categoria->modelo = "M3";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1268;
		$categoria->marca_id =244;
		$categoria->modelo = "M5";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1269;
		$categoria->marca_id =244;
		$categoria->modelo = "M6";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1270;
		$categoria->marca_id =244;
		$categoria->modelo = "Z1";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1271;
		$categoria->marca_id =244;
		$categoria->modelo = "Z3";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1272;
		$categoria->marca_id =244;
		$categoria->modelo = "Z4";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1273;
		$categoria->marca_id =244;
		$categoria->modelo = "Z8";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1274;
		$categoria->marca_id =245;
		$categoria->modelo = "FSV";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1275;
		$categoria->marca_id =246;
		$categoria->modelo = "EB";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1276;
		$categoria->marca_id =246;
		$categoria->modelo = "EB112";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1277;
		$categoria->marca_id =246;
		$categoria->modelo = "VEYRON";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1278;
		$categoria->marca_id =247;
		$categoria->modelo = "CENTURY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1279;
		$categoria->marca_id =247;
		$categoria->modelo = "ELECTRA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1280;
		$categoria->marca_id =247;
		$categoria->modelo = "LACROSSE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1281;
		$categoria->marca_id =247;
		$categoria->modelo = "LE SABRE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1282;
		$categoria->marca_id =247;
		$categoria->modelo = "LUCERNE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1283;
		$categoria->marca_id =247;
		$categoria->modelo = "PARK AVENUE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1284;
		$categoria->marca_id =247;
		$categoria->modelo = "REGAL";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1285;
		$categoria->marca_id =247;
		$categoria->modelo = "RIVIERA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1286;
		$categoria->marca_id =247;
		$categoria->modelo = "ROADMASTER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1287;
		$categoria->marca_id =247;
		$categoria->modelo = "SKYHAWK";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1288;
		$categoria->marca_id =247;
		$categoria->modelo = "SKYLARK";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1289;
		$categoria->marca_id =247;
		$categoria->modelo = "TERRAZA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1290;
		$categoria->marca_id =248;
		$categoria->modelo = "F3";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1291;
		$categoria->marca_id =248;
		$categoria->modelo = "FLYER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1292;
		$categoria->marca_id =249;
		$categoria->modelo = "ALLANTE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1293;
		$categoria->marca_id =249;
		$categoria->modelo = "BROUGHAM";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1294;
		$categoria->marca_id =249;
		$categoria->modelo = "CATERA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1295;
		$categoria->marca_id =249;
		$categoria->modelo = "CTS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1296;
		$categoria->marca_id =249;
		$categoria->modelo = "DEVILLE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1297;
		$categoria->marca_id =249;
		$categoria->modelo = "DTS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1298;
		$categoria->marca_id =249;
		$categoria->modelo = "ELDORADO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1299;
		$categoria->marca_id =249;
		$categoria->modelo = "FLEETWOOD";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1300;
		$categoria->marca_id =249;
		$categoria->modelo = "SEVILLE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1301;
		$categoria->marca_id =249;
		$categoria->modelo = "STS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1302;
		$categoria->marca_id =249;
		$categoria->modelo = "STS-V";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1303;
		$categoria->marca_id =249;
		$categoria->modelo = "XLR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1304;
		$categoria->marca_id =249;
		$categoria->modelo = "XLR-V";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1305;
		$categoria->marca_id =250;
		$categoria->modelo = "BENNI";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1306;
		$categoria->marca_id =250;
		$categoria->modelo = "SUPER VAN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1307;
		$categoria->marca_id =251;
		$categoria->modelo = "CH";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1308;
		$categoria->marca_id =251;
		$categoria->modelo = "IDEAL";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1309;
		$categoria->marca_id =252;
		$categoria->modelo = "A5";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1310;
		$categoria->marca_id =252;
		$categoria->modelo = "ARAUCA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1311;
		$categoria->marca_id =252;
		$categoria->modelo = "COWIN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1312;
		$categoria->marca_id =252;
		$categoria->modelo = "FACE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1313;
		$categoria->marca_id =252;
		$categoria->modelo = "FLAGCLOUD";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1314;
		$categoria->marca_id =252;
		$categoria->modelo = "G5";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1315;
		$categoria->marca_id =252;
		$categoria->modelo = "ORINOCO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1316;
		$categoria->marca_id =252;
		$categoria->modelo = "QQ";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1317;
		$categoria->marca_id =252;
		$categoria->modelo = "TECH";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1318;
		$categoria->marca_id =252;
		$categoria->modelo = "V5";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1319;
		$categoria->marca_id =252;
		$categoria->modelo = "WINDCLOUD";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1320;
		$categoria->marca_id =252;
		$categoria->modelo = "X1";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1321;
		$categoria->marca_id =253;
		$categoria->modelo = "ALTO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1322;
		$categoria->marca_id =253;
		$categoria->modelo = "ARGOSY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1323;
		$categoria->marca_id =253;
		$categoria->modelo = "ASTRA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1324;
		$categoria->marca_id =253;
		$categoria->modelo = "ASTRO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1325;
		$categoria->marca_id =253;
		$categoria->modelo = "AVEO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1326;
		$categoria->marca_id =253;
		$categoria->modelo = "BEL AIR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1327;
		$categoria->marca_id =253;
		$categoria->modelo = "BERETTA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1328;
		$categoria->marca_id =253;
		$categoria->modelo = "BISCAYNE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1329;
		$categoria->marca_id =253;
		$categoria->modelo = "CAMARO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1330;
		$categoria->marca_id =253;
		$categoria->modelo = "CAPRICE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1331;
		$categoria->marca_id =253;
		$categoria->modelo = "CAVALIER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1332;
		$categoria->marca_id =253;
		$categoria->modelo = "CELEBRITY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1333;
		$categoria->marca_id =253;
		$categoria->modelo = "CELTA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1334;
		$categoria->marca_id =253;
		$categoria->modelo = "CENTURY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1335;
		$categoria->marca_id =253;
		$categoria->modelo = "CHEVELLE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1336;
		$categoria->marca_id =253;
		$categoria->modelo = "CHEVETTE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1337;
		$categoria->marca_id =253;
		$categoria->modelo = "CHEVY C2";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1338;
		$categoria->marca_id =253;
		$categoria->modelo = "CHEVY NOVA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1339;
		$categoria->marca_id =253;
		$categoria->modelo = "CLASSIC";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1340;
		$categoria->marca_id =253;
		$categoria->modelo = "COBALT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1341;
		$categoria->marca_id =253;
		$categoria->modelo = "CORSA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1342;
		$categoria->marca_id =253;
		$categoria->modelo = "CORSICA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1343;
		$categoria->marca_id =253;
		$categoria->modelo = "CORVETTE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1344;
		$categoria->marca_id =253;
		$categoria->modelo = "CRUZE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1345;
		$categoria->marca_id =253;
		$categoria->modelo = "EPICA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1346;
		$categoria->marca_id =253;
		$categoria->modelo = "ESTEEM";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1347;
		$categoria->marca_id =253;
		$categoria->modelo = "EXPRESS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1348;
		$categoria->marca_id =253;
		$categoria->modelo = "HHR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1349;
		$categoria->marca_id =253;
		$categoria->modelo = "IMPALA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1350;
		$categoria->marca_id =253;
		$categoria->modelo = "KALOS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1351;
		$categoria->marca_id =253;
		$categoria->modelo = "LUMINA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1352;
		$categoria->marca_id =253;
		$categoria->modelo = "LUMINAAPV";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1353;
		$categoria->marca_id =253;
		$categoria->modelo = "MALIBU";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1354;
		$categoria->marca_id =253;
		$categoria->modelo = "MERIVA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1355;
		$categoria->marca_id =253;
		$categoria->modelo = "METRO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1356;
		$categoria->marca_id =253;
		$categoria->modelo = "MONTE CARLO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1357;
		$categoria->marca_id =253;
		$categoria->modelo = "MONZA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1358;
		$categoria->marca_id =253;
		$categoria->modelo = "OPTRA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1359;
		$categoria->marca_id =253;
		$categoria->modelo = "ORLANDO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1360;
		$categoria->marca_id =253;
		$categoria->modelo = "PRIZM";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1361;
		$categoria->marca_id =253;
		$categoria->modelo = "SAIL";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1362;
		$categoria->marca_id =253;
		$categoria->modelo = "SONIC";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1363;
		$categoria->marca_id =253;
		$categoria->modelo = "SPARK";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1364;
		$categoria->marca_id =253;
		$categoria->modelo = "SPECTRUM";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1365;
		$categoria->marca_id =253;
		$categoria->modelo = "SUNFIRE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1366;
		$categoria->marca_id =253;
		$categoria->modelo = "SUPERIOR K";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1367;
		$categoria->marca_id =253;
		$categoria->modelo = "SWIFT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1368;
		$categoria->marca_id =253;
		$categoria->modelo = "UPLANDER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1369;
		$categoria->marca_id =253;
		$categoria->modelo = "VENTURE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1370;
		$categoria->marca_id =253;
		$categoria->modelo = "VOLT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1371;
		$categoria->marca_id =253;
		$categoria->modelo = "WAGON R";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1372;
		$categoria->marca_id =254;
		$categoria->modelo = "200";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1373;
		$categoria->marca_id =254;
		$categoria->modelo = "300";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1374;
		$categoria->marca_id =254;
		$categoria->modelo = "300M";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1375;
		$categoria->marca_id =254;
		$categoria->modelo = "CIRRUS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1376;
		$categoria->marca_id =254;
		$categoria->modelo = "CONCORDE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1377;
		$categoria->marca_id =254;
		$categoria->modelo = "CROSSFIRE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1378;
		$categoria->marca_id =254;
		$categoria->modelo = "FIFTH AVENUE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1379;
		$categoria->marca_id =254;
		$categoria->modelo = "GRAND CARAVAN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1380;
		$categoria->marca_id =254;
		$categoria->modelo = "GRAND VOYAGER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1381;
		$categoria->marca_id =254;
		$categoria->modelo = "IMPERIAL";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1382;
		$categoria->marca_id =254;
		$categoria->modelo = "LE BARON";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1383;
		$categoria->marca_id =254;
		$categoria->modelo = "LHS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1384;
		$categoria->marca_id =254;
		$categoria->modelo = "NEON";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1385;
		$categoria->marca_id =254;
		$categoria->modelo = "NEW YORKER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1386;
		$categoria->marca_id =254;
		$categoria->modelo = "PACIFICA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1387;
		$categoria->marca_id =254;
		$categoria->modelo = "PT  CRUISER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1388;
		$categoria->marca_id =254;
		$categoria->modelo = "SEBRING";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1389;
		$categoria->marca_id =254;
		$categoria->modelo = "STRATUS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1390;
		$categoria->marca_id =254;
		$categoria->modelo = "TOWN&COUNTRY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1391;
		$categoria->marca_id =254;
		$categoria->modelo = "VOYAGER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1392;
		$categoria->marca_id =255;
		$categoria->modelo = "BERLINGO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1393;
		$categoria->marca_id =255;
		$categoria->modelo = "C2";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1394;
		$categoria->marca_id =255;
		$categoria->modelo = "C3";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1395;
		$categoria->marca_id =255;
		$categoria->modelo = "C4";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1396;
		$categoria->marca_id =255;
		$categoria->modelo = "C5";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1397;
		$categoria->marca_id =255;
		$categoria->modelo = "SAXO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1398;
		$categoria->marca_id =255;
		$categoria->modelo = "XANTIA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1399;
		$categoria->marca_id =255;
		$categoria->modelo = "XM";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1400;
		$categoria->marca_id =255;
		$categoria->modelo = "XSARA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1401;
		$categoria->marca_id =256;
		$categoria->modelo = "1210";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1402;
		$categoria->marca_id =256;
		$categoria->modelo = "1303";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1403;
		$categoria->marca_id =256;
		$categoria->modelo = "1410";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1404;
		$categoria->marca_id =256;
		$categoria->modelo = "524";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1405;
		$categoria->marca_id =256;
		$categoria->modelo = "BREAK";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1406;
		$categoria->marca_id =257;
		$categoria->modelo = "CHAIRMAN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1407;
		$categoria->marca_id =257;
		$categoria->modelo = "CIELO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1408;
		$categoria->marca_id =257;
		$categoria->modelo = "DAMAS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1409;
		$categoria->marca_id =257;
		$categoria->modelo = "ESPERO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1410;
		$categoria->marca_id =257;
		$categoria->modelo = "LACETTI";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1411;
		$categoria->marca_id =257;
		$categoria->modelo = "LANOS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1412;
		$categoria->marca_id =257;
		$categoria->modelo = "LEGANZA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1413;
		$categoria->marca_id =257;
		$categoria->modelo = "MATIZ";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1414;
		$categoria->marca_id =257;
		$categoria->modelo = "NUBIRA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1415;
		$categoria->marca_id =257;
		$categoria->modelo = "PRINCE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1416;
		$categoria->marca_id =257;
		$categoria->modelo = "RACER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1417;
		$categoria->marca_id =257;
		$categoria->modelo = "SUPER SALOON";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1418;
		$categoria->marca_id =257;
		$categoria->modelo = "TACUMA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1419;
		$categoria->marca_id =257;
		$categoria->modelo = "TICO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1420;
		$categoria->marca_id =258;
		$categoria->modelo = "APPLAUSE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1421;
		$categoria->marca_id =258;
		$categoria->modelo = "CHARADE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1422;
		$categoria->marca_id =258;
		$categoria->modelo = "CHARMANT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1423;
		$categoria->marca_id =258;
		$categoria->modelo = "CUORE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1424;
		$categoria->marca_id =258;
		$categoria->modelo = "GRAN MOVE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1425;
		$categoria->marca_id =258;
		$categoria->modelo = "HIJET";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1426;
		$categoria->marca_id =258;
		$categoria->modelo = "TERIOS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1427;
		$categoria->marca_id =259;
		$categoria->modelo = "DELORIAN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1428;
		$categoria->marca_id =260;
		$categoria->modelo = "ASPEN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1429;
		$categoria->marca_id =260;
		$categoria->modelo = "AVENGER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1430;
		$categoria->marca_id =260;
		$categoria->modelo = "BRISA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1431;
		$categoria->marca_id =260;
		$categoria->modelo = "CALIBER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1432;
		$categoria->marca_id =260;
		$categoria->modelo = "CARAVAN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1433;
		$categoria->marca_id =260;
		$categoria->modelo = "CHALLENGER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1434;
		$categoria->marca_id =260;
		$categoria->modelo = "CHARGER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1435;
		$categoria->marca_id =260;
		$categoria->modelo = "COLT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1436;
		$categoria->marca_id =260;
		$categoria->modelo = "CORONET";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1437;
		$categoria->marca_id =260;
		$categoria->modelo = "DART";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1438;
		$categoria->marca_id =260;
		$categoria->modelo = "DAYTONA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1439;
		$categoria->marca_id =260;
		$categoria->modelo = "DEMON";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1440;
		$categoria->marca_id =260;
		$categoria->modelo = "DIPLOMAT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1441;
		$categoria->marca_id =260;
		$categoria->modelo = "DYNASTY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1442;
		$categoria->marca_id =260;
		$categoria->modelo = "FORZA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1443;
		$categoria->marca_id =260;
		$categoria->modelo = "GRAND CARAVAN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1444;
		$categoria->marca_id =260;
		$categoria->modelo = "INTREPID";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1445;
		$categoria->marca_id =260;
		$categoria->modelo = "MAGNUM";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1446;
		$categoria->marca_id =260;
		$categoria->modelo = "MONACO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1447;
		$categoria->marca_id =260;
		$categoria->modelo = "NEON";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1448;
		$categoria->marca_id =260;
		$categoria->modelo = "RAM VAN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1449;
		$categoria->marca_id =260;
		$categoria->modelo = "SHADOW";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1450;
		$categoria->marca_id =260;
		$categoria->modelo = "SPIRIT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1451;
		$categoria->marca_id =260;
		$categoria->modelo = "STEALTH";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1452;
		$categoria->marca_id =260;
		$categoria->modelo = "STRATUS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1453;
		$categoria->marca_id =260;
		$categoria->modelo = "VIPER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1454;
		$categoria->marca_id =261;
		$categoria->modelo = "EQ";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1455;
		$categoria->marca_id =261;
		$categoria->modelo = "FENGSHEN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1456;
		$categoria->marca_id =261;
		$categoria->modelo = "S30";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1457;
		$categoria->marca_id =262;
		$categoria->modelo = "SUMMIT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1458;
		$categoria->marca_id =262;
		$categoria->modelo = "TALON";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1459;
		$categoria->marca_id =262;
		$categoria->modelo = "VISION";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1460;
		$categoria->marca_id =263;
		$categoria->modelo = "COBRA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1461;
		$categoria->marca_id =264;
		$categoria->modelo = "348";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1462;
		$categoria->marca_id =264;
		$categoria->modelo = "360";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1463;
		$categoria->marca_id =264;
		$categoria->modelo = "456";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1464;
		$categoria->marca_id =264;
		$categoria->modelo = "512";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1465;
		$categoria->marca_id =264;
		$categoria->modelo = "550";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1466;
		$categoria->marca_id =264;
		$categoria->modelo = "575M";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1467;
		$categoria->marca_id =264;
		$categoria->modelo = "599";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1468;
		$categoria->marca_id =264;
		$categoria->modelo = "612";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1469;
		$categoria->marca_id =264;
		$categoria->modelo = "CALIFORNIA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1470;
		$categoria->marca_id =264;
		$categoria->modelo = "ENZO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1471;
		$categoria->marca_id =264;
		$categoria->modelo = "F 308";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1472;
		$categoria->marca_id =264;
		$categoria->modelo = "F355";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1473;
		$categoria->marca_id =264;
		$categoria->modelo = "F365";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1474;
		$categoria->marca_id =264;
		$categoria->modelo = "F40";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1475;
		$categoria->marca_id =264;
		$categoria->modelo = "F430";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1476;
		$categoria->marca_id =264;
		$categoria->modelo = "F50";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1477;
		$categoria->marca_id =264;
		$categoria->modelo = "MONDIAL";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1478;
		$categoria->marca_id =264;
		$categoria->modelo = "SPIDER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1479;
		$categoria->marca_id =264;
		$categoria->modelo = "TESTAROSSA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1480;
		$categoria->marca_id =265;
		$categoria->modelo = "124";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1481;
		$categoria->marca_id =265;
		$categoria->modelo = "125";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1482;
		$categoria->marca_id =265;
		$categoria->modelo = "131";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1483;
		$categoria->marca_id =265;
		$categoria->modelo = "132";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1484;
		$categoria->marca_id =265;
		$categoria->modelo = "147";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1485;
		$categoria->marca_id =265;
		$categoria->modelo = "500";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1486;
		$categoria->marca_id =265;
		$categoria->modelo = "BARCHETTA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1487;
		$categoria->marca_id =265;
		$categoria->modelo = "BRAVA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1488;
		$categoria->marca_id =265;
		$categoria->modelo = "BRAVO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1489;
		$categoria->marca_id =265;
		$categoria->modelo = "CINQUECENTO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1490;
		$categoria->marca_id =265;
		$categoria->modelo = "COUPE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1491;
		$categoria->marca_id =265;
		$categoria->modelo = "CROMA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1492;
		$categoria->marca_id =265;
		$categoria->modelo = "DOBLO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1493;
		$categoria->marca_id =265;
		$categoria->modelo = "DUCATO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1494;
		$categoria->marca_id =265;
		$categoria->modelo = "IDEA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1495;
		$categoria->marca_id =265;
		$categoria->modelo = "LINEA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1496;
		$categoria->marca_id =265;
		$categoria->modelo = "MAREA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1497;
		$categoria->marca_id =265;
		$categoria->modelo = "PALIO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1498;
		$categoria->marca_id =265;
		$categoria->modelo = "PANDA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1499;
		$categoria->marca_id =265;
		$categoria->modelo = "PREMIO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1500;
		$categoria->marca_id =265;
		$categoria->modelo = "PUNTO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1501;
		$categoria->marca_id =265;
		$categoria->modelo = "REGATA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1502;
		$categoria->marca_id =265;
		$categoria->modelo = "RITMO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1503;
		$categoria->marca_id =265;
		$categoria->modelo = "SEICENTO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1504;
		$categoria->marca_id =265;
		$categoria->modelo = "SIENA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1505;
		$categoria->marca_id =265;
		$categoria->modelo = "STILO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1506;
		$categoria->marca_id =265;
		$categoria->modelo = "TEMPRA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1507;
		$categoria->marca_id =265;
		$categoria->modelo = "TIPO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1508;
		$categoria->marca_id =265;
		$categoria->modelo = "TUCAN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1509;
		$categoria->marca_id =265;
		$categoria->modelo = "ULYSSE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1510;
		$categoria->marca_id =265;
		$categoria->modelo = "UNO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1511;
		$categoria->marca_id =266;
		$categoria->modelo = "A";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1512;
		$categoria->marca_id =266;
		$categoria->modelo = "AEROSTAR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1513;
		$categoria->marca_id =266;
		$categoria->modelo = "ASPIRE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1514;
		$categoria->marca_id =266;
		$categoria->modelo = "B";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1515;
		$categoria->marca_id =266;
		$categoria->modelo = "CLUB WAGON";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1516;
		$categoria->marca_id =266;
		$categoria->modelo = "CONQUISTADOR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1517;
		$categoria->marca_id =266;
		$categoria->modelo = "CONTOUR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1518;
		$categoria->marca_id =266;
		$categoria->modelo = "CORCEL";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1519;
		$categoria->marca_id =266;
		$categoria->modelo = "CORTINA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1520;
		$categoria->marca_id =266;
		$categoria->modelo = "COUGAR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1521;
		$categoria->marca_id =266;
		$categoria->modelo = "COUNTRY SQUIRE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1522;
		$categoria->marca_id =266;
		$categoria->modelo = "CROWN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1523;
		$categoria->marca_id =266;
		$categoria->modelo = "DEL REY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1524;
		$categoria->marca_id =266;
		$categoria->modelo = "ECONOLINE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1525;
		$categoria->marca_id =266;
		$categoria->modelo = "ESCORT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1526;
		$categoria->marca_id =266;
		$categoria->modelo = "FAIRLANE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1527;
		$categoria->marca_id =266;
		$categoria->modelo = "FAIRMONT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1528;
		$categoria->marca_id =266;
		$categoria->modelo = "FALCON";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1529;
		$categoria->marca_id =266;
		$categoria->modelo = "FESTIVA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1530;
		$categoria->marca_id =266;
		$categoria->modelo = "FIESTA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1531;
		$categoria->marca_id =266;
		$categoria->modelo = "FIVE HUNDRED";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1532;
		$categoria->marca_id =266;
		$categoria->modelo = "FOCUS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1533;
		$categoria->marca_id =266;
		$categoria->modelo = "FREESTAR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1534;
		$categoria->marca_id =266;
		$categoria->modelo = "FUSION";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1535;
		$categoria->marca_id =266;
		$categoria->modelo = "FUTURA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1536;
		$categoria->marca_id =266;
		$categoria->modelo = "GALAXIE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1537;
		$categoria->marca_id =266;
		$categoria->modelo = "GRAN TORINO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1538;
		$categoria->marca_id =266;
		$categoria->modelo = "GRANADA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1539;
		$categoria->marca_id =266;
		$categoria->modelo = "GRAND MARQUIS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1540;
		$categoria->marca_id =266;
		$categoria->modelo = "GT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1541;
		$categoria->marca_id =266;
		$categoria->modelo = "KA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1542;
		$categoria->marca_id =266;
		$categoria->modelo = "LASER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1543;
		$categoria->marca_id =266;
		$categoria->modelo = "LTD";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1544;
		$categoria->marca_id =266;
		$categoria->modelo = "MAVERICK";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1545;
		$categoria->marca_id =266;
		$categoria->modelo = "MONDEO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1546;
		$categoria->marca_id =266;
		$categoria->modelo = "MUSTANG";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1547;
		$categoria->marca_id =266;
		$categoria->modelo = "ORION";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1548;
		$categoria->marca_id =266;
		$categoria->modelo = "PROBE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1549;
		$categoria->marca_id =266;
		$categoria->modelo = "PUMA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1550;
		$categoria->marca_id =266;
		$categoria->modelo = "SCORPIO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1551;
		$categoria->marca_id =266;
		$categoria->modelo = "SHELBY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1552;
		$categoria->marca_id =266;
		$categoria->modelo = "SIERRA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1553;
		$categoria->marca_id =266;
		$categoria->modelo = "TAURUS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1554;
		$categoria->marca_id =266;
		$categoria->modelo = "TEMPO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1555;
		$categoria->marca_id =266;
		$categoria->modelo = "THUNDERBIRD";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1556;
		$categoria->marca_id =266;
		$categoria->modelo = "TORINO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1557;
		$categoria->marca_id =266;
		$categoria->modelo = "WINDSTAR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1558;
		$categoria->marca_id =266;
		$categoria->modelo = "ZEPHYR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1559;
		$categoria->marca_id =267;
		$categoria->modelo = "CK";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1560;
		$categoria->marca_id =267;
		$categoria->modelo = "FC";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1561;
		$categoria->marca_id =267;
		$categoria->modelo = "HA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1562;
		$categoria->marca_id =267;
		$categoria->modelo = "MK";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1563;
		$categoria->marca_id =268;
		$categoria->modelo = "METRO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1564;
		$categoria->marca_id =268;
		$categoria->modelo = "PRIZM";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1565;
		$categoria->marca_id =268;
		$categoria->modelo = "STORM";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1566;
		$categoria->marca_id =269;
		$categoria->modelo = "ACADIA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1567;
		$categoria->marca_id =269;
		$categoria->modelo = "EV";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1568;
		$categoria->marca_id =269;
		$categoria->modelo = "SAFARI";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1569;
		$categoria->marca_id =269;
		$categoria->modelo = "SAVANA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1570;
		$categoria->marca_id =269;
		$categoria->modelo = "VAN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1571;
		$categoria->marca_id =270;
		$categoria->modelo = "IMAGE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1572;
		$categoria->marca_id =271;
		$categoria->modelo = "PERI";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1573;
		$categoria->marca_id =272;
		$categoria->modelo = "LOBO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1574;
		$categoria->marca_id =272;
		$categoria->modelo = "MINYI";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1575;
		$categoria->marca_id =272;
		$categoria->modelo = "SAIBAO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1576;
		$categoria->marca_id =272;
		$categoria->modelo = "XINYI";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1577;
		$categoria->marca_id =273;
		$categoria->modelo = "3";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1578;
		$categoria->marca_id =273;
		$categoria->modelo = "FAMILY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1579;
		$categoria->marca_id =273;
		$categoria->modelo = "FREEMA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1580;
		$categoria->marca_id =274;
		$categoria->modelo = "HQ7131EA4";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1581;
		$categoria->marca_id =275;
		$categoria->modelo = "B11";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1582;
		$categoria->marca_id =275;
		$categoria->modelo = "B21";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1583;
		$categoria->marca_id =275;
		$categoria->modelo = "BOLIGER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1584;
		$categoria->marca_id =276;
		$categoria->modelo = "ARROW";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1585;
		$categoria->marca_id =276;
		$categoria->modelo = "HUNTER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1586;
		$categoria->marca_id =277;
		$categoria->modelo = "51017";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1587;
		$categoria->marca_id =278;
		$categoria->modelo = "ACCORD";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1588;
		$categoria->marca_id =278;
		$categoria->modelo = "CIVIC";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1589;
		$categoria->marca_id =278;
		$categoria->modelo = "CONCERTO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1590;
		$categoria->marca_id =278;
		$categoria->modelo = "CRZ";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1591;
		$categoria->marca_id =278;
		$categoria->modelo = "EV";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1592;
		$categoria->marca_id =278;
		$categoria->modelo = "FIT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1593;
		$categoria->marca_id =278;
		$categoria->modelo = "INSIGHT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1594;
		$categoria->marca_id =278;
		$categoria->modelo = "INTEGRA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1595;
		$categoria->marca_id =278;
		$categoria->modelo = "LEGEND";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1596;
		$categoria->marca_id =278;
		$categoria->modelo = "ODYSSEY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1597;
		$categoria->marca_id =278;
		$categoria->modelo = "PRELUDE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1598;
		$categoria->marca_id =278;
		$categoria->modelo = "S";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1599;
		$categoria->marca_id =278;
		$categoria->modelo = "STREAM";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1600;
		$categoria->marca_id =278;
		$categoria->modelo = "VIGOR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1601;
		$categoria->marca_id =279;
		$categoria->modelo = "ACCENT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1602;
		$categoria->marca_id =279;
		$categoria->modelo = "ATOS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1603;
		$categoria->marca_id =279;
		$categoria->modelo = "AVANTE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1604;
		$categoria->marca_id =279;
		$categoria->modelo = "AZERA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1605;
		$categoria->marca_id =279;
		$categoria->modelo = "COUPE TIBURON";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1606;
		$categoria->marca_id =279;
		$categoria->modelo = "ELANTRA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1607;
		$categoria->marca_id =279;
		$categoria->modelo = "ENTOURAGE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1608;
		$categoria->marca_id =279;
		$categoria->modelo = "EQUUS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1609;
		$categoria->marca_id =279;
		$categoria->modelo = "EXCEL";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1610;
		$categoria->marca_id =279;
		$categoria->modelo = "GENESIS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1611;
		$categoria->marca_id =279;
		$categoria->modelo = "GETZ";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1612;
		$categoria->marca_id =279;
		$categoria->modelo = "GRANDEUR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1613;
		$categoria->marca_id =279;
		$categoria->modelo = "H 1";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1614;
		$categoria->marca_id =279;
		$categoria->modelo = "I30";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1615;
		$categoria->marca_id =279;
		$categoria->modelo = "MATRIX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1616;
		$categoria->marca_id =279;
		$categoria->modelo = "SANTAMO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1617;
		$categoria->marca_id =279;
		$categoria->modelo = "SCOUPE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1618;
		$categoria->marca_id =279;
		$categoria->modelo = "SONATA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1619;
		$categoria->marca_id =279;
		$categoria->modelo = "TUCSON";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1620;
		$categoria->marca_id =279;
		$categoria->modelo = "VERNA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1621;
		$categoria->marca_id =279;
		$categoria->modelo = "XG";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1622;
		$categoria->marca_id =280;
		$categoria->modelo = "SAMAND";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1623;
		$categoria->marca_id =281;
		$categoria->modelo = "G20";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1624;
		$categoria->marca_id =281;
		$categoria->modelo = "G35";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1625;
		$categoria->marca_id =281;
		$categoria->modelo = "G37";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1626;
		$categoria->marca_id =281;
		$categoria->modelo = "I30";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1627;
		$categoria->marca_id =281;
		$categoria->modelo = "I35";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1628;
		$categoria->marca_id =281;
		$categoria->modelo = "J30";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1629;
		$categoria->marca_id =281;
		$categoria->modelo = "M30";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1630;
		$categoria->marca_id =281;
		$categoria->modelo = "M35";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1631;
		$categoria->marca_id =281;
		$categoria->modelo = "M45";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1632;
		$categoria->marca_id =281;
		$categoria->modelo = "M56";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1633;
		$categoria->marca_id =281;
		$categoria->modelo = "Q45";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1634;
		$categoria->marca_id =282;
		$categoria->modelo = "IMPULSE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1635;
		$categoria->marca_id =282;
		$categoria->modelo = "OASIS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1636;
		$categoria->marca_id =282;
		$categoria->modelo = "STYLUS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1637;
		$categoria->marca_id =282;
		$categoria->modelo = "TROOPER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1638;
		$categoria->marca_id =283;
		$categoria->modelo = "35.10";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1639;
		$categoria->marca_id =283;
		$categoria->modelo = "70C16";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1640;
		$categoria->marca_id =284;
		$categoria->modelo = "H";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1641;
		$categoria->marca_id =285;
		$categoria->modelo = "S";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1642;
		$categoria->marca_id =285;
		$categoria->modelo = "X-TYPE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1643;
		$categoria->marca_id =285;
		$categoria->modelo = "XF";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1644;
		$categoria->marca_id =285;
		$categoria->modelo = "XJ";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1645;
		$categoria->marca_id =285;
		$categoria->modelo = "XJ6";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1646;
		$categoria->marca_id =285;
		$categoria->modelo = "XJ8";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1647;
		$categoria->marca_id =285;
		$categoria->modelo = "XJR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1648;
		$categoria->marca_id =285;
		$categoria->modelo = "XJS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1649;
		$categoria->marca_id =285;
		$categoria->modelo = "XK";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1650;
		$categoria->marca_id =285;
		$categoria->modelo = "XK8";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1651;
		$categoria->marca_id =285;
		$categoria->modelo = "XKR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1652;
		$categoria->marca_id =286;
		$categoria->modelo = "J10";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1653;
		$categoria->marca_id =287;
		$categoria->modelo = "JNJ7080A";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1654;
		$categoria->marca_id =288;
		$categoria->modelo = "FASHION";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1655;
		$categoria->marca_id =288;
		$categoria->modelo = "YUMBA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1656;
		$categoria->marca_id =289;
		$categoria->modelo = "AMANTI";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1657;
		$categoria->marca_id =289;
		$categoria->modelo = "BESTA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1658;
		$categoria->marca_id =289;
		$categoria->modelo = "CAPITAL";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1659;
		$categoria->marca_id =289;
		$categoria->modelo = "CARENS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1660;
		$categoria->marca_id =289;
		$categoria->modelo = "CARNIVAL";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1661;
		$categoria->marca_id =289;
		$categoria->modelo = "CERATO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1662;
		$categoria->marca_id =289;
		$categoria->modelo = "ENTERPRISE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1663;
		$categoria->marca_id =289;
		$categoria->modelo = "FORTE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1664;
		$categoria->marca_id =289;
		$categoria->modelo = "JOICE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1665;
		$categoria->marca_id =289;
		$categoria->modelo = "MAGENTIS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1666;
		$categoria->marca_id =289;
		$categoria->modelo = "OPIRUS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1667;
		$categoria->marca_id =289;
		$categoria->modelo = "OPTIMA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1668;
		$categoria->marca_id =289;
		$categoria->modelo = "PICANTO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1669;
		$categoria->marca_id =289;
		$categoria->modelo = "RIO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1670;
		$categoria->marca_id =289;
		$categoria->modelo = "RONDO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1671;
		$categoria->marca_id =289;
		$categoria->modelo = "SEDONA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1672;
		$categoria->marca_id =289;
		$categoria->modelo = "SEPHIA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1673;
		$categoria->marca_id =289;
		$categoria->modelo = "SHUMA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1674;
		$categoria->marca_id =289;
		$categoria->modelo = "SOUL";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1675;
		$categoria->marca_id =289;
		$categoria->modelo = "SPECTRA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1676;
		$categoria->marca_id =289;
		$categoria->modelo = "SPORTAGE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1677;
		$categoria->marca_id =289;
		$categoria->modelo = "TOWNER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1678;
		$categoria->marca_id =290;
		$categoria->modelo = "21043";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1679;
		$categoria->marca_id =290;
		$categoria->modelo = "21051";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1680;
		$categoria->marca_id =290;
		$categoria->modelo = "21053";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1681;
		$categoria->marca_id =290;
		$categoria->modelo = "21060";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1682;
		$categoria->marca_id =290;
		$categoria->modelo = "21074";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1683;
		$categoria->marca_id =290;
		$categoria->modelo = "AQUARIUS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1684;
		$categoria->marca_id =290;
		$categoria->modelo = "GLACIAL";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1685;
		$categoria->marca_id =290;
		$categoria->modelo = "KALINA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1686;
		$categoria->marca_id =290;
		$categoria->modelo = "NIVA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1687;
		$categoria->marca_id =290;
		$categoria->modelo = "PRIORA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1688;
		$categoria->marca_id =290;
		$categoria->modelo = "SAMARA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1689;
		$categoria->marca_id =290;
		$categoria->modelo = "STAWRA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1690;
		$categoria->marca_id =291;
		$categoria->modelo = "COUNTACH";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1691;
		$categoria->marca_id =291;
		$categoria->modelo = "DIABLO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1692;
		$categoria->marca_id =291;
		$categoria->modelo = "GALLARDO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1693;
		$categoria->marca_id =291;
		$categoria->modelo = "MURCIELAGO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1694;
		$categoria->marca_id =291;
		$categoria->modelo = "REVENTON";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1695;
		$categoria->marca_id =292;
		$categoria->modelo = "LYBRA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1696;
		$categoria->marca_id =292;
		$categoria->modelo = "PRISMA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1697;
		$categoria->marca_id =292;
		$categoria->modelo = "THEMA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1698;
		$categoria->marca_id =293;
		$categoria->modelo = "FASHION";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1699;
		$categoria->marca_id =294;
		$categoria->modelo = "ES";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1700;
		$categoria->marca_id =294;
		$categoria->modelo = "GS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1701;
		$categoria->marca_id =294;
		$categoria->modelo = "HS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1702;
		$categoria->marca_id =294;
		$categoria->modelo = "IS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1703;
		$categoria->marca_id =294;
		$categoria->modelo = "LS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1704;
		$categoria->marca_id =294;
		$categoria->modelo = "SC";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1705;
		$categoria->marca_id =295;
		$categoria->modelo = "520";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1706;
		$categoria->marca_id =295;
		$categoria->modelo = "620";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1707;
		$categoria->marca_id =296;
		$categoria->modelo = "CONTINENTAL";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1708;
		$categoria->marca_id =296;
		$categoria->modelo = "LS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1709;
		$categoria->marca_id =296;
		$categoria->modelo = "MARK IV";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1710;
		$categoria->marca_id =296;
		$categoria->modelo = "MARK VII";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1711;
		$categoria->marca_id =296;
		$categoria->modelo = "MARK VIII";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1712;
		$categoria->marca_id =296;
		$categoria->modelo = "MKS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1713;
		$categoria->marca_id =296;
		$categoria->modelo = "MKT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1714;
		$categoria->marca_id =296;
		$categoria->modelo = "MKZ";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1715;
		$categoria->marca_id =296;
		$categoria->modelo = "NAVIGATOR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1716;
		$categoria->marca_id =296;
		$categoria->modelo = "TOWN CAR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1717;
		$categoria->marca_id =296;
		$categoria->modelo = "ZEPHYR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1718;
		$categoria->marca_id =297;
		$categoria->modelo = "ELAN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1719;
		$categoria->marca_id =297;
		$categoria->modelo = "ELISE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1720;
		$categoria->marca_id =297;
		$categoria->modelo = "ESPRIT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1721;
		$categoria->marca_id =297;
		$categoria->modelo = "EVORA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1722;
		$categoria->marca_id =297;
		$categoria->modelo = "EXIGE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1723;
		$categoria->marca_id =298;
		$categoria->modelo = "2.24";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1724;
		$categoria->marca_id =298;
		$categoria->modelo = "3200GT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1725;
		$categoria->marca_id =298;
		$categoria->modelo = "4.24";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1726;
		$categoria->marca_id =298;
		$categoria->modelo = "430";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1727;
		$categoria->marca_id =298;
		$categoria->modelo = "COUPE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1728;
		$categoria->marca_id =298;
		$categoria->modelo = "GHIBLI";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1729;
		$categoria->marca_id =298;
		$categoria->modelo = "GRANSPORT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1730;
		$categoria->marca_id =298;
		$categoria->modelo = "GRANTURISMO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1731;
		$categoria->marca_id =298;
		$categoria->modelo = "KARIF";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1732;
		$categoria->marca_id =298;
		$categoria->modelo = "QUATTROPORTE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1733;
		$categoria->marca_id =298;
		$categoria->modelo = "SHAMAL";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1734;
		$categoria->marca_id =298;
		$categoria->modelo = "SPYDER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1735;
		$categoria->marca_id =299;
		$categoria->modelo = "57";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1736;
		$categoria->marca_id =299;
		$categoria->modelo = "62";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1737;
		$categoria->marca_id =300;
		$categoria->modelo = "121";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1738;
		$categoria->marca_id =300;
		$categoria->modelo = "2";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1739;
		$categoria->marca_id =300;
		$categoria->modelo = "3";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1740;
		$categoria->marca_id =300;
		$categoria->modelo = "323";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1741;
		$categoria->marca_id =300;
		$categoria->modelo = "5";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1742;
		$categoria->marca_id =300;
		$categoria->modelo = "6";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1743;
		$categoria->marca_id =300;
		$categoria->modelo = "626";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1744;
		$categoria->marca_id =300;
		$categoria->modelo = "929";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1745;
		$categoria->marca_id =300;
		$categoria->modelo = "ALLEGRO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1746;
		$categoria->marca_id =300;
		$categoria->modelo = "DEMIO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1747;
		$categoria->marca_id =300;
		$categoria->modelo = "MILLENIA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1748;
		$categoria->marca_id =300;
		$categoria->modelo = "MPV";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1749;
		$categoria->marca_id =300;
		$categoria->modelo = "MX 3";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1750;
		$categoria->marca_id =300;
		$categoria->modelo = "MX 5";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1751;
		$categoria->marca_id =300;
		$categoria->modelo = "MX 6";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1752;
		$categoria->marca_id =300;
		$categoria->modelo = "PROTEGE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1753;
		$categoria->marca_id =300;
		$categoria->modelo = "RX 7";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1754;
		$categoria->marca_id =300;
		$categoria->modelo = "RX 8";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1755;
		$categoria->marca_id =301;
		$categoria->modelo = "190E";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1756;
		$categoria->marca_id =301;
		$categoria->modelo = "200";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1757;
		$categoria->marca_id =301;
		$categoria->modelo = "230";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1758;
		$categoria->marca_id =301;
		$categoria->modelo = "250";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1759;
		$categoria->marca_id =301;
		$categoria->modelo = "280";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1760;
		$categoria->marca_id =301;
		$categoria->modelo = "A";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1761;
		$categoria->marca_id =301;
		$categoria->modelo = "B";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1762;
		$categoria->marca_id =301;
		$categoria->modelo = "C";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1763;
		$categoria->marca_id =301;
		$categoria->modelo = "CE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1764;
		$categoria->marca_id =301;
		$categoria->modelo = "CL";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1765;
		$categoria->marca_id =301;
		$categoria->modelo = "CLK";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1766;
		$categoria->marca_id =301;
		$categoria->modelo = "CLS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1767;
		$categoria->marca_id =301;
		$categoria->modelo = "D";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1768;
		$categoria->marca_id =301;
		$categoria->modelo = "E";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1769;
		$categoria->marca_id =301;
		$categoria->modelo = "R";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1770;
		$categoria->marca_id =301;
		$categoria->modelo = "S";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1771;
		$categoria->marca_id =301;
		$categoria->modelo = "SCL";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1772;
		$categoria->marca_id =301;
		$categoria->modelo = "SDL";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1773;
		$categoria->marca_id =301;
		$categoria->modelo = "SEC";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1774;
		$categoria->marca_id =301;
		$categoria->modelo = "SL";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1775;
		$categoria->marca_id =301;
		$categoria->modelo = "SLC";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1776;
		$categoria->marca_id =301;
		$categoria->modelo = "SLK";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1777;
		$categoria->marca_id =301;
		$categoria->modelo = "SLR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1778;
		$categoria->marca_id =301;
		$categoria->modelo = "SLS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1779;
		$categoria->marca_id =301;
		$categoria->modelo = "TE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1780;
		$categoria->marca_id =301;
		$categoria->modelo = "V";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1781;
		$categoria->marca_id =301;
		$categoria->modelo = "VANEO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1782;
		$categoria->marca_id =302;
		$categoria->modelo = "CAPRI";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1783;
		$categoria->marca_id =302;
		$categoria->modelo = "COUGAR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1784;
		$categoria->marca_id =302;
		$categoria->modelo = "GRAND MARQUIS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1785;
		$categoria->marca_id =302;
		$categoria->modelo = "MILAN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1786;
		$categoria->marca_id =302;
		$categoria->modelo = "MONTEGO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1787;
		$categoria->marca_id =302;
		$categoria->modelo = "MONTEREY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1788;
		$categoria->marca_id =302;
		$categoria->modelo = "MYSTIQUE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1789;
		$categoria->marca_id =302;
		$categoria->modelo = "SABLE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1790;
		$categoria->marca_id =302;
		$categoria->modelo = "TOPAZ";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1791;
		$categoria->marca_id =302;
		$categoria->modelo = "TRACER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1792;
		$categoria->marca_id =302;
		$categoria->modelo = "VILLAGER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1793;
		$categoria->marca_id =303;
		$categoria->modelo = "1.9.5.8.";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1794;
		$categoria->marca_id =303;
		$categoria->modelo = "MGB";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1795;
		$categoria->marca_id =304;
		$categoria->modelo = "MINICORD";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1796;
		$categoria->marca_id =305;
		$categoria->modelo = "3.000";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1797;
		$categoria->marca_id =305;
		$categoria->modelo = "COLT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1798;
		$categoria->marca_id =305;
		$categoria->modelo = "DIAMANTE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1799;
		$categoria->marca_id =305;
		$categoria->modelo = "ECLIPSE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1800;
		$categoria->marca_id =305;
		$categoria->modelo = "EXPO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1801;
		$categoria->marca_id =305;
		$categoria->modelo = "FTO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1802;
		$categoria->marca_id =305;
		$categoria->modelo = "GALANT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1803;
		$categoria->marca_id =305;
		$categoria->modelo = "GRANDIS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1804;
		$categoria->marca_id =305;
		$categoria->modelo = "LANCER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1805;
		$categoria->marca_id =305;
		$categoria->modelo = "MF";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1806;
		$categoria->marca_id =305;
		$categoria->modelo = "MIRAGE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1807;
		$categoria->marca_id =305;
		$categoria->modelo = "MK";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1808;
		$categoria->marca_id =305;
		$categoria->modelo = "MS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1809;
		$categoria->marca_id =305;
		$categoria->modelo = "MX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1810;
		$categoria->marca_id =305;
		$categoria->modelo = "PRECIS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1811;
		$categoria->marca_id =305;
		$categoria->modelo = "SIGMA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1812;
		$categoria->marca_id =305;
		$categoria->modelo = "SIGNO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1813;
		$categoria->marca_id =305;
		$categoria->modelo = "SPACE WAGON";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1814;
		$categoria->marca_id =305;
		$categoria->modelo = "STAR WAGON";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1815;
		$categoria->marca_id =305;
		$categoria->modelo = "VAN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1816;
		$categoria->marca_id =305;
		$categoria->modelo = "VARICA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1817;
		$categoria->marca_id =305;
		$categoria->modelo = "VR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1818;
		$categoria->marca_id =305;
		$categoria->modelo = "ZX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1819;
		$categoria->marca_id =306;
		$categoria->modelo = "200";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1820;
		$categoria->marca_id =306;
		$categoria->modelo = "240";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1821;
		$categoria->marca_id =306;
		$categoria->modelo = "300";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1822;
		$categoria->marca_id =306;
		$categoria->modelo = "350";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1823;
		$categoria->marca_id =306;
		$categoria->modelo = "370";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1824;
		$categoria->marca_id =306;
		$categoria->modelo = "ALMERA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1825;
		$categoria->marca_id =306;
		$categoria->modelo = "ALTIMA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1826;
		$categoria->marca_id =306;
		$categoria->modelo = "AXXESS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1827;
		$categoria->marca_id =306;
		$categoria->modelo = "BLUEBIRD";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1828;
		$categoria->marca_id =306;
		$categoria->modelo = "CUBE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1829;
		$categoria->marca_id =306;
		$categoria->modelo = "GT-R";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1830;
		$categoria->marca_id =306;
		$categoria->modelo = "LAUREL";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1831;
		$categoria->marca_id =306;
		$categoria->modelo = "MAXIMA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1832;
		$categoria->marca_id =306;
		$categoria->modelo = "MICRA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1833;
		$categoria->marca_id =306;
		$categoria->modelo = "NOTE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1834;
		$categoria->marca_id =306;
		$categoria->modelo = "NX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1835;
		$categoria->marca_id =306;
		$categoria->modelo = "PATROL";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1836;
		$categoria->marca_id =306;
		$categoria->modelo = "PRIMERA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1837;
		$categoria->marca_id =306;
		$categoria->modelo = "PULSAR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1838;
		$categoria->marca_id =306;
		$categoria->modelo = "QUEST";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1839;
		$categoria->marca_id =306;
		$categoria->modelo = "SENTRA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1840;
		$categoria->marca_id =306;
		$categoria->modelo = "SERENA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1841;
		$categoria->marca_id =306;
		$categoria->modelo = "STANZA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1842;
		$categoria->marca_id =306;
		$categoria->modelo = "SUNNY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1843;
		$categoria->marca_id =306;
		$categoria->modelo = "TIIDA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1844;
		$categoria->marca_id =306;
		$categoria->modelo = "VANETTE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1845;
		$categoria->marca_id =306;
		$categoria->modelo = "VERSA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1846;
		$categoria->marca_id =306;
		$categoria->modelo = "XTERRA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1847;
		$categoria->marca_id =307;
		$categoria->modelo = "ACHIEVA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1848;
		$categoria->marca_id =307;
		$categoria->modelo = "ALERO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1849;
		$categoria->marca_id =307;
		$categoria->modelo = "AURORA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1850;
		$categoria->marca_id =307;
		$categoria->modelo = "CUSTOM CRUISER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1851;
		$categoria->marca_id =307;
		$categoria->modelo = "CUTLASS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1852;
		$categoria->marca_id =307;
		$categoria->modelo = "DELTA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1853;
		$categoria->marca_id =307;
		$categoria->modelo = "EIGHTY EIGHT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1854;
		$categoria->marca_id =307;
		$categoria->modelo = "INTRIGUE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1855;
		$categoria->marca_id =307;
		$categoria->modelo = "NINETY EIGHT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1856;
		$categoria->marca_id =307;
		$categoria->modelo = "SILHOUETTE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1857;
		$categoria->marca_id =307;
		$categoria->modelo = "TORONADO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1858;
		$categoria->marca_id =308;
		$categoria->modelo = "ASCONA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1859;
		$categoria->marca_id =308;
		$categoria->modelo = "ASTRA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1860;
		$categoria->marca_id =308;
		$categoria->modelo = "CALIBRA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1861;
		$categoria->marca_id =308;
		$categoria->modelo = "CORSA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1862;
		$categoria->marca_id =308;
		$categoria->modelo = "KADETT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1863;
		$categoria->marca_id =308;
		$categoria->modelo = "MANTA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1864;
		$categoria->marca_id =308;
		$categoria->modelo = "OMEGA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1865;
		$categoria->marca_id =308;
		$categoria->modelo = "REKORD";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1866;
		$categoria->marca_id =308;
		$categoria->modelo = "TIGRA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1867;
		$categoria->marca_id =308;
		$categoria->modelo = "VECTRA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1868;
		$categoria->marca_id =308;
		$categoria->modelo = "ZAFIRA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1869;
		$categoria->marca_id =309;
		$categoria->modelo = "PACKARD";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1870;
		$categoria->marca_id =310;
		$categoria->modelo = "KALLISTA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1871;
		$categoria->marca_id =310;
		$categoria->modelo = "LIMA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1872;
		$categoria->marca_id =310;
		$categoria->modelo = "ROADSTER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1873;
		$categoria->marca_id =311;
		$categoria->modelo = "106";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1874;
		$categoria->marca_id =311;
		$categoria->modelo = "205";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1875;
		$categoria->marca_id =311;
		$categoria->modelo = "206";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1876;
		$categoria->marca_id =311;
		$categoria->modelo = "207";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1877;
		$categoria->marca_id =311;
		$categoria->modelo = "306";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1878;
		$categoria->marca_id =311;
		$categoria->modelo = "307";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1879;
		$categoria->marca_id =311;
		$categoria->modelo = "309";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1880;
		$categoria->marca_id =311;
		$categoria->modelo = "405";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1881;
		$categoria->marca_id =311;
		$categoria->modelo = "406";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1882;
		$categoria->marca_id =311;
		$categoria->modelo = "407";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1883;
		$categoria->marca_id =311;
		$categoria->modelo = "408";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1884;
		$categoria->marca_id =311;
		$categoria->modelo = "504";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1885;
		$categoria->marca_id =311;
		$categoria->modelo = "505";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1886;
		$categoria->marca_id =311;
		$categoria->modelo = "605";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1887;
		$categoria->marca_id =311;
		$categoria->modelo = "607";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1888;
		$categoria->marca_id =311;
		$categoria->modelo = "806";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1889;
		$categoria->marca_id =312;
		$categoria->modelo = "ACCLAIM";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1890;
		$categoria->marca_id =312;
		$categoria->modelo = "ARROW";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1891;
		$categoria->marca_id =312;
		$categoria->modelo = "BELVEDERE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1892;
		$categoria->marca_id =312;
		$categoria->modelo = "BREEZE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1893;
		$categoria->marca_id =312;
		$categoria->modelo = "CARAVELLE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1894;
		$categoria->marca_id =312;
		$categoria->modelo = "COLT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1895;
		$categoria->marca_id =312;
		$categoria->modelo = "CUDA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1896;
		$categoria->marca_id =312;
		$categoria->modelo = "FURY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1897;
		$categoria->marca_id =312;
		$categoria->modelo = "GRAN FURY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1898;
		$categoria->marca_id =312;
		$categoria->modelo = "GRAND VOYAGER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1899;
		$categoria->marca_id =312;
		$categoria->modelo = "LASER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1900;
		$categoria->marca_id =312;
		$categoria->modelo = "NEON";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1901;
		$categoria->marca_id =312;
		$categoria->modelo = "PROWLER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1902;
		$categoria->marca_id =312;
		$categoria->modelo = "SUNDANCE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1903;
		$categoria->marca_id =312;
		$categoria->modelo = "VALIANT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1904;
		$categoria->marca_id =312;
		$categoria->modelo = "VOYAGER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1905;
		$categoria->marca_id =313;
		$categoria->modelo = "6000";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1906;
		$categoria->marca_id =313;
		$categoria->modelo = "BONNEVILLE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1907;
		$categoria->marca_id =313;
		$categoria->modelo = "FIERO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1908;
		$categoria->marca_id =313;
		$categoria->modelo = "FIREBIRD";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1909;
		$categoria->marca_id =313;
		$categoria->modelo = "G5";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1910;
		$categoria->marca_id =313;
		$categoria->modelo = "G6";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1911;
		$categoria->marca_id =313;
		$categoria->modelo = "GRAND AM";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1912;
		$categoria->marca_id =313;
		$categoria->modelo = "GRAND PRIX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1913;
		$categoria->marca_id =313;
		$categoria->modelo = "GTO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1914;
		$categoria->marca_id =313;
		$categoria->modelo = "LEMANS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1915;
		$categoria->marca_id =313;
		$categoria->modelo = "MONTANA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1916;
		$categoria->marca_id =313;
		$categoria->modelo = "PARISIENNE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1917;
		$categoria->marca_id =313;
		$categoria->modelo = "SOLSTICE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1918;
		$categoria->marca_id =313;
		$categoria->modelo = "SUNBIRD";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1919;
		$categoria->marca_id =313;
		$categoria->modelo = "SUNFIRE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1920;
		$categoria->marca_id =313;
		$categoria->modelo = "TEMPEST";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1921;
		$categoria->marca_id =313;
		$categoria->modelo = "TRANSSPORT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1922;
		$categoria->marca_id =313;
		$categoria->modelo = "VIBE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1923;
		$categoria->marca_id =314;
		$categoria->modelo = "911";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1924;
		$categoria->marca_id =314;
		$categoria->modelo = "924";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1925;
		$categoria->marca_id =314;
		$categoria->modelo = "928";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1926;
		$categoria->marca_id =314;
		$categoria->modelo = "930";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1927;
		$categoria->marca_id =314;
		$categoria->modelo = "944";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1928;
		$categoria->marca_id =314;
		$categoria->modelo = "968";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1929;
		$categoria->marca_id =314;
		$categoria->modelo = "BOXSTER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1930;
		$categoria->marca_id =314;
		$categoria->modelo = "CARRERA GT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1931;
		$categoria->marca_id =314;
		$categoria->modelo = "CAYENNE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1932;
		$categoria->marca_id =314;
		$categoria->modelo = "CAYMAN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1933;
		$categoria->marca_id =314;
		$categoria->modelo = "PANAMERA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1934;
		$categoria->marca_id =315;
		$categoria->modelo = "HORNET";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1935;
		$categoria->marca_id =315;
		$categoria->modelo = "RANGER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1936;
		$categoria->marca_id =316;
		$categoria->modelo = "11";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1937;
		$categoria->marca_id =316;
		$categoria->modelo = "12";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1938;
		$categoria->marca_id =316;
		$categoria->modelo = "16";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1939;
		$categoria->marca_id =316;
		$categoria->modelo = "18";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1940;
		$categoria->marca_id =316;
		$categoria->modelo = "19";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1941;
		$categoria->marca_id =316;
		$categoria->modelo = "21";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1942;
		$categoria->marca_id =316;
		$categoria->modelo = "30";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1943;
		$categoria->marca_id =316;
		$categoria->modelo = "4";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1944;
		$categoria->marca_id =316;
		$categoria->modelo = "5";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1945;
		$categoria->marca_id =316;
		$categoria->modelo = "9/MAXIMO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1946;
		$categoria->marca_id =316;
		$categoria->modelo = "CLIO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1947;
		$categoria->marca_id =316;
		$categoria->modelo = "ESPACE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1948;
		$categoria->marca_id =316;
		$categoria->modelo = "FUEGO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1949;
		$categoria->marca_id =316;
		$categoria->modelo = "GALA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1950;
		$categoria->marca_id =316;
		$categoria->modelo = "GRAND SCENIC";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1951;
		$categoria->marca_id =316;
		$categoria->modelo = "KANGOO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1952;
		$categoria->marca_id =316;
		$categoria->modelo = "KOLEOS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1953;
		$categoria->marca_id =316;
		$categoria->modelo = "LAGUNA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1954;
		$categoria->marca_id =316;
		$categoria->modelo = "LOGAN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1955;
		$categoria->marca_id =316;
		$categoria->modelo = "MEGANE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1956;
		$categoria->marca_id =316;
		$categoria->modelo = "SAFRANE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1957;
		$categoria->marca_id =316;
		$categoria->modelo = "SANDERO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1958;
		$categoria->marca_id =316;
		$categoria->modelo = "SCENIC";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1959;
		$categoria->marca_id =316;
		$categoria->modelo = "SYMBOL";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1960;
		$categoria->marca_id =316;
		$categoria->modelo = "TWINGO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1961;
		$categoria->marca_id =317;
		$categoria->modelo = "CORNICHE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1962;
		$categoria->marca_id =317;
		$categoria->modelo = "PARK WARD";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1963;
		$categoria->marca_id =317;
		$categoria->modelo = "PHANTOM";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1964;
		$categoria->marca_id =317;
		$categoria->modelo = "SILVER DAWN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1965;
		$categoria->marca_id =317;
		$categoria->modelo = "SILVER SERAPH";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1966;
		$categoria->marca_id =317;
		$categoria->modelo = "SILVER SPUR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1967;
		$categoria->marca_id =317;
		$categoria->modelo = "SPUR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1968;
		$categoria->marca_id =317;
		$categoria->modelo = "TOURING";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1969;
		$categoria->marca_id =318;
		$categoria->modelo = "ROVER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1970;
		$categoria->marca_id =319;
		$categoria->modelo = "111";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1971;
		$categoria->marca_id =319;
		$categoria->modelo = "114";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1972;
		$categoria->marca_id =319;
		$categoria->modelo = "214";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1973;
		$categoria->marca_id =319;
		$categoria->modelo = "216";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1974;
		$categoria->marca_id =319;
		$categoria->modelo = "220";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1975;
		$categoria->marca_id =319;
		$categoria->modelo = "25";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1976;
		$categoria->marca_id =319;
		$categoria->modelo = "414";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1977;
		$categoria->marca_id =319;
		$categoria->modelo = "19-feb";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1978;
		$categoria->marca_id =319;
		$categoria->modelo = "23-feb";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1979;
		$categoria->marca_id =319;
		$categoria->modelo = "14-feb";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1980;
		$categoria->marca_id =319;
		$categoria->modelo = "618";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1981;
		$categoria->marca_id =319;
		$categoria->modelo = "620";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1982;
		$categoria->marca_id =319;
		$categoria->modelo = "623";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1983;
		$categoria->marca_id =319;
		$categoria->modelo = "75";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1984;
		$categoria->marca_id =319;
		$categoria->modelo = "820";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1985;
		$categoria->marca_id =319;
		$categoria->modelo = "825";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1986;
		$categoria->marca_id =319;
		$categoria->modelo = "827";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1987;
		$categoria->marca_id =319;
		$categoria->modelo = "ESTATE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1988;
		$categoria->marca_id =319;
		$categoria->modelo = "MGF";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1989;
		$categoria->marca_id =319;
		$categoria->modelo = "MINI";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1990;
		$categoria->marca_id =319;
		$categoria->modelo = "TOURER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1991;
		$categoria->marca_id =320;
		$categoria->modelo = "XTREMOS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1992;
		$categoria->marca_id =321;
		$categoria->modelo = "09-feb";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1993;
		$categoria->marca_id =321;
		$categoria->modelo = "09-mar";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1994;
		$categoria->marca_id =321;
		$categoria->modelo = "09-may";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1995;
		$categoria->marca_id =321;
		$categoria->modelo = "18-jun";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1996;
		$categoria->marca_id =321;
		$categoria->modelo = "21-ago";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1997;
		$categoria->marca_id =322;
		$categoria->modelo = "PSS VAN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1998;
		$categoria->marca_id =323;
		$categoria->modelo = "CARAVAN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 1999;
		$categoria->marca_id =324;
		$categoria->modelo = "AURA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2000;
		$categoria->marca_id =324;
		$categoria->modelo = "ION";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2001;
		$categoria->marca_id =324;
		$categoria->modelo = "L";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2002;
		$categoria->marca_id =324;
		$categoria->modelo = "L 300";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2003;
		$categoria->marca_id =324;
		$categoria->modelo = "OUTLOOK";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2004;
		$categoria->marca_id =324;
		$categoria->modelo = "RELAY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2005;
		$categoria->marca_id =324;
		$categoria->modelo = "SC";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2006;
		$categoria->marca_id =324;
		$categoria->modelo = "SKY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2007;
		$categoria->marca_id =324;
		$categoria->modelo = "SL";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2008;
		$categoria->marca_id =324;
		$categoria->modelo = "SW";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2009;
		$categoria->marca_id =325;
		$categoria->modelo = "E";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2010;
		$categoria->marca_id =325;
		$categoria->modelo = "I";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2011;
		$categoria->marca_id =326;
		$categoria->modelo = "TC";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2012;
		$categoria->marca_id =326;
		$categoria->modelo = "XA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2013;
		$categoria->marca_id =326;
		$categoria->modelo = "XB";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2014;
		$categoria->marca_id =326;
		$categoria->modelo = "XD";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2015;
		$categoria->marca_id =327;
		$categoria->modelo = "ALHAMBRA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2016;
		$categoria->marca_id =327;
		$categoria->modelo = "ALTEA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2017;
		$categoria->marca_id =327;
		$categoria->modelo = "AROSA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2018;
		$categoria->marca_id =327;
		$categoria->modelo = "CORDOBA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2019;
		$categoria->marca_id =327;
		$categoria->modelo = "IBIZA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2020;
		$categoria->marca_id =327;
		$categoria->modelo = "LEON";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2021;
		$categoria->marca_id =327;
		$categoria->modelo = "MALAGA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2022;
		$categoria->marca_id =327;
		$categoria->modelo = "MARBELLA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2023;
		$categoria->marca_id =327;
		$categoria->modelo = "TOLEDO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2024;
		$categoria->marca_id =328;
		$categoria->modelo = "FABIA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2025;
		$categoria->marca_id =328;
		$categoria->modelo = "FAVORIT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2026;
		$categoria->marca_id =328;
		$categoria->modelo = "FELICIA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2027;
		$categoria->marca_id =328;
		$categoria->modelo = "FORMAN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2028;
		$categoria->marca_id =328;
		$categoria->modelo = "OCTAVIA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2029;
		$categoria->marca_id =328;
		$categoria->modelo = "ROOMSTER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2030;
		$categoria->marca_id =329;
		$categoria->modelo = "FORTWO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2031;
		$categoria->marca_id =329;
		$categoria->modelo = "SMART";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2032;
		$categoria->marca_id =330;
		$categoria->modelo = "FORESTER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2033;
		$categoria->marca_id =330;
		$categoria->modelo = "IMPREZA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2034;
		$categoria->marca_id =330;
		$categoria->modelo = "JUSTY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2035;
		$categoria->marca_id =330;
		$categoria->modelo = "LEGACY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2036;
		$categoria->marca_id =330;
		$categoria->modelo = "LOYALE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2037;
		$categoria->marca_id =330;
		$categoria->modelo = "OUTBACK";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2038;
		$categoria->marca_id =330;
		$categoria->modelo = "SVX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2039;
		$categoria->marca_id =330;
		$categoria->modelo = "VIVIO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2040;
		$categoria->marca_id =331;
		$categoria->modelo = "AERIO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2041;
		$categoria->marca_id =331;
		$categoria->modelo = "ALTO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2042;
		$categoria->marca_id =331;
		$categoria->modelo = "BALENO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2043;
		$categoria->marca_id =331;
		$categoria->modelo = "ESTEEM";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2044;
		$categoria->marca_id =331;
		$categoria->modelo = "FORENZA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2045;
		$categoria->marca_id =331;
		$categoria->modelo = "GRAND VITARA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2046;
		$categoria->marca_id =331;
		$categoria->modelo = "IGNIS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2047;
		$categoria->marca_id =331;
		$categoria->modelo = "KIZASHI";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2048;
		$categoria->marca_id =331;
		$categoria->modelo = "LIANA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2049;
		$categoria->marca_id =331;
		$categoria->modelo = "RENO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2050;
		$categoria->marca_id =331;
		$categoria->modelo = "SUPER CARRY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2051;
		$categoria->marca_id =331;
		$categoria->modelo = "SWIFT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2052;
		$categoria->marca_id =331;
		$categoria->modelo = "SX4";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2053;
		$categoria->marca_id =331;
		$categoria->modelo = "VERONA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2054;
		$categoria->marca_id =332;
		$categoria->modelo = "INDICA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2055;
		$categoria->marca_id =332;
		$categoria->modelo = "INDIGO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2056;
		$categoria->marca_id =333;
		$categoria->modelo = "ROADSTER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2057;
		$categoria->marca_id =334;
		$categoria->modelo = "AURIS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2058;
		$categoria->marca_id =334;
		$categoria->modelo = "AVALON";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2059;
		$categoria->marca_id =334;
		$categoria->modelo = "AVENSIS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2060;
		$categoria->marca_id =334;
		$categoria->modelo = "CAMRY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2061;
		$categoria->marca_id =334;
		$categoria->modelo = "CARINA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2062;
		$categoria->marca_id =334;
		$categoria->modelo = "CELICA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2063;
		$categoria->marca_id =334;
		$categoria->modelo = "COROLLA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2064;
		$categoria->marca_id =334;
		$categoria->modelo = "CORONA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2065;
		$categoria->marca_id =334;
		$categoria->modelo = "CRESSIDA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2066;
		$categoria->marca_id =334;
		$categoria->modelo = "CROWN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2067;
		$categoria->marca_id =334;
		$categoria->modelo = "ECHO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2068;
		$categoria->marca_id =334;
		$categoria->modelo = "GTM";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2069;
		$categoria->marca_id =334;
		$categoria->modelo = "MATRIX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2070;
		$categoria->marca_id =334;
		$categoria->modelo = "MR2";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2071;
		$categoria->marca_id =334;
		$categoria->modelo = "PASEO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2072;
		$categoria->marca_id =334;
		$categoria->modelo = "PICNIC";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2073;
		$categoria->marca_id =334;
		$categoria->modelo = "PREVIA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2074;
		$categoria->marca_id =334;
		$categoria->modelo = "PRIUS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2075;
		$categoria->marca_id =334;
		$categoria->modelo = "SIENNA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2076;
		$categoria->marca_id =334;
		$categoria->modelo = "STARLET";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2077;
		$categoria->marca_id =334;
		$categoria->modelo = "SUPRA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2078;
		$categoria->marca_id =334;
		$categoria->modelo = "TERCEL";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2079;
		$categoria->marca_id =334;
		$categoria->modelo = "VAN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2080;
		$categoria->marca_id =334;
		$categoria->modelo = "VENZA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2081;
		$categoria->marca_id =334;
		$categoria->modelo = "YARIS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2082;
		$categoria->marca_id =335;
		$categoria->modelo = "CENTAURO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2083;
		$categoria->marca_id =335;
		$categoria->modelo = "TURPIAL";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2084;
		$categoria->marca_id =336;
		$categoria->modelo = "BORA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2085;
		$categoria->marca_id =336;
		$categoria->modelo = "BRASILIA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2086;
		$categoria->marca_id =336;
		$categoria->modelo = "CABRIO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2087;
		$categoria->marca_id =336;
		$categoria->modelo = "CABRIOLET";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2088;
		$categoria->marca_id =336;
		$categoria->modelo = "CARAVELLE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2089;
		$categoria->marca_id =336;
		$categoria->modelo = "CC";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2090;
		$categoria->marca_id =336;
		$categoria->modelo = "CORRADO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2091;
		$categoria->marca_id =336;
		$categoria->modelo = "CROSS FOX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2092;
		$categoria->marca_id =336;
		$categoria->modelo = "DERBY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2093;
		$categoria->marca_id =336;
		$categoria->modelo = "EOS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2094;
		$categoria->marca_id =336;
		$categoria->modelo = "ESCARABAJO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2095;
		$categoria->marca_id =336;
		$categoria->modelo = "EUROVAN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2096;
		$categoria->marca_id =336;
		$categoria->modelo = "FOX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2097;
		$categoria->marca_id =336;
		$categoria->modelo = "GAZELLE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2098;
		$categoria->marca_id =336;
		$categoria->modelo = "GLI";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2099;
		$categoria->marca_id =336;
		$categoria->modelo = "GOL";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2100;
		$categoria->marca_id =336;
		$categoria->modelo = "GOLF";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2101;
		$categoria->marca_id =336;
		$categoria->modelo = "GTI";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2102;
		$categoria->marca_id =336;
		$categoria->modelo = "JETTA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2103;
		$categoria->marca_id =336;
		$categoria->modelo = "KOMBI";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2104;
		$categoria->marca_id =336;
		$categoria->modelo = "LUPO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2105;
		$categoria->marca_id =336;
		$categoria->modelo = "MULTIVAN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2106;
		$categoria->marca_id =336;
		$categoria->modelo = "NEW BEETLE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2107;
		$categoria->marca_id =336;
		$categoria->modelo = "PARATI";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2108;
		$categoria->marca_id =336;
		$categoria->modelo = "PASSAT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2109;
		$categoria->marca_id =336;
		$categoria->modelo = "PHAETON";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2110;
		$categoria->marca_id =336;
		$categoria->modelo = "POLO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2111;
		$categoria->marca_id =336;
		$categoria->modelo = "R32";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2112;
		$categoria->marca_id =336;
		$categoria->modelo = "RABBIT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2113;
		$categoria->marca_id =336;
		$categoria->modelo = "SANTANA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2114;
		$categoria->marca_id =336;
		$categoria->modelo = "SHARAN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2115;
		$categoria->marca_id =336;
		$categoria->modelo = "SPACEFOX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2116;
		$categoria->marca_id =336;
		$categoria->modelo = "TOURAN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2117;
		$categoria->marca_id =336;
		$categoria->modelo = "VANAGON";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2118;
		$categoria->marca_id =336;
		$categoria->modelo = "VENTO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2119;
		$categoria->marca_id =336;
		$categoria->modelo = "VOYAGE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2120;
		$categoria->marca_id =337;
		$categoria->modelo = "240";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2121;
		$categoria->marca_id =337;
		$categoria->modelo = "460";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2122;
		$categoria->marca_id =337;
		$categoria->modelo = "740";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2123;
		$categoria->marca_id =337;
		$categoria->modelo = "760";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2124;
		$categoria->marca_id =337;
		$categoria->modelo = "850";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2125;
		$categoria->marca_id =337;
		$categoria->modelo = "940";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2126;
		$categoria->marca_id =337;
		$categoria->modelo = "960";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2127;
		$categoria->marca_id =337;
		$categoria->modelo = "C30";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2128;
		$categoria->marca_id =337;
		$categoria->modelo = "C70";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2129;
		$categoria->marca_id =337;
		$categoria->modelo = "S40";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2130;
		$categoria->marca_id =337;
		$categoria->modelo = "S60";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2131;
		$categoria->marca_id =337;
		$categoria->modelo = "S70";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2132;
		$categoria->marca_id =337;
		$categoria->modelo = "S80";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2133;
		$categoria->marca_id =337;
		$categoria->modelo = "S90";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2134;
		$categoria->marca_id =337;
		$categoria->modelo = "V40";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2135;
		$categoria->marca_id =337;
		$categoria->modelo = "V50";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2136;
		$categoria->marca_id =337;
		$categoria->modelo = "V70";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2137;
		$categoria->marca_id =337;
		$categoria->modelo = "V90";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2138;
		$categoria->marca_id =338;
		$categoria->modelo = "SUPER VAN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2139;
		$categoria->marca_id =339;
		$categoria->modelo = "CABRIOLET";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2140;
		$categoria->marca_id =339;
		$categoria->modelo = "GV";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2141;
		$categoria->marca_id =340;
		$categoria->modelo = "Z100";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2142;
		$categoria->marca_id =340;
		$categoria->modelo = "Z300";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2143;
		$categoria->marca_id =341;
		$categoria->modelo = "RHINO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2144;
		$categoria->marca_id =341;
		$categoria->modelo = "YUKO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2145;
		$categoria->marca_id =342;
		$categoria->modelo = "ESCALADE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2146;
		$categoria->marca_id =343;
		$categoria->modelo = "SC1022";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2147;
		$categoria->marca_id =344;
		$categoria->modelo = "CH";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2148;
		$categoria->marca_id =345;
		$categoria->modelo = "GRAND TIGER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2149;
		$categoria->marca_id =346;
		$categoria->modelo = "APACHE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2150;
		$categoria->marca_id =346;
		$categoria->modelo = "AVALANCHE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2151;
		$categoria->marca_id =346;
		$categoria->modelo = "C 1500";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2152;
		$categoria->marca_id =346;
		$categoria->modelo = "C 2500";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2153;
		$categoria->marca_id =346;
		$categoria->modelo = "C10";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2154;
		$categoria->marca_id =346;
		$categoria->modelo = "C20";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2155;
		$categoria->marca_id =346;
		$categoria->modelo = "C30";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2156;
		$categoria->marca_id =346;
		$categoria->modelo = "CHEVY 500";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2157;
		$categoria->marca_id =346;
		$categoria->modelo = "COLORADO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2158;
		$categoria->marca_id =346;
		$categoria->modelo = "CORSA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2159;
		$categoria->marca_id =346;
		$categoria->modelo = "EL CAMINO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2160;
		$categoria->marca_id =346;
		$categoria->modelo = "K 2500";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2161;
		$categoria->marca_id =346;
		$categoria->modelo = "LUV";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2162;
		$categoria->marca_id =346;
		$categoria->modelo = "MONTANA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2163;
		$categoria->marca_id =346;
		$categoria->modelo = "R";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2164;
		$categoria->marca_id =346;
		$categoria->modelo = "S 10";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2165;
		$categoria->marca_id =346;
		$categoria->modelo = "SILVERADO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2166;
		$categoria->marca_id =346;
		$categoria->modelo = "SSR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2167;
		$categoria->marca_id =346;
		$categoria->modelo = "SUPER CARRY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2168;
		$categoria->marca_id =347;
		$categoria->modelo = "SOMOOTHING";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2169;
		$categoria->marca_id =348;
		$categoria->modelo = "FSO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2170;
		$categoria->marca_id =348;
		$categoria->modelo = "LABO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2171;
		$categoria->marca_id =349;
		$categoria->modelo = "HIJET";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2172;
		$categoria->marca_id =350;
		$categoria->modelo = "D 100";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2173;
		$categoria->marca_id =350;
		$categoria->modelo = "D 150";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2174;
		$categoria->marca_id =350;
		$categoria->modelo = "D 200";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2175;
		$categoria->marca_id =350;
		$categoria->modelo = "D 250";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2176;
		$categoria->marca_id =350;
		$categoria->modelo = "D 350";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2177;
		$categoria->marca_id =350;
		$categoria->modelo = "DAKOTA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2178;
		$categoria->marca_id =350;
		$categoria->modelo = "RAM";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2179;
		$categoria->marca_id =350;
		$categoria->modelo = "RAM BR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2180;
		$categoria->marca_id =350;
		$categoria->modelo = "RAM50";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2181;
		$categoria->marca_id =351;
		$categoria->modelo = "EQ";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2182;
		$categoria->marca_id =351;
		$categoria->modelo = "NOVILLA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2183;
		$categoria->marca_id =351;
		$categoria->modelo = "ZNA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2184;
		$categoria->marca_id =352;
		$categoria->modelo = "FIORINO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2185;
		$categoria->marca_id =352;
		$categoria->modelo = "PALIO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2186;
		$categoria->marca_id =352;
		$categoria->modelo = "PREMIO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2187;
		$categoria->marca_id =352;
		$categoria->modelo = "SPAZIO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2188;
		$categoria->marca_id =352;
		$categoria->modelo = "STRADA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2189;
		$categoria->marca_id =353;
		$categoria->modelo = "COURIER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2190;
		$categoria->marca_id =353;
		$categoria->modelo = "EXPLORER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2191;
		$categoria->marca_id =353;
		$categoria->modelo = "F 100";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2192;
		$categoria->marca_id =353;
		$categoria->modelo = "F 150";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2193;
		$categoria->marca_id =353;
		$categoria->modelo = "F 250";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2194;
		$categoria->marca_id =353;
		$categoria->modelo = "F 250 SUPER DUTY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2195;
		$categoria->marca_id =353;
		$categoria->modelo = "RANGER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2196;
		$categoria->marca_id =354;
		$categoria->modelo = "PU";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2197;
		$categoria->marca_id =355;
		$categoria->modelo = "CANYON";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2198;
		$categoria->marca_id =355;
		$categoria->modelo = "SIERRA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2199;
		$categoria->marca_id =355;
		$categoria->modelo = "SONOMA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2200;
		$categoria->marca_id =356;
		$categoria->modelo = "JETSTAR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2201;
		$categoria->marca_id =356;
		$categoria->modelo = "TROY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2202;
		$categoria->marca_id =357;
		$categoria->modelo = "DEER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2203;
		$categoria->marca_id =357;
		$categoria->modelo = "PROTEUS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2204;
		$categoria->marca_id =357;
		$categoria->modelo = "SAILOR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2205;
		$categoria->marca_id =357;
		$categoria->modelo = "WINGLE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2206;
		$categoria->marca_id =358;
		$categoria->modelo = "MINYI";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2207;
		$categoria->marca_id =359;
		$categoria->modelo = "HFJ";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2208;
		$categoria->marca_id =360;
		$categoria->modelo = "RIDGELINE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2209;
		$categoria->marca_id =361;
		$categoria->modelo = "H2";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2210;
		$categoria->marca_id =362;
		$categoria->modelo = "H 100";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2211;
		$categoria->marca_id =363;
		$categoria->modelo = "CXT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2212;
		$categoria->marca_id =364;
		$categoria->modelo = "HOMBRE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2213;
		$categoria->marca_id =364;
		$categoria->modelo = "LS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2214;
		$categoria->marca_id =364;
		$categoria->modelo = "S";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2215;
		$categoria->marca_id =364;
		$categoria->modelo = "TFR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2216;
		$categoria->marca_id =364;
		$categoria->modelo = "TFS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2217;
		$categoria->marca_id =365;
		$categoria->modelo = "T";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2218;
		$categoria->marca_id =366;
		$categoria->modelo = "COMANCHE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2219;
		$categoria->marca_id =366;
		$categoria->modelo = "J10";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2220;
		$categoria->marca_id =367;
		$categoria->modelo = "BAODIAN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2221;
		$categoria->marca_id =368;
		$categoria->modelo = "K1";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2222;
		$categoria->marca_id =369;
		$categoria->modelo = "IZH";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2223;
		$categoria->marca_id =370;
		$categoria->modelo = "27151";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2224;
		$categoria->marca_id =371;
		$categoria->modelo = "DEFENDER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2225;
		$categoria->marca_id =372;
		$categoria->modelo = "B";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2226;
		$categoria->marca_id =372;
		$categoria->modelo = "BT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2227;
		$categoria->marca_id =373;
		$categoria->modelo = "M";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2228;
		$categoria->marca_id =374;
		$categoria->modelo = "KUROBI";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2229;
		$categoria->marca_id =374;
		$categoria->modelo = "L200";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2230;
		$categoria->marca_id =374;
		$categoria->modelo = "MIGHTY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2231;
		$categoria->marca_id =374;
		$categoria->modelo = "RAIDER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2232;
		$categoria->marca_id =375;
		$categoria->modelo = "CHASIS CABINA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2233;
		$categoria->marca_id =375;
		$categoria->modelo = "FRONTIER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2234;
		$categoria->marca_id =375;
		$categoria->modelo = "PICKUP";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2235;
		$categoria->marca_id =375;
		$categoria->modelo = "TITAN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2236;
		$categoria->marca_id =376;
		$categoria->modelo = "ZB1022BDA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2237;
		$categoria->marca_id =377;
		$categoria->modelo = "PICK UP";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2238;
		$categoria->marca_id =378;
		$categoria->modelo = "AVILA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2239;
		$categoria->marca_id =378;
		$categoria->modelo = "KATA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2240;
		$categoria->marca_id =378;
		$categoria->modelo = "SPARTA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2241;
		$categoria->marca_id =379;
		$categoria->modelo = "PICK UP";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2242;
		$categoria->marca_id =380;
		$categoria->modelo = "BAJA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2243;
		$categoria->marca_id =381;
		$categoria->modelo = "CARRY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2244;
		$categoria->marca_id =382;
		$categoria->modelo = "HILUX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2245;
		$categoria->marca_id =382;
		$categoria->modelo = "LAND CRUISER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2246;
		$categoria->marca_id =382;
		$categoria->modelo = "PICK UP";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2247;
		$categoria->marca_id =382;
		$categoria->modelo = "T100";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2248;
		$categoria->marca_id =382;
		$categoria->modelo = "TACOMA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2249;
		$categoria->marca_id =382;
		$categoria->modelo = "TUNDRA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2250;
		$categoria->marca_id =383;
		$categoria->modelo = "39094";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2251;
		$categoria->marca_id =384;
		$categoria->modelo = "GOL";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2252;
		$categoria->marca_id =384;
		$categoria->modelo = "KOMBI";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2253;
		$categoria->marca_id =384;
		$categoria->modelo = "SAVEIRO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2254;
		$categoria->marca_id =385;
		$categoria->modelo = "LZW1010PL";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2255;
		$categoria->marca_id =386;
		$categoria->modelo = "ADMIRAL";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2256;
		$categoria->marca_id =386;
		$categoria->modelo = "GRAND TIGER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2257;
		$categoria->marca_id =387;
		$categoria->modelo = "MDX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2258;
		$categoria->marca_id =387;
		$categoria->modelo = "RDX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2259;
		$categoria->marca_id =387;
		$categoria->modelo = "SLX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2260;
		$categoria->marca_id =387;
		$categoria->modelo = "ZDX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2261;
		$categoria->marca_id =388;
		$categoria->modelo = "HUMMER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2262;
		$categoria->marca_id =389;
		$categoria->modelo = "ANACONDA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2263;
		$categoria->marca_id =389;
		$categoria->modelo = "BUFFALO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2264;
		$categoria->marca_id =389;
		$categoria->modelo = "DAKTARI";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2265;
		$categoria->marca_id =389;
		$categoria->modelo = "GRAN RANGER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2266;
		$categoria->marca_id =389;
		$categoria->modelo = "RANGER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2267;
		$categoria->marca_id =389;
		$categoria->modelo = "SPARTANA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2268;
		$categoria->marca_id =390;
		$categoria->modelo = "Q5";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2269;
		$categoria->marca_id =390;
		$categoria->modelo = "Q7";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2270;
		$categoria->marca_id =391;
		$categoria->modelo = "FREECLIMBER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2271;
		$categoria->marca_id =392;
		$categoria->modelo = "X1";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2272;
		$categoria->marca_id =392;
		$categoria->modelo = "X3";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2273;
		$categoria->marca_id =392;
		$categoria->modelo = "X5";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2274;
		$categoria->marca_id =392;
		$categoria->modelo = "X6";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2275;
		$categoria->marca_id =393;
		$categoria->modelo = "ENCLAVE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2276;
		$categoria->marca_id =393;
		$categoria->modelo = "RAINIER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2277;
		$categoria->marca_id =393;
		$categoria->modelo = "RENDEZVOUS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2278;
		$categoria->marca_id =394;
		$categoria->modelo = "ESCALADE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2279;
		$categoria->marca_id =394;
		$categoria->modelo = "SRX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2280;
		$categoria->marca_id =395;
		$categoria->modelo = "TIGGO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2281;
		$categoria->marca_id =395;
		$categoria->modelo = "X5";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2282;
		$categoria->marca_id =396;
		$categoria->modelo = "BLAZER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2283;
		$categoria->marca_id =396;
		$categoria->modelo = "CAPTIVA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2284;
		$categoria->marca_id =396;
		$categoria->modelo = "EQUINOX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2285;
		$categoria->marca_id =396;
		$categoria->modelo = "GRAND BLAZER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2286;
		$categoria->marca_id =396;
		$categoria->modelo = "GRAND VITARA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2287;
		$categoria->marca_id =396;
		$categoria->modelo = "JIMNY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2288;
		$categoria->marca_id =396;
		$categoria->modelo = "SAMURAI";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2289;
		$categoria->marca_id =396;
		$categoria->modelo = "SONORA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2290;
		$categoria->marca_id =396;
		$categoria->modelo = "SUBURBAN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2291;
		$categoria->marca_id =396;
		$categoria->modelo = "TAHOE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2292;
		$categoria->marca_id =396;
		$categoria->modelo = "TRACKER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2293;
		$categoria->marca_id =396;
		$categoria->modelo = "TRAILBLAZER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2294;
		$categoria->marca_id =396;
		$categoria->modelo = "TRAVERSE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2295;
		$categoria->marca_id =396;
		$categoria->modelo = "TROOPER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2296;
		$categoria->marca_id =396;
		$categoria->modelo = "VITARA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2297;
		$categoria->marca_id =397;
		$categoria->modelo = "ASPEN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2298;
		$categoria->marca_id =397;
		$categoria->modelo = "PACIFICA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2299;
		$categoria->marca_id =398;
		$categoria->modelo = "DUSTER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2300;
		$categoria->marca_id =399;
		$categoria->modelo = "KORANDO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2301;
		$categoria->marca_id =399;
		$categoria->modelo = "MUSSO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2302;
		$categoria->marca_id =400;
		$categoria->modelo = "FEROZA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2303;
		$categoria->marca_id =400;
		$categoria->modelo = "ROCKY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2304;
		$categoria->marca_id =400;
		$categoria->modelo = "TERIOS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2305;
		$categoria->marca_id =401;
		$categoria->modelo = "DAKOTA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2306;
		$categoria->marca_id =401;
		$categoria->modelo = "DURANGO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2307;
		$categoria->marca_id =401;
		$categoria->modelo = "JOURNEY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2308;
		$categoria->marca_id =401;
		$categoria->modelo = "NITRO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2309;
		$categoria->marca_id =401;
		$categoria->modelo = "RAM BR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2310;
		$categoria->marca_id =402;
		$categoria->modelo = "HAIMA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2311;
		$categoria->marca_id =403;
		$categoria->modelo = "BRONCO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2312;
		$categoria->marca_id =403;
		$categoria->modelo = "ECOSPORT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2313;
		$categoria->marca_id =403;
		$categoria->modelo = "EDGE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2314;
		$categoria->marca_id =403;
		$categoria->modelo = "ESCAPE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2315;
		$categoria->marca_id =403;
		$categoria->modelo = "EXCURSION";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2316;
		$categoria->marca_id =403;
		$categoria->modelo = "EXPEDITION";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2317;
		$categoria->marca_id =403;
		$categoria->modelo = "EXPLORER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2318;
		$categoria->marca_id =403;
		$categoria->modelo = "FLEX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2319;
		$categoria->marca_id =403;
		$categoria->modelo = "FREESTYLE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2320;
		$categoria->marca_id =403;
		$categoria->modelo = "FUSION";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2321;
		$categoria->marca_id =404;
		$categoria->modelo = "TRACKER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2322;
		$categoria->marca_id =405;
		$categoria->modelo = "ACADIA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2323;
		$categoria->marca_id =405;
		$categoria->modelo = "ENVOY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2324;
		$categoria->marca_id =405;
		$categoria->modelo = "JIMMY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2325;
		$categoria->marca_id =405;
		$categoria->modelo = "SUBURBAN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2326;
		$categoria->marca_id =405;
		$categoria->modelo = "TERRAIN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2327;
		$categoria->marca_id =405;
		$categoria->modelo = "TYPHOON";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2328;
		$categoria->marca_id =405;
		$categoria->modelo = "YUKON";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2329;
		$categoria->marca_id =406;
		$categoria->modelo = "COXSWAIN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2330;
		$categoria->marca_id =406;
		$categoria->modelo = "JETSTAR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2331;
		$categoria->marca_id =406;
		$categoria->modelo = "VICTOR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2332;
		$categoria->marca_id =407;
		$categoria->modelo = "HOVER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2333;
		$categoria->marca_id =407;
		$categoria->modelo = "PEGASUS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2334;
		$categoria->marca_id =407;
		$categoria->modelo = "SAFE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2335;
		$categoria->marca_id =408;
		$categoria->modelo = "7";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2336;
		$categoria->marca_id =409;
		$categoria->modelo = "CRV";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2337;
		$categoria->marca_id =409;
		$categoria->modelo = "ELEMENT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2338;
		$categoria->marca_id =409;
		$categoria->modelo = "HRV";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2339;
		$categoria->marca_id =409;
		$categoria->modelo = "PASSPORT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2340;
		$categoria->marca_id =409;
		$categoria->modelo = "PILOT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2341;
		$categoria->marca_id =410;
		$categoria->modelo = "C13";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2342;
		$categoria->marca_id =410;
		$categoria->modelo = "C3";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2343;
		$categoria->marca_id =410;
		$categoria->modelo = "SRV";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2344;
		$categoria->marca_id =411;
		$categoria->modelo = "H1";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2345;
		$categoria->marca_id =411;
		$categoria->modelo = "H2";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2346;
		$categoria->marca_id =411;
		$categoria->modelo = "H3";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2347;
		$categoria->marca_id =412;
		$categoria->modelo = "GALLOPER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2348;
		$categoria->marca_id =412;
		$categoria->modelo = "SANTA FE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2349;
		$categoria->marca_id =412;
		$categoria->modelo = "TERRACAN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2350;
		$categoria->marca_id =412;
		$categoria->modelo = "TUCSON";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2351;
		$categoria->marca_id =412;
		$categoria->modelo = "VERACRUZ";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2352;
		$categoria->marca_id =413;
		$categoria->modelo = "EX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2353;
		$categoria->marca_id =413;
		$categoria->modelo = "FX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2354;
		$categoria->marca_id =413;
		$categoria->modelo = "QX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2355;
		$categoria->marca_id =414;
		$categoria->modelo = "AMIGO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2356;
		$categoria->marca_id =414;
		$categoria->modelo = "ASCENDER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2357;
		$categoria->marca_id =414;
		$categoria->modelo = "AXIOM";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2358;
		$categoria->marca_id =414;
		$categoria->modelo = "CARIBE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2359;
		$categoria->marca_id =414;
		$categoria->modelo = "RODEO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2360;
		$categoria->marca_id =414;
		$categoria->modelo = "TROOPER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2361;
		$categoria->marca_id =414;
		$categoria->modelo = "VEHICROSS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2362;
		$categoria->marca_id =414;
		$categoria->modelo = "i-SERIES";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2363;
		$categoria->marca_id =415;
		$categoria->modelo = "REIN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2364;
		$categoria->marca_id =416;
		$categoria->modelo = "R";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2365;
		$categoria->marca_id =416;
		$categoria->modelo = "S";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2366;
		$categoria->marca_id =417;
		$categoria->modelo = "CHEROKEE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2367;
		$categoria->marca_id =417;
		$categoria->modelo = "CJ3";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2368;
		$categoria->marca_id =417;
		$categoria->modelo = "CJ5";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2369;
		$categoria->marca_id =417;
		$categoria->modelo = "CJ7";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2370;
		$categoria->marca_id =417;
		$categoria->modelo = "COMMANDER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2371;
		$categoria->marca_id =417;
		$categoria->modelo = "COMPASS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2372;
		$categoria->marca_id =417;
		$categoria->modelo = "GRAND CHEROKEE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2373;
		$categoria->marca_id =417;
		$categoria->modelo = "GRAND WAGONEER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2374;
		$categoria->marca_id =417;
		$categoria->modelo = "LIBERTY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2375;
		$categoria->marca_id =417;
		$categoria->modelo = "PATRIOT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2376;
		$categoria->marca_id =417;
		$categoria->modelo = "RENEGADO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2377;
		$categoria->marca_id =417;
		$categoria->modelo = "WAGONEER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2378;
		$categoria->marca_id =417;
		$categoria->modelo = "WRANGLER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2379;
		$categoria->marca_id =418;
		$categoria->modelo = "LANDWIND";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2380;
		$categoria->marca_id =419;
		$categoria->modelo = "BORREGO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2381;
		$categoria->marca_id =419;
		$categoria->modelo = "SORENTO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2382;
		$categoria->marca_id =419;
		$categoria->modelo = "SPORTAGE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2383;
		$categoria->marca_id =420;
		$categoria->modelo = "NIVA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2384;
		$categoria->marca_id =421;
		$categoria->modelo = "DEFENDER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2385;
		$categoria->marca_id =421;
		$categoria->modelo = "DISCOVERY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2386;
		$categoria->marca_id =421;
		$categoria->modelo = "FREELANDER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2387;
		$categoria->marca_id =421;
		$categoria->modelo = "LAND ROVER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2388;
		$categoria->marca_id =421;
		$categoria->modelo = "LR2";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2389;
		$categoria->marca_id =421;
		$categoria->modelo = "LR3";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2390;
		$categoria->marca_id =421;
		$categoria->modelo = "LR4";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2391;
		$categoria->marca_id =421;
		$categoria->modelo = "RANGE ROVER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2392;
		$categoria->marca_id =422;
		$categoria->modelo = "X3";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2393;
		$categoria->marca_id =422;
		$categoria->modelo = "X6";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2394;
		$categoria->marca_id =422;
		$categoria->modelo = "X9";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2395;
		$categoria->marca_id =423;
		$categoria->modelo = "GX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2396;
		$categoria->marca_id =423;
		$categoria->modelo = "LX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2397;
		$categoria->marca_id =423;
		$categoria->modelo = "RX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2398;
		$categoria->marca_id =424;
		$categoria->modelo = "AVIATOR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2399;
		$categoria->marca_id =424;
		$categoria->modelo = "MARK LT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2400;
		$categoria->marca_id =424;
		$categoria->modelo = "MKX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2401;
		$categoria->marca_id =424;
		$categoria->modelo = "NAVIGATOR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2402;
		$categoria->marca_id =425;
		$categoria->modelo = "CX";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2403;
		$categoria->marca_id =425;
		$categoria->modelo = "NAVAJO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2404;
		$categoria->marca_id =425;
		$categoria->modelo = "TRIBUTE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2405;
		$categoria->marca_id =426;
		$categoria->modelo = "GELANDEWAGEN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2406;
		$categoria->marca_id =426;
		$categoria->modelo = "GL";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2407;
		$categoria->marca_id =426;
		$categoria->modelo = "GLK";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2408;
		$categoria->marca_id =426;
		$categoria->modelo = "ML";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2409;
		$categoria->marca_id =427;
		$categoria->modelo = "MARINER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2410;
		$categoria->marca_id =427;
		$categoria->modelo = "MOUNTAINEER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2411;
		$categoria->marca_id =428;
		$categoria->modelo = "ENDEAVOR";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2412;
		$categoria->marca_id =428;
		$categoria->modelo = "EXPO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2413;
		$categoria->marca_id =428;
		$categoria->modelo = "FREECA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2414;
		$categoria->marca_id =428;
		$categoria->modelo = "MONTERO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2415;
		$categoria->marca_id =428;
		$categoria->modelo = "NATIVA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2416;
		$categoria->marca_id =428;
		$categoria->modelo = "OUTLANDER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2417;
		$categoria->marca_id =428;
		$categoria->modelo = "PAJERO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2418;
		$categoria->marca_id =429;
		$categoria->modelo = "XK";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2419;
		$categoria->marca_id =430;
		$categoria->modelo = "ARMADA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2420;
		$categoria->marca_id =430;
		$categoria->modelo = "JUKE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2421;
		$categoria->marca_id =430;
		$categoria->modelo = "MURANO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2422;
		$categoria->marca_id =430;
		$categoria->modelo = "PATHFINDER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2423;
		$categoria->marca_id =430;
		$categoria->modelo = "PATROL";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2424;
		$categoria->marca_id =430;
		$categoria->modelo = "QASHQAI";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2425;
		$categoria->marca_id =430;
		$categoria->modelo = "ROGUE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2426;
		$categoria->marca_id =430;
		$categoria->modelo = "TERRANO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2427;
		$categoria->marca_id =430;
		$categoria->modelo = "X TRAIL";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2428;
		$categoria->marca_id =430;
		$categoria->modelo = "XTERRA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2429;
		$categoria->marca_id =431;
		$categoria->modelo = "BRAVADA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2430;
		$categoria->marca_id =432;
		$categoria->modelo = "FRONTERA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2431;
		$categoria->marca_id =433;
		$categoria->modelo = "4007";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2432;
		$categoria->marca_id =434;
		$categoria->modelo = "AZTEK";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2433;
		$categoria->marca_id =434;
		$categoria->modelo = "TORRENT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2434;
		$categoria->marca_id =435;
		$categoria->modelo = "CAYENNE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2435;
		$categoria->marca_id =436;
		$categoria->modelo = "DUSTER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2436;
		$categoria->marca_id =436;
		$categoria->modelo = "KOLEOS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2437;
		$categoria->marca_id =437;
		$categoria->modelo = "09-jul";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2438;
		$categoria->marca_id =438;
		$categoria->modelo = "VUE";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2439;
		$categoria->marca_id =439;
		$categoria->modelo = "AURORA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2440;
		$categoria->marca_id =440;
		$categoria->modelo = "SCEO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2441;
		$categoria->marca_id =440;
		$categoria->modelo = "SRV";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2442;
		$categoria->marca_id =441;
		$categoria->modelo = "ACTYON";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2443;
		$categoria->marca_id =441;
		$categoria->modelo = "KORANDO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2444;
		$categoria->marca_id =441;
		$categoria->modelo = "MUSSO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2445;
		$categoria->marca_id =441;
		$categoria->modelo = "REXTON";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2446;
		$categoria->marca_id =442;
		$categoria->modelo = "PINZGAUER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2447;
		$categoria->marca_id =443;
		$categoria->modelo = "B9";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2448;
		$categoria->marca_id =443;
		$categoria->modelo = "FORESTER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2449;
		$categoria->marca_id =444;
		$categoria->modelo = "GRAND VITARA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2450;
		$categoria->marca_id =444;
		$categoria->modelo = "JIMNY";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2451;
		$categoria->marca_id =444;
		$categoria->modelo = "SAMURAI";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2452;
		$categoria->marca_id =444;
		$categoria->modelo = "SIDEKICK";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2453;
		$categoria->marca_id =444;
		$categoria->modelo = "VITARA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2454;
		$categoria->marca_id =444;
		$categoria->modelo = "X 90";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2455;
		$categoria->marca_id =444;
		$categoria->modelo = "XL7";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2456;
		$categoria->marca_id =445;
		$categoria->modelo = "SAFARI";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2457;
		$categoria->marca_id =446;
		$categoria->modelo = "TIUNA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2458;
		$categoria->marca_id =447;
		$categoria->modelo = "4RUNNER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2459;
		$categoria->marca_id =447;
		$categoria->modelo = "FJ CRUISER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2460;
		$categoria->marca_id =447;
		$categoria->modelo = "FORTUNER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2461;
		$categoria->marca_id =447;
		$categoria->modelo = "HIGHLANDER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2462;
		$categoria->marca_id =447;
		$categoria->modelo = "LAND CRUISER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2463;
		$categoria->marca_id =447;
		$categoria->modelo = "LAND CRUISER S.WAGON";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2464;
		$categoria->marca_id =447;
		$categoria->modelo = "RAV4";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2465;
		$categoria->marca_id =447;
		$categoria->modelo = "SEQUOIA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2466;
		$categoria->marca_id =447;
		$categoria->modelo = "TERIOS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2467;
		$categoria->marca_id =448;
		$categoria->modelo = "31519";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2468;
		$categoria->marca_id =449;
		$categoria->modelo = "FD";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2469;
		$categoria->marca_id =450;
		$categoria->modelo = "TIGUAN";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2470;
		$categoria->marca_id =450;
		$categoria->modelo = "TOUAREG";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2471;
		$categoria->marca_id =451;
		$categoria->modelo = "XC";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2472;
		$categoria->marca_id =452;
		$categoria->modelo = "LANDMARK";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2473;
		$categoria->marca_id =453;
		$categoria->modelo = "NOMAD";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2474;
		$categoria->marca_id =453;
		$categoria->modelo = "T200";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2475;
		$categoria->marca_id =454;
		$categoria->modelo = "MAXI";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2476;
		$categoria->marca_id =455;
		$categoria->modelo = "AVEO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2477;
		$categoria->marca_id =455;
		$categoria->modelo = "CAVALIER";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2478;
		$categoria->marca_id =455;
		$categoria->modelo = "CORSA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2479;
		$categoria->marca_id =455;
		$categoria->modelo = "ESTEEM";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2480;
		$categoria->marca_id =456;
		$categoria->modelo = "524";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2481;
		$categoria->marca_id =456;
		$categoria->modelo = "SUPER NOVA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2482;
		$categoria->marca_id =457;
		$categoria->modelo = "CIELO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2483;
		$categoria->marca_id =457;
		$categoria->modelo = "LANOS";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2484;
		$categoria->marca_id =457;
		$categoria->modelo = "LEGANZA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2485;
		$categoria->marca_id =457;
		$categoria->modelo = "NUBIRA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2486;
		$categoria->marca_id =458;
		$categoria->modelo = "SIENA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2487;
		$categoria->marca_id =458;
		$categoria->modelo = "TEMPRA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2488;
		$categoria->marca_id =459;
		$categoria->modelo = "ACCENT";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2489;
		$categoria->marca_id =459;
		$categoria->modelo = "ELANTRA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2490;
		$categoria->marca_id =459;
		$categoria->modelo = "EXCEL";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2491;
		$categoria->marca_id =459;
		$categoria->modelo = "SONATA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2492;
		$categoria->marca_id =460;
		$categoria->modelo = "RIO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2493;
		$categoria->marca_id =461;
		$categoria->modelo = "323";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2494;
		$categoria->marca_id =462;
		$categoria->modelo = "SIGNO";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2495;
		$categoria->marca_id =463;
		$categoria->modelo = "SENTRA";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2496;
		$categoria->marca_id =464;
		$categoria->modelo = "19";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2497;
		$categoria->marca_id =464;
		$categoria->modelo = "SYMBOL";
		$categoria->save();

		$categoria = new Modelo();
		$categoria->id = 2498;
		$categoria->marca_id =465;
		$categoria->modelo = "SANTANA";
		$categoria->save();    	

    }
}