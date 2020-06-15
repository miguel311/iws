<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Roles\Models\Permission;
use App\Roles\Models\Role;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $adminRole = Role::updateOrCreate(
            ['slug' => 'admin'],
            [
                'name' => 'Administrador',
                'description' => 'Permite administrar y gestionar todas las funciones de la aplicación',
                'level' => 1
            ]
        );

        $permissions = [
            [
                'name' => 'Crear cuenta de usuario', 'slug' => 'user.create',
                'description' => 'Acceso para crear nuevos usuarios',
                'model' => User::class, 'model_prefix' => 'Gestión de usuarios',
                'slug_alt' => 'usuario.crear', 'short_description' => 'Crear usuarios'
            ],
            [
                'name' => 'Editar cuenta de usuario', 'slug' => 'user.edit',
                'description' => 'Acceso para editar usuarios',
                'model' => User::class, 'model_prefix' => 'Gestión de usuarios',
                'slug_alt' => 'usuario.editar', 'short_description' => 'Editar usuarios'
            ],
            [
                'name' => 'Eliminar cuenta de usuario', 'slug' => 'user.delete',
                'description' => 'Acceso para eliminar usuarios',
                'model' => User::class, 'model_prefix' => 'Gestión de usuarios',
                'slug_alt' => 'usuario.eliminar', 'short_description' => 'Eliminar usuarios'
            ],
            [
                'name' => 'Listar cuentas de usuarios', 'slug' => 'user.list',
                'description' => 'Acceso para listar usuarios',
                'model' => User::class, 'model_prefix' => 'Gestión de usuarios',
                'slug_alt' => 'usuario.listar', 'short_description' => 'Listar usuarios'
            ],
            [
                'name' => 'Mostrar cuenta de usuario', 'slug' => 'user.show',
                'description' => 'Acceso para mostrar usuarios',
                'model' => User::class, 'model_prefix' => 'Gestión de usuarios',
                'slug_alt' => 'usuario.mostrar', 'short_description' => 'Mostrar usuarios'
            ],
            // Permisos las secciones del panel de control
            [
                'name' => 'Sección de gestión de usuarios', 'slug' => 'dashboard.user',
                'description' => 'Sección de gestión de usuarios',
                'model' => '', 'model_prefix' => 'Panel de control',
                'slug_alt' => 'panel.seccion_usuarios', 'short_description' => 'Sección de gestión de usuarios'
            ],
            [
                'name' => 'Sección de registros eliminados', 'slug' => 'dashboard.register',
                'description' => 'Sección de registros eliminados',
                'model' => '', 'model_prefix' => 'Panel de control',
                'slug_alt' => 'panel.seccion_register',
                'short_description' => 'Sección de registros eliminados'
            ],
        ];

        DB::transaction(function () use ($permissions, $adminRole) {
            /*
             * temporalmente para corregir tabla de relacion entre permisos y roles
             */
            $adminRole->detachAllPermissions();

            /**
             * Permisos disponibles para el admin
             */
            foreach ($permissions as $permission) {
                $per = Permission::updateOrCreate(
                    ['slug' => $permission['slug']],
                    [
                        'name' => $permission['name'], 'description' => $permission['description'],
                        'model' => $permission['model'], 'model_prefix' => $permission['model_prefix'],
                        'slug_alt' => $permission['slug_alt'],
                        'short_description' => $permission['short_description']
                    ]
                );
                // if ($adminRole) {
                //     $adminRole->attachPermission($per);
                // }
            }
        });
    }
}
