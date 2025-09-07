<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'test@example.com',
            'role'=>'admin',
            'password'=>Hash::make('password'),
        ]);

         User::factory()->create([
            'name' => 'user',
            'email' => 'user@example.com',
            'role'=>'user',
            'password'=>Hash::make('password'),
        ]);
         User::factory()->create([
            'name' => 'user2',
            'email' => 'user2@example.com',
            'role'=>'user',
            'password'=>Hash::make('password'),
        ]);
    }
}
