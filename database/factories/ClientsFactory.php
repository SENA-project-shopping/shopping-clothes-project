<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ClientsFactory extends Factory
{
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * @return array<int, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre_cliente' => fake()->name(),
            'email_cliente' => fake()->unique()->safeEmail(),
            'password' => static::$password ??= Hash::make('password'),
            'ciudad_residencia' => fake()->city(),
            'direccion_residencia' => fake()->name(),
            'telefono' => fake()->phoneNumber(),
        ];
    }
}
