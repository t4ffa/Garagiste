<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;
use App\Models\Stock;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        /*\App\Models\user::factory(10)->create();*/

        \App\Models\User::factory()->create([
            'id' => 1,
             'username' => 'User',
             'email' => 'test@example.com',
             'password' => 'password',
             'role' => 'user',
         ]);

        Stock::factory(10)->create();
         
    }
}
