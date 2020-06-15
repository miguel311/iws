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
    	
        
        /** Revisar */
        /** Registros de automoviles */
        //$this->call(AutomovilTableSeeder::class);
        //$this->call(PlanTableSeeder::class);
    }
}
