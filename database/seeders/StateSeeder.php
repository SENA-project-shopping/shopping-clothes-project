<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stateUser = [
            'Activo',
            'Inactivo',
        ];

        foreach ($stateUser as $item) {
            DB::table('state_users')->insert([
                'descripcion_state_users' => $item,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
