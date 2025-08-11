<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Make sure to call the User factory to create users
        User::factory()->create([
            'full_name' => 'Regular User',
            'phone_number' => '089876543210',
            'domicile' => 'Bandung',
            'country' => 'Indonesia',
            'email' => 'user@example.com',
            'role' => 'user',
            'password' => bcrypt('password123'),
        ]);

        // Make 10 random users
        User::factory(10)->create();
    }
}
