<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Elimina los registros existentes en la tabla antes de insertar nuevos datos
        DB::table('products')->truncate();

        $faker = Faker::create();

        // Inserta 20 registros de productos de ejemplo
        for ($i = 1; $i <= 20; $i++) {
            DB::table('products')->insert([
                'codigo_producto' => $faker->unique()->randomNumber(6) + 100, // Números aleatorios únicos iniciando desde 100
                'nombre_producto' => "Producto $i",
                'cantidad_producto' => rand(1, 100),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
