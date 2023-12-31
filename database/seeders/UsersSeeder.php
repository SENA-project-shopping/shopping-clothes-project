<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => 'User Admin',
            'email' => 'prueba.admin@example.com',
            'password' => 'prueba.admin',
            'rol_users_id' => '1',
            'state_users_id' => '1',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'User Bodega',
            'email' => 'prueba.bodega@example.com',
            'password' => 'prueba.bodega',
            'rol_users_id' => '2',
            'state_users_id' => '1',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'User inhabilitado',
            'email' => 'prueba.inhabilitado@example.com',
            'password' => 'prueba.inhabilitado',
            'rol_users_id' => '1',
            'state_users_id' => '2',
        ]);

        \App\Models\User::factory(10)->create();
    }
}
