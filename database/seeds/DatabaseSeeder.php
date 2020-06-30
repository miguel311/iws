<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /** Registro de roles por defecto */
        $this->call(RolesTableSeeder::class);
        /** Registro de permisos por defecto */
        $this->call(PermissionsTableSeeder::class);
        /** Registro de usuarios por defecto */
        $this->call(UsersTableSeeder::class);
    	/** Registro de estados de venezuela */
        $this->call(EstatesTableSeeder::class);
        /** Registro de municipios asociados a los estados */
        $this->call(MunicipalitiesTableSeeder::class);
        /** Registro de parroquias asociadas a los municipios */
        $this->call(ParishesTableSeeder::class);
        
        /** Revisar */
        /** Registros de automóviles */
        $this->call(AutomovilTableSeeder::class);
        /** Registros de planes comerciales */
        //$this->call(PlanTableSeeder::class);
    }
}
