<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

use function Laravel\Prompts\text;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Elimina los registros existentes en la tabla antes de insertar nuevos datos
        // DB::table('products')->truncate();

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
                'product_categories_id' => rand(1, 5),
                'talla_categories_id' => rand(1, 18),
                'color_categories_id' => rand(1, 8),
                'genero_categories_id' => rand(1, 3),
                'descripcion_detallada' => "Descripción del producto detallado",
                // if ('product_categories_id' == 4) {
                //     '' => rand(32, 43)
                // }
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
