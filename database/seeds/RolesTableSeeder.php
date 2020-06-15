<?php

use Illuminate\Database\Seeder;

use App\Roles\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::transaction(function () {
            $roles = [
                [
                    'name' => 'Administrador',
                    'slug' => 'admin',
                    'description' => 'Permite administrar y gestionar todas las funciones de la aplicación',
                    'level' => 1
                ]
            ];

            foreach ($roles as $role) {
                Role::updateOrCreate(
                    ['slug' => $role['slug']],
                    [
                        'name' => $role['name'],
                        'description' => $role['description'],
                        'level' => $role['level']
                    ]
                );
            }
        });
    }
}
