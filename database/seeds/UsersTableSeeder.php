<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
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
        model::unguard();

        $users = [
            [
                'name'              => 'Administrador',
                'email'             => 'admin@admin.com',
                'email_verified_at' => now(),
                'password'          => bcrypt('12345678'),
                'remember_token'    => Str::random(10)
            ],
        ];

        DB::transaction(function () use ($users) {
            foreach ($users as $user) {
                $usr = User::updateOrCreate(
                    [
                        'email'             => $user['email']
                    ],
                    [
                        'name'              => $user['name'],
                        'email'             => $user['email'],
                        'email_verified_at' => $user['email_verified_at'],
                        'password'          => $user['password'],
                        'remember_token'    => $user['remember_token']
                    ]
                );
            }
        });
    }
}
