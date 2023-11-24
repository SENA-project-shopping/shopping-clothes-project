<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductsSeeder extends Seeder
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
            $precioSinIva = $faker->randomFloat(2, 10, 1000);
            $iva = $precioSinIva * 0.19;
            $precioConIva = $precioSinIva + $iva;

            // Limita el número de decimales a dos después del punto
            $precioConIva = number_format($precioConIva, 2, '.', '');

            DB::table('products')->insert([
                'codigo_producto' => $faker->unique()->randomNumber(6) + 100,
                'nombre_producto' => "Producto $i",
                'cantidad_producto' => rand(1, 100),
                'precio_producto' => $precioConIva,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
