<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Clients::factory()->create([
            'nombre_cliente' => 'Cliente prueba',
            'email_cliente' => 'cliente@example.com',
            'password' => 'user1!',
            'ciudad_residencia' => 'Bogotá',
            'direccion_residencia' => 'Muy lejos',
            'telefono' => '32156666648',
        ]);

        \App\Models\Clients::factory(10)->create();
    }
}
