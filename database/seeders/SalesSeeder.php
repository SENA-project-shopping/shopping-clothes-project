<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class SalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 10; $i++) {
            DB::table('sales')->insert([
                'codigo_venta' => $i,
                'fecha_facturacion' => now(),
                'precio_total' => random_int(50000, 20000000),
                'forma_pago_id' => random_int(1, 3),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
