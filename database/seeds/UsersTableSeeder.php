<?php

use Illuminate\Database\Seeder;
use App\Roles\Models\Role;
use Carbon\Carbon;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::transaction(function () {
            /** @var object Crea el usuario por defecto de la aplicación */
            $user_admin = User::updateOrCreate(
                ['email' => 'admin@admin.com'],
                [
                    'name'              => 'Administrador',
                    'email'             => 'admin@admin.com',
                    'password'          => bcrypt('12345678'),
                    'created_at' => Carbon::now(),
                    'email_verified_at' => Carbon::now()
                ]
            );
            if (!$user_admin) {
                throw new Exception('Error creando el usuario administrador por defecto');
            }

            /** @var object Busca el rol de administrador del sistema */
            $adminRole = Role::where('slug', 'admin')->first();

            if ($adminRole) {
                /** Asigna el rol de administrador */
                $user_admin->attachRole($adminRole);
            }
        });
    }
}
