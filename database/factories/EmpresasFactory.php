<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use App\Models\Empresas;

class EmpresasFactory extends Factory
{
    protected $model = Empresas::class;
    
    protected static ?string $password;

    public function definition(): array
    {
        return [
            'razao-social' => fake()->company(), // Trocado hífen por underscore
            'cnpj' => fake()->numerify('##.###.###/####-##'),
            'email' => fake()->unique()->companyEmail(),
            'password' => static::$password ??= Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}