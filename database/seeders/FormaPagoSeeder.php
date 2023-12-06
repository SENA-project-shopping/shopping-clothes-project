<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormaPagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $formaPago = [
            'Efectivo',
            'Tarjeta de débito',
            'Tarjeta de crédito',
        ];

        foreach ($formaPago as $item) {
            DB::table('forma_pagos')->insert([
                'descripcion_forma_pago' => $item,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
