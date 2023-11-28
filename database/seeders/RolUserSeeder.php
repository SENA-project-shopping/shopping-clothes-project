<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rolUsers = [
            'Administrador',
            'Vendedor',
            'Bodega',
        ];

        foreach ($rolUsers as $item) {
            DB::table('rol_users')->insert([
                'descripcion_rol_users' => $item,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
