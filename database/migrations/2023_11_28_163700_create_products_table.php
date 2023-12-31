<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_producto')->unique();
            $table->string('nombre_producto');
            $table->string('cantidad_producto');
            $table->string('precio_producto');
            $table->foreignId('product_categories_id')
                ->constrained('product_categories')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('talla_categories_id')
                ->constrained('talla_categories')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('color_categories_id')
                ->constrained('color_categories')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('genero_categories_id')
                ->constrained('genero_categories')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->text('descripcion_detallada');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};