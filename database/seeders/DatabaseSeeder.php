<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;  // Asegúrate de agregar esto

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('password'),
            // Añadir C.I.
            'ci' => '12345678',  // Asegúrate de añadir esto
            'phone' => '111-222-333',  // Asegúrate de añadir esto
        ]);
        
    }
}
