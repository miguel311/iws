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
    	$this->call(AutomovilTableSeeder::class);
    	$this->call(EstadoTableSeeder::class);
        // $this->call(UsersTableSeeder::class);
    }
}
