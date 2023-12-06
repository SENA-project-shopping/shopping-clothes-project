<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocumentTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $documentTypes = [
            'Cédula de ciudadanía',
            'Cédula de extrajería',
            'Pasaporte',
            'PPT',
        ];

        foreach ($documentTypes as $item) {
            DB::table('document_types')->insert([
                'descripcion_document_types' => $item,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
