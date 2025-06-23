<?php

namespace Database\Seeders;

use App\Models\MaksudTujuan;
use App\Models\Sejarah;
use App\Models\Struktur;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\VisiMisi;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(1)->create();
        MaksudTujuan::factory(1)->create();
        Sejarah::factory(1)->create();
        Struktur::factory(1)->create();
        VisiMisi::factory(1)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
