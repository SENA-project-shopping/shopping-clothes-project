<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorCategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $coloresCategoria = [
            'Blanco',
            'Negro',
            'Gris',
            'Rojo',
            'Verde',
            'Amarillo',
            'Naranja',
            'Rosado',
        ];

        foreach ($coloresCategoria as $item) {
            DB::table('color_categories')->insert([
                'descripcion_color_categoria' => $item,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
