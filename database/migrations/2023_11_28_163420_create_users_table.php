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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->foreignId('document_types_id')
                ->constrained('document_types')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('document_user');
            $table->string('pais_nacimiento');
            $table->string('phone');
            $table->string('direccion_residencia');
            $table->string('ciudad_residencia');
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('rol_users_id')
                ->constrained('rol_users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('state_users_id')
                ->constrained('state_users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
