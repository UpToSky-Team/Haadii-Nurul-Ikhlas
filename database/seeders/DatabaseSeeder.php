<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::insert([
            [
            'id_admin' => Str::uuid(),
            'name' => 'John Doe',
            'ussername' => 'johndoe',
            'password' => bcrypt('password'),
            'role' => 'admin',
            ],
            [
            'id_admin' => Str::uuid(),
            'name' => 'Jane Smith',
            'ussername' => 'janesmith',
            'password' => bcrypt('password'),
            'role' => 'humas',
            ],
        ]);
    }
}
