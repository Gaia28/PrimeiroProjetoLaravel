<?php

namespace Database\Seeders;

use App\Models\Empresas;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        Empresas::factory(5)->create();

        Empresas::factory()->create([
            'razao-social' => 'Empresa Exemplo',
            'email'       => 'teste@teste.com',
            'cnpj'        => '000000000/0001-00',
            'password'    => '123456',
            'created_at'  => now(),
            'updated_at'  => now(),
            
        ]);

       /* User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/
    }
}
