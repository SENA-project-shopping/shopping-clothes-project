<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * 
     * @return void
     */
    public function run(): void
    {
        /* Seeders Usuarios */
        $this->call(RolUserSeeder::class);
        $this->call(StateSeeder::class);
        $this->call(DocumentTypesSeeder::class);
        $this->call(UsersSeeder::class);
        
        /* Seeders Inventario */
        $this->call(ProductsCategoriesSeeder::class);
        $this->call(ColorCategoriaSeeder::class);
        $this->call(TallaCategoriaSeeder::class);
        $this->call(GeneroCategoriaSeeder::class);
        $this->call(ProductsSeeder::class);

        /* Seeders Clientes */
        // $this->call(ClientsSeeder::class);

        /* Seeders Ventas */
        $this->call(FormaPagoSeeder::class);
        $this->call(SalesSeeder::class);
    }
}
