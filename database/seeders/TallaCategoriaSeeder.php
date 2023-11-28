<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TallaCategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('talla_categoria')->truncate();

        $tallaCategoria = [
            'XS',
            'S',
            'M',
            'L',
            'XL',
            'XXL',
        ];

        foreach ($tallaCategoria as $item) {
            DB::table('talla_categoria')->insert([
                'descripcion_talla_categoria' => $item,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        for ($i = 32; $i <= 43; $i++) {
            DB::table('talla_categoria')->insert([
                'descripcion_talla_categoria' => (string) $i,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
