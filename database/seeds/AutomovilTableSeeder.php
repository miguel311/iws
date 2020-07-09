<?php

use Illuminate\Database\Seeder;
use App\Usage;
use App\Brand;
use App\CarModel;

class AutomovilTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

		// usages
		$categoria = new Usage();
		$categoria->id =2;
		$categoria->usages ="PARTICULAR";
		$categoria->save();

		$categoria = new Usage();
		$categoria->id =3;
		$categoria->usages ="RUSTICO";
		$categoria->save();

		$categoria = new Usage();
		$categoria->id =4;
		$categoria->usages ="PICK UP";
		$categoria->save();

		$categoria = new Usage();
		$categoria->id =5;
		$categoria->usages ="CARGA";
		$categoria->save();

		$categoria = new Usage();
		$categoria->id =6;
		$categoria->usages ="MOTO";
		$categoria->save();

		$categoria = new Usage();
		$categoria->id =7;
		$categoria->usages ="AUTOBUSES / AUTOBUSETES";
		$categoria->save();

		$categoria = new Usage();
		$categoria->id =8;
		$categoria->usages ="TAXI";
		$categoria->save();






		// brands
		$categoria = new Brand();
		$categoria->id =1;
		$categoria->usage_id =7;
		$categoria->brands = "AUTOBUSES";
		$categoria->save();


		$categoria = new Brand();
		$categoria->id =2;
		$categoria->usage_id =7;
		$categoria->brands = "BUSSCAR";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =3;
		$categoria->usage_id =7;
		$categoria->brands = "ENCAVA";
		$categoria->save();


		$categoria = new Brand();
		$categoria->id =4;
		$categoria->usage_id =7;
		$categoria->brands = "FIAT";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =5;
		$categoria->usage_id =7;
		$categoria->brands = "GOLDEN DRAGON";
		$categoria->save();


		$categoria = new Brand();
		$categoria->id =6;
		$categoria->usage_id =7;
		$categoria->brands = "IVECO";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =7;
		$categoria->usage_id =7;
		$categoria->brands = "MARCOPOLO";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =8;
		$categoria->usage_id =7;
		$categoria->brands = "MERCEDES BENZ";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =9;
		$categoria->usage_id =7;
		$categoria->brands = "SCANIA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =10;
		$categoria->usage_id =7;
		$categoria->brands = "VOLKSWAGEN";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =11;
		$categoria->usage_id =7;
		$categoria->brands = "VOLVO";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =12;
		$categoria->usage_id =7;
		$categoria->brands = "YUTONG";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =13;
		$categoria->usage_id =7;
		$categoria->brands = "ZHONG TONG";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =14;
		$categoria->usage_id =7;
		$categoria->brands = "ALKON";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =15;
		$categoria->usage_id =7;
		$categoria->brands = "ASIA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =16;
		$categoria->usage_id =7;
		$categoria->brands = "AUTOBUSES";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =17;
		$categoria->usage_id =7;
		$categoria->brands = "AUTOGAGO";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =18;
		$categoria->usage_id =7;
		$categoria->brands = "BLUE BIRD";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =19;
		$categoria->usage_id =7;
		$categoria->brands = "BUSSCAR";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =20;
		$categoria->usage_id =7;
		$categoria->brands = "CHERY";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =21;
		$categoria->usage_id =7;
		$categoria->brands = "CHEVROLET";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =22;
		$categoria->usage_id =7;
		$categoria->brands = "CITROEN";
		$categoria->save();


		$categoria = new Brand();
		$categoria->id =23;
		$categoria->usage_id =7;
		$categoria->brands = "DODGE";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =24;
		$categoria->usage_id =7;
		$categoria->brands = "DONG_FENG";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =25;
		$categoria->usage_id =7;
		$categoria->brands = "EBRO";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =26;
		$categoria->usage_id =7;
		$categoria->brands = "ENCAVA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =27;
		$categoria->usage_id =7;
		$categoria->brands = "FANABUS";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =28;
		$categoria->usage_id =7;
		$categoria->brands = "FIAT";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =29;
		$categoria->usage_id =7;
		$categoria->brands = "FORD";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =30;
		$categoria->usage_id =7;
		$categoria->brands = "FOTON";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =31;
		$categoria->usage_id =7;
		$categoria->brands = "GMC";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =32;
		$categoria->usage_id =7;
		$categoria->brands = "GOLDEN DRAGON";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =33;
		$categoria->usage_id =7;
		$categoria->brands = "GREAT WALL MOTORS";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =34;
		$categoria->usage_id =7;
		$categoria->brands = "HAFEI";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =35;
		$categoria->usage_id =7;
		$categoria->brands = "HINO";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =36;
		$categoria->usage_id =7;
		$categoria->brands = "HYUNDAI";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =37;
		$categoria->usage_id =7;
		$categoria->brands = "INNOCENTI";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =38;
		$categoria->usage_id =7;
		$categoria->brands = "INTERNATIONAL";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =39;
		$categoria->usage_id =7;
		$categoria->brands = "IPV";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =40;
		$categoria->usage_id =7;
		$categoria->brands = "IVECO";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =41;
		$categoria->usage_id =7;
		$categoria->brands = "JAC";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =42;
		$categoria->usage_id =7;
		$categoria->brands = "KAMAZ";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =43;
		$categoria->usage_id =7;
		$categoria->brands = "KIA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =44;
		$categoria->usage_id =7;
		$categoria->brands = "MARCOPOLO";
		$categoria->save();


		$categoria = new Brand();
		$categoria->id =45;
		$categoria->usage_id =7;
		$categoria->brands = "MAZ";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =46;
		$categoria->usage_id =7;
		$categoria->brands = "MERCEDES BENZ";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =47;
		$categoria->usage_id =7;
		$categoria->brands = "MITSUBISHI";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =48;
		$categoria->usage_id =7;
		$categoria->brands = "MUDAN";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =49;
		$categoria->usage_id =7;
		$categoria->brands = "NEOBUS";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =50;
		$categoria->usage_id =7;
		$categoria->brands = "NISSAN";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =51;
		$categoria->usage_id =7;
		$categoria->brands = "PEGASO";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =52;
		$categoria->usage_id =7;
		$categoria->brands = "PEUGEOT";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =53;
		$categoria->usage_id =7;
		$categoria->brands = "POLARSUN";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =54;
		$categoria->usage_id =7;
		$categoria->brands = "SCANIA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =55;
		$categoria->usage_id =7;
		$categoria->brands = "SUMO";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =56;
		$categoria->usage_id =7;
		$categoria->brands = "TOYOTA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =57;
		$categoria->usage_id =7;
		$categoria->brands = "VOLARE";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =58;
		$categoria->usage_id =7;
		$categoria->brands = "VOLKSWAGEN";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =59;
		$categoria->usage_id =7;
		$categoria->brands = "VOLVO";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =60;
		$categoria->usage_id =7;
		$categoria->brands = "YUTONG";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =61;
		$categoria->usage_id =7;
		$categoria->brands = "ZHONG TONG";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =62;
		$categoria->usage_id =5;
		$categoria->brands = "AQ";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =63;
		$categoria->usage_id =5;
		$categoria->brands = "ASTRA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =64;
		$categoria->usage_id =5;
		$categoria->brands = "BAIEC";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =65;
		$categoria->usage_id =5;
		$categoria->brands = "CAPACITY";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =66;
		$categoria->usage_id =5;
		$categoria->brands = "CHERY";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =67;
		$categoria->usage_id =5;
		$categoria->brands = "CHEVROLET";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =68;
		$categoria->usage_id =5;
		$categoria->brands = "CITROEN";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =69;
		$categoria->usage_id =5;
		$categoria->brands = "DAEWOO";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =70;
		$categoria->usage_id =5;
		$categoria->brands = "DAF";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =71;
		$categoria->usage_id =5;
		$categoria->brands = "DAIHATSU";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =72;
		$categoria->usage_id =5;
		$categoria->brands = "DODGE";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =73;
		$categoria->usage_id =5;
		$categoria->brands = "DONG_FENG";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =74;
		$categoria->usage_id =5;
		$categoria->brands = "FANABUS";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =75;
		$categoria->usage_id =5;
		$categoria->brands = "FARGO";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =76;
		$categoria->usage_id =5;
		$categoria->brands = "FAW";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =77;
		$categoria->usage_id =5;
		$categoria->brands = "FIAT";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =78;
		$categoria->usage_id =5;
		$categoria->brands = "FORD";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =79;
		$categoria->usage_id =5;
		$categoria->brands = "FOTON";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =80;
		$categoria->usage_id =5;
		$categoria->brands = "FREIGHTLINER";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =81;
		$categoria->usage_id =5;
		$categoria->brands = "GMC";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =82;
		$categoria->usage_id =5;
		$categoria->brands = "GREAT WALL MOTORS";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =83;
		$categoria->usage_id =5;
		$categoria->brands = "HAFEI";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =84;
		$categoria->usage_id =5;
		$categoria->brands = "HEIBAO";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =85;
		$categoria->usage_id =5;
		$categoria->brands = "HINO";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =86;
		$categoria->usage_id =5;
		$categoria->brands = "HYUNDAI";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =87;
		$categoria->usage_id =5;
		$categoria->brands = "INTERNATIONAL";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =88;
		$categoria->usage_id =5;
		$categoria->brands = "IPV";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =89;
		$categoria->usage_id =5;
		$categoria->brands = "ISUZU";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =90;
		$categoria->usage_id =5;
		$categoria->brands = "IVECO";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =91;
		$categoria->usage_id =5;
		$categoria->brands = "JAC";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =92;
		$categoria->usage_id =5;
		$categoria->brands = "JINBEI";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =93;
		$categoria->usage_id =5;
		$categoria->brands = "JMC";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =94;
		$categoria->usage_id =5;
		$categoria->brands = "KAMA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =95;
		$categoria->usage_id =5;
		$categoria->brands = "KAMAZ";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =96;
		$categoria->usage_id =5;
		$categoria->brands = "KENWORTH";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =97;
		$categoria->usage_id =5;
		$categoria->brands = "KIA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =98;
		$categoria->usage_id =5;
		$categoria->brands = "LADA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =99;
		$categoria->usage_id =5;
		$categoria->brands = "LDV";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =100;
		$categoria->usage_id =5;
		$categoria->brands = "LIFAN";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =101;
		$categoria->usage_id =5;
		$categoria->brands = "MACK";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =102;
		$categoria->usage_id =5;
		$categoria->brands = "MAN";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =103;
		$categoria->usage_id =5;
		$categoria->brands = "MARCHETTI";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =104;
		$categoria->usage_id =5;
		$categoria->brands = "MAZ";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =105;
		$categoria->usage_id =5;
		$categoria->brands = "MAZDA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =106;
		$categoria->usage_id =5;
		$categoria->brands = "MAZVEN";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =107;
		$categoria->usage_id =5;
		$categoria->brands = "MERCEDES BENZ";
		$categoria->save();
		
		$categoria = new Brand();
		$categoria->id =108;
		$categoria->usage_id =5;
		$categoria->brands = "MERCURY";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =109;
		$categoria->usage_id =5;
		$categoria->brands = "MITSUBISHI";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =110;
		$categoria->usage_id =5;
		$categoria->brands = "MUDAN";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =111;
		$categoria->usage_id =5;
		$categoria->brands = "NISSAN";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =112;
		$categoria->usage_id =5;
		$categoria->brands = "OSHKOSH";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =113;
		$categoria->usage_id =5;
		$categoria->brands = "PEGASO";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =114;
		$categoria->usage_id =5;
		$categoria->brands = "PETERBILT";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =115;
		$categoria->usage_id =5;
		$categoria->brands = "PEUGEOT";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =116;
		$categoria->usage_id =5;
		$categoria->brands = "POWERPLUS";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =117;
		$categoria->usage_id =5;
		$categoria->brands = "REMOLQUES";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =118;
		$categoria->usage_id =5;
		$categoria->brands = "RENAULT";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =119;
		$categoria->usage_id =5;
		$categoria->brands = "SAIC WULING";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =120;
		$categoria->usage_id =5;
		$categoria->brands = "SANY";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =121;
		$categoria->usage_id =5;
		$categoria->brands = "SCANIA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =122;
		$categoria->usage_id =5;
		$categoria->brands = "SEAT";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =123;
		$categoria->usage_id =5;
		$categoria->brands = "SINOTRUK";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =124;
		$categoria->usage_id =5;
		$categoria->brands = "STERLING";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =125;
		$categoria->usage_id =5;
		$categoria->brands = "SUZUKI";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =126;
		$categoria->usage_id =5;
		$categoria->brands = "TATRA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =127;
		$categoria->usage_id =5;
		$categoria->brands = "TOYOTA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =128;
		$categoria->usage_id =5;
		$categoria->brands = "UAZ";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =129;
		$categoria->usage_id =5;
		$categoria->brands = "VOLKSWAGEN";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =130;
		$categoria->usage_id =5;
		$categoria->brands = "VOLVO";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =131;
		$categoria->usage_id =5;
		$categoria->brands = "XCMG";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =132;
		$categoria->usage_id =5;
		$categoria->brands = "YUEJIN";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =133;
		$categoria->usage_id =6;
		$categoria->brands = "ADLY";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =134;
		$categoria->usage_id =6;
		$categoria->brands = "AG";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =135;
		$categoria->usage_id =6;
		$categoria->brands = "ALPHA STAR";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =136;
		$categoria->usage_id =6;
		$categoria->brands = "AMERICAN MOTORCYCLE";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =137;
		$categoria->usage_id =6;
		$categoria->brands = "APRILIA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =138;
		$categoria->usage_id =6;
		$categoria->brands = "ARCTIC_CAT";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =139;
		$categoria->usage_id =6;
		$categoria->brands = "ATALA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =140;
		$categoria->usage_id =6;
		$categoria->brands = "AVA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =141;
		$categoria->usage_id =6;
		$categoria->brands = "BAJAJ";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =142;
		$categoria->usage_id =6;
		$categoria->brands = "BENELLI";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =143;
		$categoria->usage_id =6;
		$categoria->brands = "BERA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =144;
		$categoria->usage_id =6;
		$categoria->brands = "BIG_BEAR_CHOPPERS";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =145;
		$categoria->usage_id =6;
		$categoria->brands = "BMW";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =146;
		$categoria->usage_id =6;
		$categoria->brands = "BOMBARDIER";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =147;
		$categoria->usage_id =6;
		$categoria->brands = "BUELL";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =148;
		$categoria->usage_id =6;
		$categoria->brands = "CAGIVA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =149;
		$categoria->usage_id =6;
		$categoria->brands = "CAN_AM";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =150;
		$categoria->usage_id =6;
		$categoria->brands = "CHUNFENG";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =151;
		$categoria->usage_id =6;
		$categoria->brands = "DADDY";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =152;
		$categoria->usage_id =6;
		$categoria->brands = "DAIFO";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =153;
		$categoria->usage_id =6;
		$categoria->brands = "DAYANG";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =154;
		$categoria->usage_id =6;
		$categoria->brands = "DAZON";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =155;
		$categoria->usage_id =6;
		$categoria->brands = "DENUTA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =156;
		$categoria->usage_id =6;
		$categoria->brands = "DERBI";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =157;
		$categoria->usage_id =6;
		$categoria->brands = "DUCATI";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =158;
		$categoria->usage_id =6;
		$categoria->brands = "E_TON";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =159;
		$categoria->usage_id =6;
		$categoria->brands = "FEIYING";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =160;
		$categoria->usage_id =6;
		$categoria->brands = "GAS GAS";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =161;
		$categoria->usage_id =6;
		$categoria->brands = "GEELY";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =162;
		$categoria->usage_id =6;
		$categoria->brands = "GILERA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =163;
		$categoria->usage_id =6;
		$categoria->brands = "GUANJUN";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =164;
		$categoria->usage_id =6;
		$categoria->brands = "GUZZI";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =165;
		$categoria->usage_id =6;
		$categoria->brands = "HAOJIN";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =166;
		$categoria->usage_id =6;
		$categoria->brands = "HAOJUE";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =167;
		$categoria->usage_id =6;
		$categoria->brands = "HAOTIAN";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =168;
		$categoria->usage_id =6;
		$categoria->brands = "HARLEY_DAVIDSON";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =169;
		$categoria->usage_id =6;
		$categoria->brands = "HONDA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =170;
		$categoria->usage_id =6;
		$categoria->brands = "HUAWIN";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =171;
		$categoria->usage_id =6;
		$categoria->brands = "HUSQVARNA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =172;
		$categoria->usage_id =6;
		$categoria->brands = "HYOSUNG";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =173;
		$categoria->usage_id =6;
		$categoria->brands = "ITALJET";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =174;
		$categoria->usage_id =6;
		$categoria->brands = "JAWA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =175;
		$categoria->usage_id =6;
		$categoria->brands = "JIALING";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =176;
		$categoria->usage_id =6;
		$categoria->brands = "JIANCHE";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =177;
		$categoria->usage_id =6;
		$categoria->brands = "JIEDA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =178;
		$categoria->usage_id =6;
		$categoria->brands = "JINCHENG";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =179;
		$categoria->usage_id =6;
		$categoria->brands = "JINLUN";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =180;
		$categoria->usage_id =6;
		$categoria->brands = "JONWAY";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =181;
		$categoria->usage_id =6;
		$categoria->brands = "JUVE";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =182;
		$categoria->usage_id =6;
		$categoria->brands = "KAWASAKI";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =183;
		$categoria->usage_id =6;
		$categoria->brands = "KEEWAY";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =184;
		$categoria->usage_id =6;
		$categoria->brands = "KINROAD";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =185;
		$categoria->usage_id =6;
		$categoria->brands = "KTM";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =186;
		$categoria->usage_id =6;
		$categoria->brands = "KUMOTO";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =187;
		$categoria->usage_id =6;
		$categoria->brands = "KYMCO";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =188;
		$categoria->usage_id =6;
		$categoria->brands = "KYOTO";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =189;
		$categoria->usage_id =6;
		$categoria->brands = "LAVERDA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =190;
		$categoria->usage_id =6;
		$categoria->brands = "LIFAN";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =191;
		$categoria->usage_id =6;
		$categoria->brands = "LINGYUN";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =192;
		$categoria->usage_id =6;
		$categoria->brands = "LINHAI";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =193;
		$categoria->usage_id =6;
		$categoria->brands = "LML";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =194;
		$categoria->usage_id =6;
		$categoria->brands = "LONCIN";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =195;
		$categoria->usage_id =6;
		$categoria->brands = "MALAGUTI";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =196;
		$categoria->usage_id =6;
		$categoria->brands = "MINSK";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =197;
		$categoria->usage_id =6;
		$categoria->brands = "MV AGUSTA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =198;
		$categoria->usage_id =6;
		$categoria->brands = "NANFANG";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =199;
		$categoria->usage_id =6;
		$categoria->brands = "NIPPONIA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =200;
		$categoria->usage_id =6;
		$categoria->brands = "PEUGEOT";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =201;
		$categoria->usage_id =6;
		$categoria->brands = "PGO";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =202;
		$categoria->usage_id =6;
		$categoria->brands = "PIAGGIO";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =203;
		$categoria->usage_id =6;
		$categoria->brands = "PIONEER";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =204;
		$categoria->usage_id =6;
		$categoria->brands = "POLARIS";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =205;
		$categoria->usage_id =6;
		$categoria->brands = "QINGQI";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =206;
		$categoria->usage_id =6;
		$categoria->brands = "RIO";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =207;
		$categoria->usage_id =6;
		$categoria->brands = "ROFERCA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =208;
		$categoria->usage_id =6;
		$categoria->brands = "SENKE";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =209;
		$categoria->usage_id =6;
		$categoria->brands = "SHINERAY";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =210;
		$categoria->usage_id =6;
		$categoria->brands = "SKYGO";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =211;
		$categoria->usage_id =6;
		$categoria->brands = "SNOW";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =212;
		$categoria->usage_id =6;
		$categoria->brands = "SUKIDA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =213;
		$categoria->usage_id =6;
		$categoria->brands = "SUMO";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =214;
		$categoria->usage_id =6;
		$categoria->brands = "SUNDIRO";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =215;
		$categoria->usage_id =6;
		$categoria->brands = "SUZUKI";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =216;
		$categoria->usage_id =6;
		$categoria->brands = "SYM";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =217;
		$categoria->usage_id =6;
		$categoria->brands = "TRIUMPH";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =218;
		$categoria->usage_id =6;
		$categoria->brands = "TVS";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =219;
		$categoria->usage_id =6;
		$categoria->brands = "UNICO";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =220;
		$categoria->usage_id =6;
		$categoria->brands = "UNITED MOTORS";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =221;
		$categoria->usage_id =6;
		$categoria->brands = "VENSUN";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =222;
		$categoria->usage_id =6;
		$categoria->brands = "VENTO";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =223;
		$categoria->usage_id =6;
		$categoria->brands = "VERUCCI";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =224;
		$categoria->usage_id =6;
		$categoria->brands = "VOSJDO";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =225;
		$categoria->usage_id =6;
		$categoria->brands = "WANGYE";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =226;
		$categoria->usage_id =6;
		$categoria->brands = "XINGFU";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =227;
		$categoria->usage_id =6;
		$categoria->brands = "YAMAHA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =228;
		$categoria->usage_id =6;
		$categoria->brands = "YAMATI";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =229;
		$categoria->usage_id =6;
		$categoria->brands = "YAMOTO";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =230;
		$categoria->usage_id =6;
		$categoria->brands = "YASUKI";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =231;
		$categoria->usage_id =6;
		$categoria->brands = "YIBEN";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =232;
		$categoria->usage_id =6;
		$categoria->brands = "YINGANG";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =233;
		$categoria->usage_id =6;
		$categoria->brands = "YUMBO";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =234;
		$categoria->usage_id =6;
		$categoria->brands = "ZNEN";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =235;
		$categoria->usage_id =6;
		$categoria->brands = "ZONGZHEN";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =236;
		$categoria->usage_id =6;
		$categoria->brands = "ZXMCO";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =237;
		$categoria->usage_id =2;
		$categoria->brands = "ACURA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =238;
		$categoria->usage_id =2;
		$categoria->brands = "ALFA ROMEO";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =239;
		$categoria->usage_id =2;
		$categoria->brands = "AMERICAN MOTORS";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =240;
		$categoria->usage_id =2;
		$categoria->brands = "ASIA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =241;
		$categoria->usage_id =2;
		$categoria->brands = "ASTON MARTIN";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =242;
		$categoria->usage_id =2;
		$categoria->brands = "AUDI";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =243;
		$categoria->usage_id =2;
		$categoria->brands = "BENTLEY";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =244;
		$categoria->usage_id =2;
		$categoria->brands = "BMW";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =245;
		$categoria->usage_id =2;
		$categoria->brands = "BRILLIANCE";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =246;
		$categoria->usage_id =2;
		$categoria->brands = "BUGATTI";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =247;
		$categoria->usage_id =2;
		$categoria->brands = "BUICK";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =248;
		$categoria->usage_id =2;
		$categoria->brands = "BYD AUTOS";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =249;
		$categoria->usage_id =2;
		$categoria->brands = "CADILLAC";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =250;
		$categoria->usage_id =2;
		$categoria->brands = "CHANA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =251;
		$categoria->usage_id =2;
		$categoria->brands = "CHANGHE";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =252;
		$categoria->usage_id =2;
		$categoria->brands = "CHERY";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =253;
		$categoria->usage_id =2;
		$categoria->brands = "CHEVROLET";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =254;
		$categoria->usage_id =2;
		$categoria->brands = "CHRYSLER";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =255;
		$categoria->usage_id =2;
		$categoria->brands = "CITROEN";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =256;
		$categoria->usage_id =2;
		$categoria->brands = "DACIA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =257;
		$categoria->usage_id =2;
		$categoria->brands = "DAEWOO";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =258;
		$categoria->usage_id =2;
		$categoria->brands = "DAIHATSU";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =259;
		$categoria->usage_id =2;
		$categoria->brands = "DMC";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =260;
		$categoria->usage_id =2;
		$categoria->brands = "DODGE";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =261;
		$categoria->usage_id =2;
		$categoria->brands = "DONG_FENG";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =262;
		$categoria->usage_id =2;
		$categoria->brands = "EAGLE";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =263;
		$categoria->usage_id =2;
		$categoria->brands = "FAMI";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =264;
		$categoria->usage_id =2;
		$categoria->brands = "FERRARI";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =265;
		$categoria->usage_id =2;
		$categoria->brands = "FIAT";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =266;
		$categoria->usage_id =2;
		$categoria->brands = "FORD";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =267;
		$categoria->usage_id =2;
		$categoria->brands = "GEELY";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =268;
		$categoria->usage_id =2;
		$categoria->brands = "GEO";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =269;
		$categoria->usage_id =2;
		$categoria->brands = "GMC";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =270;
		$categoria->usage_id =2;
		$categoria->brands = "GONOW";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =271;
		$categoria->usage_id =2;
		$categoria->brands = "GREAT WALL MOTORS";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =272;
		$categoria->usage_id =2;
		$categoria->brands = "HAFEI";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =273;
		$categoria->usage_id =2;
		$categoria->brands = "HAIMA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =274;
		$categoria->usage_id =2;
		$categoria->brands = "HAOQING";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =275;
		$categoria->usage_id =2;
		$categoria->brands = "HAWTAI";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =276;
		$categoria->usage_id =2;
		$categoria->brands = "HILLMAN";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =277;
		$categoria->usage_id =2;
		$categoria->brands = "HINO";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =278;
		$categoria->usage_id =2;
		$categoria->brands = "HONDA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =279;
		$categoria->usage_id =2;
		$categoria->brands = "HYUNDAI";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =280;
		$categoria->usage_id =2;
		$categoria->brands = "IKCO";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =281;
		$categoria->usage_id =2;
		$categoria->brands = "INFINITI";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =282;
		$categoria->usage_id =2;
		$categoria->brands = "ISUZU";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =283;
		$categoria->usage_id =2;
		$categoria->brands = "IVECO";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =284;
		$categoria->usage_id =2;
		$categoria->brands = "JADA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =285;
		$categoria->usage_id =2;
		$categoria->brands = "JAGUAR";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =286;
		$categoria->usage_id =2;
		$categoria->brands = "JEEP";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =287;
		$categoria->usage_id =2;
		$categoria->brands = "JIANGNAN";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =288;
		$categoria->usage_id =2;
		$categoria->brands = "JMC";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =289;
		$categoria->usage_id =2;
		$categoria->brands = "KIA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =290;
		$categoria->usage_id =2;
		$categoria->brands = "LADA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =291;
		$categoria->usage_id =2;
		$categoria->brands = "LAMBORGHINI";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =292;
		$categoria->usage_id =2;
		$categoria->brands = "LANCIA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =293;
		$categoria->usage_id =2;
		$categoria->brands = "LANDWIND";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =294;
		$categoria->usage_id =2;
		$categoria->brands = "LEXUS";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =295;
		$categoria->usage_id =2;
		$categoria->brands = "LIFAN";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =296;
		$categoria->usage_id =2;
		$categoria->brands = "LINCOLN";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =297;
		$categoria->usage_id =2;
		$categoria->brands = "LOTUS";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =298;
		$categoria->usage_id =2;
		$categoria->brands = "MASERATI";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =299;
		$categoria->usage_id =2;
		$categoria->brands = "MAYBACH";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =300;
		$categoria->usage_id =2;
		$categoria->brands = "MAZDA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =301;
		$categoria->usage_id =2;
		$categoria->brands = "MERCEDES BENZ";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =302;
		$categoria->usage_id =2;
		$categoria->brands = "MERCURY";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =303;
		$categoria->usage_id =2;
		$categoria->brands = "MG";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =304;
		$categoria->usage_id =2;
		$categoria->brands = "MINI";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =305;
		$categoria->usage_id =2;
		$categoria->brands = "MITSUBISHI";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =306;
		$categoria->usage_id =2;
		$categoria->brands = "NISSAN";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =307;
		$categoria->usage_id =2;
		$categoria->brands = "OLDSMOBILE";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =308;
		$categoria->usage_id =2;
		$categoria->brands = "OPEL";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =309;
		$categoria->usage_id =2;
		$categoria->brands = "PACKARD";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =310;
		$categoria->usage_id =2;
		$categoria->brands = "PANTHER";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =311;
		$categoria->usage_id =2;
		$categoria->brands = "PEUGEOT";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =312;
		$categoria->usage_id =2;
		$categoria->brands = "PLYMOUTH";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =313;
		$categoria->usage_id =2;
		$categoria->brands = "PONTIAC";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =314;
		$categoria->usage_id =2;
		$categoria->brands = "PORSCHE";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =315;
		$categoria->usage_id =2;
		$categoria->brands = "RAMBLER";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =316;
		$categoria->usage_id =2;
		$categoria->brands = "RENAULT";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =317;
		$categoria->usage_id =2;
		$categoria->brands = "ROLLS ROYCE";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =318;
		$categoria->usage_id =2;
		$categoria->brands = "ROSENGART";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =319;
		$categoria->usage_id =2;
		$categoria->brands = "ROVER";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =320;
		$categoria->usage_id =2;
		$categoria->brands = "RUSTICOS VENEZUELA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =321;
		$categoria->usage_id =2;
		$categoria->brands = "SAAB";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =322;
		$categoria->usage_id =2;
		$categoria->brands = "SAIC WULING";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =323;
		$categoria->usage_id =2;
		$categoria->brands = "SAIPA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =324;
		$categoria->usage_id =2;
		$categoria->brands = "SATURN";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =325;
		$categoria->usage_id =2;
		$categoria->brands = "SCANIA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =326;
		$categoria->usage_id =2;
		$categoria->brands = "SCION";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =327;
		$categoria->usage_id =2;
		$categoria->brands = "SEAT";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =328;
		$categoria->usage_id =2;
		$categoria->brands = "SKODA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =329;
		$categoria->usage_id =2;
		$categoria->brands = "SMART";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =330;
		$categoria->usage_id =2;
		$categoria->brands = "SUBARU";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =331;
		$categoria->usage_id =2;
		$categoria->brands = "SUZUKI";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =332;
		$categoria->usage_id =2;
		$categoria->brands = "TATA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =333;
		$categoria->usage_id =2;
		$categoria->brands = "TESLA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =334;
		$categoria->usage_id =2;
		$categoria->brands = "TOYOTA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =335;
		$categoria->usage_id =2;
		$categoria->brands = "VENIRAUTO";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =336;
		$categoria->usage_id =2;
		$categoria->brands = "VOLKSWAGEN";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =337;
		$categoria->usage_id =2;
		$categoria->brands = "VOLVO";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =338;
		$categoria->usage_id =2;
		$categoria->brands = "WULING";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =339;
		$categoria->usage_id =2;
		$categoria->brands = "YUGO";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =340;
		$categoria->usage_id =2;
		$categoria->brands = "ZOTYE";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =341;
		$categoria->usage_id =4;
		$categoria->brands = "ARO";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =342;
		$categoria->usage_id =4;
		$categoria->brands = "CADILLAC";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =343;
		$categoria->usage_id =4;
		$categoria->brands = "CHANA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =344;
		$categoria->usage_id =4;
		$categoria->brands = "CHANGHE";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =345;
		$categoria->usage_id =4;
		$categoria->brands = "CHERY";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =346;
		$categoria->usage_id =4;
		$categoria->brands = "CHEVROLET";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =347;
		$categoria->usage_id =4;
		$categoria->brands = "DADI";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =348;
		$categoria->usage_id =4;
		$categoria->brands = "DAEWOO";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =349;
		$categoria->usage_id =4;
		$categoria->brands = "DAIHATSU";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =350;
		$categoria->usage_id =4;
		$categoria->brands = "DODGE";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =351;
		$categoria->usage_id =4;
		$categoria->brands = "DONG_FENG";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =352;
		$categoria->usage_id =4;
		$categoria->brands = "FIAT";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =353;
		$categoria->usage_id =4;
		$categoria->brands = "FORD";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =354;
		$categoria->usage_id =4;
		$categoria->brands = "GEELY";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =355;
		$categoria->usage_id =4;
		$categoria->brands = "GMC";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =356;
		$categoria->usage_id =4;
		$categoria->brands = "GONOW";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =357;
		$categoria->usage_id =4;
		$categoria->brands = "GREAT WALL MOTORS";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =358;
		$categoria->usage_id =4;
		$categoria->brands = "HAFEI";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =359;
		$categoria->usage_id =4;
		$categoria->brands = "HEIBAO";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =360;
		$categoria->usage_id =4;
		$categoria->brands = "HONDA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =361;
		$categoria->usage_id =4;
		$categoria->brands = "HUMMER";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =362;
		$categoria->usage_id =4;
		$categoria->brands = "HYUNDAI";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =363;
		$categoria->usage_id =4;
		$categoria->brands = "INTERNATIONAL";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =364;
		$categoria->usage_id =4;
		$categoria->brands = "ISUZU";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =365;
		$categoria->usage_id =4;
		$categoria->brands = "JADA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =366;
		$categoria->usage_id =4;
		$categoria->brands = "JEEP";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =367;
		$categoria->usage_id =4;
		$categoria->brands = "JMC";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =368;
		$categoria->usage_id =4;
		$categoria->brands = "KAWEI";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =369;
		$categoria->usage_id =4;
		$categoria->brands = "KIA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =370;
		$categoria->usage_id =4;
		$categoria->brands = "LADA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =371;
		$categoria->usage_id =4;
		$categoria->brands = "LAND ROVER";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =372;
		$categoria->usage_id =4;
		$categoria->brands = "MAZDA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =373;
		$categoria->usage_id =4;
		$categoria->brands = "MERCURY";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =374;
		$categoria->usage_id =4;
		$categoria->brands = "MITSUBISHI";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =375;
		$categoria->usage_id =4;
		$categoria->brands = "NISSAN";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =376;
		$categoria->usage_id =4;
		$categoria->brands = "QINGQI";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =377;
		$categoria->usage_id =4;
		$categoria->brands = "SAIC WULING";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =378;
		$categoria->usage_id =4;
		$categoria->brands = "SG";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =379;
		$categoria->usage_id =4;
		$categoria->brands = "SKODA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =380;
		$categoria->usage_id =4;
		$categoria->brands = "SUBARU";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =381;
		$categoria->usage_id =4;
		$categoria->brands = "SUZUKI";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =382;
		$categoria->usage_id =4;
		$categoria->brands = "TOYOTA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =383;
		$categoria->usage_id =4;
		$categoria->brands = "UAZ";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =384;
		$categoria->usage_id =4;
		$categoria->brands = "VOLKSWAGEN";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =385;
		$categoria->usage_id =4;
		$categoria->brands = "WULING";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =386;
		$categoria->usage_id =4;
		$categoria->brands = "ZHONGXING";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =387;
		$categoria->usage_id =3;
		$categoria->brands = "ACURA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =388;
		$categoria->usage_id =3;
		$categoria->brands = "AM GENERAL";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =389;
		$categoria->usage_id =3;
		$categoria->brands = "ARO";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =390;
		$categoria->usage_id =3;
		$categoria->brands = "AUDI";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =391;
		$categoria->usage_id =3;
		$categoria->brands = "BERTONE";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =392;
		$categoria->usage_id =3;
		$categoria->brands = "BMW";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =393;
		$categoria->usage_id =3;
		$categoria->brands = "BUICK";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =394;
		$categoria->usage_id =3;
		$categoria->brands = "CADILLAC";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =395;
		$categoria->usage_id =3;
		$categoria->brands = "CHERY";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =396;
		$categoria->usage_id =3;
		$categoria->brands = "CHEVROLET";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =397;
		$categoria->usage_id =3;
		$categoria->brands = "CHRYSLER";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =398;
		$categoria->usage_id =3;
		$categoria->brands = "DACIA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =399;
		$categoria->usage_id =3;
		$categoria->brands = "DAEWOO";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =400;
		$categoria->usage_id =3;
		$categoria->brands = "DAIHATSU";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =401;
		$categoria->usage_id =3;
		$categoria->brands = "DODGE";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =402;
		$categoria->usage_id =3;
		$categoria->brands = "DONG_FENG";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =403;
		$categoria->usage_id =3;
		$categoria->brands = "FORD";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =404;
		$categoria->usage_id =3;
		$categoria->brands = "GEO";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =405;
		$categoria->usage_id =3;
		$categoria->brands = "GMC";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =406;
		$categoria->usage_id =3;
		$categoria->brands = "GONOW";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =407;
		$categoria->usage_id =3;
		$categoria->brands = "GREAT WALL MOTORS";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =408;
		$categoria->usage_id =3;
		$categoria->brands = "HAIMA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =409;
		$categoria->usage_id =3;
		$categoria->brands = "HONDA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =410;
		$categoria->usage_id =3;
		$categoria->brands = "HONGXING";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =411;
		$categoria->usage_id =3;
		$categoria->brands = "HUMMER";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =412;
		$categoria->usage_id =3;
		$categoria->brands = "HYUNDAI";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =413;
		$categoria->usage_id =3;
		$categoria->brands = "INFINITI";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =414;
		$categoria->usage_id =3;
		$categoria->brands = "ISUZU";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =415;
		$categoria->usage_id =3;
		$categoria->brands = "JAC";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =416;
		$categoria->usage_id =3;
		$categoria->brands = "JADA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =417;
		$categoria->usage_id =3;
		$categoria->brands = "JEEP";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =418;
		$categoria->usage_id =3;
		$categoria->brands = "JMC";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =419;
		$categoria->usage_id =3;
		$categoria->brands = "KIA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =420;
		$categoria->usage_id =3;
		$categoria->brands = "LADA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =421;
		$categoria->usage_id =3;
		$categoria->brands = "LAND ROVER";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =422;
		$categoria->usage_id =3;
		$categoria->brands = "LANDWIND";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =423;
		$categoria->usage_id =3;
		$categoria->brands = "LEXUS";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =424;
		$categoria->usage_id =3;
		$categoria->brands = "LINCOLN";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =425;
		$categoria->usage_id =3;
		$categoria->brands = "MAZDA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =426;
		$categoria->usage_id =3;
		$categoria->brands = "MERCEDES BENZ";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =427;
		$categoria->usage_id =3;
		$categoria->brands = "MERCURY";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =428;
		$categoria->usage_id =3;
		$categoria->brands = "MITSUBISHI";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =429;
		$categoria->usage_id =3;
		$categoria->brands = "MOKE";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =430;
		$categoria->usage_id =3;
		$categoria->brands = "NISSAN";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =431;
		$categoria->usage_id =3;
		$categoria->brands = "OLDSMOBILE";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =432;
		$categoria->usage_id =3;
		$categoria->brands = "OPEL";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =433;
		$categoria->usage_id =3;
		$categoria->brands = "PEUGEOT";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =434;
		$categoria->usage_id =3;
		$categoria->brands = "PONTIAC";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =435;
		$categoria->usage_id =3;
		$categoria->brands = "PORSCHE";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =436;
		$categoria->usage_id =3;
		$categoria->brands = "RENAULT";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =437;
		$categoria->usage_id =3;
		$categoria->brands = "SAAB";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =438;
		$categoria->usage_id =3;
		$categoria->brands = "SATURN";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =439;
		$categoria->usage_id =3;
		$categoria->brands = "SG";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =440;
		$categoria->usage_id =3;
		$categoria->brands = "SHUANGHUAN AUTO";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =441;
		$categoria->usage_id =3;
		$categoria->brands = "SSANGYONG";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =442;
		$categoria->usage_id =3;
		$categoria->brands = "STEYR PUCH";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =443;
		$categoria->usage_id =3;
		$categoria->brands = "SUBARU";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =444;
		$categoria->usage_id =3;
		$categoria->brands = "SUZUKI";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =445;
		$categoria->usage_id =3;
		$categoria->brands = "TATA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =446;
		$categoria->usage_id =3;
		$categoria->brands = "TIUNA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =447;
		$categoria->usage_id =3;
		$categoria->brands = "TOYOTA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =448;
		$categoria->usage_id =3;
		$categoria->brands = "UAZ";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =449;
		$categoria->usage_id =3;
		$categoria->brands = "UFO";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =450;
		$categoria->usage_id =3;
		$categoria->brands = "VOLKSWAGEN";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =451;
		$categoria->usage_id =3;
		$categoria->brands = "VOLVO";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =452;
		$categoria->usage_id =3;
		$categoria->brands = "ZHONGXING";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =453;
		$categoria->usage_id =3;
		$categoria->brands = "ZOTYE";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =454;
		$categoria->usage_id =8;
		$categoria->brands = "ARO";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =455;
		$categoria->usage_id =8;
		$categoria->brands = "CHEVROLET";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =456;
		$categoria->usage_id =8;
		$categoria->brands = "DACIA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =457;
		$categoria->usage_id =8;
		$categoria->brands = "DAEWOO";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =458;
		$categoria->usage_id =8;
		$categoria->brands = "FIAT";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =459;
		$categoria->usage_id =8;
		$categoria->brands = "HYUNDAI";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =460;
		$categoria->usage_id =8;
		$categoria->brands = "KIA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =461;
		$categoria->usage_id =8;
		$categoria->brands = "MAZDA";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =462;
		$categoria->usage_id =8;
		$categoria->brands = "MITSUBISHI";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =463;
		$categoria->usage_id =8;
		$categoria->brands = "NISSAN";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =464;
		$categoria->usage_id =8;
		$categoria->brands = "RENAULT";
		$categoria->save();

		$categoria = new Brand();
		$categoria->id =465;
		$categoria->usage_id =8;
		$categoria->brands = "VOLKSWAGEN";
		$categoria->save();



		// models
		$categoria = new CarModel();
		$categoria->id = 9;
		$categoria->brand_id =1;
		$categoria->models = "TURISMO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 10;
		$categoria->brand_id =1;
		$categoria->models = "TURISMO DE LUJO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 11;
		$categoria->brand_id =2;
		$categoria->models = "JUMBUSS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 12;
		$categoria->brand_id =3;
		$categoria->models = "610";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 13;
		$categoria->brand_id =3;
		$categoria->models = "E";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 14;
		$categoria->brand_id =3;
		$categoria->models = "E-NT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 15;
		$categoria->brand_id =3;
		$categoria->models = "E-NT 3.100";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 16;
		$categoria->brand_id =3;
		$categoria->models = "E-NT2000";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 17;
		$categoria->brand_id =4;
		$categoria->models = "418/165";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 18;
		$categoria->brand_id =5;
		$categoria->models = "AMAZONAS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 19;
		$categoria->brand_id =5;
		$categoria->models = "ORINOCO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 20;
		$categoria->brand_id =6;
		$categoria->models = "CC";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 21;
		$categoria->brand_id =7;
		$categoria->models = "ANDARE CLASS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 22;
		$categoria->brand_id =7;
		$categoria->models = "PARADISO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 23;
		$categoria->brand_id =7;
		$categoria->models = "VIAGGIO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 24;
		$categoria->brand_id =8;
		$categoria->models = "CENTURY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 25;
		$categoria->brand_id =8;
		$categoria->models = "OF";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 26;
		$categoria->brand_id =8;
		$categoria->models = "OH";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 27;
		$categoria->brand_id =8;
		$categoria->models = "RSD";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 28;
		$categoria->brand_id =9;
		$categoria->models = "BUSSCAR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 29;
		$categoria->brand_id =9;
		$categoria->models = "CENTURY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 30;
		$categoria->brand_id =9;
		$categoria->models = "JUN BUSS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 31;
		$categoria->brand_id =9;
		$categoria->models = "MARCOPOLO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 32;
		$categoria->brand_id =9;
		$categoria->models = "NIELSON";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 33;
		$categoria->brand_id =10;
		$categoria->models = "17.210";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 34;
		$categoria->brand_id =10;
		$categoria->models = "18.310";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 35;
		$categoria->brand_id =11;
		$categoria->models = "ANDARE CLASS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 36;
		$categoria->brand_id =11;
		$categoria->models = "B10M";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 37;
		$categoria->brand_id =11;
		$categoria->models = "B12";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 38;
		$categoria->brand_id =11;
		$categoria->models = "PARADISO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 39;
		$categoria->brand_id =12;
		$categoria->models = "ZK";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 40;
		$categoria->brand_id =13;
		$categoria->models = "LCK";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 41;
		$categoria->brand_id =14;
		$categoria->models = "1,20E+20";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 42;
		$categoria->brand_id =14;
		$categoria->models = "Minibus";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 43;
		$categoria->brand_id =14;
		$categoria->models = "Periferico";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 44;
		$categoria->brand_id =15;
		$categoria->models = "TOPIC";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 45;
		$categoria->brand_id =16;
		$categoria->models = "TURISMO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 46;
		$categoria->brand_id =16;
		$categoria->models = "TURISMO DE LUJO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 47;
		$categoria->brand_id =16;
		$categoria->models = "URBANO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 48;
		$categoria->brand_id =17;
		$categoria->models = "GAVIOTA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 49;
		$categoria->brand_id =17;
		$categoria->models = "LEYLAND";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 50;
		$categoria->brand_id =17;
		$categoria->models = "METROBUS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 51;
		$categoria->brand_id =17;
		$categoria->models = "ORINOCO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 52;
		$categoria->brand_id =18;
		$categoria->models = "ALL AMERICAN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 53;
		$categoria->brand_id =18;
		$categoria->models = "BLUE BIRD";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 54;
		$categoria->brand_id =18;
		$categoria->models = "BUS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 55;
		$categoria->brand_id =19;
		$categoria->models = "MASSTER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 56;
		$categoria->brand_id =20;
		$categoria->models = "H5";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 57;
		$categoria->brand_id =21;
		$categoria->models = "CHEVY METRO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 58;
		$categoria->brand_id =21;
		$categoria->models = "CHR 660";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 59;
		$categoria->brand_id =21;
		$categoria->models = "CONDOR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 60;
		$categoria->brand_id =21;
		$categoria->models = "EXPRESS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 61;
		$categoria->brand_id =21;
		$categoria->models = "LV";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 62;
		$categoria->brand_id =21;
		$categoria->models = "NPR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 63;
		$categoria->brand_id =21;
		$categoria->models = "P 31";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 64;
		$categoria->brand_id =21;
		$categoria->models = "SPORT VAN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 65;
		$categoria->brand_id =21;
		$categoria->models = "SUPER CARRY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 66;
		$categoria->brand_id =21;
		$categoria->models = "TITAN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 67;
		$categoria->brand_id =21;
		$categoria->models = "WAYNE TRANSETTE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 68;
		$categoria->brand_id =22;
		$categoria->models = "JUMPER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 69;
		$categoria->brand_id =22;
		$categoria->models = "JUMPY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 70;
		$categoria->brand_id =23;
		$categoria->models = "B";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 71;
		$categoria->brand_id =23;
		$categoria->models = "B 350";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 72;
		$categoria->brand_id =23;
		$categoria->models = "RAM VAN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 73;
		$categoria->brand_id =24;
		$categoria->models = "EQ";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 74;
		$categoria->brand_id =25;
		$categoria->models = "60/6T";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 75;
		$categoria->brand_id =25;
		$categoria->models = "METROBUS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 76;
		$categoria->brand_id =25;
		$categoria->models = "MINIBUS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 77;
		$categoria->brand_id =26;
		$categoria->models = "600";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 78;
		$categoria->brand_id =26;
		$categoria->models = "610";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 79;
		$categoria->brand_id =26;
		$categoria->models = "E";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 80;
		$categoria->brand_id =26;
		$categoria->models = "E 410";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 81;
		$categoria->brand_id =26;
		$categoria->models = "E 5053";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 82;
		$categoria->brand_id =26;
		$categoria->models = "E 600";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 83;
		$categoria->brand_id =26;
		$categoria->models = "E NT 610";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 84;
		$categoria->brand_id =26;
		$categoria->models = "E-NT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 85;
		$categoria->brand_id =26;
		$categoria->models = "E-NT 3.100";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 86;
		$categoria->brand_id =26;
		$categoria->models = "E-NT 3.200";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 87;
		$categoria->brand_id =27;
		$categoria->models = "F";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 88;
		$categoria->brand_id =28;
		$categoria->models = "DUCATO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 89;
		$categoria->brand_id =29;
		$categoria->models = "B 350";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 90;
		$categoria->brand_id =29;
		$categoria->models = "B 600";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 91;
		$categoria->brand_id =29;
		$categoria->models = "B 750";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 92;
		$categoria->brand_id =29;
		$categoria->models = "CLUB WAGON";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 93;
		$categoria->brand_id =29;
		$categoria->models = "ECONOLINE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 94;
		$categoria->brand_id =29;
		$categoria->models = "F 350";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 95;
		$categoria->brand_id =29;
		$categoria->models = "F 550";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 96;
		$categoria->brand_id =30;
		$categoria->models = "VIEW";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 97;
		$categoria->brand_id =31;
		$categoria->models = "SAVANA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 98;
		$categoria->brand_id =31;
		$categoria->models = "VAN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 99;
		$categoria->brand_id =32;
		$categoria->models = "CARONI";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 100;
		$categoria->brand_id =32;
		$categoria->models = "NEVERI";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 101;
		$categoria->brand_id =32;
		$categoria->models = "SAFARI";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 102;
		$categoria->brand_id =33;
		$categoria->models = "PROTEUS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 103;
		$categoria->brand_id =34;
		$categoria->models = "ZHONGY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 104;
		$categoria->brand_id =35;
		$categoria->models = "FC4J";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 105;
		$categoria->brand_id =36;
		$categoria->models = "CHORUS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 106;
		$categoria->brand_id =36;
		$categoria->models = "COUNTY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 107;
		$categoria->brand_id =36;
		$categoria->models = "GRACE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 108;
		$categoria->brand_id =36;
		$categoria->models = "H 1";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 109;
		$categoria->brand_id =37;
		$categoria->models = "1981";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 110;
		$categoria->brand_id =38;
		$categoria->models = "1977";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 111;
		$categoria->brand_id =38;
		$categoria->models = "3000";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 112;
		$categoria->brand_id =39;
		$categoria->models = "M";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 113;
		$categoria->brand_id =40;
		$categoria->models = "40.12";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 114;
		$categoria->brand_id =40;
		$categoria->models = "49.12";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 115;
		$categoria->brand_id =40;
		$categoria->models = "59.12";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 116;
		$categoria->brand_id =40;
		$categoria->models = "70C16";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 117;
		$categoria->brand_id =40;
		$categoria->models = "CC";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 118;
		$categoria->brand_id =40;
		$categoria->models = "Turbo Daily";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 119;
		$categoria->brand_id =41;
		$categoria->models = "HK";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 120;
		$categoria->brand_id =42;
		$categoria->models = "4308";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 121;
		$categoria->brand_id =43;
		$categoria->models = "BESTA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 122;
		$categoria->brand_id =43;
		$categoria->models = "COMBI";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 123;
		$categoria->brand_id =43;
		$categoria->models = "K 2700";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 124;
		$categoria->brand_id =43;
		$categoria->models = "PREGIO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 125;
		$categoria->brand_id =44;
		$categoria->models = "PARADISO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 126;
		$categoria->brand_id =44;
		$categoria->models = "TORINO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 127;
		$categoria->brand_id =45;
		$categoria->models = "256";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 128;
		$categoria->brand_id =46;
		$categoria->models = "LO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 129;
		$categoria->brand_id =46;
		$categoria->models = "MB 100";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 130;
		$categoria->brand_id =46;
		$categoria->models = "MB 140";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 131;
		$categoria->brand_id =46;
		$categoria->models = "OF";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 132;
		$categoria->brand_id =46;
		$categoria->models = "OH";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 133;
		$categoria->brand_id =46;
		$categoria->models = "SPRINTER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 134;
		$categoria->brand_id =46;
		$categoria->models = "V";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 135;
		$categoria->brand_id =47;
		$categoria->models = "CANTER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 136;
		$categoria->brand_id =48;
		$categoria->models = "MD";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 137;
		$categoria->brand_id =49;
		$categoria->models = "THUNDER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 138;
		$categoria->brand_id =50;
		$categoria->models = "CIVILIAN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 139;
		$categoria->brand_id =50;
		$categoria->models = "URVAN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 140;
		$categoria->brand_id =51;
		$categoria->models = "5.036";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 141;
		$categoria->brand_id =51;
		$categoria->models = "5.231";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 142;
		$categoria->brand_id =51;
		$categoria->models = "5232";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 143;
		$categoria->brand_id =52;
		$categoria->models = "EXPERT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 144;
		$categoria->brand_id =52;
		$categoria->models = "J5";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 145;
		$categoria->brand_id =53;
		$categoria->models = "SZS6503A21401";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 146;
		$categoria->brand_id =54;
		$categoria->models = "MARCOPOLO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 147;
		$categoria->brand_id =54;
		$categoria->models = "PARADISO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 148;
		$categoria->brand_id =55;
		$categoria->models = "KOSTER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 149;
		$categoria->brand_id =56;
		$categoria->models = "COASTER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 150;
		$categoria->brand_id =56;
		$categoria->models = "HIACE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 151;
		$categoria->brand_id =56;
		$categoria->models = "LAND CRUISER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 152;
		$categoria->brand_id =57;
		$categoria->models = "W9";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 153;
		$categoria->brand_id =58;
		$categoria->models = "17.240";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 154;
		$categoria->brand_id =58;
		$categoria->models = "9.150";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 155;
		$categoria->brand_id =58;
		$categoria->models = "KOMBI";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 156;
		$categoria->brand_id =59;
		$categoria->models = "B12";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 157;
		$categoria->brand_id =60;
		$categoria->models = "ZK";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 158;
		$categoria->brand_id =61;
		$categoria->models = "LCK";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 159;
		$categoria->brand_id =62;
		$categoria->models = "11200";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 160;
		$categoria->brand_id =63;
		$categoria->models = "HD6";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 161;
		$categoria->brand_id =63;
		$categoria->models = "HD7";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 162;
		$categoria->brand_id =63;
		$categoria->models = "HD8";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 163;
		$categoria->brand_id =64;
		$categoria->models = "BJ";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 164;
		$categoria->brand_id =65;
		$categoria->models = "TJ";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 165;
		$categoria->brand_id =66;
		$categoria->models = "H5";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 166;
		$categoria->brand_id =67;
		$categoria->models = "6200";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 167;
		$categoria->brand_id =67;
		$categoria->models = "ARGOSY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 168;
		$categoria->brand_id =67;
		$categoria->models = "ASTRO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 169;
		$categoria->brand_id =67;
		$categoria->models = "BRIGADIER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 170;
		$categoria->brand_id =67;
		$categoria->models = "C 3500";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 171;
		$categoria->brand_id =67;
		$categoria->models = "C30";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 172;
		$categoria->brand_id =67;
		$categoria->models = "C31";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 173;
		$categoria->brand_id =67;
		$categoria->models = "C40";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 174;
		$categoria->brand_id =67;
		$categoria->models = "C50";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 175;
		$categoria->brand_id =67;
		$categoria->models = "C5500";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 176;
		$categoria->brand_id =67;
		$categoria->models = "C60";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 177;
		$categoria->brand_id =67;
		$categoria->models = "C600";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 178;
		$categoria->brand_id =67;
		$categoria->models = "C6500";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 179;
		$categoria->brand_id =67;
		$categoria->models = "C70";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 180;
		$categoria->brand_id =67;
		$categoria->models = "C7000";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 181;
		$categoria->brand_id =67;
		$categoria->models = "C7500";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 182;
		$categoria->brand_id =67;
		$categoria->models = "C8500";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 183;
		$categoria->brand_id =67;
		$categoria->models = "CHASIS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 184;
		$categoria->brand_id =67;
		$categoria->models = "CHEVY VAN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 185;
		$categoria->brand_id =67;
		$categoria->models = "EXPRESS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 186;
		$categoria->brand_id =67;
		$categoria->models = "EXR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 187;
		$categoria->brand_id =67;
		$categoria->models = "EXZ";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 188;
		$categoria->brand_id =67;
		$categoria->models = "FSR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 189;
		$categoria->brand_id =67;
		$categoria->models = "FVR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 190;
		$categoria->brand_id =67;
		$categoria->models = "HHR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 191;
		$categoria->brand_id =67;
		$categoria->models = "NHR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 192;
		$categoria->brand_id =67;
		$categoria->models = "NKR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 193;
		$categoria->brand_id =67;
		$categoria->models = "NPR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 194;
		$categoria->brand_id =67;
		$categoria->models = "R";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 195;
		$categoria->brand_id =67;
		$categoria->models = "SILVERADO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 196;
		$categoria->brand_id =67;
		$categoria->models = "SUPER BRIGADIER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 197;
		$categoria->brand_id =67;
		$categoria->models = "SUPER CARRY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 198;
		$categoria->brand_id =67;
		$categoria->models = "T6500";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 199;
		$categoria->brand_id =67;
		$categoria->models = "T7500";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 200;
		$categoria->brand_id =67;
		$categoria->models = "T8500";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 201;
		$categoria->brand_id =67;
		$categoria->models = "UPLANDER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 202;
		$categoria->brand_id =67;
		$categoria->models = "VENTURE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 203;
		$categoria->brand_id =67;
		$categoria->models = "W";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 204;
		$categoria->brand_id =68;
		$categoria->models = "BERLINGO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 205;
		$categoria->brand_id =68;
		$categoria->models = "JUMPER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 206;
		$categoria->brand_id =68;
		$categoria->models = "JUMPY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 207;
		$categoria->brand_id =69;
		$categoria->models = "CHUTO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 208;
		$categoria->brand_id =69;
		$categoria->models = "DAMAS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 209;
		$categoria->brand_id =69;
		$categoria->models = "LUBLIN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 210;
		$categoria->brand_id =70;
		$categoria->models = "2500";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 211;
		$categoria->brand_id =71;
		$categoria->models = "DELTA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 212;
		$categoria->brand_id =71;
		$categoria->models = "HIJET";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 213;
		$categoria->brand_id =72;
		$categoria->models = "D 300";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 214;
		$categoria->brand_id =72;
		$categoria->models = "D 350";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 215;
		$categoria->brand_id =72;
		$categoria->models = "D 600";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 216;
		$categoria->brand_id =72;
		$categoria->models = "D500";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 217;
		$categoria->brand_id =72;
		$categoria->models = "RAM";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 218;
		$categoria->brand_id =72;
		$categoria->models = "RAM CHARGER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 219;
		$categoria->brand_id =72;
		$categoria->models = "RAM VAN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 220;
		$categoria->brand_id =72;
		$categoria->models = "SPRINTER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 221;
		$categoria->brand_id =73;
		$categoria->models = "CM";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 222;
		$categoria->brand_id =73;
		$categoria->models = "CP";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 223;
		$categoria->brand_id =73;
		$categoria->models = "DUOLIKA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 224;
		$categoria->brand_id =73;
		$categoria->models = "EQ";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 225;
		$categoria->brand_id =73;
		$categoria->models = "JINBA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 226;
		$categoria->brand_id =73;
		$categoria->models = "JINGANG";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 227;
		$categoria->brand_id =73;
		$categoria->models = "MINI CARGO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 228;
		$categoria->brand_id =73;
		$categoria->models = "PADROTE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 229;
		$categoria->brand_id =73;
		$categoria->models = "STAR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 230;
		$categoria->brand_id =73;
		$categoria->models = "XIAOBA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 231;
		$categoria->brand_id =74;
		$categoria->models = "ANHUI";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 232;
		$categoria->brand_id =75;
		$categoria->models = "F500";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 233;
		$categoria->brand_id =76;
		$categoria->models = "CA1040";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 234;
		$categoria->brand_id =76;
		$categoria->models = "CA4190P2K15A80";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 235;
		$categoria->brand_id =76;
		$categoria->models = "CA4322P21K15T1YA82";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 236;
		$categoria->brand_id =77;
		$categoria->models = "135";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 237;
		$categoria->brand_id =77;
		$categoria->models = "238";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 238;
		$categoria->brand_id =77;
		$categoria->models = "330.30";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 239;
		$categoria->brand_id =77;
		$categoria->models = "619";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 240;
		$categoria->brand_id =77;
		$categoria->models = "628";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 241;
		$categoria->brand_id =77;
		$categoria->models = "643";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 242;
		$categoria->brand_id =77;
		$categoria->models = "65.9";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 243;
		$categoria->brand_id =77;
		$categoria->models = "682";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 244;
		$categoria->brand_id =77;
		$categoria->models = "691";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 245;
		$categoria->brand_id =77;
		$categoria->models = "693";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 246;
		$categoria->brand_id =77;
		$categoria->models = "697";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 247;
		$categoria->brand_id =77;
		$categoria->models = "DOBLO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 248;
		$categoria->brand_id =77;
		$categoria->models = "DUCATO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 249;
		$categoria->brand_id =77;
		$categoria->models = "FIORINO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 250;
		$categoria->brand_id =77;
		$categoria->models = "OM";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 251;
		$categoria->brand_id =77;
		$categoria->models = "PREMIO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 252;
		$categoria->brand_id =78;
		$categoria->models = "AEROSTAR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 253;
		$categoria->brand_id =78;
		$categoria->models = "CARGO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 254;
		$categoria->brand_id =78;
		$categoria->models = "ECONOLINE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 255;
		$categoria->brand_id =78;
		$categoria->models = "F 250";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 256;
		$categoria->brand_id =78;
		$categoria->models = "F 350";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 257;
		$categoria->brand_id =78;
		$categoria->models = "F 4000";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 258;
		$categoria->brand_id =78;
		$categoria->models = "F 450";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 259;
		$categoria->brand_id =78;
		$categoria->models = "F 47";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 260;
		$categoria->brand_id =78;
		$categoria->models = "F 500";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 261;
		$categoria->brand_id =78;
		$categoria->models = "F 550";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 262;
		$categoria->brand_id =78;
		$categoria->models = "F 600";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 263;
		$categoria->brand_id =78;
		$categoria->models = "F 650";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 264;
		$categoria->brand_id =78;
		$categoria->models = "F 70";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 265;
		$categoria->brand_id =78;
		$categoria->models = "F 700";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 266;
		$categoria->brand_id =78;
		$categoria->models = "F 7000";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 267;
		$categoria->brand_id =78;
		$categoria->models = "F 750";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 268;
		$categoria->brand_id =78;
		$categoria->models = "F 800";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 269;
		$categoria->brand_id =78;
		$categoria->models = "F 8000";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 270;
		$categoria->brand_id =78;
		$categoria->models = "F 900";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 271;
		$categoria->brand_id =78;
		$categoria->models = "F5000";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 272;
		$categoria->brand_id =78;
		$categoria->models = "FLEETWOOD";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 273;
		$categoria->brand_id =78;
		$categoria->models = "GURI";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 274;
		$categoria->brand_id =78;
		$categoria->models = "L";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 275;
		$categoria->brand_id =78;
		$categoria->models = "TRANSIT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 276;
		$categoria->brand_id =79;
		$categoria->models = "AUMAN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 277;
		$categoria->brand_id =79;
		$categoria->models = "FOTON";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 278;
		$categoria->brand_id =79;
		$categoria->models = "OLLIN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 279;
		$categoria->brand_id =79;
		$categoria->models = "VIEW";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 280;
		$categoria->brand_id =80;
		$categoria->models = "CL 120";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 281;
		$categoria->brand_id =80;
		$categoria->models = "COLUMBIA CL 120";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 282;
		$categoria->brand_id =80;
		$categoria->models = "FL 106";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 283;
		$categoria->brand_id =80;
		$categoria->models = "FL 80";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 284;
		$categoria->brand_id =80;
		$categoria->models = "FLD 120";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 285;
		$categoria->brand_id =80;
		$categoria->models = "FLT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 286;
		$categoria->brand_id =80;
		$categoria->models = "M2";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 287;
		$categoria->brand_id =81;
		$categoria->models = "3500";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 288;
		$categoria->brand_id =81;
		$categoria->models = "4000";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 289;
		$categoria->brand_id =81;
		$categoria->models = "5000";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 290;
		$categoria->brand_id =81;
		$categoria->models = "6000";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 291;
		$categoria->brand_id =81;
		$categoria->models = "7000";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 292;
		$categoria->brand_id =81;
		$categoria->models = "8000";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 293;
		$categoria->brand_id =81;
		$categoria->models = "BRIGADIER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 294;
		$categoria->brand_id =81;
		$categoria->models = "C";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 295;
		$categoria->brand_id =81;
		$categoria->models = "C 8500";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 296;
		$categoria->brand_id =81;
		$categoria->models = "NPR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 297;
		$categoria->brand_id =81;
		$categoria->models = "SAFARI";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 298;
		$categoria->brand_id =81;
		$categoria->models = "SAVANA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 299;
		$categoria->brand_id =81;
		$categoria->models = "VAN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 300;
		$categoria->brand_id =82;
		$categoria->models = "PROTEUS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 301;
		$categoria->brand_id =83;
		$categoria->models = "XINYI";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 302;
		$categoria->brand_id =83;
		$categoria->models = "ZHONGY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 303;
		$categoria->brand_id =84;
		$categoria->models = "HFJ";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 304;
		$categoria->brand_id =85;
		$categoria->models = "338";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 305;
		$categoria->brand_id =85;
		$categoria->models = "816";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 306;
		$categoria->brand_id =85;
		$categoria->models = "FF 17";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 307;
		$categoria->brand_id =86;
		$categoria->models = "H 1";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 308;
		$categoria->brand_id =86;
		$categoria->models = "H 100";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 309;
		$categoria->brand_id =86;
		$categoria->models = "HD";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 310;
		$categoria->brand_id =87;
		$categoria->models = "1650";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 311;
		$categoria->brand_id =87;
		$categoria->models = "1654";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 312;
		$categoria->brand_id =87;
		$categoria->models = "1700";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 313;
		$categoria->brand_id =87;
		$categoria->models = "1750";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 314;
		$categoria->brand_id =87;
		$categoria->models = "1754";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 315;
		$categoria->brand_id =87;
		$categoria->models = "1850";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 316;
		$categoria->brand_id =87;
		$categoria->models = "1854";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 317;
		$categoria->brand_id =87;
		$categoria->models = "1900";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 318;
		$categoria->brand_id =87;
		$categoria->models = "1950";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 319;
		$categoria->brand_id =87;
		$categoria->models = "1952";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 320;
		$categoria->brand_id =87;
		$categoria->models = "1954";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 321;
		$categoria->brand_id =87;
		$categoria->models = "2200";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 322;
		$categoria->brand_id =87;
		$categoria->models = "2554";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 323;
		$categoria->brand_id =87;
		$categoria->models = "2574";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 324;
		$categoria->brand_id =87;
		$categoria->models = "2575";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 325;
		$categoria->brand_id =87;
		$categoria->models = "2674";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 326;
		$categoria->brand_id =87;
		$categoria->models = "4200";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 327;
		$categoria->brand_id =87;
		$categoria->models = "4300";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 328;
		$categoria->brand_id =87;
		$categoria->models = "4400";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 329;
		$categoria->brand_id =87;
		$categoria->models = "4600";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 330;
		$categoria->brand_id =87;
		$categoria->models = "4700";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 331;
		$categoria->brand_id =87;
		$categoria->models = "4800";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 332;
		$categoria->brand_id =87;
		$categoria->models = "4900";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 333;
		$categoria->brand_id =87;
		$categoria->models = "5070";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 334;
		$categoria->brand_id =87;
		$categoria->models = "5600";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 335;
		$categoria->brand_id =87;
		$categoria->models = "7100";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 336;
		$categoria->brand_id =87;
		$categoria->models = "7300";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 337;
		$categoria->brand_id =87;
		$categoria->models = "7400";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 338;
		$categoria->brand_id =87;
		$categoria->models = "7600";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 339;
		$categoria->brand_id =87;
		$categoria->models = "8000";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 340;
		$categoria->brand_id =87;
		$categoria->models = "8100";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 341;
		$categoria->brand_id =87;
		$categoria->models = "8200";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 342;
		$categoria->brand_id =87;
		$categoria->models = "9100";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 343;
		$categoria->brand_id =87;
		$categoria->models = "9200";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 344;
		$categoria->brand_id =87;
		$categoria->models = "9300";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 345;
		$categoria->brand_id =87;
		$categoria->models = "9400";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 346;
		$categoria->brand_id =87;
		$categoria->models = "9670";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 347;
		$categoria->brand_id =87;
		$categoria->models = "9800";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 348;
		$categoria->brand_id =87;
		$categoria->models = "CF";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 349;
		$categoria->brand_id =87;
		$categoria->models = "F";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 350;
		$categoria->brand_id =87;
		$categoria->models = "PAYSTAR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 351;
		$categoria->brand_id =88;
		$categoria->models = "M";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 352;
		$categoria->brand_id =88;
		$categoria->models = "M 14.16";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 353;
		$categoria->brand_id =89;
		$categoria->models = "FSR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 354;
		$categoria->brand_id =89;
		$categoria->models = "FTR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 355;
		$categoria->brand_id =89;
		$categoria->models = "NKR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 356;
		$categoria->brand_id =89;
		$categoria->models = "NPR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 357;
		$categoria->brand_id =90;
		$categoria->models = "(EC)100E";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 358;
		$categoria->brand_id =90;
		$categoria->models = "(EC)120E";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 359;
		$categoria->brand_id =90;
		$categoria->models = "(EC)150E";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 360;
		$categoria->brand_id =90;
		$categoria->models = "(EC)230";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 361;
		$categoria->brand_id =90;
		$categoria->models = "(ET) MP 190";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 362;
		$categoria->brand_id =90;
		$categoria->models = "(ET)AD";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 363;
		$categoria->brand_id =90;
		$categoria->models = "(ET)MP";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 364;
		$categoria->brand_id =90;
		$categoria->models = "(ET)MP 380 E";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 365;
		$categoria->brand_id =90;
		$categoria->models = "200";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 366;
		$categoria->brand_id =90;
		$categoria->models = "240";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 367;
		$categoria->brand_id =90;
		$categoria->models = "330.30";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 368;
		$categoria->brand_id =90;
		$categoria->models = "35.10";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 369;
		$categoria->brand_id =90;
		$categoria->models = "38.13";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 370;
		$categoria->brand_id =90;
		$categoria->models = "391.35";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 371;
		$categoria->brand_id =90;
		$categoria->models = "40.10";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 372;
		$categoria->brand_id =90;
		$categoria->models = "40.12";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 373;
		$categoria->brand_id =90;
		$categoria->models = "40.13";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 374;
		$categoria->brand_id =90;
		$categoria->models = "440";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 375;
		$categoria->brand_id =90;
		$categoria->models = "450";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 376;
		$categoria->brand_id =90;
		$categoria->models = "49.12";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 377;
		$categoria->brand_id =90;
		$categoria->models = "49.19";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 378;
		$categoria->brand_id =90;
		$categoria->models = "490";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 379;
		$categoria->brand_id =90;
		$categoria->models = "50.12";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 380;
		$categoria->brand_id =90;
		$categoria->models = "50.13";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 381;
		$categoria->brand_id =90;
		$categoria->models = "5232";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 382;
		$categoria->brand_id =90;
		$categoria->models = "570";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 383;
		$categoria->brand_id =90;
		$categoria->models = "59.12";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 384;
		$categoria->brand_id =90;
		$categoria->models = "60.12";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 385;
		$categoria->brand_id =90;
		$categoria->models = "619";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 386;
		$categoria->brand_id =90;
		$categoria->models = "65.9";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 387;
		$categoria->brand_id =90;
		$categoria->models = "697";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 388;
		$categoria->brand_id =90;
		$categoria->models = "70.12";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 389;
		$categoria->brand_id =90;
		$categoria->models = "70.13";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 390;
		$categoria->brand_id =90;
		$categoria->models = "740";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 391;
		$categoria->brand_id =90;
		$categoria->models = "A120E";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 392;
		$categoria->brand_id =90;
		$categoria->models = "A40.10";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 393;
		$categoria->brand_id =90;
		$categoria->models = "A410T";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 394;
		$categoria->brand_id =90;
		$categoria->models = "A5912";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 395;
		$categoria->brand_id =90;
		$categoria->models = "CC";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 396;
		$categoria->brand_id =90;
		$categoria->models = "ML";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 397;
		$categoria->brand_id =90;
		$categoria->models = "TURBODAILY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 398;
		$categoria->brand_id =90;
		$categoria->models = "VERTIS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 399;
		$categoria->brand_id =91;
		$categoria->models = "HFC";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 400;
		$categoria->brand_id =92;
		$categoria->models = "ARAYA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 401;
		$categoria->brand_id =92;
		$categoria->models = "MINI ARAYA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 402;
		$categoria->brand_id =93;
		$categoria->models = "JX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 403;
		$categoria->brand_id =93;
		$categoria->models = "YUMBA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 404;
		$categoria->brand_id =94;
		$categoria->models = "KMC";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 405;
		$categoria->brand_id =94;
		$categoria->models = "ZB";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 406;
		$categoria->brand_id =95;
		$categoria->models = "54112";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 407;
		$categoria->brand_id =95;
		$categoria->models = "6460";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 408;
		$categoria->brand_id =95;
		$categoria->models = "6520";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 409;
		$categoria->brand_id =95;
		$categoria->models = "65201";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 410;
		$categoria->brand_id =96;
		$categoria->models = "K";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 411;
		$categoria->brand_id =96;
		$categoria->models = "T";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 412;
		$categoria->brand_id =96;
		$categoria->models = "T 300";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 413;
		$categoria->brand_id =96;
		$categoria->models = "T 600";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 414;
		$categoria->brand_id =96;
		$categoria->models = "W";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 415;
		$categoria->brand_id =97;
		$categoria->models = "K 2700";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 416;
		$categoria->brand_id =97;
		$categoria->models = "PREGIO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 417;
		$categoria->brand_id =97;
		$categoria->models = "TOWNER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 418;
		$categoria->brand_id =98;
		$categoria->models = "27150";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 419;
		$categoria->brand_id =99;
		$categoria->models = "CONVOY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 420;
		$categoria->brand_id =100;
		$categoria->models = "LF";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 421;
		$categoria->brand_id =101;
		$categoria->models = "B";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 422;
		$categoria->brand_id =101;
		$categoria->models = "CH 612";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 423;
		$categoria->brand_id =101;
		$categoria->models = "CH 613";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 424;
		$categoria->brand_id =101;
		$categoria->models = "CL";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 425;
		$categoria->brand_id =101;
		$categoria->models = "CT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 426;
		$categoria->brand_id =101;
		$categoria->models = "CV";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 427;
		$categoria->brand_id =101;
		$categoria->models = "CX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 428;
		$categoria->brand_id =101;
		$categoria->models = "CXN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 429;
		$categoria->brand_id =101;
		$categoria->models = "CXU";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 430;
		$categoria->brand_id =101;
		$categoria->models = "DM";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 431;
		$categoria->brand_id =101;
		$categoria->models = "DM 685";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 432;
		$categoria->brand_id =101;
		$categoria->models = "DM 811";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 433;
		$categoria->brand_id =101;
		$categoria->models = "DM 812";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 434;
		$categoria->brand_id =101;
		$categoria->models = "F";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 435;
		$categoria->brand_id =101;
		$categoria->models = "G";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 436;
		$categoria->brand_id =101;
		$categoria->models = "GU";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 437;
		$categoria->brand_id =101;
		$categoria->models = "MH";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 438;
		$categoria->brand_id =101;
		$categoria->models = "MR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 439;
		$categoria->brand_id =101;
		$categoria->models = "MS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 440;
		$categoria->brand_id =101;
		$categoria->models = "R";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 441;
		$categoria->brand_id =101;
		$categoria->models = "R 609";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 442;
		$categoria->brand_id =101;
		$categoria->models = "R 611";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 443;
		$categoria->brand_id =101;
		$categoria->models = "R 612";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 444;
		$categoria->brand_id =101;
		$categoria->models = "R 685";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 445;
		$categoria->brand_id =101;
		$categoria->models = "R 686";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 446;
		$categoria->brand_id =101;
		$categoria->models = "R 688";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 447;
		$categoria->brand_id =101;
		$categoria->models = "RD 685";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 448;
		$categoria->brand_id =101;
		$categoria->models = "RD 688";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 449;
		$categoria->brand_id =101;
		$categoria->models = "RD 690";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 450;
		$categoria->brand_id =102;
		$categoria->models = "6x6";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 451;
		$categoria->brand_id =102;
		$categoria->models = "8x8";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 452;
		$categoria->brand_id =102;
		$categoria->models = "TGA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 453;
		$categoria->brand_id =102;
		$categoria->models = "TGL";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 454;
		$categoria->brand_id =102;
		$categoria->models = "TGM";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 455;
		$categoria->brand_id =103;
		$categoria->models = "1.9.8.0";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 456;
		$categoria->brand_id =104;
		$categoria->models = "533632";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 457;
		$categoria->brand_id =104;
		$categoria->models = "54323";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 458;
		$categoria->brand_id =104;
		$categoria->models = "551605";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 459;
		$categoria->brand_id =104;
		$categoria->models = "630333";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 460;
		$categoria->brand_id =104;
		$categoria->models = "643008";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 461;
		$categoria->brand_id =104;
		$categoria->models = "643018";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 462;
		$categoria->brand_id =104;
		$categoria->models = "643069";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 463;
		$categoria->brand_id =105;
		$categoria->models = "B";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 464;
		$categoria->brand_id =105;
		$categoria->models = "CARGO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 465;
		$categoria->brand_id =105;
		$categoria->models = "T 45";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 466;
		$categoria->brand_id =106;
		$categoria->models = "MASPARRO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 467;
		$categoria->brand_id =107;
		$categoria->models = "1218";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 468;
		$categoria->brand_id =107;
		$categoria->models = "1418";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 469;
		$categoria->brand_id =107;
		$categoria->models = "1720/48";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 470;
		$categoria->brand_id =107;
		$categoria->models = "2320";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 471;
		$categoria->brand_id =107;
		$categoria->models = "ACCELO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 472;
		$categoria->brand_id =107;
		$categoria->models = "ACTROS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 473;
		$categoria->brand_id =107;
		$categoria->models = "ATEGO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 474;
		$categoria->brand_id =107;
		$categoria->models = "AXOR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 475;
		$categoria->brand_id =107;
		$categoria->models = "L";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 476;
		$categoria->brand_id =107;
		$categoria->models = "L 1319";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 477;
		$categoria->brand_id =107;
		$categoria->models = "L1924";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 478;
		$categoria->brand_id =107;
		$categoria->models = "L2213 42";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 479;
		$categoria->brand_id =107;
		$categoria->models = "LA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 480;
		$categoria->brand_id =107;
		$categoria->models = "LK";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 481;
		$categoria->brand_id =107;
		$categoria->models = "LN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 482;
		$categoria->brand_id =107;
		$categoria->models = "LS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 483;
		$categoria->brand_id =107;
		$categoria->models = "MB 100";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 484;
		$categoria->brand_id =107;
		$categoria->models = "MB 140";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 485;
		$categoria->brand_id =107;
		$categoria->models = "MB 800";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 486;
		$categoria->brand_id =107;
		$categoria->models = "SPRINTER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 487;
		$categoria->brand_id =107;
		$categoria->models = "UNIMOG";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 488;
		$categoria->brand_id =107;
		$categoria->models = "VARIO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 489;
		$categoria->brand_id =107;
		$categoria->models = "VITO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 490;
		$categoria->brand_id =108;
		$categoria->models = "950";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 491;
		$categoria->brand_id =108;
		$categoria->models = "VILLAGER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 492;
		$categoria->brand_id =109;
		$categoria->models = "BUS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 493;
		$categoria->brand_id =109;
		$categoria->models = "CANTER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 494;
		$categoria->brand_id =109;
		$categoria->models = "FH";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 495;
		$categoria->brand_id =109;
		$categoria->models = "FK";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 496;
		$categoria->brand_id =109;
		$categoria->models = "FM";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 497;
		$categoria->brand_id =109;
		$categoria->models = "FP";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 498;
		$categoria->brand_id =109;
		$categoria->models = "Fusages";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 499;
		$categoria->brand_id =109;
		$categoria->models = "FV";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 500;
		$categoria->brand_id =109;
		$categoria->models = "L300";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 501;
		$categoria->brand_id =109;
		$categoria->models = "MINIBUS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 502;
		$categoria->brand_id =110;
		$categoria->models = "MD";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 503;
		$categoria->brand_id =111;
		$categoria->models = "ATLEON";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 504;
		$categoria->brand_id =111;
		$categoria->models = "CABSTAR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 505;
		$categoria->brand_id =111;
		$categoria->models = "QUEST";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 506;
		$categoria->brand_id =111;
		$categoria->models = "TRADE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 507;
		$categoria->brand_id =111;
		$categoria->models = "UD";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 508;
		$categoria->brand_id =111;
		$categoria->models = "URVAN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 509;
		$categoria->brand_id =112;
		$categoria->models = "F";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 510;
		$categoria->brand_id =113;
		$categoria->models = "1080";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 511;
		$categoria->brand_id =113;
		$categoria->models = "1089";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 512;
		$categoria->brand_id =113;
		$categoria->models = "1207";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 513;
		$categoria->brand_id =113;
		$categoria->models = "1217";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 514;
		$categoria->brand_id =113;
		$categoria->models = "1223";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 515;
		$categoria->brand_id =113;
		$categoria->models = "2081";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 516;
		$categoria->brand_id =113;
		$categoria->models = "3089";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 517;
		$categoria->brand_id =114;
		$categoria->models = "335";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 518;
		$categoria->brand_id =114;
		$categoria->models = "348";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 519;
		$categoria->brand_id =114;
		$categoria->models = "357";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 520;
		$categoria->brand_id =114;
		$categoria->models = "378";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 521;
		$categoria->brand_id =114;
		$categoria->models = "385";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 522;
		$categoria->brand_id =114;
		$categoria->models = "387";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 523;
		$categoria->brand_id =115;
		$categoria->models = "J5";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 524;
		$categoria->brand_id =115;
		$categoria->models = "PARTNER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 525;
		$categoria->brand_id =116;
		$categoria->models = "PD";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 526;
		$categoria->brand_id =116;
		$categoria->models = "PF";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 527;
		$categoria->brand_id =116;
		$categoria->models = "PW";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 528;
		$categoria->brand_id =117;
		$categoria->models = "CAR CARRIER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 529;
		$categoria->brand_id =117;
		$categoria->models = "CASA RODANTE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 530;
		$categoria->brand_id =117;
		$categoria->models = "LOWBOY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 531;
		$categoria->brand_id =117;
		$categoria->models = "REMOLQUE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 532;
		$categoria->brand_id =117;
		$categoria->models = "SEMIREMOLQUE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 533;
		$categoria->brand_id =117;
		$categoria->models = "TANQUE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 534;
		$categoria->brand_id =117;
		$categoria->models = "TANQUE DE GASOLINA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 535;
		$categoria->brand_id =118;
		$categoria->models = "EXPRESS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 536;
		$categoria->brand_id =118;
		$categoria->models = "G";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 537;
		$categoria->brand_id =118;
		$categoria->models = "KANGOO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 538;
		$categoria->brand_id =118;
		$categoria->models = "KERAX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 539;
		$categoria->brand_id =118;
		$categoria->models = "MASCOTT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 540;
		$categoria->brand_id =118;
		$categoria->models = "MASTER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 541;
		$categoria->brand_id =118;
		$categoria->models = "MIDLINER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 542;
		$categoria->brand_id =118;
		$categoria->models = "TRAFIC";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 543;
		$categoria->brand_id =119;
		$categoria->models = "CARGO VAN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 544;
		$categoria->brand_id =120;
		$categoria->models = "SY5250GJB4";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 545;
		$categoria->brand_id =121;
		$categoria->models = "C";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 546;
		$categoria->brand_id =121;
		$categoria->models = "D";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 547;
		$categoria->brand_id =121;
		$categoria->models = "G";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 548;
		$categoria->brand_id =121;
		$categoria->models = "L";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 549;
		$categoria->brand_id =121;
		$categoria->models = "P";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 550;
		$categoria->brand_id =121;
		$categoria->models = "R113";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 551;
		$categoria->brand_id =121;
		$categoria->models = "T";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 552;
		$categoria->brand_id =122;
		$categoria->models = "TERRA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 553;
		$categoria->brand_id =123;
		$categoria->models = "HOWO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 554;
		$categoria->brand_id =123;
		$categoria->models = "STYER KING";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 555;
		$categoria->brand_id =124;
		$categoria->models = "L";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 556;
		$categoria->brand_id =124;
		$categoria->models = "LT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 557;
		$categoria->brand_id =125;
		$categoria->models = "SUPER CARRY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 558;
		$categoria->brand_id =126;
		$categoria->models = "T 815";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 559;
		$categoria->brand_id =127;
		$categoria->models = "DYNA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 560;
		$categoria->brand_id =127;
		$categoria->models = "HIACE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 561;
		$categoria->brand_id =127;
		$categoria->models = "LAND CRUISER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 562;
		$categoria->brand_id =128;
		$categoria->models = "220602";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 563;
		$categoria->brand_id =128;
		$categoria->models = "39629";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 564;
		$categoria->brand_id =129;
		$categoria->models = "11.130";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 565;
		$categoria->brand_id =129;
		$categoria->models = "15.180";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 566;
		$categoria->brand_id =129;
		$categoria->models = "17.210";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 567;
		$categoria->brand_id =129;
		$categoria->models = "17.220";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 568;
		$categoria->brand_id =129;
		$categoria->models = "18.310";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 569;
		$categoria->brand_id =129;
		$categoria->models = "24.220";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 570;
		$categoria->brand_id =129;
		$categoria->models = "24.250";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 571;
		$categoria->brand_id =129;
		$categoria->models = "31.310";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 572;
		$categoria->brand_id =129;
		$categoria->models = "8.150E";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 573;
		$categoria->brand_id =129;
		$categoria->models = "9.150";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 574;
		$categoria->brand_id =129;
		$categoria->models = "CADDY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 575;
		$categoria->brand_id =129;
		$categoria->models = "CRAFTER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 576;
		$categoria->brand_id =129;
		$categoria->models = "KOMBI";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 577;
		$categoria->brand_id =130;
		$categoria->models = "F";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 578;
		$categoria->brand_id =130;
		$categoria->models = "FE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 579;
		$categoria->brand_id =130;
		$categoria->models = "FH";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 580;
		$categoria->brand_id =130;
		$categoria->models = "FM";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 581;
		$categoria->brand_id =130;
		$categoria->models = "NH";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 582;
		$categoria->brand_id =130;
		$categoria->models = "VHD";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 583;
		$categoria->brand_id =130;
		$categoria->models = "VM";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 584;
		$categoria->brand_id =130;
		$categoria->models = "WAH";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 585;
		$categoria->brand_id =131;
		$categoria->models = "NXG5250KGJB3B";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 586;
		$categoria->brand_id =132;
		$categoria->models = "NJ4180DAW";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 587;
		$categoria->brand_id =132;
		$categoria->models = "NJ5063DA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 588;
		$categoria->brand_id =133;
		$categoria->models = "SILVER FOX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 589;
		$categoria->brand_id =133;
		$categoria->models = "TB";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 590;
		$categoria->brand_id =133;
		$categoria->models = "THUNDER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 591;
		$categoria->brand_id =134;
		$categoria->models = "ADVENTURE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 592;
		$categoria->brand_id =134;
		$categoria->models = "BWK";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 593;
		$categoria->brand_id =134;
		$categoria->models = "GPR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 594;
		$categoria->brand_id =134;
		$categoria->models = "GTR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 595;
		$categoria->brand_id =134;
		$categoria->models = "LH";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 596;
		$categoria->brand_id =134;
		$categoria->models = "MAGNETIC";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 597;
		$categoria->brand_id =134;
		$categoria->models = "MATRIX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 598;
		$categoria->brand_id =135;
		$categoria->models = "BETTA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 599;
		$categoria->brand_id =135;
		$categoria->models = "CG";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 600;
		$categoria->brand_id =135;
		$categoria->models = "GAMMA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 601;
		$categoria->brand_id =136;
		$categoria->models = "SY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 602;
		$categoria->brand_id =136;
		$categoria->models = "XR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 603;
		$categoria->brand_id =137;
		$categoria->models = "ATLANTIC";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 604;
		$categoria->brand_id =137;
		$categoria->models = "DORSODURO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 605;
		$categoria->brand_id =137;
		$categoria->models = "PEGASO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 606;
		$categoria->brand_id =137;
		$categoria->models = "RST";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 607;
		$categoria->brand_id =137;
		$categoria->models = "RSV";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 608;
		$categoria->brand_id =137;
		$categoria->models = "SCARABEO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 609;
		$categoria->brand_id =137;
		$categoria->models = "SHIVER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 610;
		$categoria->brand_id =137;
		$categoria->models = "SPORT CITY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 611;
		$categoria->brand_id =137;
		$categoria->models = "TUONO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 612;
		$categoria->brand_id =138;
		$categoria->models = "TRV";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 613;
		$categoria->brand_id =139;
		$categoria->models = "HACKER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 614;
		$categoria->brand_id =140;
		$categoria->models = "AGUILA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 615;
		$categoria->brand_id =140;
		$categoria->models = "BRONCO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 616;
		$categoria->brand_id =140;
		$categoria->models = "CONDOR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 617;
		$categoria->brand_id =140;
		$categoria->models = "GY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 618;
		$categoria->brand_id =140;
		$categoria->models = "JS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 619;
		$categoria->brand_id =140;
		$categoria->models = "MATRIX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 620;
		$categoria->brand_id =141;
		$categoria->models = "AVENGER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 621;
		$categoria->brand_id =141;
		$categoria->models = "BOXER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 622;
		$categoria->brand_id =141;
		$categoria->models = "CHETAK";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 623;
		$categoria->brand_id =141;
		$categoria->models = "CLASSIC";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 624;
		$categoria->brand_id =141;
		$categoria->models = "CT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 625;
		$categoria->brand_id =141;
		$categoria->models = "DISCOVER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 626;
		$categoria->brand_id =141;
		$categoria->models = "KB";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 627;
		$categoria->brand_id =141;
		$categoria->models = "PULSAR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 628;
		$categoria->brand_id =142;
		$categoria->models = "ADIVA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 629;
		$categoria->brand_id =142;
		$categoria->models = "CAFFE NERO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 630;
		$categoria->brand_id =142;
		$categoria->models = "SCHEDA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 631;
		$categoria->brand_id =142;
		$categoria->models = "TNT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 632;
		$categoria->brand_id =142;
		$categoria->models = "TREK";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 633;
		$categoria->brand_id =142;
		$categoria->models = "VELVET";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 634;
		$categoria->brand_id =143;
		$categoria->models = "BR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 635;
		$categoria->brand_id =143;
		$categoria->models = "BRX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 636;
		$categoria->brand_id =143;
		$categoria->models = "BRZ";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 637;
		$categoria->brand_id =144;
		$categoria->models = "SLED";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 638;
		$categoria->brand_id =145;
		$categoria->models = "C1";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 639;
		$categoria->brand_id =145;
		$categoria->models = "F";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 640;
		$categoria->brand_id =145;
		$categoria->models = "G";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 641;
		$categoria->brand_id =145;
		$categoria->models = "HP";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 642;
		$categoria->brand_id =145;
		$categoria->models = "K";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 643;
		$categoria->brand_id =145;
		$categoria->models = "R";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 644;
		$categoria->brand_id =146;
		$categoria->models = "DS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 645;
		$categoria->brand_id =147;
		$categoria->models = "BLAST";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 646;
		$categoria->brand_id =147;
		$categoria->models = "XB";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 647;
		$categoria->brand_id =148;
		$categoria->models = "CANYON";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 648;
		$categoria->brand_id =148;
		$categoria->models = "CUCCIOLO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 649;
		$categoria->brand_id =148;
		$categoria->models = "G CANYON";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 650;
		$categoria->brand_id =148;
		$categoria->models = "MITO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 651;
		$categoria->brand_id =148;
		$categoria->models = "NAVIGATOR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 652;
		$categoria->brand_id =148;
		$categoria->models = "PLANET";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 653;
		$categoria->brand_id =148;
		$categoria->models = "RAPTOR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 654;
		$categoria->brand_id =148;
		$categoria->models = "RIVER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 655;
		$categoria->brand_id =148;
		$categoria->models = "V RAPTOR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 656;
		$categoria->brand_id =149;
		$categoria->models = "OUTLANDER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 657;
		$categoria->brand_id =149;
		$categoria->models = "RENEGADE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 658;
		$categoria->brand_id =149;
		$categoria->models = "SPYDER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 659;
		$categoria->brand_id =150;
		$categoria->models = "CF";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 660;
		$categoria->brand_id =151;
		$categoria->models = "REGAL RAPTOR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 661;
		$categoria->brand_id =152;
		$categoria->models = "DF";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 662;
		$categoria->brand_id =153;
		$categoria->models = "DY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 663;
		$categoria->brand_id =154;
		$categoria->models = "RAIDER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 664;
		$categoria->brand_id =155;
		$categoria->models = "KT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 665;
		$categoria->brand_id =156;
		$categoria->models = "PADDOCK";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 666;
		$categoria->brand_id =156;
		$categoria->models = "PREDATOR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 667;
		$categoria->brand_id =157;
		$categoria->models = "748";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 668;
		$categoria->brand_id =157;
		$categoria->models = "749";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 669;
		$categoria->brand_id =157;
		$categoria->models = "888";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 670;
		$categoria->brand_id =157;
		$categoria->models = "916";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 671;
		$categoria->brand_id =157;
		$categoria->models = "996";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 672;
		$categoria->brand_id =157;
		$categoria->models = "999";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 673;
		$categoria->brand_id =157;
		$categoria->models = "E";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 674;
		$categoria->brand_id =157;
		$categoria->models = "HYPERMOTARD";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 675;
		$categoria->brand_id =157;
		$categoria->models = "M";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 676;
		$categoria->brand_id =157;
		$categoria->models = "MULTISTRADA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 677;
		$categoria->brand_id =157;
		$categoria->models = "SS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 678;
		$categoria->brand_id =157;
		$categoria->models = "ST";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 679;
		$categoria->brand_id =157;
		$categoria->models = "SUPERBIKE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 680;
		$categoria->brand_id =158;
		$categoria->models = "EASY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 681;
		$categoria->brand_id =159;
		$categoria->models = "FY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 682;
		$categoria->brand_id =160;
		$categoria->models = "MC";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 683;
		$categoria->brand_id =160;
		$categoria->models = "PAMPERA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 684;
		$categoria->brand_id =160;
		$categoria->models = "SM";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 685;
		$categoria->brand_id =160;
		$categoria->models = "TXT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 686;
		$categoria->brand_id =161;
		$categoria->models = "JL";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 687;
		$categoria->brand_id =162;
		$categoria->models = "BEVERLY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 688;
		$categoria->brand_id =162;
		$categoria->models = "COUGAR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 689;
		$categoria->brand_id =162;
		$categoria->models = "DNA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 690;
		$categoria->brand_id =162;
		$categoria->models = "EAGLET";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 691;
		$categoria->brand_id =162;
		$categoria->models = "EASY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 692;
		$categoria->brand_id =162;
		$categoria->models = "ICE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 693;
		$categoria->brand_id =162;
		$categoria->models = "NEXUS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 694;
		$categoria->brand_id =162;
		$categoria->models = "RUNNER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 695;
		$categoria->brand_id =162;
		$categoria->models = "TYPHOON";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 696;
		$categoria->brand_id =163;
		$categoria->models = "GJ";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 697;
		$categoria->brand_id =164;
		$categoria->models = "BREVA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 698;
		$categoria->brand_id =164;
		$categoria->models = "GRISO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 699;
		$categoria->brand_id =164;
		$categoria->models = "NORGE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 700;
		$categoria->brand_id =164;
		$categoria->models = "STELVIO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 701;
		$categoria->brand_id =164;
		$categoria->models = "V7";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 702;
		$categoria->brand_id =165;
		$categoria->models = "HJ";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 703;
		$categoria->brand_id =166;
		$categoria->models = "HJ";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 704;
		$categoria->brand_id =167;
		$categoria->models = "HT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 705;
		$categoria->brand_id =168;
		$categoria->models = "BAD BOY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 706;
		$categoria->brand_id =168;
		$categoria->models = "CLASSIC";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 707;
		$categoria->brand_id =168;
		$categoria->models = "DYNA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 708;
		$categoria->brand_id =168;
		$categoria->models = "FAT BOY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 709;
		$categoria->brand_id =168;
		$categoria->models = "HERITAGE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 710;
		$categoria->brand_id =168;
		$categoria->models = "NIGHT TRAIN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 711;
		$categoria->brand_id =168;
		$categoria->models = "ROAD";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 712;
		$categoria->brand_id =168;
		$categoria->models = "SOFTAIL";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 713;
		$categoria->brand_id =168;
		$categoria->models = "SPORTSTER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 714;
		$categoria->brand_id =168;
		$categoria->models = "SPRINGER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 715;
		$categoria->brand_id =168;
		$categoria->models = "STANDAR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 716;
		$categoria->brand_id =168;
		$categoria->models = "SUPER GLIDE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 717;
		$categoria->brand_id =168;
		$categoria->models = "TOUR GLIDE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 718;
		$categoria->brand_id =168;
		$categoria->models = "TOURING";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 719;
		$categoria->brand_id =168;
		$categoria->models = "ULTRA GLIDE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 720;
		$categoria->brand_id =168;
		$categoria->models = "VRSC";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 721;
		$categoria->brand_id =169;
		$categoria->models = "AERO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 722;
		$categoria->brand_id =169;
		$categoria->models = "BCV";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 723;
		$categoria->brand_id =169;
		$categoria->models = "C";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 724;
		$categoria->brand_id =169;
		$categoria->models = "C100";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 725;
		$categoria->brand_id =169;
		$categoria->models = "CB";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 726;
		$categoria->brand_id =169;
		$categoria->models = "CBR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 727;
		$categoria->brand_id =169;
		$categoria->models = "CBX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 728;
		$categoria->brand_id =169;
		$categoria->models = "CD";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 729;
		$categoria->brand_id =169;
		$categoria->models = "CG";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 730;
		$categoria->brand_id =169;
		$categoria->models = "CH";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 731;
		$categoria->brand_id =169;
		$categoria->models = "CHA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 732;
		$categoria->brand_id =169;
		$categoria->models = "CHF";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 733;
		$categoria->brand_id =169;
		$categoria->models = "CMX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 734;
		$categoria->brand_id =169;
		$categoria->models = "CN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 735;
		$categoria->brand_id =169;
		$categoria->models = "CR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 736;
		$categoria->brand_id =169;
		$categoria->models = "CRF";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 737;
		$categoria->brand_id =169;
		$categoria->models = "CT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 738;
		$categoria->brand_id =169;
		$categoria->models = "CVX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 739;
		$categoria->brand_id =169;
		$categoria->models = "ELITE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 740;
		$categoria->brand_id =169;
		$categoria->models = "FES";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 741;
		$categoria->brand_id =169;
		$categoria->models = "FJS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 742;
		$categoria->brand_id =169;
		$categoria->models = "FMX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 743;
		$categoria->brand_id =169;
		$categoria->models = "FORESIGHT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 744;
		$categoria->brand_id =169;
		$categoria->models = "FORZA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 745;
		$categoria->brand_id =169;
		$categoria->models = "GL";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 746;
		$categoria->brand_id =169;
		$categoria->models = "GYRO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 747;
		$categoria->brand_id =169;
		$categoria->models = "H";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 748;
		$categoria->brand_id =169;
		$categoria->models = "HELIX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 749;
		$categoria->brand_id =169;
		$categoria->models = "HX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 750;
		$categoria->brand_id =169;
		$categoria->models = "LEAD";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 751;
		$categoria->brand_id =169;
		$categoria->models = "MARVEL";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 752;
		$categoria->brand_id =169;
		$categoria->models = "NH";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 753;
		$categoria->brand_id =169;
		$categoria->models = "NHA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 754;
		$categoria->brand_id =169;
		$categoria->models = "NRX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 755;
		$categoria->brand_id =169;
		$categoria->models = "NSS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 756;
		$categoria->brand_id =169;
		$categoria->models = "NT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 757;
		$categoria->brand_id =169;
		$categoria->models = "NV";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 758;
		$categoria->brand_id =169;
		$categoria->models = "NX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 759;
		$categoria->brand_id =169;
		$categoria->models = "NXR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 760;
		$categoria->brand_id =169;
		$categoria->models = "OR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 761;
		$categoria->brand_id =169;
		$categoria->models = "PC";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 762;
		$categoria->brand_id =169;
		$categoria->models = "QR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 763;
		$categoria->brand_id =169;
		$categoria->models = "RC";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 764;
		$categoria->brand_id =169;
		$categoria->models = "RS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 765;
		$categoria->brand_id =169;
		$categoria->models = "SC";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 766;
		$categoria->brand_id =169;
		$categoria->models = "SDH";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 767;
		$categoria->brand_id =169;
		$categoria->models = "SK";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 768;
		$categoria->brand_id =169;
		$categoria->models = "SRX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 769;
		$categoria->brand_id =169;
		$categoria->models = "ST";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 770;
		$categoria->brand_id =169;
		$categoria->models = "TRX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 771;
		$categoria->brand_id =169;
		$categoria->models = "VF";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 772;
		$categoria->brand_id =169;
		$categoria->models = "VFR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 773;
		$categoria->brand_id =169;
		$categoria->models = "VT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 774;
		$categoria->brand_id =169;
		$categoria->models = "VTR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 775;
		$categoria->brand_id =169;
		$categoria->models = "VTX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 776;
		$categoria->brand_id =169;
		$categoria->models = "XL";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 777;
		$categoria->brand_id =169;
		$categoria->models = "XLR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 778;
		$categoria->brand_id =169;
		$categoria->models = "XR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 779;
		$categoria->brand_id =169;
		$categoria->models = "XRV";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 780;
		$categoria->brand_id =169;
		$categoria->models = "Z";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 781;
		$categoria->brand_id =170;
		$categoria->models = "FORZA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 782;
		$categoria->brand_id =170;
		$categoria->models = "HY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 783;
		$categoria->brand_id =171;
		$categoria->models = "CR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 784;
		$categoria->brand_id =171;
		$categoria->models = "HUSKY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 785;
		$categoria->brand_id =171;
		$categoria->models = "SM";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 786;
		$categoria->brand_id =171;
		$categoria->models = "TC";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 787;
		$categoria->brand_id =171;
		$categoria->models = "TE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 788;
		$categoria->brand_id =171;
		$categoria->models = "WR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 789;
		$categoria->brand_id =172;
		$categoria->models = "GT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 790;
		$categoria->brand_id =172;
		$categoria->models = "GV";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 791;
		$categoria->brand_id =173;
		$categoria->models = "DRAGSTER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 792;
		$categoria->brand_id =173;
		$categoria->models = "FORMULA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 793;
		$categoria->brand_id =173;
		$categoria->models = "TORPEDO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 794;
		$categoria->brand_id =173;
		$categoria->models = "VELOCIFERO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 795;
		$categoria->brand_id =174;
		$categoria->models = "CHOPPER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 796;
		$categoria->brand_id =174;
		$categoria->models = "JW";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 797;
		$categoria->brand_id =174;
		$categoria->models = "STYLE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 798;
		$categoria->brand_id =174;
		$categoria->models = "TWIN SPORT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 799;
		$categoria->brand_id =175;
		$categoria->models = "JH";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 800;
		$categoria->brand_id =175;
		$categoria->models = "JL";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 801;
		$categoria->brand_id =175;
		$categoria->models = "TX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 802;
		$categoria->brand_id =176;
		$categoria->models = "JS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 803;
		$categoria->brand_id =177;
		$categoria->models = "JD";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 804;
		$categoria->brand_id =177;
		$categoria->models = "JD 50QT4";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 805;
		$categoria->brand_id =177;
		$categoria->models = "JD125T-8";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 806;
		$categoria->brand_id =177;
		$categoria->models = "JD150GY-2";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 807;
		$categoria->brand_id =177;
		$categoria->models = "JD250-2";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 808;
		$categoria->brand_id =178;
		$categoria->models = "JC";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 809;
		$categoria->brand_id =178;
		$categoria->models = "JH";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 810;
		$categoria->brand_id =179;
		$categoria->models = "CG";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 811;
		$categoria->brand_id =179;
		$categoria->models = "DB";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 812;
		$categoria->brand_id =179;
		$categoria->models = "JL";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 813;
		$categoria->brand_id =180;
		$categoria->models = "YY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 814;
		$categoria->brand_id =181;
		$categoria->models = "CD";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 815;
		$categoria->brand_id =181;
		$categoria->models = "CG";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 816;
		$categoria->brand_id =181;
		$categoria->models = "JH";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 817;
		$categoria->brand_id =182;
		$categoria->models = "CONCOURS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 818;
		$categoria->brand_id =182;
		$categoria->models = "EL";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 819;
		$categoria->brand_id =182;
		$categoria->models = "ELIMINATOR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 820;
		$categoria->brand_id =182;
		$categoria->models = "EN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 821;
		$categoria->brand_id =182;
		$categoria->models = "ER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 822;
		$categoria->brand_id =182;
		$categoria->models = "KB";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 823;
		$categoria->brand_id =182;
		$categoria->models = "KDX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 824;
		$categoria->brand_id =182;
		$categoria->models = "KE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 825;
		$categoria->brand_id =182;
		$categoria->models = "KFX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 826;
		$categoria->brand_id =182;
		$categoria->models = "KLE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 827;
		$categoria->brand_id =182;
		$categoria->models = "KLF";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 828;
		$categoria->brand_id =182;
		$categoria->models = "KLR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 829;
		$categoria->brand_id =182;
		$categoria->models = "KLX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 830;
		$categoria->brand_id =182;
		$categoria->models = "KR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 831;
		$categoria->brand_id =182;
		$categoria->models = "KX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 832;
		$categoria->brand_id =182;
		$categoria->models = "KZ";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 833;
		$categoria->brand_id =182;
		$categoria->models = "NINJA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 834;
		$categoria->brand_id =182;
		$categoria->models = "VOYAGER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 835;
		$categoria->brand_id =182;
		$categoria->models = "VULCAN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 836;
		$categoria->brand_id =182;
		$categoria->models = "Z";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 837;
		$categoria->brand_id =182;
		$categoria->models = "ZG";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 838;
		$categoria->brand_id =182;
		$categoria->models = "ZRX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 839;
		$categoria->brand_id =182;
		$categoria->models = "ZZR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 840;
		$categoria->brand_id =183;
		$categoria->models = "ARSEN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 841;
		$categoria->brand_id =183;
		$categoria->models = "CRUISER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 842;
		$categoria->brand_id =183;
		$categoria->models = "F";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 843;
		$categoria->brand_id =183;
		$categoria->models = "HORSE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 844;
		$categoria->brand_id =183;
		$categoria->models = "MATRIX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 845;
		$categoria->brand_id =183;
		$categoria->models = "OUTLOOK";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 846;
		$categoria->brand_id =183;
		$categoria->models = "OWEN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 847;
		$categoria->brand_id =183;
		$categoria->models = "RK";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 848;
		$categoria->brand_id =183;
		$categoria->models = "RKV";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 849;
		$categoria->brand_id =183;
		$categoria->models = "SPEED";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 850;
		$categoria->brand_id =183;
		$categoria->models = "SUPERLIGHT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 851;
		$categoria->brand_id =183;
		$categoria->models = "SUPERSHADOW";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 852;
		$categoria->brand_id =183;
		$categoria->models = "TX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 853;
		$categoria->brand_id =184;
		$categoria->models = "XT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 854;
		$categoria->brand_id =185;
		$categoria->models = "ADVENTURE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 855;
		$categoria->brand_id =185;
		$categoria->models = "EXC";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 856;
		$categoria->brand_id =185;
		$categoria->models = "RC";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 857;
		$categoria->brand_id =185;
		$categoria->models = "SMC";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 858;
		$categoria->brand_id =185;
		$categoria->models = "SMR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 859;
		$categoria->brand_id =185;
		$categoria->models = "SUPERDUKE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 860;
		$categoria->brand_id =185;
		$categoria->models = "SUPERMOTO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 861;
		$categoria->brand_id =185;
		$categoria->models = "SX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 862;
		$categoria->brand_id =185;
		$categoria->models = "XC";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 863;
		$categoria->brand_id =185;
		$categoria->models = "XCF";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 864;
		$categoria->brand_id =185;
		$categoria->models = "XCR-W";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 865;
		$categoria->brand_id =186;
		$categoria->models = "XF";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 866;
		$categoria->brand_id =187;
		$categoria->models = "ACTIV";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 867;
		$categoria->brand_id =187;
		$categoria->models = "BET & WIN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 868;
		$categoria->brand_id =187;
		$categoria->models = "GRAND DRINK";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 869;
		$categoria->brand_id =187;
		$categoria->models = "VENOX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 870;
		$categoria->brand_id =187;
		$categoria->models = "XCITING";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 871;
		$categoria->brand_id =188;
		$categoria->models = "AX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 872;
		$categoria->brand_id =188;
		$categoria->models = "KY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 873;
		$categoria->brand_id =188;
		$categoria->models = "MX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 874;
		$categoria->brand_id =188;
		$categoria->models = "YY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 875;
		$categoria->brand_id =189;
		$categoria->models = "750";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 876;
		$categoria->brand_id =190;
		$categoria->models = "LF";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 877;
		$categoria->brand_id =191;
		$categoria->models = "DF";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 878;
		$categoria->brand_id =191;
		$categoria->models = "LY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 879;
		$categoria->brand_id =192;
		$categoria->models = "LH";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 880;
		$categoria->brand_id =193;
		$categoria->models = "VESPA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 881;
		$categoria->brand_id =194;
		$categoria->models = "COMANCHE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 882;
		$categoria->brand_id =194;
		$categoria->models = "EAGLE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 883;
		$categoria->brand_id =194;
		$categoria->models = "JL";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 884;
		$categoria->brand_id =195;
		$categoria->models = "F";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 885;
		$categoria->brand_id =195;
		$categoria->models = "MADISON";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 886;
		$categoria->brand_id =196;
		$categoria->models = "C";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 887;
		$categoria->brand_id =197;
		$categoria->models = "BRUTALE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 888;
		$categoria->brand_id =197;
		$categoria->models = "F4";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 889;
		$categoria->brand_id =198;
		$categoria->models = "NF";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 890;
		$categoria->brand_id =199;
		$categoria->models = "ELEGANCE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 891;
		$categoria->brand_id =199;
		$categoria->models = "NR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 892;
		$categoria->brand_id =200;
		$categoria->models = "ELYSEO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 893;
		$categoria->brand_id =200;
		$categoria->models = "FOX MEX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 894;
		$categoria->brand_id =200;
		$categoria->models = "SPEEDFIGHT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 895;
		$categoria->brand_id =200;
		$categoria->models = "TREKKER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 896;
		$categoria->brand_id =200;
		$categoria->models = "VIVACITY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 897;
		$categoria->brand_id =201;
		$categoria->models = "BIG MAX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 898;
		$categoria->brand_id =201;
		$categoria->models = "CHARGE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 899;
		$categoria->brand_id =201;
		$categoria->models = "PMX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 900;
		$categoria->brand_id =201;
		$categoria->models = "T REX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 901;
		$categoria->brand_id =201;
		$categoria->models = "TORNADO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 902;
		$categoria->brand_id =201;
		$categoria->models = "XR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 903;
		$categoria->brand_id =202;
		$categoria->models = "ADIVA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 904;
		$categoria->brand_id =202;
		$categoria->models = "APE TM";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 905;
		$categoria->brand_id =202;
		$categoria->models = "BEVERLY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 906;
		$categoria->brand_id =202;
		$categoria->models = "COUGAR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 907;
		$categoria->brand_id =202;
		$categoria->models = "DIESIS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 908;
		$categoria->brand_id =202;
		$categoria->models = "DNA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 909;
		$categoria->brand_id =202;
		$categoria->models = "HEXAGON";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 910;
		$categoria->brand_id =202;
		$categoria->models = "LIBERTY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 911;
		$categoria->brand_id =202;
		$categoria->models = "MP3";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 912;
		$categoria->brand_id =202;
		$categoria->models = "NRG";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 913;
		$categoria->brand_id =202;
		$categoria->models = "PUCH";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 914;
		$categoria->brand_id =202;
		$categoria->models = "PX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 915;
		$categoria->brand_id =202;
		$categoria->models = "RUNNER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 916;
		$categoria->brand_id =202;
		$categoria->models = "SFERA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 917;
		$categoria->brand_id =202;
		$categoria->models = "SKIPPER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 918;
		$categoria->brand_id =202;
		$categoria->models = "STALKER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 919;
		$categoria->brand_id =202;
		$categoria->models = "SUPER HEXAGON";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 920;
		$categoria->brand_id =202;
		$categoria->models = "TYPHOON";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 921;
		$categoria->brand_id =202;
		$categoria->models = "VESPA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 922;
		$categoria->brand_id =202;
		$categoria->models = "WINNER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 923;
		$categoria->brand_id =202;
		$categoria->models = "X9";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 924;
		$categoria->brand_id =202;
		$categoria->models = "ZIP";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 925;
		$categoria->brand_id =203;
		$categoria->models = "XF";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 926;
		$categoria->brand_id =204;
		$categoria->models = "SPORTMAN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 927;
		$categoria->brand_id =205;
		$categoria->models = "QM";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 928;
		$categoria->brand_id =205;
		$categoria->models = "QS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 929;
		$categoria->brand_id =206;
		$categoria->models = "BISIA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 930;
		$categoria->brand_id =206;
		$categoria->models = "BOXER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 931;
		$categoria->brand_id =206;
		$categoria->models = "BX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 932;
		$categoria->brand_id =206;
		$categoria->models = "PEGASUS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 933;
		$categoria->brand_id =206;
		$categoria->models = "R10";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 934;
		$categoria->brand_id =206;
		$categoria->models = "R15";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 935;
		$categoria->brand_id =206;
		$categoria->models = "SRX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 936;
		$categoria->brand_id =207;
		$categoria->models = "BUXA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 937;
		$categoria->brand_id =207;
		$categoria->models = "CARRERA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 938;
		$categoria->brand_id =207;
		$categoria->models = "FORTALEZA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 939;
		$categoria->brand_id =207;
		$categoria->models = "INOX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 940;
		$categoria->brand_id =207;
		$categoria->models = "RFX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 941;
		$categoria->brand_id =207;
		$categoria->models = "SPORT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 942;
		$categoria->brand_id =208;
		$categoria->models = "SK";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 943;
		$categoria->brand_id =209;
		$categoria->models = "BANDIT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 944;
		$categoria->brand_id =209;
		$categoria->models = "NINJA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 945;
		$categoria->brand_id =209;
		$categoria->models = "T-REX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 946;
		$categoria->brand_id =209;
		$categoria->models = "TIGER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 947;
		$categoria->brand_id =209;
		$categoria->models = "XY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 948;
		$categoria->brand_id =210;
		$categoria->models = "AX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 949;
		$categoria->brand_id =210;
		$categoria->models = "SG";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 950;
		$categoria->brand_id =211;
		$categoria->models = "SL 150";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 951;
		$categoria->brand_id =212;
		$categoria->models = "BR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 952;
		$categoria->brand_id =212;
		$categoria->models = "SK";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 953;
		$categoria->brand_id =213;
		$categoria->models = "ATV";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 954;
		$categoria->brand_id =213;
		$categoria->models = "AX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 955;
		$categoria->brand_id =213;
		$categoria->models = "BIRAGO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 956;
		$categoria->brand_id =213;
		$categoria->models = "CG";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 957;
		$categoria->brand_id =213;
		$categoria->models = "INTRUDER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 958;
		$categoria->brand_id =213;
		$categoria->models = "SB";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 959;
		$categoria->brand_id =213;
		$categoria->models = "SBR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 960;
		$categoria->brand_id =213;
		$categoria->models = "SG";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 961;
		$categoria->brand_id =213;
		$categoria->models = "SL";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 962;
		$categoria->brand_id =213;
		$categoria->models = "STUD";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 963;
		$categoria->brand_id =214;
		$categoria->models = "ECLIPSE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 964;
		$categoria->brand_id =215;
		$categoria->models = "ADDRESS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 965;
		$categoria->brand_id =215;
		$categoria->models = "AN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 966;
		$categoria->brand_id =215;
		$categoria->models = "AX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 967;
		$categoria->brand_id =215;
		$categoria->models = "BEST";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 968;
		$categoria->brand_id =215;
		$categoria->models = "BOULEVARD";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 969;
		$categoria->brand_id =215;
		$categoria->models = "BURGMAN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 970;
		$categoria->brand_id =215;
		$categoria->models = "DF";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 971;
		$categoria->brand_id =215;
		$categoria->models = "DL";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 972;
		$categoria->brand_id =215;
		$categoria->models = "DR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 973;
		$categoria->brand_id =215;
		$categoria->models = "DS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 974;
		$categoria->brand_id =215;
		$categoria->models = "EN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 975;
		$categoria->brand_id =215;
		$categoria->models = "FA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 976;
		$categoria->brand_id =215;
		$categoria->models = "FR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 977;
		$categoria->brand_id =215;
		$categoria->models = "GN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 978;
		$categoria->brand_id =215;
		$categoria->models = "GS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 979;
		$categoria->brand_id =215;
		$categoria->models = "GSF";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 980;
		$categoria->brand_id =215;
		$categoria->models = "GSR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 981;
		$categoria->brand_id =215;
		$categoria->models = "GSX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 982;
		$categoria->brand_id =215;
		$categoria->models = "GT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 983;
		$categoria->brand_id =215;
		$categoria->models = "GZ";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 984;
		$categoria->brand_id =215;
		$categoria->models = "INTRUDER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 985;
		$categoria->brand_id =215;
		$categoria->models = "JR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 986;
		$categoria->brand_id =215;
		$categoria->models = "LT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 987;
		$categoria->brand_id =215;
		$categoria->models = "MARAUDER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 988;
		$categoria->brand_id =215;
		$categoria->models = "RF";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 989;
		$categoria->brand_id =215;
		$categoria->models = "RM";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 990;
		$categoria->brand_id =215;
		$categoria->models = "RMX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 991;
		$categoria->brand_id =215;
		$categoria->models = "SAVAGE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 992;
		$categoria->brand_id =215;
		$categoria->models = "SB";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 993;
		$categoria->brand_id =215;
		$categoria->models = "SKY WAVE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 994;
		$categoria->brand_id =215;
		$categoria->models = "SP";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 995;
		$categoria->brand_id =215;
		$categoria->models = "SV";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 996;
		$categoria->brand_id =215;
		$categoria->models = "TF";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 997;
		$categoria->brand_id =215;
		$categoria->models = "TL";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 998;
		$categoria->brand_id =215;
		$categoria->models = "TR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 999;
		$categoria->brand_id =215;
		$categoria->models = "TS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1000;
		$categoria->brand_id =215;
		$categoria->models = "UY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1001;
		$categoria->brand_id =215;
		$categoria->models = "VIVAX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1002;
		$categoria->brand_id =215;
		$categoria->models = "XF";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1003;
		$categoria->brand_id =216;
		$categoria->models = "JET";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1004;
		$categoria->brand_id =216;
		$categoria->models = "JOYRIDE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1005;
		$categoria->brand_id =217;
		$categoria->models = "ADVENTURER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1006;
		$categoria->brand_id =217;
		$categoria->models = "BABY SPEED";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1007;
		$categoria->brand_id =217;
		$categoria->models = "BONNEVILLE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1008;
		$categoria->brand_id =217;
		$categoria->models = "DAYTONA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1009;
		$categoria->brand_id =217;
		$categoria->models = "ROCKET";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1010;
		$categoria->brand_id =217;
		$categoria->models = "SCRAMBLER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1011;
		$categoria->brand_id =217;
		$categoria->models = "SPEED TRIPLE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1012;
		$categoria->brand_id =217;
		$categoria->models = "SPEEDMASTER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1013;
		$categoria->brand_id =217;
		$categoria->models = "SPRINT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1014;
		$categoria->brand_id =217;
		$categoria->models = "STREET TRIPLE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1015;
		$categoria->brand_id =217;
		$categoria->models = "THUNDERBIRD";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1016;
		$categoria->brand_id =217;
		$categoria->models = "TIGER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1017;
		$categoria->brand_id =217;
		$categoria->models = "TRIDENT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1018;
		$categoria->brand_id =217;
		$categoria->models = "TROPHY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1019;
		$categoria->brand_id =218;
		$categoria->models = "APACHE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1020;
		$categoria->brand_id =218;
		$categoria->models = "PEP";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1021;
		$categoria->brand_id =218;
		$categoria->models = "VICTOR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1022;
		$categoria->brand_id =219;
		$categoria->models = "ARTISTIC";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1023;
		$categoria->brand_id =219;
		$categoria->models = "BANDIT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1024;
		$categoria->brand_id =219;
		$categoria->models = "BIG STORM";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1025;
		$categoria->brand_id =219;
		$categoria->models = "DUNAS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1026;
		$categoria->brand_id =219;
		$categoria->models = "FORMULA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1027;
		$categoria->brand_id =219;
		$categoria->models = "FORZA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1028;
		$categoria->brand_id =219;
		$categoria->models = "JAGUAR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1029;
		$categoria->brand_id =219;
		$categoria->models = "MATRIX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1030;
		$categoria->brand_id =219;
		$categoria->models = "NEW JAGUAR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1031;
		$categoria->brand_id =219;
		$categoria->models = "NEW LYON";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1032;
		$categoria->brand_id =219;
		$categoria->models = "NINJA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1033;
		$categoria->brand_id =219;
		$categoria->models = "RALLY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1034;
		$categoria->brand_id =219;
		$categoria->models = "RAPTOR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1035;
		$categoria->brand_id =219;
		$categoria->models = "RUTAS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1036;
		$categoria->brand_id =219;
		$categoria->models = "T-REX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1037;
		$categoria->brand_id =219;
		$categoria->models = "THUNDER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1038;
		$categoria->brand_id =219;
		$categoria->models = "TIGER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1039;
		$categoria->brand_id =219;
		$categoria->models = "TORNADO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1040;
		$categoria->brand_id =219;
		$categoria->models = "TSUNAMI";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1041;
		$categoria->brand_id =219;
		$categoria->models = "TWISTER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1042;
		$categoria->brand_id =219;
		$categoria->models = "TYPHOON";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1043;
		$categoria->brand_id =219;
		$categoria->models = "WIND STREET";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1044;
		$categoria->brand_id =220;
		$categoria->models = "BWK";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1045;
		$categoria->brand_id =220;
		$categoria->models = "CONCEPT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1046;
		$categoria->brand_id =220;
		$categoria->models = "DUAL SPORT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1047;
		$categoria->brand_id =220;
		$categoria->models = "FASTWIND";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1048;
		$categoria->brand_id =220;
		$categoria->models = "GTR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1049;
		$categoria->brand_id =220;
		$categoria->models = "LINHAI";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1050;
		$categoria->brand_id =220;
		$categoria->models = "MAGNETIC";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1051;
		$categoria->brand_id =220;
		$categoria->models = "MAX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1052;
		$categoria->brand_id =220;
		$categoria->models = "MS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1053;
		$categoria->brand_id =220;
		$categoria->models = "NITROX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1054;
		$categoria->brand_id =220;
		$categoria->models = "SMF";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1055;
		$categoria->brand_id =220;
		$categoria->models = "V2";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1056;
		$categoria->brand_id =220;
		$categoria->models = "XTREET";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1057;
		$categoria->brand_id =220;
		$categoria->models = "ZF";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1058;
		$categoria->brand_id =221;
		$categoria->models = "VENSUN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1059;
		$categoria->brand_id =222;
		$categoria->models = "AVALANCHE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1060;
		$categoria->brand_id =222;
		$categoria->models = "PHANTERA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1061;
		$categoria->brand_id =222;
		$categoria->models = "PHANTOM";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1062;
		$categoria->brand_id =222;
		$categoria->models = "RHINO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1063;
		$categoria->brand_id =222;
		$categoria->models = "TRITON";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1064;
		$categoria->brand_id =222;
		$categoria->models = "V-THUNDER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1065;
		$categoria->brand_id =222;
		$categoria->models = "WORKMAN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1066;
		$categoria->brand_id =222;
		$categoria->models = "ZIP";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1067;
		$categoria->brand_id =223;
		$categoria->models = "VC";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1068;
		$categoria->brand_id =224;
		$categoria->models = "175";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1069;
		$categoria->brand_id =225;
		$categoria->models = "WY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1070;
		$categoria->brand_id =226;
		$categoria->models = "XF";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1071;
		$categoria->brand_id =227;
		$categoria->models = "AT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1072;
		$categoria->brand_id =227;
		$categoria->models = "AXIS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1073;
		$categoria->brand_id =227;
		$categoria->models = "BWS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1074;
		$categoria->brand_id =227;
		$categoria->models = "CABIN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1075;
		$categoria->brand_id =227;
		$categoria->models = "CHAMP";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1076;
		$categoria->brand_id =227;
		$categoria->models = "CP";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1077;
		$categoria->brand_id =227;
		$categoria->models = "CW";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1078;
		$categoria->brand_id =227;
		$categoria->models = "CY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1079;
		$categoria->brand_id =227;
		$categoria->models = "DT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1080;
		$categoria->brand_id =227;
		$categoria->models = "DX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1081;
		$categoria->brand_id =227;
		$categoria->models = "FJR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1082;
		$categoria->brand_id =227;
		$categoria->models = "FZ";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1083;
		$categoria->brand_id =227;
		$categoria->models = "FZR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1084;
		$categoria->brand_id =227;
		$categoria->models = "FZX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1085;
		$categoria->brand_id =227;
		$categoria->models = "GRAN AXIS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1086;
		$categoria->brand_id =227;
		$categoria->models = "GTS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1087;
		$categoria->brand_id =227;
		$categoria->models = "JYM";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1088;
		$categoria->brand_id =227;
		$categoria->models = "LB";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1089;
		$categoria->brand_id =227;
		$categoria->models = "MT01";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1090;
		$categoria->brand_id =227;
		$categoria->models = "PERLA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1091;
		$categoria->brand_id =227;
		$categoria->models = "PW";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1092;
		$categoria->brand_id =227;
		$categoria->models = "R1";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1093;
		$categoria->brand_id =227;
		$categoria->models = "RD";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1094;
		$categoria->brand_id =227;
		$categoria->models = "ROYAL STAR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1095;
		$categoria->brand_id =227;
		$categoria->models = "RS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1096;
		$categoria->brand_id =227;
		$categoria->models = "RT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1097;
		$categoria->brand_id =227;
		$categoria->models = "RX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1098;
		$categoria->brand_id =227;
		$categoria->models = "RXS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1099;
		$categoria->brand_id =227;
		$categoria->models = "RZ";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1100;
		$categoria->brand_id =227;
		$categoria->models = "SECA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1101;
		$categoria->brand_id =227;
		$categoria->models = "SR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1102;
		$categoria->brand_id =227;
		$categoria->models = "STRATOLINER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1103;
		$categoria->brand_id =227;
		$categoria->models = "T";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1104;
		$categoria->brand_id =227;
		$categoria->models = "T-MAX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1105;
		$categoria->brand_id =227;
		$categoria->models = "TDM";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1106;
		$categoria->brand_id =227;
		$categoria->models = "TDR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1107;
		$categoria->brand_id =227;
		$categoria->models = "TTR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1108;
		$categoria->brand_id =227;
		$categoria->models = "TW";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1109;
		$categoria->brand_id =227;
		$categoria->models = "TZ";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1110;
		$categoria->brand_id =227;
		$categoria->models = "TZR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1111;
		$categoria->brand_id =227;
		$categoria->models = "V";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1112;
		$categoria->brand_id =227;
		$categoria->models = "V MAX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1113;
		$categoria->brand_id =227;
		$categoria->models = "WARRIOR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1114;
		$categoria->brand_id =227;
		$categoria->models = "WR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1115;
		$categoria->brand_id =227;
		$categoria->models = "XJ";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1116;
		$categoria->brand_id =227;
		$categoria->models = "XJN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1117;
		$categoria->brand_id =227;
		$categoria->models = "XJR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1118;
		$categoria->brand_id =227;
		$categoria->models = "XP";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1119;
		$categoria->brand_id =227;
		$categoria->models = "XRW";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1120;
		$categoria->brand_id =227;
		$categoria->models = "XT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1121;
		$categoria->brand_id =227;
		$categoria->models = "XTZ";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1122;
		$categoria->brand_id =227;
		$categoria->models = "XV";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1123;
		$categoria->brand_id =227;
		$categoria->models = "XVS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1124;
		$categoria->brand_id =227;
		$categoria->models = "XVZ";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1125;
		$categoria->brand_id =227;
		$categoria->models = "YB";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1126;
		$categoria->brand_id =227;
		$categoria->models = "YBR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1127;
		$categoria->brand_id =227;
		$categoria->models = "YD";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1128;
		$categoria->brand_id =227;
		$categoria->models = "YFA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1129;
		$categoria->brand_id =227;
		$categoria->models = "YFB";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1130;
		$categoria->brand_id =227;
		$categoria->models = "YFM";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1131;
		$categoria->brand_id =227;
		$categoria->models = "YFS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1132;
		$categoria->brand_id =227;
		$categoria->models = "YFZ";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1133;
		$categoria->brand_id =227;
		$categoria->models = "YP";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1134;
		$categoria->brand_id =227;
		$categoria->models = "YS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1135;
		$categoria->brand_id =227;
		$categoria->models = "YT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1136;
		$categoria->brand_id =227;
		$categoria->models = "YXR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1137;
		$categoria->brand_id =227;
		$categoria->models = "YZ";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1138;
		$categoria->brand_id =227;
		$categoria->models = "YZF";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1139;
		$categoria->brand_id =227;
		$categoria->models = "YZZ";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1140;
		$categoria->brand_id =228;
		$categoria->models = "RX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1141;
		$categoria->brand_id =228;
		$categoria->models = "VISION";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1142;
		$categoria->brand_id =229;
		$categoria->models = "YH";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1143;
		$categoria->brand_id =230;
		$categoria->models = "JAGUAR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1144;
		$categoria->brand_id =230;
		$categoria->models = "RX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1145;
		$categoria->brand_id =231;
		$categoria->models = "YB";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1146;
		$categoria->brand_id =232;
		$categoria->models = "BY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1147;
		$categoria->brand_id =232;
		$categoria->models = "YG";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1148;
		$categoria->brand_id =232;
		$categoria->models = "ZH";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1149;
		$categoria->brand_id =233;
		$categoria->models = "GT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1150;
		$categoria->brand_id =233;
		$categoria->models = "RP";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1151;
		$categoria->brand_id =234;
		$categoria->models = "ZN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1152;
		$categoria->brand_id =235;
		$categoria->models = "ZS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1153;
		$categoria->brand_id =236;
		$categoria->models = "QT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1154;
		$categoria->brand_id =236;
		$categoria->models = "ZX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1155;
		$categoria->brand_id =237;
		$categoria->models = "1.6EL";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1156;
		$categoria->brand_id =237;
		$categoria->models = "CL";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1157;
		$categoria->brand_id =237;
		$categoria->models = "INTEGRA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1158;
		$categoria->brand_id =237;
		$categoria->models = "LEGEND";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1159;
		$categoria->brand_id =237;
		$categoria->models = "NSX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1160;
		$categoria->brand_id =237;
		$categoria->models = "RL";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1161;
		$categoria->brand_id =237;
		$categoria->models = "RSX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1162;
		$categoria->brand_id =237;
		$categoria->models = "TL";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1163;
		$categoria->brand_id =237;
		$categoria->models = "TSX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1164;
		$categoria->brand_id =237;
		$categoria->models = "VIGOR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1165;
		$categoria->brand_id =238;
		$categoria->models = "145";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1166;
		$categoria->brand_id =238;
		$categoria->models = "146";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1167;
		$categoria->brand_id =238;
		$categoria->models = "147";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1168;
		$categoria->brand_id =238;
		$categoria->models = "155";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1169;
		$categoria->brand_id =238;
		$categoria->models = "156";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1170;
		$categoria->brand_id =238;
		$categoria->models = "159";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1171;
		$categoria->brand_id =238;
		$categoria->models = "164";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1172;
		$categoria->brand_id =238;
		$categoria->models = "166";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1173;
		$categoria->brand_id =238;
		$categoria->models = "33";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1174;
		$categoria->brand_id =238;
		$categoria->models = "ALFETTA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1175;
		$categoria->brand_id =238;
		$categoria->models = "BRERA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1176;
		$categoria->brand_id =238;
		$categoria->models = "GTV";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1177;
		$categoria->brand_id =238;
		$categoria->models = "RZ";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1178;
		$categoria->brand_id =238;
		$categoria->models = "SPIDER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1179;
		$categoria->brand_id =238;
		$categoria->models = "SZ";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1180;
		$categoria->brand_id =239;
		$categoria->models = "HORNET";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1181;
		$categoria->brand_id =239;
		$categoria->models = "JAVELIN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1182;
		$categoria->brand_id =240;
		$categoria->models = "TOWNER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1183;
		$categoria->brand_id =241;
		$categoria->models = "DB7";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1184;
		$categoria->brand_id =241;
		$categoria->models = "DB9";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1185;
		$categoria->brand_id =241;
		$categoria->models = "DBS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1186;
		$categoria->brand_id =241;
		$categoria->models = "LAGONDA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1187;
		$categoria->brand_id =241;
		$categoria->models = "VANTAGE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1188;
		$categoria->brand_id =241;
		$categoria->models = "VIRAGE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1189;
		$categoria->brand_id =242;
		$categoria->models = "100";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1190;
		$categoria->brand_id =242;
		$categoria->models = "200";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1191;
		$categoria->brand_id =242;
		$categoria->models = "4000";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1192;
		$categoria->brand_id =242;
		$categoria->models = "80";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1193;
		$categoria->brand_id =242;
		$categoria->models = "90";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1194;
		$categoria->brand_id =242;
		$categoria->models = "A2";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1195;
		$categoria->brand_id =242;
		$categoria->models = "A3";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1196;
		$categoria->brand_id =242;
		$categoria->models = "A4";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1197;
		$categoria->brand_id =242;
		$categoria->models = "A5";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1198;
		$categoria->brand_id =242;
		$categoria->models = "A6";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1199;
		$categoria->brand_id =242;
		$categoria->models = "A7";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1200;
		$categoria->brand_id =242;
		$categoria->models = "A8";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1201;
		$categoria->brand_id =242;
		$categoria->models = "ALLROAD";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1202;
		$categoria->brand_id =242;
		$categoria->models = "CABRIOLET";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1203;
		$categoria->brand_id =242;
		$categoria->models = "R";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1204;
		$categoria->brand_id =242;
		$categoria->models = "RS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1205;
		$categoria->brand_id =242;
		$categoria->models = "S3";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1206;
		$categoria->brand_id =242;
		$categoria->models = "S4";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1207;
		$categoria->brand_id =242;
		$categoria->models = "S5";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1208;
		$categoria->brand_id =242;
		$categoria->models = "S6";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1209;
		$categoria->brand_id =242;
		$categoria->models = "S8";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1210;
		$categoria->brand_id =242;
		$categoria->models = "TT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1211;
		$categoria->brand_id =242;
		$categoria->models = "TTS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1212;
		$categoria->brand_id =242;
		$categoria->models = "V8";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1213;
		$categoria->brand_id =243;
		$categoria->models = "ARNAGE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1214;
		$categoria->brand_id =243;
		$categoria->models = "AZURE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1215;
		$categoria->brand_id =243;
		$categoria->models = "BROOKLANDS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1216;
		$categoria->brand_id =243;
		$categoria->models = "CONTINENTAL";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1217;
		$categoria->brand_id =243;
		$categoria->models = "EIGHT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1218;
		$categoria->brand_id =243;
		$categoria->models = "MULSANNE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1219;
		$categoria->brand_id =243;
		$categoria->models = "R";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1220;
		$categoria->brand_id =243;
		$categoria->models = "RT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1221;
		$categoria->brand_id =244;
		$categoria->models = "116";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1222;
		$categoria->brand_id =244;
		$categoria->models = "120";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1223;
		$categoria->brand_id =244;
		$categoria->models = "128";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1224;
		$categoria->brand_id =244;
		$categoria->models = "130";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1225;
		$categoria->brand_id =244;
		$categoria->models = "135";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1226;
		$categoria->brand_id =244;
		$categoria->models = "2002";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1227;
		$categoria->brand_id =244;
		$categoria->models = "3.0";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1228;
		$categoria->brand_id =244;
		$categoria->models = "316";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1229;
		$categoria->brand_id =244;
		$categoria->models = "318";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1230;
		$categoria->brand_id =244;
		$categoria->models = "320";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1231;
		$categoria->brand_id =244;
		$categoria->models = "323";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1232;
		$categoria->brand_id =244;
		$categoria->models = "325";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1233;
		$categoria->brand_id =244;
		$categoria->models = "328";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1234;
		$categoria->brand_id =244;
		$categoria->models = "330";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1235;
		$categoria->brand_id =244;
		$categoria->models = "335";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1236;
		$categoria->brand_id =244;
		$categoria->models = "518";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1237;
		$categoria->brand_id =244;
		$categoria->models = "520";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1238;
		$categoria->brand_id =244;
		$categoria->models = "523";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1239;
		$categoria->brand_id =244;
		$categoria->models = "524";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1240;
		$categoria->brand_id =244;
		$categoria->models = "525";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1241;
		$categoria->brand_id =244;
		$categoria->models = "528";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1242;
		$categoria->brand_id =244;
		$categoria->models = "530";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1243;
		$categoria->brand_id =244;
		$categoria->models = "533";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1244;
		$categoria->brand_id =244;
		$categoria->models = "535";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1245;
		$categoria->brand_id =244;
		$categoria->models = "540";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1246;
		$categoria->brand_id =244;
		$categoria->models = "545";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1247;
		$categoria->brand_id =244;
		$categoria->models = "550";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1248;
		$categoria->brand_id =244;
		$categoria->models = "630";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1249;
		$categoria->brand_id =244;
		$categoria->models = "633";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1250;
		$categoria->brand_id =244;
		$categoria->models = "635";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1251;
		$categoria->brand_id =244;
		$categoria->models = "645";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1252;
		$categoria->brand_id =244;
		$categoria->models = "650";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1253;
		$categoria->brand_id =244;
		$categoria->models = "728";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1254;
		$categoria->brand_id =244;
		$categoria->models = "730";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1255;
		$categoria->brand_id =244;
		$categoria->models = "733";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1256;
		$categoria->brand_id =244;
		$categoria->models = "735";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1257;
		$categoria->brand_id =244;
		$categoria->models = "740";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1258;
		$categoria->brand_id =244;
		$categoria->models = "745";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1259;
		$categoria->brand_id =244;
		$categoria->models = "750";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1260;
		$categoria->brand_id =244;
		$categoria->models = "760";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1261;
		$categoria->brand_id =244;
		$categoria->models = "840";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1262;
		$categoria->brand_id =244;
		$categoria->models = "850";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1263;
		$categoria->brand_id =244;
		$categoria->models = "ALPINA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1264;
		$categoria->brand_id =244;
		$categoria->models = "L6";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1265;
		$categoria->brand_id =244;
		$categoria->models = "L7";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1266;
		$categoria->brand_id =244;
		$categoria->models = "M";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1267;
		$categoria->brand_id =244;
		$categoria->models = "M3";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1268;
		$categoria->brand_id =244;
		$categoria->models = "M5";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1269;
		$categoria->brand_id =244;
		$categoria->models = "M6";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1270;
		$categoria->brand_id =244;
		$categoria->models = "Z1";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1271;
		$categoria->brand_id =244;
		$categoria->models = "Z3";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1272;
		$categoria->brand_id =244;
		$categoria->models = "Z4";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1273;
		$categoria->brand_id =244;
		$categoria->models = "Z8";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1274;
		$categoria->brand_id =245;
		$categoria->models = "FSV";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1275;
		$categoria->brand_id =246;
		$categoria->models = "EB";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1276;
		$categoria->brand_id =246;
		$categoria->models = "EB112";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1277;
		$categoria->brand_id =246;
		$categoria->models = "VEYRON";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1278;
		$categoria->brand_id =247;
		$categoria->models = "CENTURY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1279;
		$categoria->brand_id =247;
		$categoria->models = "ELECTRA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1280;
		$categoria->brand_id =247;
		$categoria->models = "LACROSSE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1281;
		$categoria->brand_id =247;
		$categoria->models = "LE SABRE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1282;
		$categoria->brand_id =247;
		$categoria->models = "LUCERNE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1283;
		$categoria->brand_id =247;
		$categoria->models = "PARK AVENUE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1284;
		$categoria->brand_id =247;
		$categoria->models = "REGAL";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1285;
		$categoria->brand_id =247;
		$categoria->models = "RIVIERA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1286;
		$categoria->brand_id =247;
		$categoria->models = "ROADMASTER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1287;
		$categoria->brand_id =247;
		$categoria->models = "SKYHAWK";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1288;
		$categoria->brand_id =247;
		$categoria->models = "SKYLARK";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1289;
		$categoria->brand_id =247;
		$categoria->models = "TERRAZA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1290;
		$categoria->brand_id =248;
		$categoria->models = "F3";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1291;
		$categoria->brand_id =248;
		$categoria->models = "FLYER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1292;
		$categoria->brand_id =249;
		$categoria->models = "ALLANTE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1293;
		$categoria->brand_id =249;
		$categoria->models = "BROUGHAM";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1294;
		$categoria->brand_id =249;
		$categoria->models = "CATERA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1295;
		$categoria->brand_id =249;
		$categoria->models = "CTS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1296;
		$categoria->brand_id =249;
		$categoria->models = "DEVILLE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1297;
		$categoria->brand_id =249;
		$categoria->models = "DTS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1298;
		$categoria->brand_id =249;
		$categoria->models = "ELDORADO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1299;
		$categoria->brand_id =249;
		$categoria->models = "FLEETWOOD";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1300;
		$categoria->brand_id =249;
		$categoria->models = "SEVILLE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1301;
		$categoria->brand_id =249;
		$categoria->models = "STS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1302;
		$categoria->brand_id =249;
		$categoria->models = "STS-V";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1303;
		$categoria->brand_id =249;
		$categoria->models = "XLR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1304;
		$categoria->brand_id =249;
		$categoria->models = "XLR-V";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1305;
		$categoria->brand_id =250;
		$categoria->models = "BENNI";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1306;
		$categoria->brand_id =250;
		$categoria->models = "SUPER VAN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1307;
		$categoria->brand_id =251;
		$categoria->models = "CH";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1308;
		$categoria->brand_id =251;
		$categoria->models = "IDEAL";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1309;
		$categoria->brand_id =252;
		$categoria->models = "A5";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1310;
		$categoria->brand_id =252;
		$categoria->models = "ARAUCA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1311;
		$categoria->brand_id =252;
		$categoria->models = "COWIN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1312;
		$categoria->brand_id =252;
		$categoria->models = "FACE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1313;
		$categoria->brand_id =252;
		$categoria->models = "FLAGCLOUD";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1314;
		$categoria->brand_id =252;
		$categoria->models = "G5";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1315;
		$categoria->brand_id =252;
		$categoria->models = "ORINOCO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1316;
		$categoria->brand_id =252;
		$categoria->models = "QQ";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1317;
		$categoria->brand_id =252;
		$categoria->models = "TECH";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1318;
		$categoria->brand_id =252;
		$categoria->models = "V5";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1319;
		$categoria->brand_id =252;
		$categoria->models = "WINDCLOUD";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1320;
		$categoria->brand_id =252;
		$categoria->models = "X1";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1321;
		$categoria->brand_id =253;
		$categoria->models = "ALTO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1322;
		$categoria->brand_id =253;
		$categoria->models = "ARGOSY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1323;
		$categoria->brand_id =253;
		$categoria->models = "ASTRA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1324;
		$categoria->brand_id =253;
		$categoria->models = "ASTRO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1325;
		$categoria->brand_id =253;
		$categoria->models = "AVEO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1326;
		$categoria->brand_id =253;
		$categoria->models = "BEL AIR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1327;
		$categoria->brand_id =253;
		$categoria->models = "BERETTA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1328;
		$categoria->brand_id =253;
		$categoria->models = "BISCAYNE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1329;
		$categoria->brand_id =253;
		$categoria->models = "CAMARO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1330;
		$categoria->brand_id =253;
		$categoria->models = "CAPRICE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1331;
		$categoria->brand_id =253;
		$categoria->models = "CAVALIER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1332;
		$categoria->brand_id =253;
		$categoria->models = "CELEBRITY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1333;
		$categoria->brand_id =253;
		$categoria->models = "CELTA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1334;
		$categoria->brand_id =253;
		$categoria->models = "CENTURY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1335;
		$categoria->brand_id =253;
		$categoria->models = "CHEVELLE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1336;
		$categoria->brand_id =253;
		$categoria->models = "CHEVETTE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1337;
		$categoria->brand_id =253;
		$categoria->models = "CHEVY C2";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1338;
		$categoria->brand_id =253;
		$categoria->models = "CHEVY NOVA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1339;
		$categoria->brand_id =253;
		$categoria->models = "CLASSIC";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1340;
		$categoria->brand_id =253;
		$categoria->models = "COBALT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1341;
		$categoria->brand_id =253;
		$categoria->models = "CORSA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1342;
		$categoria->brand_id =253;
		$categoria->models = "CORSICA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1343;
		$categoria->brand_id =253;
		$categoria->models = "CORVETTE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1344;
		$categoria->brand_id =253;
		$categoria->models = "CRUZE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1345;
		$categoria->brand_id =253;
		$categoria->models = "EPICA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1346;
		$categoria->brand_id =253;
		$categoria->models = "ESTEEM";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1347;
		$categoria->brand_id =253;
		$categoria->models = "EXPRESS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1348;
		$categoria->brand_id =253;
		$categoria->models = "HHR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1349;
		$categoria->brand_id =253;
		$categoria->models = "IMPALA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1350;
		$categoria->brand_id =253;
		$categoria->models = "KALOS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1351;
		$categoria->brand_id =253;
		$categoria->models = "LUMINA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1352;
		$categoria->brand_id =253;
		$categoria->models = "LUMINAAPV";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1353;
		$categoria->brand_id =253;
		$categoria->models = "MALIBU";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1354;
		$categoria->brand_id =253;
		$categoria->models = "MERIVA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1355;
		$categoria->brand_id =253;
		$categoria->models = "METRO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1356;
		$categoria->brand_id =253;
		$categoria->models = "MONTE CARLO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1357;
		$categoria->brand_id =253;
		$categoria->models = "MONZA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1358;
		$categoria->brand_id =253;
		$categoria->models = "OPTRA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1359;
		$categoria->brand_id =253;
		$categoria->models = "ORLANDO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1360;
		$categoria->brand_id =253;
		$categoria->models = "PRIZM";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1361;
		$categoria->brand_id =253;
		$categoria->models = "SAIL";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1362;
		$categoria->brand_id =253;
		$categoria->models = "SONIC";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1363;
		$categoria->brand_id =253;
		$categoria->models = "SPARK";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1364;
		$categoria->brand_id =253;
		$categoria->models = "SPECTRUM";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1365;
		$categoria->brand_id =253;
		$categoria->models = "SUNFIRE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1366;
		$categoria->brand_id =253;
		$categoria->models = "SUPERIOR K";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1367;
		$categoria->brand_id =253;
		$categoria->models = "SWIFT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1368;
		$categoria->brand_id =253;
		$categoria->models = "UPLANDER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1369;
		$categoria->brand_id =253;
		$categoria->models = "VENTURE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1370;
		$categoria->brand_id =253;
		$categoria->models = "VOLT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1371;
		$categoria->brand_id =253;
		$categoria->models = "WAGON R";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1372;
		$categoria->brand_id =254;
		$categoria->models = "200";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1373;
		$categoria->brand_id =254;
		$categoria->models = "300";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1374;
		$categoria->brand_id =254;
		$categoria->models = "300M";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1375;
		$categoria->brand_id =254;
		$categoria->models = "CIRRUS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1376;
		$categoria->brand_id =254;
		$categoria->models = "CONCORDE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1377;
		$categoria->brand_id =254;
		$categoria->models = "CROSSFIRE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1378;
		$categoria->brand_id =254;
		$categoria->models = "FIFTH AVENUE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1379;
		$categoria->brand_id =254;
		$categoria->models = "GRAND CARAVAN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1380;
		$categoria->brand_id =254;
		$categoria->models = "GRAND VOYAGER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1381;
		$categoria->brand_id =254;
		$categoria->models = "IMPERIAL";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1382;
		$categoria->brand_id =254;
		$categoria->models = "LE BARON";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1383;
		$categoria->brand_id =254;
		$categoria->models = "LHS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1384;
		$categoria->brand_id =254;
		$categoria->models = "NEON";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1385;
		$categoria->brand_id =254;
		$categoria->models = "NEW YORKER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1386;
		$categoria->brand_id =254;
		$categoria->models = "PACIFICA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1387;
		$categoria->brand_id =254;
		$categoria->models = "PT  CRUISER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1388;
		$categoria->brand_id =254;
		$categoria->models = "SEBRING";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1389;
		$categoria->brand_id =254;
		$categoria->models = "STRATUS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1390;
		$categoria->brand_id =254;
		$categoria->models = "TOWN&COUNTRY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1391;
		$categoria->brand_id =254;
		$categoria->models = "VOYAGER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1392;
		$categoria->brand_id =255;
		$categoria->models = "BERLINGO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1393;
		$categoria->brand_id =255;
		$categoria->models = "C2";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1394;
		$categoria->brand_id =255;
		$categoria->models = "C3";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1395;
		$categoria->brand_id =255;
		$categoria->models = "C4";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1396;
		$categoria->brand_id =255;
		$categoria->models = "C5";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1397;
		$categoria->brand_id =255;
		$categoria->models = "SAXO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1398;
		$categoria->brand_id =255;
		$categoria->models = "XANTIA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1399;
		$categoria->brand_id =255;
		$categoria->models = "XM";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1400;
		$categoria->brand_id =255;
		$categoria->models = "XSARA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1401;
		$categoria->brand_id =256;
		$categoria->models = "1210";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1402;
		$categoria->brand_id =256;
		$categoria->models = "1303";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1403;
		$categoria->brand_id =256;
		$categoria->models = "1410";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1404;
		$categoria->brand_id =256;
		$categoria->models = "524";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1405;
		$categoria->brand_id =256;
		$categoria->models = "BREAK";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1406;
		$categoria->brand_id =257;
		$categoria->models = "CHAIRMAN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1407;
		$categoria->brand_id =257;
		$categoria->models = "CIELO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1408;
		$categoria->brand_id =257;
		$categoria->models = "DAMAS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1409;
		$categoria->brand_id =257;
		$categoria->models = "ESPERO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1410;
		$categoria->brand_id =257;
		$categoria->models = "LACETTI";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1411;
		$categoria->brand_id =257;
		$categoria->models = "LANOS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1412;
		$categoria->brand_id =257;
		$categoria->models = "LEGANZA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1413;
		$categoria->brand_id =257;
		$categoria->models = "MATIZ";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1414;
		$categoria->brand_id =257;
		$categoria->models = "NUBIRA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1415;
		$categoria->brand_id =257;
		$categoria->models = "PRINCE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1416;
		$categoria->brand_id =257;
		$categoria->models = "RACER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1417;
		$categoria->brand_id =257;
		$categoria->models = "SUPER SALOON";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1418;
		$categoria->brand_id =257;
		$categoria->models = "TACUMA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1419;
		$categoria->brand_id =257;
		$categoria->models = "TICO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1420;
		$categoria->brand_id =258;
		$categoria->models = "APPLAUSE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1421;
		$categoria->brand_id =258;
		$categoria->models = "CHARADE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1422;
		$categoria->brand_id =258;
		$categoria->models = "CHARMANT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1423;
		$categoria->brand_id =258;
		$categoria->models = "CUORE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1424;
		$categoria->brand_id =258;
		$categoria->models = "GRAN MOVE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1425;
		$categoria->brand_id =258;
		$categoria->models = "HIJET";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1426;
		$categoria->brand_id =258;
		$categoria->models = "TERIOS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1427;
		$categoria->brand_id =259;
		$categoria->models = "DELORIAN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1428;
		$categoria->brand_id =260;
		$categoria->models = "ASPEN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1429;
		$categoria->brand_id =260;
		$categoria->models = "AVENGER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1430;
		$categoria->brand_id =260;
		$categoria->models = "BRISA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1431;
		$categoria->brand_id =260;
		$categoria->models = "CALIBER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1432;
		$categoria->brand_id =260;
		$categoria->models = "CARAVAN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1433;
		$categoria->brand_id =260;
		$categoria->models = "CHALLENGER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1434;
		$categoria->brand_id =260;
		$categoria->models = "CHARGER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1435;
		$categoria->brand_id =260;
		$categoria->models = "COLT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1436;
		$categoria->brand_id =260;
		$categoria->models = "CORONET";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1437;
		$categoria->brand_id =260;
		$categoria->models = "DART";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1438;
		$categoria->brand_id =260;
		$categoria->models = "DAYTONA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1439;
		$categoria->brand_id =260;
		$categoria->models = "DEMON";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1440;
		$categoria->brand_id =260;
		$categoria->models = "DIPLOMAT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1441;
		$categoria->brand_id =260;
		$categoria->models = "DYNASTY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1442;
		$categoria->brand_id =260;
		$categoria->models = "FORZA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1443;
		$categoria->brand_id =260;
		$categoria->models = "GRAND CARAVAN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1444;
		$categoria->brand_id =260;
		$categoria->models = "INTREPID";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1445;
		$categoria->brand_id =260;
		$categoria->models = "MAGNUM";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1446;
		$categoria->brand_id =260;
		$categoria->models = "MONACO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1447;
		$categoria->brand_id =260;
		$categoria->models = "NEON";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1448;
		$categoria->brand_id =260;
		$categoria->models = "RAM VAN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1449;
		$categoria->brand_id =260;
		$categoria->models = "SHADOW";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1450;
		$categoria->brand_id =260;
		$categoria->models = "SPIRIT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1451;
		$categoria->brand_id =260;
		$categoria->models = "STEALTH";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1452;
		$categoria->brand_id =260;
		$categoria->models = "STRATUS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1453;
		$categoria->brand_id =260;
		$categoria->models = "VIPER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1454;
		$categoria->brand_id =261;
		$categoria->models = "EQ";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1455;
		$categoria->brand_id =261;
		$categoria->models = "FENGSHEN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1456;
		$categoria->brand_id =261;
		$categoria->models = "S30";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1457;
		$categoria->brand_id =262;
		$categoria->models = "SUMMIT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1458;
		$categoria->brand_id =262;
		$categoria->models = "TALON";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1459;
		$categoria->brand_id =262;
		$categoria->models = "VISION";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1460;
		$categoria->brand_id =263;
		$categoria->models = "COBRA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1461;
		$categoria->brand_id =264;
		$categoria->models = "348";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1462;
		$categoria->brand_id =264;
		$categoria->models = "360";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1463;
		$categoria->brand_id =264;
		$categoria->models = "456";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1464;
		$categoria->brand_id =264;
		$categoria->models = "512";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1465;
		$categoria->brand_id =264;
		$categoria->models = "550";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1466;
		$categoria->brand_id =264;
		$categoria->models = "575M";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1467;
		$categoria->brand_id =264;
		$categoria->models = "599";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1468;
		$categoria->brand_id =264;
		$categoria->models = "612";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1469;
		$categoria->brand_id =264;
		$categoria->models = "CALIFORNIA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1470;
		$categoria->brand_id =264;
		$categoria->models = "ENZO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1471;
		$categoria->brand_id =264;
		$categoria->models = "F 308";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1472;
		$categoria->brand_id =264;
		$categoria->models = "F355";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1473;
		$categoria->brand_id =264;
		$categoria->models = "F365";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1474;
		$categoria->brand_id =264;
		$categoria->models = "F40";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1475;
		$categoria->brand_id =264;
		$categoria->models = "F430";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1476;
		$categoria->brand_id =264;
		$categoria->models = "F50";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1477;
		$categoria->brand_id =264;
		$categoria->models = "MONDIAL";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1478;
		$categoria->brand_id =264;
		$categoria->models = "SPIDER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1479;
		$categoria->brand_id =264;
		$categoria->models = "TESTAROSSA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1480;
		$categoria->brand_id =265;
		$categoria->models = "124";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1481;
		$categoria->brand_id =265;
		$categoria->models = "125";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1482;
		$categoria->brand_id =265;
		$categoria->models = "131";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1483;
		$categoria->brand_id =265;
		$categoria->models = "132";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1484;
		$categoria->brand_id =265;
		$categoria->models = "147";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1485;
		$categoria->brand_id =265;
		$categoria->models = "500";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1486;
		$categoria->brand_id =265;
		$categoria->models = "BARCHETTA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1487;
		$categoria->brand_id =265;
		$categoria->models = "BRAVA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1488;
		$categoria->brand_id =265;
		$categoria->models = "BRAVO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1489;
		$categoria->brand_id =265;
		$categoria->models = "CINQUECENTO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1490;
		$categoria->brand_id =265;
		$categoria->models = "COUPE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1491;
		$categoria->brand_id =265;
		$categoria->models = "CROMA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1492;
		$categoria->brand_id =265;
		$categoria->models = "DOBLO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1493;
		$categoria->brand_id =265;
		$categoria->models = "DUCATO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1494;
		$categoria->brand_id =265;
		$categoria->models = "IDEA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1495;
		$categoria->brand_id =265;
		$categoria->models = "LINEA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1496;
		$categoria->brand_id =265;
		$categoria->models = "MAREA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1497;
		$categoria->brand_id =265;
		$categoria->models = "PALIO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1498;
		$categoria->brand_id =265;
		$categoria->models = "PANDA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1499;
		$categoria->brand_id =265;
		$categoria->models = "PREMIO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1500;
		$categoria->brand_id =265;
		$categoria->models = "PUNTO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1501;
		$categoria->brand_id =265;
		$categoria->models = "REGATA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1502;
		$categoria->brand_id =265;
		$categoria->models = "RITMO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1503;
		$categoria->brand_id =265;
		$categoria->models = "SEICENTO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1504;
		$categoria->brand_id =265;
		$categoria->models = "SIENA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1505;
		$categoria->brand_id =265;
		$categoria->models = "STILO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1506;
		$categoria->brand_id =265;
		$categoria->models = "TEMPRA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1507;
		$categoria->brand_id =265;
		$categoria->models = "TIPO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1508;
		$categoria->brand_id =265;
		$categoria->models = "TUCAN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1509;
		$categoria->brand_id =265;
		$categoria->models = "ULYSSE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1510;
		$categoria->brand_id =265;
		$categoria->models = "UNO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1511;
		$categoria->brand_id =266;
		$categoria->models = "A";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1512;
		$categoria->brand_id =266;
		$categoria->models = "AEROSTAR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1513;
		$categoria->brand_id =266;
		$categoria->models = "ASPIRE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1514;
		$categoria->brand_id =266;
		$categoria->models = "B";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1515;
		$categoria->brand_id =266;
		$categoria->models = "CLUB WAGON";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1516;
		$categoria->brand_id =266;
		$categoria->models = "CONQUISTADOR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1517;
		$categoria->brand_id =266;
		$categoria->models = "CONTOUR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1518;
		$categoria->brand_id =266;
		$categoria->models = "CORCEL";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1519;
		$categoria->brand_id =266;
		$categoria->models = "CORTINA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1520;
		$categoria->brand_id =266;
		$categoria->models = "COUGAR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1521;
		$categoria->brand_id =266;
		$categoria->models = "COUNTRY SQUIRE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1522;
		$categoria->brand_id =266;
		$categoria->models = "CROWN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1523;
		$categoria->brand_id =266;
		$categoria->models = "DEL REY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1524;
		$categoria->brand_id =266;
		$categoria->models = "ECONOLINE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1525;
		$categoria->brand_id =266;
		$categoria->models = "ESCORT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1526;
		$categoria->brand_id =266;
		$categoria->models = "FAIRLANE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1527;
		$categoria->brand_id =266;
		$categoria->models = "FAIRMONT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1528;
		$categoria->brand_id =266;
		$categoria->models = "FALCON";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1529;
		$categoria->brand_id =266;
		$categoria->models = "FESTIVA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1530;
		$categoria->brand_id =266;
		$categoria->models = "FIESTA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1531;
		$categoria->brand_id =266;
		$categoria->models = "FIVE HUNDRED";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1532;
		$categoria->brand_id =266;
		$categoria->models = "FOCUS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1533;
		$categoria->brand_id =266;
		$categoria->models = "FREESTAR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1534;
		$categoria->brand_id =266;
		$categoria->models = "FUSION";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1535;
		$categoria->brand_id =266;
		$categoria->models = "FUTURA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1536;
		$categoria->brand_id =266;
		$categoria->models = "GALAXIE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1537;
		$categoria->brand_id =266;
		$categoria->models = "GRAN TORINO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1538;
		$categoria->brand_id =266;
		$categoria->models = "GRANADA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1539;
		$categoria->brand_id =266;
		$categoria->models = "GRAND MARQUIS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1540;
		$categoria->brand_id =266;
		$categoria->models = "GT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1541;
		$categoria->brand_id =266;
		$categoria->models = "KA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1542;
		$categoria->brand_id =266;
		$categoria->models = "LASER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1543;
		$categoria->brand_id =266;
		$categoria->models = "LTD";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1544;
		$categoria->brand_id =266;
		$categoria->models = "MAVERICK";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1545;
		$categoria->brand_id =266;
		$categoria->models = "MONDEO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1546;
		$categoria->brand_id =266;
		$categoria->models = "MUSTANG";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1547;
		$categoria->brand_id =266;
		$categoria->models = "ORION";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1548;
		$categoria->brand_id =266;
		$categoria->models = "PROBE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1549;
		$categoria->brand_id =266;
		$categoria->models = "PUMA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1550;
		$categoria->brand_id =266;
		$categoria->models = "SCORPIO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1551;
		$categoria->brand_id =266;
		$categoria->models = "SHELBY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1552;
		$categoria->brand_id =266;
		$categoria->models = "SIERRA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1553;
		$categoria->brand_id =266;
		$categoria->models = "TAURUS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1554;
		$categoria->brand_id =266;
		$categoria->models = "TEMPO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1555;
		$categoria->brand_id =266;
		$categoria->models = "THUNDERBIRD";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1556;
		$categoria->brand_id =266;
		$categoria->models = "TORINO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1557;
		$categoria->brand_id =266;
		$categoria->models = "WINDSTAR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1558;
		$categoria->brand_id =266;
		$categoria->models = "ZEPHYR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1559;
		$categoria->brand_id =267;
		$categoria->models = "CK";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1560;
		$categoria->brand_id =267;
		$categoria->models = "FC";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1561;
		$categoria->brand_id =267;
		$categoria->models = "HA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1562;
		$categoria->brand_id =267;
		$categoria->models = "MK";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1563;
		$categoria->brand_id =268;
		$categoria->models = "METRO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1564;
		$categoria->brand_id =268;
		$categoria->models = "PRIZM";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1565;
		$categoria->brand_id =268;
		$categoria->models = "STORM";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1566;
		$categoria->brand_id =269;
		$categoria->models = "ACADIA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1567;
		$categoria->brand_id =269;
		$categoria->models = "EV";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1568;
		$categoria->brand_id =269;
		$categoria->models = "SAFARI";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1569;
		$categoria->brand_id =269;
		$categoria->models = "SAVANA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1570;
		$categoria->brand_id =269;
		$categoria->models = "VAN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1571;
		$categoria->brand_id =270;
		$categoria->models = "IMAGE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1572;
		$categoria->brand_id =271;
		$categoria->models = "PERI";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1573;
		$categoria->brand_id =272;
		$categoria->models = "LOBO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1574;
		$categoria->brand_id =272;
		$categoria->models = "MINYI";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1575;
		$categoria->brand_id =272;
		$categoria->models = "SAIBAO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1576;
		$categoria->brand_id =272;
		$categoria->models = "XINYI";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1577;
		$categoria->brand_id =273;
		$categoria->models = "3";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1578;
		$categoria->brand_id =273;
		$categoria->models = "FAMILY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1579;
		$categoria->brand_id =273;
		$categoria->models = "FREEMA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1580;
		$categoria->brand_id =274;
		$categoria->models = "HQ7131EA4";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1581;
		$categoria->brand_id =275;
		$categoria->models = "B11";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1582;
		$categoria->brand_id =275;
		$categoria->models = "B21";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1583;
		$categoria->brand_id =275;
		$categoria->models = "BOLIGER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1584;
		$categoria->brand_id =276;
		$categoria->models = "ARROW";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1585;
		$categoria->brand_id =276;
		$categoria->models = "HUNTER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1586;
		$categoria->brand_id =277;
		$categoria->models = "51017";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1587;
		$categoria->brand_id =278;
		$categoria->models = "ACCORD";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1588;
		$categoria->brand_id =278;
		$categoria->models = "CIVIC";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1589;
		$categoria->brand_id =278;
		$categoria->models = "CONCERTO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1590;
		$categoria->brand_id =278;
		$categoria->models = "CRZ";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1591;
		$categoria->brand_id =278;
		$categoria->models = "EV";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1592;
		$categoria->brand_id =278;
		$categoria->models = "FIT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1593;
		$categoria->brand_id =278;
		$categoria->models = "INSIGHT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1594;
		$categoria->brand_id =278;
		$categoria->models = "INTEGRA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1595;
		$categoria->brand_id =278;
		$categoria->models = "LEGEND";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1596;
		$categoria->brand_id =278;
		$categoria->models = "ODYSSEY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1597;
		$categoria->brand_id =278;
		$categoria->models = "PRELUDE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1598;
		$categoria->brand_id =278;
		$categoria->models = "S";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1599;
		$categoria->brand_id =278;
		$categoria->models = "STREAM";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1600;
		$categoria->brand_id =278;
		$categoria->models = "VIGOR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1601;
		$categoria->brand_id =279;
		$categoria->models = "ACCENT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1602;
		$categoria->brand_id =279;
		$categoria->models = "ATOS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1603;
		$categoria->brand_id =279;
		$categoria->models = "AVANTE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1604;
		$categoria->brand_id =279;
		$categoria->models = "AZERA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1605;
		$categoria->brand_id =279;
		$categoria->models = "COUPE TIBURON";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1606;
		$categoria->brand_id =279;
		$categoria->models = "ELANTRA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1607;
		$categoria->brand_id =279;
		$categoria->models = "ENTOURAGE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1608;
		$categoria->brand_id =279;
		$categoria->models = "EQUUS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1609;
		$categoria->brand_id =279;
		$categoria->models = "EXCEL";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1610;
		$categoria->brand_id =279;
		$categoria->models = "GENESIS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1611;
		$categoria->brand_id =279;
		$categoria->models = "GETZ";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1612;
		$categoria->brand_id =279;
		$categoria->models = "GRANDEUR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1613;
		$categoria->brand_id =279;
		$categoria->models = "H 1";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1614;
		$categoria->brand_id =279;
		$categoria->models = "I30";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1615;
		$categoria->brand_id =279;
		$categoria->models = "MATRIX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1616;
		$categoria->brand_id =279;
		$categoria->models = "SANTAMO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1617;
		$categoria->brand_id =279;
		$categoria->models = "SCOUPE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1618;
		$categoria->brand_id =279;
		$categoria->models = "SONATA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1619;
		$categoria->brand_id =279;
		$categoria->models = "TUCSON";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1620;
		$categoria->brand_id =279;
		$categoria->models = "VERNA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1621;
		$categoria->brand_id =279;
		$categoria->models = "XG";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1622;
		$categoria->brand_id =280;
		$categoria->models = "SAMAND";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1623;
		$categoria->brand_id =281;
		$categoria->models = "G20";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1624;
		$categoria->brand_id =281;
		$categoria->models = "G35";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1625;
		$categoria->brand_id =281;
		$categoria->models = "G37";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1626;
		$categoria->brand_id =281;
		$categoria->models = "I30";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1627;
		$categoria->brand_id =281;
		$categoria->models = "I35";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1628;
		$categoria->brand_id =281;
		$categoria->models = "J30";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1629;
		$categoria->brand_id =281;
		$categoria->models = "M30";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1630;
		$categoria->brand_id =281;
		$categoria->models = "M35";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1631;
		$categoria->brand_id =281;
		$categoria->models = "M45";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1632;
		$categoria->brand_id =281;
		$categoria->models = "M56";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1633;
		$categoria->brand_id =281;
		$categoria->models = "Q45";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1634;
		$categoria->brand_id =282;
		$categoria->models = "IMPULSE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1635;
		$categoria->brand_id =282;
		$categoria->models = "OASIS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1636;
		$categoria->brand_id =282;
		$categoria->models = "STYLUS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1637;
		$categoria->brand_id =282;
		$categoria->models = "TROOPER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1638;
		$categoria->brand_id =283;
		$categoria->models = "35.10";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1639;
		$categoria->brand_id =283;
		$categoria->models = "70C16";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1640;
		$categoria->brand_id =284;
		$categoria->models = "H";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1641;
		$categoria->brand_id =285;
		$categoria->models = "S";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1642;
		$categoria->brand_id =285;
		$categoria->models = "X-TYPE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1643;
		$categoria->brand_id =285;
		$categoria->models = "XF";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1644;
		$categoria->brand_id =285;
		$categoria->models = "XJ";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1645;
		$categoria->brand_id =285;
		$categoria->models = "XJ6";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1646;
		$categoria->brand_id =285;
		$categoria->models = "XJ8";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1647;
		$categoria->brand_id =285;
		$categoria->models = "XJR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1648;
		$categoria->brand_id =285;
		$categoria->models = "XJS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1649;
		$categoria->brand_id =285;
		$categoria->models = "XK";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1650;
		$categoria->brand_id =285;
		$categoria->models = "XK8";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1651;
		$categoria->brand_id =285;
		$categoria->models = "XKR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1652;
		$categoria->brand_id =286;
		$categoria->models = "J10";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1653;
		$categoria->brand_id =287;
		$categoria->models = "JNJ7080A";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1654;
		$categoria->brand_id =288;
		$categoria->models = "FASHION";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1655;
		$categoria->brand_id =288;
		$categoria->models = "YUMBA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1656;
		$categoria->brand_id =289;
		$categoria->models = "AMANTI";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1657;
		$categoria->brand_id =289;
		$categoria->models = "BESTA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1658;
		$categoria->brand_id =289;
		$categoria->models = "CAPITAL";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1659;
		$categoria->brand_id =289;
		$categoria->models = "CARENS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1660;
		$categoria->brand_id =289;
		$categoria->models = "CARNIVAL";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1661;
		$categoria->brand_id =289;
		$categoria->models = "CERATO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1662;
		$categoria->brand_id =289;
		$categoria->models = "ENTERPRISE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1663;
		$categoria->brand_id =289;
		$categoria->models = "FORTE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1664;
		$categoria->brand_id =289;
		$categoria->models = "JOICE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1665;
		$categoria->brand_id =289;
		$categoria->models = "MAGENTIS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1666;
		$categoria->brand_id =289;
		$categoria->models = "OPIRUS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1667;
		$categoria->brand_id =289;
		$categoria->models = "OPTIMA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1668;
		$categoria->brand_id =289;
		$categoria->models = "PICANTO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1669;
		$categoria->brand_id =289;
		$categoria->models = "RIO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1670;
		$categoria->brand_id =289;
		$categoria->models = "RONDO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1671;
		$categoria->brand_id =289;
		$categoria->models = "SEDONA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1672;
		$categoria->brand_id =289;
		$categoria->models = "SEPHIA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1673;
		$categoria->brand_id =289;
		$categoria->models = "SHUMA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1674;
		$categoria->brand_id =289;
		$categoria->models = "SOUL";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1675;
		$categoria->brand_id =289;
		$categoria->models = "SPECTRA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1676;
		$categoria->brand_id =289;
		$categoria->models = "SPORTAGE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1677;
		$categoria->brand_id =289;
		$categoria->models = "TOWNER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1678;
		$categoria->brand_id =290;
		$categoria->models = "21043";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1679;
		$categoria->brand_id =290;
		$categoria->models = "21051";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1680;
		$categoria->brand_id =290;
		$categoria->models = "21053";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1681;
		$categoria->brand_id =290;
		$categoria->models = "21060";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1682;
		$categoria->brand_id =290;
		$categoria->models = "21074";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1683;
		$categoria->brand_id =290;
		$categoria->models = "AQUARIUS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1684;
		$categoria->brand_id =290;
		$categoria->models = "GLACIAL";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1685;
		$categoria->brand_id =290;
		$categoria->models = "KALINA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1686;
		$categoria->brand_id =290;
		$categoria->models = "NIVA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1687;
		$categoria->brand_id =290;
		$categoria->models = "PRIORA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1688;
		$categoria->brand_id =290;
		$categoria->models = "SAMARA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1689;
		$categoria->brand_id =290;
		$categoria->models = "STAWRA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1690;
		$categoria->brand_id =291;
		$categoria->models = "COUNTACH";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1691;
		$categoria->brand_id =291;
		$categoria->models = "DIABLO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1692;
		$categoria->brand_id =291;
		$categoria->models = "GALLARDO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1693;
		$categoria->brand_id =291;
		$categoria->models = "MURCIELAGO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1694;
		$categoria->brand_id =291;
		$categoria->models = "REVENTON";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1695;
		$categoria->brand_id =292;
		$categoria->models = "LYBRA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1696;
		$categoria->brand_id =292;
		$categoria->models = "PRISMA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1697;
		$categoria->brand_id =292;
		$categoria->models = "THEMA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1698;
		$categoria->brand_id =293;
		$categoria->models = "FASHION";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1699;
		$categoria->brand_id =294;
		$categoria->models = "ES";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1700;
		$categoria->brand_id =294;
		$categoria->models = "GS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1701;
		$categoria->brand_id =294;
		$categoria->models = "HS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1702;
		$categoria->brand_id =294;
		$categoria->models = "IS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1703;
		$categoria->brand_id =294;
		$categoria->models = "LS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1704;
		$categoria->brand_id =294;
		$categoria->models = "SC";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1705;
		$categoria->brand_id =295;
		$categoria->models = "520";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1706;
		$categoria->brand_id =295;
		$categoria->models = "620";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1707;
		$categoria->brand_id =296;
		$categoria->models = "CONTINENTAL";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1708;
		$categoria->brand_id =296;
		$categoria->models = "LS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1709;
		$categoria->brand_id =296;
		$categoria->models = "MARK IV";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1710;
		$categoria->brand_id =296;
		$categoria->models = "MARK VII";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1711;
		$categoria->brand_id =296;
		$categoria->models = "MARK VIII";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1712;
		$categoria->brand_id =296;
		$categoria->models = "MKS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1713;
		$categoria->brand_id =296;
		$categoria->models = "MKT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1714;
		$categoria->brand_id =296;
		$categoria->models = "MKZ";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1715;
		$categoria->brand_id =296;
		$categoria->models = "NAVIGATOR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1716;
		$categoria->brand_id =296;
		$categoria->models = "TOWN CAR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1717;
		$categoria->brand_id =296;
		$categoria->models = "ZEPHYR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1718;
		$categoria->brand_id =297;
		$categoria->models = "ELAN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1719;
		$categoria->brand_id =297;
		$categoria->models = "ELISE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1720;
		$categoria->brand_id =297;
		$categoria->models = "ESPRIT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1721;
		$categoria->brand_id =297;
		$categoria->models = "EVORA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1722;
		$categoria->brand_id =297;
		$categoria->models = "EXIGE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1723;
		$categoria->brand_id =298;
		$categoria->models = "2.24";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1724;
		$categoria->brand_id =298;
		$categoria->models = "3200GT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1725;
		$categoria->brand_id =298;
		$categoria->models = "4.24";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1726;
		$categoria->brand_id =298;
		$categoria->models = "430";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1727;
		$categoria->brand_id =298;
		$categoria->models = "COUPE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1728;
		$categoria->brand_id =298;
		$categoria->models = "GHIBLI";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1729;
		$categoria->brand_id =298;
		$categoria->models = "GRANSPORT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1730;
		$categoria->brand_id =298;
		$categoria->models = "GRANTURISMO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1731;
		$categoria->brand_id =298;
		$categoria->models = "KARIF";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1732;
		$categoria->brand_id =298;
		$categoria->models = "QUATTROPORTE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1733;
		$categoria->brand_id =298;
		$categoria->models = "SHAMAL";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1734;
		$categoria->brand_id =298;
		$categoria->models = "SPYDER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1735;
		$categoria->brand_id =299;
		$categoria->models = "57";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1736;
		$categoria->brand_id =299;
		$categoria->models = "62";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1737;
		$categoria->brand_id =300;
		$categoria->models = "121";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1738;
		$categoria->brand_id =300;
		$categoria->models = "2";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1739;
		$categoria->brand_id =300;
		$categoria->models = "3";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1740;
		$categoria->brand_id =300;
		$categoria->models = "323";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1741;
		$categoria->brand_id =300;
		$categoria->models = "5";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1742;
		$categoria->brand_id =300;
		$categoria->models = "6";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1743;
		$categoria->brand_id =300;
		$categoria->models = "626";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1744;
		$categoria->brand_id =300;
		$categoria->models = "929";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1745;
		$categoria->brand_id =300;
		$categoria->models = "ALLEGRO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1746;
		$categoria->brand_id =300;
		$categoria->models = "DEMIO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1747;
		$categoria->brand_id =300;
		$categoria->models = "MILLENIA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1748;
		$categoria->brand_id =300;
		$categoria->models = "MPV";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1749;
		$categoria->brand_id =300;
		$categoria->models = "MX 3";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1750;
		$categoria->brand_id =300;
		$categoria->models = "MX 5";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1751;
		$categoria->brand_id =300;
		$categoria->models = "MX 6";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1752;
		$categoria->brand_id =300;
		$categoria->models = "PROTEGE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1753;
		$categoria->brand_id =300;
		$categoria->models = "RX 7";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1754;
		$categoria->brand_id =300;
		$categoria->models = "RX 8";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1755;
		$categoria->brand_id =301;
		$categoria->models = "190E";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1756;
		$categoria->brand_id =301;
		$categoria->models = "200";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1757;
		$categoria->brand_id =301;
		$categoria->models = "230";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1758;
		$categoria->brand_id =301;
		$categoria->models = "250";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1759;
		$categoria->brand_id =301;
		$categoria->models = "280";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1760;
		$categoria->brand_id =301;
		$categoria->models = "A";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1761;
		$categoria->brand_id =301;
		$categoria->models = "B";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1762;
		$categoria->brand_id =301;
		$categoria->models = "C";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1763;
		$categoria->brand_id =301;
		$categoria->models = "CE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1764;
		$categoria->brand_id =301;
		$categoria->models = "CL";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1765;
		$categoria->brand_id =301;
		$categoria->models = "CLK";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1766;
		$categoria->brand_id =301;
		$categoria->models = "CLS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1767;
		$categoria->brand_id =301;
		$categoria->models = "D";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1768;
		$categoria->brand_id =301;
		$categoria->models = "E";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1769;
		$categoria->brand_id =301;
		$categoria->models = "R";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1770;
		$categoria->brand_id =301;
		$categoria->models = "S";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1771;
		$categoria->brand_id =301;
		$categoria->models = "SCL";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1772;
		$categoria->brand_id =301;
		$categoria->models = "SDL";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1773;
		$categoria->brand_id =301;
		$categoria->models = "SEC";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1774;
		$categoria->brand_id =301;
		$categoria->models = "SL";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1775;
		$categoria->brand_id =301;
		$categoria->models = "SLC";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1776;
		$categoria->brand_id =301;
		$categoria->models = "SLK";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1777;
		$categoria->brand_id =301;
		$categoria->models = "SLR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1778;
		$categoria->brand_id =301;
		$categoria->models = "SLS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1779;
		$categoria->brand_id =301;
		$categoria->models = "TE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1780;
		$categoria->brand_id =301;
		$categoria->models = "V";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1781;
		$categoria->brand_id =301;
		$categoria->models = "VANEO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1782;
		$categoria->brand_id =302;
		$categoria->models = "CAPRI";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1783;
		$categoria->brand_id =302;
		$categoria->models = "COUGAR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1784;
		$categoria->brand_id =302;
		$categoria->models = "GRAND MARQUIS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1785;
		$categoria->brand_id =302;
		$categoria->models = "MILAN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1786;
		$categoria->brand_id =302;
		$categoria->models = "MONTEGO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1787;
		$categoria->brand_id =302;
		$categoria->models = "MONTEREY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1788;
		$categoria->brand_id =302;
		$categoria->models = "MYSTIQUE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1789;
		$categoria->brand_id =302;
		$categoria->models = "SABLE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1790;
		$categoria->brand_id =302;
		$categoria->models = "TOPAZ";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1791;
		$categoria->brand_id =302;
		$categoria->models = "TRACER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1792;
		$categoria->brand_id =302;
		$categoria->models = "VILLAGER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1793;
		$categoria->brand_id =303;
		$categoria->models = "1.9.5.8.";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1794;
		$categoria->brand_id =303;
		$categoria->models = "MGB";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1795;
		$categoria->brand_id =304;
		$categoria->models = "MINICORD";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1796;
		$categoria->brand_id =305;
		$categoria->models = "3.000";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1797;
		$categoria->brand_id =305;
		$categoria->models = "COLT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1798;
		$categoria->brand_id =305;
		$categoria->models = "DIAMANTE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1799;
		$categoria->brand_id =305;
		$categoria->models = "ECLIPSE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1800;
		$categoria->brand_id =305;
		$categoria->models = "EXPO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1801;
		$categoria->brand_id =305;
		$categoria->models = "FTO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1802;
		$categoria->brand_id =305;
		$categoria->models = "GALANT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1803;
		$categoria->brand_id =305;
		$categoria->models = "GRANDIS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1804;
		$categoria->brand_id =305;
		$categoria->models = "LANCER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1805;
		$categoria->brand_id =305;
		$categoria->models = "MF";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1806;
		$categoria->brand_id =305;
		$categoria->models = "MIRAGE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1807;
		$categoria->brand_id =305;
		$categoria->models = "MK";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1808;
		$categoria->brand_id =305;
		$categoria->models = "MS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1809;
		$categoria->brand_id =305;
		$categoria->models = "MX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1810;
		$categoria->brand_id =305;
		$categoria->models = "PRECIS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1811;
		$categoria->brand_id =305;
		$categoria->models = "SIGMA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1812;
		$categoria->brand_id =305;
		$categoria->models = "SIGNO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1813;
		$categoria->brand_id =305;
		$categoria->models = "SPACE WAGON";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1814;
		$categoria->brand_id =305;
		$categoria->models = "STAR WAGON";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1815;
		$categoria->brand_id =305;
		$categoria->models = "VAN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1816;
		$categoria->brand_id =305;
		$categoria->models = "VARICA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1817;
		$categoria->brand_id =305;
		$categoria->models = "VR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1818;
		$categoria->brand_id =305;
		$categoria->models = "ZX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1819;
		$categoria->brand_id =306;
		$categoria->models = "200";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1820;
		$categoria->brand_id =306;
		$categoria->models = "240";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1821;
		$categoria->brand_id =306;
		$categoria->models = "300";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1822;
		$categoria->brand_id =306;
		$categoria->models = "350";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1823;
		$categoria->brand_id =306;
		$categoria->models = "370";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1824;
		$categoria->brand_id =306;
		$categoria->models = "ALMERA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1825;
		$categoria->brand_id =306;
		$categoria->models = "ALTIMA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1826;
		$categoria->brand_id =306;
		$categoria->models = "AXXESS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1827;
		$categoria->brand_id =306;
		$categoria->models = "BLUEBIRD";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1828;
		$categoria->brand_id =306;
		$categoria->models = "CUBE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1829;
		$categoria->brand_id =306;
		$categoria->models = "GT-R";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1830;
		$categoria->brand_id =306;
		$categoria->models = "LAUREL";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1831;
		$categoria->brand_id =306;
		$categoria->models = "MAXIMA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1832;
		$categoria->brand_id =306;
		$categoria->models = "MICRA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1833;
		$categoria->brand_id =306;
		$categoria->models = "NOTE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1834;
		$categoria->brand_id =306;
		$categoria->models = "NX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1835;
		$categoria->brand_id =306;
		$categoria->models = "PATROL";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1836;
		$categoria->brand_id =306;
		$categoria->models = "PRIMERA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1837;
		$categoria->brand_id =306;
		$categoria->models = "PULSAR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1838;
		$categoria->brand_id =306;
		$categoria->models = "QUEST";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1839;
		$categoria->brand_id =306;
		$categoria->models = "SENTRA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1840;
		$categoria->brand_id =306;
		$categoria->models = "SERENA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1841;
		$categoria->brand_id =306;
		$categoria->models = "STANZA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1842;
		$categoria->brand_id =306;
		$categoria->models = "SUNNY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1843;
		$categoria->brand_id =306;
		$categoria->models = "TIIDA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1844;
		$categoria->brand_id =306;
		$categoria->models = "VANETTE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1845;
		$categoria->brand_id =306;
		$categoria->models = "VERSA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1846;
		$categoria->brand_id =306;
		$categoria->models = "XTERRA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1847;
		$categoria->brand_id =307;
		$categoria->models = "ACHIEVA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1848;
		$categoria->brand_id =307;
		$categoria->models = "ALERO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1849;
		$categoria->brand_id =307;
		$categoria->models = "AURORA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1850;
		$categoria->brand_id =307;
		$categoria->models = "CUSTOM CRUISER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1851;
		$categoria->brand_id =307;
		$categoria->models = "CUTLASS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1852;
		$categoria->brand_id =307;
		$categoria->models = "DELTA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1853;
		$categoria->brand_id =307;
		$categoria->models = "EIGHTY EIGHT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1854;
		$categoria->brand_id =307;
		$categoria->models = "INTRIGUE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1855;
		$categoria->brand_id =307;
		$categoria->models = "NINETY EIGHT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1856;
		$categoria->brand_id =307;
		$categoria->models = "SILHOUETTE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1857;
		$categoria->brand_id =307;
		$categoria->models = "TORONADO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1858;
		$categoria->brand_id =308;
		$categoria->models = "ASCONA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1859;
		$categoria->brand_id =308;
		$categoria->models = "ASTRA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1860;
		$categoria->brand_id =308;
		$categoria->models = "CALIBRA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1861;
		$categoria->brand_id =308;
		$categoria->models = "CORSA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1862;
		$categoria->brand_id =308;
		$categoria->models = "KADETT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1863;
		$categoria->brand_id =308;
		$categoria->models = "MANTA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1864;
		$categoria->brand_id =308;
		$categoria->models = "OMEGA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1865;
		$categoria->brand_id =308;
		$categoria->models = "REKORD";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1866;
		$categoria->brand_id =308;
		$categoria->models = "TIGRA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1867;
		$categoria->brand_id =308;
		$categoria->models = "VECTRA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1868;
		$categoria->brand_id =308;
		$categoria->models = "ZAFIRA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1869;
		$categoria->brand_id =309;
		$categoria->models = "PACKARD";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1870;
		$categoria->brand_id =310;
		$categoria->models = "KALLISTA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1871;
		$categoria->brand_id =310;
		$categoria->models = "LIMA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1872;
		$categoria->brand_id =310;
		$categoria->models = "ROADSTER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1873;
		$categoria->brand_id =311;
		$categoria->models = "106";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1874;
		$categoria->brand_id =311;
		$categoria->models = "205";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1875;
		$categoria->brand_id =311;
		$categoria->models = "206";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1876;
		$categoria->brand_id =311;
		$categoria->models = "207";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1877;
		$categoria->brand_id =311;
		$categoria->models = "306";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1878;
		$categoria->brand_id =311;
		$categoria->models = "307";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1879;
		$categoria->brand_id =311;
		$categoria->models = "309";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1880;
		$categoria->brand_id =311;
		$categoria->models = "405";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1881;
		$categoria->brand_id =311;
		$categoria->models = "406";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1882;
		$categoria->brand_id =311;
		$categoria->models = "407";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1883;
		$categoria->brand_id =311;
		$categoria->models = "408";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1884;
		$categoria->brand_id =311;
		$categoria->models = "504";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1885;
		$categoria->brand_id =311;
		$categoria->models = "505";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1886;
		$categoria->brand_id =311;
		$categoria->models = "605";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1887;
		$categoria->brand_id =311;
		$categoria->models = "607";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1888;
		$categoria->brand_id =311;
		$categoria->models = "806";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1889;
		$categoria->brand_id =312;
		$categoria->models = "ACCLAIM";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1890;
		$categoria->brand_id =312;
		$categoria->models = "ARROW";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1891;
		$categoria->brand_id =312;
		$categoria->models = "BELVEDERE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1892;
		$categoria->brand_id =312;
		$categoria->models = "BREEZE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1893;
		$categoria->brand_id =312;
		$categoria->models = "CARAVELLE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1894;
		$categoria->brand_id =312;
		$categoria->models = "COLT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1895;
		$categoria->brand_id =312;
		$categoria->models = "CUDA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1896;
		$categoria->brand_id =312;
		$categoria->models = "FURY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1897;
		$categoria->brand_id =312;
		$categoria->models = "GRAN FURY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1898;
		$categoria->brand_id =312;
		$categoria->models = "GRAND VOYAGER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1899;
		$categoria->brand_id =312;
		$categoria->models = "LASER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1900;
		$categoria->brand_id =312;
		$categoria->models = "NEON";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1901;
		$categoria->brand_id =312;
		$categoria->models = "PROWLER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1902;
		$categoria->brand_id =312;
		$categoria->models = "SUNDANCE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1903;
		$categoria->brand_id =312;
		$categoria->models = "VALIANT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1904;
		$categoria->brand_id =312;
		$categoria->models = "VOYAGER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1905;
		$categoria->brand_id =313;
		$categoria->models = "6000";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1906;
		$categoria->brand_id =313;
		$categoria->models = "BONNEVILLE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1907;
		$categoria->brand_id =313;
		$categoria->models = "FIERO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1908;
		$categoria->brand_id =313;
		$categoria->models = "FIREBIRD";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1909;
		$categoria->brand_id =313;
		$categoria->models = "G5";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1910;
		$categoria->brand_id =313;
		$categoria->models = "G6";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1911;
		$categoria->brand_id =313;
		$categoria->models = "GRAND AM";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1912;
		$categoria->brand_id =313;
		$categoria->models = "GRAND PRIX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1913;
		$categoria->brand_id =313;
		$categoria->models = "GTO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1914;
		$categoria->brand_id =313;
		$categoria->models = "LEMANS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1915;
		$categoria->brand_id =313;
		$categoria->models = "MONTANA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1916;
		$categoria->brand_id =313;
		$categoria->models = "PARISIENNE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1917;
		$categoria->brand_id =313;
		$categoria->models = "SOLSTICE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1918;
		$categoria->brand_id =313;
		$categoria->models = "SUNBIRD";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1919;
		$categoria->brand_id =313;
		$categoria->models = "SUNFIRE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1920;
		$categoria->brand_id =313;
		$categoria->models = "TEMPEST";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1921;
		$categoria->brand_id =313;
		$categoria->models = "TRANSSPORT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1922;
		$categoria->brand_id =313;
		$categoria->models = "VIBE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1923;
		$categoria->brand_id =314;
		$categoria->models = "911";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1924;
		$categoria->brand_id =314;
		$categoria->models = "924";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1925;
		$categoria->brand_id =314;
		$categoria->models = "928";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1926;
		$categoria->brand_id =314;
		$categoria->models = "930";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1927;
		$categoria->brand_id =314;
		$categoria->models = "944";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1928;
		$categoria->brand_id =314;
		$categoria->models = "968";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1929;
		$categoria->brand_id =314;
		$categoria->models = "BOXSTER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1930;
		$categoria->brand_id =314;
		$categoria->models = "CARRERA GT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1931;
		$categoria->brand_id =314;
		$categoria->models = "CAYENNE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1932;
		$categoria->brand_id =314;
		$categoria->models = "CAYMAN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1933;
		$categoria->brand_id =314;
		$categoria->models = "PANAMERA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1934;
		$categoria->brand_id =315;
		$categoria->models = "HORNET";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1935;
		$categoria->brand_id =315;
		$categoria->models = "RANGER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1936;
		$categoria->brand_id =316;
		$categoria->models = "11";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1937;
		$categoria->brand_id =316;
		$categoria->models = "12";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1938;
		$categoria->brand_id =316;
		$categoria->models = "16";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1939;
		$categoria->brand_id =316;
		$categoria->models = "18";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1940;
		$categoria->brand_id =316;
		$categoria->models = "19";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1941;
		$categoria->brand_id =316;
		$categoria->models = "21";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1942;
		$categoria->brand_id =316;
		$categoria->models = "30";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1943;
		$categoria->brand_id =316;
		$categoria->models = "4";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1944;
		$categoria->brand_id =316;
		$categoria->models = "5";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1945;
		$categoria->brand_id =316;
		$categoria->models = "9/MAXIMO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1946;
		$categoria->brand_id =316;
		$categoria->models = "CLIO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1947;
		$categoria->brand_id =316;
		$categoria->models = "ESPACE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1948;
		$categoria->brand_id =316;
		$categoria->models = "FUEGO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1949;
		$categoria->brand_id =316;
		$categoria->models = "GALA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1950;
		$categoria->brand_id =316;
		$categoria->models = "GRAND SCENIC";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1951;
		$categoria->brand_id =316;
		$categoria->models = "KANGOO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1952;
		$categoria->brand_id =316;
		$categoria->models = "KOLEOS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1953;
		$categoria->brand_id =316;
		$categoria->models = "LAGUNA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1954;
		$categoria->brand_id =316;
		$categoria->models = "LOGAN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1955;
		$categoria->brand_id =316;
		$categoria->models = "MEGANE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1956;
		$categoria->brand_id =316;
		$categoria->models = "SAFRANE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1957;
		$categoria->brand_id =316;
		$categoria->models = "SANDERO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1958;
		$categoria->brand_id =316;
		$categoria->models = "SCENIC";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1959;
		$categoria->brand_id =316;
		$categoria->models = "SYMBOL";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1960;
		$categoria->brand_id =316;
		$categoria->models = "TWINGO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1961;
		$categoria->brand_id =317;
		$categoria->models = "CORNICHE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1962;
		$categoria->brand_id =317;
		$categoria->models = "PARK WARD";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1963;
		$categoria->brand_id =317;
		$categoria->models = "PHANTOM";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1964;
		$categoria->brand_id =317;
		$categoria->models = "SILVER DAWN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1965;
		$categoria->brand_id =317;
		$categoria->models = "SILVER SERAPH";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1966;
		$categoria->brand_id =317;
		$categoria->models = "SILVER SPUR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1967;
		$categoria->brand_id =317;
		$categoria->models = "SPUR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1968;
		$categoria->brand_id =317;
		$categoria->models = "TOURING";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1969;
		$categoria->brand_id =318;
		$categoria->models = "ROVER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1970;
		$categoria->brand_id =319;
		$categoria->models = "111";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1971;
		$categoria->brand_id =319;
		$categoria->models = "114";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1972;
		$categoria->brand_id =319;
		$categoria->models = "214";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1973;
		$categoria->brand_id =319;
		$categoria->models = "216";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1974;
		$categoria->brand_id =319;
		$categoria->models = "220";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1975;
		$categoria->brand_id =319;
		$categoria->models = "25";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1976;
		$categoria->brand_id =319;
		$categoria->models = "414";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1977;
		$categoria->brand_id =319;
		$categoria->models = "19-feb";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1978;
		$categoria->brand_id =319;
		$categoria->models = "23-feb";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1979;
		$categoria->brand_id =319;
		$categoria->models = "14-feb";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1980;
		$categoria->brand_id =319;
		$categoria->models = "618";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1981;
		$categoria->brand_id =319;
		$categoria->models = "620";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1982;
		$categoria->brand_id =319;
		$categoria->models = "623";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1983;
		$categoria->brand_id =319;
		$categoria->models = "75";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1984;
		$categoria->brand_id =319;
		$categoria->models = "820";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1985;
		$categoria->brand_id =319;
		$categoria->models = "825";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1986;
		$categoria->brand_id =319;
		$categoria->models = "827";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1987;
		$categoria->brand_id =319;
		$categoria->models = "ESTATE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1988;
		$categoria->brand_id =319;
		$categoria->models = "MGF";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1989;
		$categoria->brand_id =319;
		$categoria->models = "MINI";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1990;
		$categoria->brand_id =319;
		$categoria->models = "TOURER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1991;
		$categoria->brand_id =320;
		$categoria->models = "XTREMOS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1992;
		$categoria->brand_id =321;
		$categoria->models = "09-feb";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1993;
		$categoria->brand_id =321;
		$categoria->models = "09-mar";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1994;
		$categoria->brand_id =321;
		$categoria->models = "09-may";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1995;
		$categoria->brand_id =321;
		$categoria->models = "18-jun";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1996;
		$categoria->brand_id =321;
		$categoria->models = "21-ago";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1997;
		$categoria->brand_id =322;
		$categoria->models = "PSS VAN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1998;
		$categoria->brand_id =323;
		$categoria->models = "CARAVAN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 1999;
		$categoria->brand_id =324;
		$categoria->models = "AURA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2000;
		$categoria->brand_id =324;
		$categoria->models = "ION";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2001;
		$categoria->brand_id =324;
		$categoria->models = "L";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2002;
		$categoria->brand_id =324;
		$categoria->models = "L 300";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2003;
		$categoria->brand_id =324;
		$categoria->models = "OUTLOOK";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2004;
		$categoria->brand_id =324;
		$categoria->models = "RELAY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2005;
		$categoria->brand_id =324;
		$categoria->models = "SC";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2006;
		$categoria->brand_id =324;
		$categoria->models = "SKY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2007;
		$categoria->brand_id =324;
		$categoria->models = "SL";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2008;
		$categoria->brand_id =324;
		$categoria->models = "SW";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2009;
		$categoria->brand_id =325;
		$categoria->models = "E";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2010;
		$categoria->brand_id =325;
		$categoria->models = "I";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2011;
		$categoria->brand_id =326;
		$categoria->models = "TC";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2012;
		$categoria->brand_id =326;
		$categoria->models = "XA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2013;
		$categoria->brand_id =326;
		$categoria->models = "XB";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2014;
		$categoria->brand_id =326;
		$categoria->models = "XD";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2015;
		$categoria->brand_id =327;
		$categoria->models = "ALHAMBRA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2016;
		$categoria->brand_id =327;
		$categoria->models = "ALTEA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2017;
		$categoria->brand_id =327;
		$categoria->models = "AROSA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2018;
		$categoria->brand_id =327;
		$categoria->models = "CORDOBA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2019;
		$categoria->brand_id =327;
		$categoria->models = "IBIZA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2020;
		$categoria->brand_id =327;
		$categoria->models = "LEON";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2021;
		$categoria->brand_id =327;
		$categoria->models = "MALAGA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2022;
		$categoria->brand_id =327;
		$categoria->models = "MARBELLA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2023;
		$categoria->brand_id =327;
		$categoria->models = "TOLEDO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2024;
		$categoria->brand_id =328;
		$categoria->models = "FABIA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2025;
		$categoria->brand_id =328;
		$categoria->models = "FAVORIT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2026;
		$categoria->brand_id =328;
		$categoria->models = "FELICIA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2027;
		$categoria->brand_id =328;
		$categoria->models = "FORMAN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2028;
		$categoria->brand_id =328;
		$categoria->models = "OCTAVIA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2029;
		$categoria->brand_id =328;
		$categoria->models = "ROOMSTER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2030;
		$categoria->brand_id =329;
		$categoria->models = "FORTWO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2031;
		$categoria->brand_id =329;
		$categoria->models = "SMART";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2032;
		$categoria->brand_id =330;
		$categoria->models = "FORESTER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2033;
		$categoria->brand_id =330;
		$categoria->models = "IMPREZA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2034;
		$categoria->brand_id =330;
		$categoria->models = "JUSTY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2035;
		$categoria->brand_id =330;
		$categoria->models = "LEGACY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2036;
		$categoria->brand_id =330;
		$categoria->models = "LOYALE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2037;
		$categoria->brand_id =330;
		$categoria->models = "OUTBACK";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2038;
		$categoria->brand_id =330;
		$categoria->models = "SVX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2039;
		$categoria->brand_id =330;
		$categoria->models = "VIVIO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2040;
		$categoria->brand_id =331;
		$categoria->models = "AERIO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2041;
		$categoria->brand_id =331;
		$categoria->models = "ALTO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2042;
		$categoria->brand_id =331;
		$categoria->models = "BALENO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2043;
		$categoria->brand_id =331;
		$categoria->models = "ESTEEM";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2044;
		$categoria->brand_id =331;
		$categoria->models = "FORENZA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2045;
		$categoria->brand_id =331;
		$categoria->models = "GRAND VITARA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2046;
		$categoria->brand_id =331;
		$categoria->models = "IGNIS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2047;
		$categoria->brand_id =331;
		$categoria->models = "KIZASHI";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2048;
		$categoria->brand_id =331;
		$categoria->models = "LIANA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2049;
		$categoria->brand_id =331;
		$categoria->models = "RENO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2050;
		$categoria->brand_id =331;
		$categoria->models = "SUPER CARRY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2051;
		$categoria->brand_id =331;
		$categoria->models = "SWIFT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2052;
		$categoria->brand_id =331;
		$categoria->models = "SX4";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2053;
		$categoria->brand_id =331;
		$categoria->models = "VERONA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2054;
		$categoria->brand_id =332;
		$categoria->models = "INDICA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2055;
		$categoria->brand_id =332;
		$categoria->models = "INDIGO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2056;
		$categoria->brand_id =333;
		$categoria->models = "ROADSTER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2057;
		$categoria->brand_id =334;
		$categoria->models = "AURIS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2058;
		$categoria->brand_id =334;
		$categoria->models = "AVALON";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2059;
		$categoria->brand_id =334;
		$categoria->models = "AVENSIS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2060;
		$categoria->brand_id =334;
		$categoria->models = "CAMRY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2061;
		$categoria->brand_id =334;
		$categoria->models = "CARINA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2062;
		$categoria->brand_id =334;
		$categoria->models = "CELICA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2063;
		$categoria->brand_id =334;
		$categoria->models = "COROLLA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2064;
		$categoria->brand_id =334;
		$categoria->models = "CORONA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2065;
		$categoria->brand_id =334;
		$categoria->models = "CRESSIDA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2066;
		$categoria->brand_id =334;
		$categoria->models = "CROWN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2067;
		$categoria->brand_id =334;
		$categoria->models = "ECHO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2068;
		$categoria->brand_id =334;
		$categoria->models = "GTM";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2069;
		$categoria->brand_id =334;
		$categoria->models = "MATRIX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2070;
		$categoria->brand_id =334;
		$categoria->models = "MR2";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2071;
		$categoria->brand_id =334;
		$categoria->models = "PASEO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2072;
		$categoria->brand_id =334;
		$categoria->models = "PICNIC";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2073;
		$categoria->brand_id =334;
		$categoria->models = "PREVIA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2074;
		$categoria->brand_id =334;
		$categoria->models = "PRIUS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2075;
		$categoria->brand_id =334;
		$categoria->models = "SIENNA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2076;
		$categoria->brand_id =334;
		$categoria->models = "STARLET";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2077;
		$categoria->brand_id =334;
		$categoria->models = "SUPRA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2078;
		$categoria->brand_id =334;
		$categoria->models = "TERCEL";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2079;
		$categoria->brand_id =334;
		$categoria->models = "VAN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2080;
		$categoria->brand_id =334;
		$categoria->models = "VENZA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2081;
		$categoria->brand_id =334;
		$categoria->models = "YARIS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2082;
		$categoria->brand_id =335;
		$categoria->models = "CENTAURO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2083;
		$categoria->brand_id =335;
		$categoria->models = "TURPIAL";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2084;
		$categoria->brand_id =336;
		$categoria->models = "BORA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2085;
		$categoria->brand_id =336;
		$categoria->models = "BRASILIA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2086;
		$categoria->brand_id =336;
		$categoria->models = "CABRIO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2087;
		$categoria->brand_id =336;
		$categoria->models = "CABRIOLET";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2088;
		$categoria->brand_id =336;
		$categoria->models = "CARAVELLE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2089;
		$categoria->brand_id =336;
		$categoria->models = "CC";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2090;
		$categoria->brand_id =336;
		$categoria->models = "CORRADO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2091;
		$categoria->brand_id =336;
		$categoria->models = "CROSS FOX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2092;
		$categoria->brand_id =336;
		$categoria->models = "DERBY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2093;
		$categoria->brand_id =336;
		$categoria->models = "EOS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2094;
		$categoria->brand_id =336;
		$categoria->models = "ESCARABAJO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2095;
		$categoria->brand_id =336;
		$categoria->models = "EUROVAN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2096;
		$categoria->brand_id =336;
		$categoria->models = "FOX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2097;
		$categoria->brand_id =336;
		$categoria->models = "GAZELLE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2098;
		$categoria->brand_id =336;
		$categoria->models = "GLI";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2099;
		$categoria->brand_id =336;
		$categoria->models = "GOL";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2100;
		$categoria->brand_id =336;
		$categoria->models = "GOLF";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2101;
		$categoria->brand_id =336;
		$categoria->models = "GTI";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2102;
		$categoria->brand_id =336;
		$categoria->models = "JETTA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2103;
		$categoria->brand_id =336;
		$categoria->models = "KOMBI";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2104;
		$categoria->brand_id =336;
		$categoria->models = "LUPO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2105;
		$categoria->brand_id =336;
		$categoria->models = "MULTIVAN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2106;
		$categoria->brand_id =336;
		$categoria->models = "NEW BEETLE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2107;
		$categoria->brand_id =336;
		$categoria->models = "PARATI";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2108;
		$categoria->brand_id =336;
		$categoria->models = "PASSAT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2109;
		$categoria->brand_id =336;
		$categoria->models = "PHAETON";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2110;
		$categoria->brand_id =336;
		$categoria->models = "POLO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2111;
		$categoria->brand_id =336;
		$categoria->models = "R32";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2112;
		$categoria->brand_id =336;
		$categoria->models = "RABBIT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2113;
		$categoria->brand_id =336;
		$categoria->models = "SANTANA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2114;
		$categoria->brand_id =336;
		$categoria->models = "SHARAN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2115;
		$categoria->brand_id =336;
		$categoria->models = "SPACEFOX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2116;
		$categoria->brand_id =336;
		$categoria->models = "TOURAN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2117;
		$categoria->brand_id =336;
		$categoria->models = "VANAGON";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2118;
		$categoria->brand_id =336;
		$categoria->models = "VENTO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2119;
		$categoria->brand_id =336;
		$categoria->models = "VOYAGE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2120;
		$categoria->brand_id =337;
		$categoria->models = "240";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2121;
		$categoria->brand_id =337;
		$categoria->models = "460";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2122;
		$categoria->brand_id =337;
		$categoria->models = "740";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2123;
		$categoria->brand_id =337;
		$categoria->models = "760";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2124;
		$categoria->brand_id =337;
		$categoria->models = "850";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2125;
		$categoria->brand_id =337;
		$categoria->models = "940";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2126;
		$categoria->brand_id =337;
		$categoria->models = "960";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2127;
		$categoria->brand_id =337;
		$categoria->models = "C30";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2128;
		$categoria->brand_id =337;
		$categoria->models = "C70";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2129;
		$categoria->brand_id =337;
		$categoria->models = "S40";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2130;
		$categoria->brand_id =337;
		$categoria->models = "S60";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2131;
		$categoria->brand_id =337;
		$categoria->models = "S70";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2132;
		$categoria->brand_id =337;
		$categoria->models = "S80";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2133;
		$categoria->brand_id =337;
		$categoria->models = "S90";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2134;
		$categoria->brand_id =337;
		$categoria->models = "V40";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2135;
		$categoria->brand_id =337;
		$categoria->models = "V50";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2136;
		$categoria->brand_id =337;
		$categoria->models = "V70";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2137;
		$categoria->brand_id =337;
		$categoria->models = "V90";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2138;
		$categoria->brand_id =338;
		$categoria->models = "SUPER VAN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2139;
		$categoria->brand_id =339;
		$categoria->models = "CABRIOLET";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2140;
		$categoria->brand_id =339;
		$categoria->models = "GV";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2141;
		$categoria->brand_id =340;
		$categoria->models = "Z100";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2142;
		$categoria->brand_id =340;
		$categoria->models = "Z300";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2143;
		$categoria->brand_id =341;
		$categoria->models = "RHINO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2144;
		$categoria->brand_id =341;
		$categoria->models = "YUKO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2145;
		$categoria->brand_id =342;
		$categoria->models = "ESCALADE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2146;
		$categoria->brand_id =343;
		$categoria->models = "SC1022";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2147;
		$categoria->brand_id =344;
		$categoria->models = "CH";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2148;
		$categoria->brand_id =345;
		$categoria->models = "GRAND TIGER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2149;
		$categoria->brand_id =346;
		$categoria->models = "APACHE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2150;
		$categoria->brand_id =346;
		$categoria->models = "AVALANCHE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2151;
		$categoria->brand_id =346;
		$categoria->models = "C 1500";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2152;
		$categoria->brand_id =346;
		$categoria->models = "C 2500";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2153;
		$categoria->brand_id =346;
		$categoria->models = "C10";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2154;
		$categoria->brand_id =346;
		$categoria->models = "C20";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2155;
		$categoria->brand_id =346;
		$categoria->models = "C30";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2156;
		$categoria->brand_id =346;
		$categoria->models = "CHEVY 500";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2157;
		$categoria->brand_id =346;
		$categoria->models = "COLORADO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2158;
		$categoria->brand_id =346;
		$categoria->models = "CORSA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2159;
		$categoria->brand_id =346;
		$categoria->models = "EL CAMINO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2160;
		$categoria->brand_id =346;
		$categoria->models = "K 2500";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2161;
		$categoria->brand_id =346;
		$categoria->models = "LUV";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2162;
		$categoria->brand_id =346;
		$categoria->models = "MONTANA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2163;
		$categoria->brand_id =346;
		$categoria->models = "R";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2164;
		$categoria->brand_id =346;
		$categoria->models = "S 10";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2165;
		$categoria->brand_id =346;
		$categoria->models = "SILVERADO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2166;
		$categoria->brand_id =346;
		$categoria->models = "SSR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2167;
		$categoria->brand_id =346;
		$categoria->models = "SUPER CARRY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2168;
		$categoria->brand_id =347;
		$categoria->models = "SOMOOTHING";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2169;
		$categoria->brand_id =348;
		$categoria->models = "FSO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2170;
		$categoria->brand_id =348;
		$categoria->models = "LABO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2171;
		$categoria->brand_id =349;
		$categoria->models = "HIJET";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2172;
		$categoria->brand_id =350;
		$categoria->models = "D 100";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2173;
		$categoria->brand_id =350;
		$categoria->models = "D 150";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2174;
		$categoria->brand_id =350;
		$categoria->models = "D 200";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2175;
		$categoria->brand_id =350;
		$categoria->models = "D 250";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2176;
		$categoria->brand_id =350;
		$categoria->models = "D 350";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2177;
		$categoria->brand_id =350;
		$categoria->models = "DAKOTA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2178;
		$categoria->brand_id =350;
		$categoria->models = "RAM";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2179;
		$categoria->brand_id =350;
		$categoria->models = "RAM BR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2180;
		$categoria->brand_id =350;
		$categoria->models = "RAM50";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2181;
		$categoria->brand_id =351;
		$categoria->models = "EQ";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2182;
		$categoria->brand_id =351;
		$categoria->models = "NOVILLA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2183;
		$categoria->brand_id =351;
		$categoria->models = "ZNA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2184;
		$categoria->brand_id =352;
		$categoria->models = "FIORINO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2185;
		$categoria->brand_id =352;
		$categoria->models = "PALIO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2186;
		$categoria->brand_id =352;
		$categoria->models = "PREMIO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2187;
		$categoria->brand_id =352;
		$categoria->models = "SPAZIO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2188;
		$categoria->brand_id =352;
		$categoria->models = "STRADA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2189;
		$categoria->brand_id =353;
		$categoria->models = "COURIER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2190;
		$categoria->brand_id =353;
		$categoria->models = "EXPLORER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2191;
		$categoria->brand_id =353;
		$categoria->models = "F 100";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2192;
		$categoria->brand_id =353;
		$categoria->models = "F 150";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2193;
		$categoria->brand_id =353;
		$categoria->models = "F 250";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2194;
		$categoria->brand_id =353;
		$categoria->models = "F 250 SUPER DUTY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2195;
		$categoria->brand_id =353;
		$categoria->models = "RANGER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2196;
		$categoria->brand_id =354;
		$categoria->models = "PU";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2197;
		$categoria->brand_id =355;
		$categoria->models = "CANYON";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2198;
		$categoria->brand_id =355;
		$categoria->models = "SIERRA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2199;
		$categoria->brand_id =355;
		$categoria->models = "SONOMA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2200;
		$categoria->brand_id =356;
		$categoria->models = "JETSTAR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2201;
		$categoria->brand_id =356;
		$categoria->models = "TROY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2202;
		$categoria->brand_id =357;
		$categoria->models = "DEER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2203;
		$categoria->brand_id =357;
		$categoria->models = "PROTEUS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2204;
		$categoria->brand_id =357;
		$categoria->models = "SAILOR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2205;
		$categoria->brand_id =357;
		$categoria->models = "WINGLE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2206;
		$categoria->brand_id =358;
		$categoria->models = "MINYI";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2207;
		$categoria->brand_id =359;
		$categoria->models = "HFJ";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2208;
		$categoria->brand_id =360;
		$categoria->models = "RIDGELINE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2209;
		$categoria->brand_id =361;
		$categoria->models = "H2";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2210;
		$categoria->brand_id =362;
		$categoria->models = "H 100";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2211;
		$categoria->brand_id =363;
		$categoria->models = "CXT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2212;
		$categoria->brand_id =364;
		$categoria->models = "HOMBRE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2213;
		$categoria->brand_id =364;
		$categoria->models = "LS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2214;
		$categoria->brand_id =364;
		$categoria->models = "S";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2215;
		$categoria->brand_id =364;
		$categoria->models = "TFR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2216;
		$categoria->brand_id =364;
		$categoria->models = "TFS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2217;
		$categoria->brand_id =365;
		$categoria->models = "T";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2218;
		$categoria->brand_id =366;
		$categoria->models = "COMANCHE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2219;
		$categoria->brand_id =366;
		$categoria->models = "J10";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2220;
		$categoria->brand_id =367;
		$categoria->models = "BAODIAN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2221;
		$categoria->brand_id =368;
		$categoria->models = "K1";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2222;
		$categoria->brand_id =369;
		$categoria->models = "IZH";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2223;
		$categoria->brand_id =370;
		$categoria->models = "27151";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2224;
		$categoria->brand_id =371;
		$categoria->models = "DEFENDER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2225;
		$categoria->brand_id =372;
		$categoria->models = "B";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2226;
		$categoria->brand_id =372;
		$categoria->models = "BT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2227;
		$categoria->brand_id =373;
		$categoria->models = "M";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2228;
		$categoria->brand_id =374;
		$categoria->models = "KUROBI";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2229;
		$categoria->brand_id =374;
		$categoria->models = "L200";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2230;
		$categoria->brand_id =374;
		$categoria->models = "MIGHTY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2231;
		$categoria->brand_id =374;
		$categoria->models = "RAIDER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2232;
		$categoria->brand_id =375;
		$categoria->models = "CHASIS CABINA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2233;
		$categoria->brand_id =375;
		$categoria->models = "FRONTIER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2234;
		$categoria->brand_id =375;
		$categoria->models = "PICKUP";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2235;
		$categoria->brand_id =375;
		$categoria->models = "TITAN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2236;
		$categoria->brand_id =376;
		$categoria->models = "ZB1022BDA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2237;
		$categoria->brand_id =377;
		$categoria->models = "PICK UP";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2238;
		$categoria->brand_id =378;
		$categoria->models = "AVILA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2239;
		$categoria->brand_id =378;
		$categoria->models = "KATA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2240;
		$categoria->brand_id =378;
		$categoria->models = "SPARTA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2241;
		$categoria->brand_id =379;
		$categoria->models = "PICK UP";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2242;
		$categoria->brand_id =380;
		$categoria->models = "BAJA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2243;
		$categoria->brand_id =381;
		$categoria->models = "CARRY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2244;
		$categoria->brand_id =382;
		$categoria->models = "HILUX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2245;
		$categoria->brand_id =382;
		$categoria->models = "LAND CRUISER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2246;
		$categoria->brand_id =382;
		$categoria->models = "PICK UP";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2247;
		$categoria->brand_id =382;
		$categoria->models = "T100";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2248;
		$categoria->brand_id =382;
		$categoria->models = "TACOMA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2249;
		$categoria->brand_id =382;
		$categoria->models = "TUNDRA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2250;
		$categoria->brand_id =383;
		$categoria->models = "39094";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2251;
		$categoria->brand_id =384;
		$categoria->models = "GOL";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2252;
		$categoria->brand_id =384;
		$categoria->models = "KOMBI";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2253;
		$categoria->brand_id =384;
		$categoria->models = "SAVEIRO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2254;
		$categoria->brand_id =385;
		$categoria->models = "LZW1010PL";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2255;
		$categoria->brand_id =386;
		$categoria->models = "ADMIRAL";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2256;
		$categoria->brand_id =386;
		$categoria->models = "GRAND TIGER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2257;
		$categoria->brand_id =387;
		$categoria->models = "MDX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2258;
		$categoria->brand_id =387;
		$categoria->models = "RDX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2259;
		$categoria->brand_id =387;
		$categoria->models = "SLX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2260;
		$categoria->brand_id =387;
		$categoria->models = "ZDX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2261;
		$categoria->brand_id =388;
		$categoria->models = "HUMMER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2262;
		$categoria->brand_id =389;
		$categoria->models = "ANACONDA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2263;
		$categoria->brand_id =389;
		$categoria->models = "BUFFALO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2264;
		$categoria->brand_id =389;
		$categoria->models = "DAKTARI";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2265;
		$categoria->brand_id =389;
		$categoria->models = "GRAN RANGER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2266;
		$categoria->brand_id =389;
		$categoria->models = "RANGER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2267;
		$categoria->brand_id =389;
		$categoria->models = "SPARTANA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2268;
		$categoria->brand_id =390;
		$categoria->models = "Q5";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2269;
		$categoria->brand_id =390;
		$categoria->models = "Q7";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2270;
		$categoria->brand_id =391;
		$categoria->models = "FREECLIMBER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2271;
		$categoria->brand_id =392;
		$categoria->models = "X1";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2272;
		$categoria->brand_id =392;
		$categoria->models = "X3";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2273;
		$categoria->brand_id =392;
		$categoria->models = "X5";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2274;
		$categoria->brand_id =392;
		$categoria->models = "X6";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2275;
		$categoria->brand_id =393;
		$categoria->models = "ENCLAVE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2276;
		$categoria->brand_id =393;
		$categoria->models = "RAINIER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2277;
		$categoria->brand_id =393;
		$categoria->models = "RENDEZVOUS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2278;
		$categoria->brand_id =394;
		$categoria->models = "ESCALADE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2279;
		$categoria->brand_id =394;
		$categoria->models = "SRX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2280;
		$categoria->brand_id =395;
		$categoria->models = "TIGGO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2281;
		$categoria->brand_id =395;
		$categoria->models = "X5";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2282;
		$categoria->brand_id =396;
		$categoria->models = "BLAZER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2283;
		$categoria->brand_id =396;
		$categoria->models = "CAPTIVA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2284;
		$categoria->brand_id =396;
		$categoria->models = "EQUINOX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2285;
		$categoria->brand_id =396;
		$categoria->models = "GRAND BLAZER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2286;
		$categoria->brand_id =396;
		$categoria->models = "GRAND VITARA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2287;
		$categoria->brand_id =396;
		$categoria->models = "JIMNY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2288;
		$categoria->brand_id =396;
		$categoria->models = "SAMURAI";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2289;
		$categoria->brand_id =396;
		$categoria->models = "SONORA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2290;
		$categoria->brand_id =396;
		$categoria->models = "SUBURBAN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2291;
		$categoria->brand_id =396;
		$categoria->models = "TAHOE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2292;
		$categoria->brand_id =396;
		$categoria->models = "TRACKER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2293;
		$categoria->brand_id =396;
		$categoria->models = "TRAILBLAZER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2294;
		$categoria->brand_id =396;
		$categoria->models = "TRAVERSE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2295;
		$categoria->brand_id =396;
		$categoria->models = "TROOPER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2296;
		$categoria->brand_id =396;
		$categoria->models = "VITARA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2297;
		$categoria->brand_id =397;
		$categoria->models = "ASPEN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2298;
		$categoria->brand_id =397;
		$categoria->models = "PACIFICA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2299;
		$categoria->brand_id =398;
		$categoria->models = "DUSTER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2300;
		$categoria->brand_id =399;
		$categoria->models = "KORANDO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2301;
		$categoria->brand_id =399;
		$categoria->models = "MUSSO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2302;
		$categoria->brand_id =400;
		$categoria->models = "FEROZA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2303;
		$categoria->brand_id =400;
		$categoria->models = "ROCKY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2304;
		$categoria->brand_id =400;
		$categoria->models = "TERIOS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2305;
		$categoria->brand_id =401;
		$categoria->models = "DAKOTA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2306;
		$categoria->brand_id =401;
		$categoria->models = "DURANGO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2307;
		$categoria->brand_id =401;
		$categoria->models = "JOURNEY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2308;
		$categoria->brand_id =401;
		$categoria->models = "NITRO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2309;
		$categoria->brand_id =401;
		$categoria->models = "RAM BR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2310;
		$categoria->brand_id =402;
		$categoria->models = "HAIMA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2311;
		$categoria->brand_id =403;
		$categoria->models = "BRONCO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2312;
		$categoria->brand_id =403;
		$categoria->models = "ECOSPORT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2313;
		$categoria->brand_id =403;
		$categoria->models = "EDGE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2314;
		$categoria->brand_id =403;
		$categoria->models = "ESCAPE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2315;
		$categoria->brand_id =403;
		$categoria->models = "EXCURSION";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2316;
		$categoria->brand_id =403;
		$categoria->models = "EXPEDITION";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2317;
		$categoria->brand_id =403;
		$categoria->models = "EXPLORER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2318;
		$categoria->brand_id =403;
		$categoria->models = "FLEX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2319;
		$categoria->brand_id =403;
		$categoria->models = "FREESTYLE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2320;
		$categoria->brand_id =403;
		$categoria->models = "FUSION";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2321;
		$categoria->brand_id =404;
		$categoria->models = "TRACKER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2322;
		$categoria->brand_id =405;
		$categoria->models = "ACADIA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2323;
		$categoria->brand_id =405;
		$categoria->models = "ENVOY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2324;
		$categoria->brand_id =405;
		$categoria->models = "JIMMY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2325;
		$categoria->brand_id =405;
		$categoria->models = "SUBURBAN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2326;
		$categoria->brand_id =405;
		$categoria->models = "TERRAIN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2327;
		$categoria->brand_id =405;
		$categoria->models = "TYPHOON";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2328;
		$categoria->brand_id =405;
		$categoria->models = "YUKON";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2329;
		$categoria->brand_id =406;
		$categoria->models = "COXSWAIN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2330;
		$categoria->brand_id =406;
		$categoria->models = "JETSTAR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2331;
		$categoria->brand_id =406;
		$categoria->models = "VICTOR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2332;
		$categoria->brand_id =407;
		$categoria->models = "HOVER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2333;
		$categoria->brand_id =407;
		$categoria->models = "PEGASUS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2334;
		$categoria->brand_id =407;
		$categoria->models = "SAFE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2335;
		$categoria->brand_id =408;
		$categoria->models = "7";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2336;
		$categoria->brand_id =409;
		$categoria->models = "CRV";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2337;
		$categoria->brand_id =409;
		$categoria->models = "ELEMENT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2338;
		$categoria->brand_id =409;
		$categoria->models = "HRV";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2339;
		$categoria->brand_id =409;
		$categoria->models = "PASSPORT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2340;
		$categoria->brand_id =409;
		$categoria->models = "PILOT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2341;
		$categoria->brand_id =410;
		$categoria->models = "C13";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2342;
		$categoria->brand_id =410;
		$categoria->models = "C3";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2343;
		$categoria->brand_id =410;
		$categoria->models = "SRV";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2344;
		$categoria->brand_id =411;
		$categoria->models = "H1";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2345;
		$categoria->brand_id =411;
		$categoria->models = "H2";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2346;
		$categoria->brand_id =411;
		$categoria->models = "H3";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2347;
		$categoria->brand_id =412;
		$categoria->models = "GALLOPER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2348;
		$categoria->brand_id =412;
		$categoria->models = "SANTA FE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2349;
		$categoria->brand_id =412;
		$categoria->models = "TERRACAN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2350;
		$categoria->brand_id =412;
		$categoria->models = "TUCSON";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2351;
		$categoria->brand_id =412;
		$categoria->models = "VERACRUZ";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2352;
		$categoria->brand_id =413;
		$categoria->models = "EX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2353;
		$categoria->brand_id =413;
		$categoria->models = "FX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2354;
		$categoria->brand_id =413;
		$categoria->models = "QX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2355;
		$categoria->brand_id =414;
		$categoria->models = "AMIGO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2356;
		$categoria->brand_id =414;
		$categoria->models = "ASCENDER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2357;
		$categoria->brand_id =414;
		$categoria->models = "AXIOM";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2358;
		$categoria->brand_id =414;
		$categoria->models = "CARIBE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2359;
		$categoria->brand_id =414;
		$categoria->models = "RODEO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2360;
		$categoria->brand_id =414;
		$categoria->models = "TROOPER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2361;
		$categoria->brand_id =414;
		$categoria->models = "VEHICROSS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2362;
		$categoria->brand_id =414;
		$categoria->models = "i-SERIES";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2363;
		$categoria->brand_id =415;
		$categoria->models = "REIN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2364;
		$categoria->brand_id =416;
		$categoria->models = "R";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2365;
		$categoria->brand_id =416;
		$categoria->models = "S";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2366;
		$categoria->brand_id =417;
		$categoria->models = "CHEROKEE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2367;
		$categoria->brand_id =417;
		$categoria->models = "CJ3";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2368;
		$categoria->brand_id =417;
		$categoria->models = "CJ5";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2369;
		$categoria->brand_id =417;
		$categoria->models = "CJ7";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2370;
		$categoria->brand_id =417;
		$categoria->models = "COMMANDER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2371;
		$categoria->brand_id =417;
		$categoria->models = "COMPASS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2372;
		$categoria->brand_id =417;
		$categoria->models = "GRAND CHEROKEE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2373;
		$categoria->brand_id =417;
		$categoria->models = "GRAND WAGONEER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2374;
		$categoria->brand_id =417;
		$categoria->models = "LIBERTY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2375;
		$categoria->brand_id =417;
		$categoria->models = "PATRIOT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2376;
		$categoria->brand_id =417;
		$categoria->models = "RENEGADO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2377;
		$categoria->brand_id =417;
		$categoria->models = "WAGONEER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2378;
		$categoria->brand_id =417;
		$categoria->models = "WRANGLER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2379;
		$categoria->brand_id =418;
		$categoria->models = "LANDWIND";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2380;
		$categoria->brand_id =419;
		$categoria->models = "BORREGO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2381;
		$categoria->brand_id =419;
		$categoria->models = "SORENTO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2382;
		$categoria->brand_id =419;
		$categoria->models = "SPORTAGE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2383;
		$categoria->brand_id =420;
		$categoria->models = "NIVA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2384;
		$categoria->brand_id =421;
		$categoria->models = "DEFENDER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2385;
		$categoria->brand_id =421;
		$categoria->models = "DISCOVERY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2386;
		$categoria->brand_id =421;
		$categoria->models = "FREELANDER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2387;
		$categoria->brand_id =421;
		$categoria->models = "LAND ROVER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2388;
		$categoria->brand_id =421;
		$categoria->models = "LR2";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2389;
		$categoria->brand_id =421;
		$categoria->models = "LR3";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2390;
		$categoria->brand_id =421;
		$categoria->models = "LR4";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2391;
		$categoria->brand_id =421;
		$categoria->models = "RANGE ROVER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2392;
		$categoria->brand_id =422;
		$categoria->models = "X3";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2393;
		$categoria->brand_id =422;
		$categoria->models = "X6";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2394;
		$categoria->brand_id =422;
		$categoria->models = "X9";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2395;
		$categoria->brand_id =423;
		$categoria->models = "GX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2396;
		$categoria->brand_id =423;
		$categoria->models = "LX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2397;
		$categoria->brand_id =423;
		$categoria->models = "RX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2398;
		$categoria->brand_id =424;
		$categoria->models = "AVIATOR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2399;
		$categoria->brand_id =424;
		$categoria->models = "MARK LT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2400;
		$categoria->brand_id =424;
		$categoria->models = "MKX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2401;
		$categoria->brand_id =424;
		$categoria->models = "NAVIGATOR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2402;
		$categoria->brand_id =425;
		$categoria->models = "CX";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2403;
		$categoria->brand_id =425;
		$categoria->models = "NAVAJO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2404;
		$categoria->brand_id =425;
		$categoria->models = "TRIBUTE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2405;
		$categoria->brand_id =426;
		$categoria->models = "GELANDEWAGEN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2406;
		$categoria->brand_id =426;
		$categoria->models = "GL";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2407;
		$categoria->brand_id =426;
		$categoria->models = "GLK";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2408;
		$categoria->brand_id =426;
		$categoria->models = "ML";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2409;
		$categoria->brand_id =427;
		$categoria->models = "MARINER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2410;
		$categoria->brand_id =427;
		$categoria->models = "MOUNTAINEER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2411;
		$categoria->brand_id =428;
		$categoria->models = "ENDEAVOR";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2412;
		$categoria->brand_id =428;
		$categoria->models = "EXPO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2413;
		$categoria->brand_id =428;
		$categoria->models = "FREECA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2414;
		$categoria->brand_id =428;
		$categoria->models = "MONTERO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2415;
		$categoria->brand_id =428;
		$categoria->models = "NATIVA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2416;
		$categoria->brand_id =428;
		$categoria->models = "OUTLANDER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2417;
		$categoria->brand_id =428;
		$categoria->models = "PAJERO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2418;
		$categoria->brand_id =429;
		$categoria->models = "XK";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2419;
		$categoria->brand_id =430;
		$categoria->models = "ARMADA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2420;
		$categoria->brand_id =430;
		$categoria->models = "JUKE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2421;
		$categoria->brand_id =430;
		$categoria->models = "MURANO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2422;
		$categoria->brand_id =430;
		$categoria->models = "PATHFINDER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2423;
		$categoria->brand_id =430;
		$categoria->models = "PATROL";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2424;
		$categoria->brand_id =430;
		$categoria->models = "QASHQAI";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2425;
		$categoria->brand_id =430;
		$categoria->models = "ROGUE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2426;
		$categoria->brand_id =430;
		$categoria->models = "TERRANO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2427;
		$categoria->brand_id =430;
		$categoria->models = "X TRAIL";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2428;
		$categoria->brand_id =430;
		$categoria->models = "XTERRA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2429;
		$categoria->brand_id =431;
		$categoria->models = "BRAVADA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2430;
		$categoria->brand_id =432;
		$categoria->models = "FRONTERA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2431;
		$categoria->brand_id =433;
		$categoria->models = "4007";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2432;
		$categoria->brand_id =434;
		$categoria->models = "AZTEK";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2433;
		$categoria->brand_id =434;
		$categoria->models = "TORRENT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2434;
		$categoria->brand_id =435;
		$categoria->models = "CAYENNE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2435;
		$categoria->brand_id =436;
		$categoria->models = "DUSTER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2436;
		$categoria->brand_id =436;
		$categoria->models = "KOLEOS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2437;
		$categoria->brand_id =437;
		$categoria->models = "09-jul";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2438;
		$categoria->brand_id =438;
		$categoria->models = "VUE";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2439;
		$categoria->brand_id =439;
		$categoria->models = "AURORA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2440;
		$categoria->brand_id =440;
		$categoria->models = "SCEO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2441;
		$categoria->brand_id =440;
		$categoria->models = "SRV";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2442;
		$categoria->brand_id =441;
		$categoria->models = "ACTYON";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2443;
		$categoria->brand_id =441;
		$categoria->models = "KORANDO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2444;
		$categoria->brand_id =441;
		$categoria->models = "MUSSO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2445;
		$categoria->brand_id =441;
		$categoria->models = "REXTON";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2446;
		$categoria->brand_id =442;
		$categoria->models = "PINZGAUER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2447;
		$categoria->brand_id =443;
		$categoria->models = "B9";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2448;
		$categoria->brand_id =443;
		$categoria->models = "FORESTER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2449;
		$categoria->brand_id =444;
		$categoria->models = "GRAND VITARA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2450;
		$categoria->brand_id =444;
		$categoria->models = "JIMNY";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2451;
		$categoria->brand_id =444;
		$categoria->models = "SAMURAI";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2452;
		$categoria->brand_id =444;
		$categoria->models = "SIDEKICK";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2453;
		$categoria->brand_id =444;
		$categoria->models = "VITARA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2454;
		$categoria->brand_id =444;
		$categoria->models = "X 90";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2455;
		$categoria->brand_id =444;
		$categoria->models = "XL7";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2456;
		$categoria->brand_id =445;
		$categoria->models = "SAFARI";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2457;
		$categoria->brand_id =446;
		$categoria->models = "TIUNA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2458;
		$categoria->brand_id =447;
		$categoria->models = "4RUNNER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2459;
		$categoria->brand_id =447;
		$categoria->models = "FJ CRUISER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2460;
		$categoria->brand_id =447;
		$categoria->models = "FORTUNER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2461;
		$categoria->brand_id =447;
		$categoria->models = "HIGHLANDER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2462;
		$categoria->brand_id =447;
		$categoria->models = "LAND CRUISER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2463;
		$categoria->brand_id =447;
		$categoria->models = "LAND CRUISER S.WAGON";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2464;
		$categoria->brand_id =447;
		$categoria->models = "RAV4";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2465;
		$categoria->brand_id =447;
		$categoria->models = "SEQUOIA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2466;
		$categoria->brand_id =447;
		$categoria->models = "TERIOS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2467;
		$categoria->brand_id =448;
		$categoria->models = "31519";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2468;
		$categoria->brand_id =449;
		$categoria->models = "FD";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2469;
		$categoria->brand_id =450;
		$categoria->models = "TIGUAN";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2470;
		$categoria->brand_id =450;
		$categoria->models = "TOUAREG";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2471;
		$categoria->brand_id =451;
		$categoria->models = "XC";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2472;
		$categoria->brand_id =452;
		$categoria->models = "LANDMARK";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2473;
		$categoria->brand_id =453;
		$categoria->models = "NOMAD";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2474;
		$categoria->brand_id =453;
		$categoria->models = "T200";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2475;
		$categoria->brand_id =454;
		$categoria->models = "MAXI";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2476;
		$categoria->brand_id =455;
		$categoria->models = "AVEO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2477;
		$categoria->brand_id =455;
		$categoria->models = "CAVALIER";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2478;
		$categoria->brand_id =455;
		$categoria->models = "CORSA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2479;
		$categoria->brand_id =455;
		$categoria->models = "ESTEEM";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2480;
		$categoria->brand_id =456;
		$categoria->models = "524";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2481;
		$categoria->brand_id =456;
		$categoria->models = "SUPER NOVA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2482;
		$categoria->brand_id =457;
		$categoria->models = "CIELO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2483;
		$categoria->brand_id =457;
		$categoria->models = "LANOS";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2484;
		$categoria->brand_id =457;
		$categoria->models = "LEGANZA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2485;
		$categoria->brand_id =457;
		$categoria->models = "NUBIRA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2486;
		$categoria->brand_id =458;
		$categoria->models = "SIENA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2487;
		$categoria->brand_id =458;
		$categoria->models = "TEMPRA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2488;
		$categoria->brand_id =459;
		$categoria->models = "ACCENT";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2489;
		$categoria->brand_id =459;
		$categoria->models = "ELANTRA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2490;
		$categoria->brand_id =459;
		$categoria->models = "EXCEL";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2491;
		$categoria->brand_id =459;
		$categoria->models = "SONATA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2492;
		$categoria->brand_id =460;
		$categoria->models = "RIO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2493;
		$categoria->brand_id =461;
		$categoria->models = "323";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2494;
		$categoria->brand_id =462;
		$categoria->models = "SIGNO";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2495;
		$categoria->brand_id =463;
		$categoria->models = "SENTRA";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2496;
		$categoria->brand_id =464;
		$categoria->models = "19";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2497;
		$categoria->brand_id =464;
		$categoria->models = "SYMBOL";
		$categoria->save();

		$categoria = new CarModel();
		$categoria->id = 2498;
		$categoria->brand_id =465;
		$categoria->models = "SANTANA";
		$categoria->save();    	

    }
}