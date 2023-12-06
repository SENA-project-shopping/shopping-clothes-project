<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $faker = Faker::create();

        // Inserta 20 registros de productos de ejemplo
        for ($i = 1; $i <= 20; $i++) {
            $precioSinIva = $faker->randomFloat(2, 10, 1000);
            $iva = $precioSinIva * 0.19;
            $precioConIva = $precioSinIva + $iva;

            // Limita el número de decimales a dos después del punto
            $precioConIva = number_format($precioConIva, 2, '.', '');

            $productCategoryId = rand(1, 5);
            $tallaCategoryId = ($productCategoryId >= 1 && $productCategoryId <= 4) ? rand(1, 6) : rand(7, 18);
            
            DB::table('products')->insert([
                'codigo_producto' => $faker->unique()->randomNumber(6) + 100,
                'nombre_producto' => "Producto $i",
                'cantidad_producto' => rand(1, 100),
                'precio_producto' => $precioConIva,
                'product_categories_id' => $productCategoryId,
                'talla_categories_id' => $tallaCategoryId,
                'color_categories_id' => rand(1, 8),
                'genero_categories_id' => rand(1, 3),
                'descripcion_detallada' => "Descripción del producto detallado",
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
