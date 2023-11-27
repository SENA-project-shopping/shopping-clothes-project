<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Elimina los registros existentes en la tabla antes de insertar nuevos datos
        // DB::table('product_categories')->truncate();

        $categoriesProduct = [
            'Camisa',
            'Pantalon',
            'Chaqueta',
            'Zapatos',
            'Ropa Interior',
        ];

        foreach ($categoriesProduct as $item) {
            DB::table('product_categories')->insert([
                'descripcion_categoria_producto' => $item,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
