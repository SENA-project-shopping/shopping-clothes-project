<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeneroCategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $generoCategoria = [
            'Masculino',
            'Femenino',
            'Unisex',
        ];

        foreach ($generoCategoria as $item) {
            DB::table('genero_categoria')->insert([
                'descripcion_genero_categoria' => $item,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
