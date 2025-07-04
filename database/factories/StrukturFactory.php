<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Struktur>
 */
class StrukturFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_struktur' => Str::uuid(),
            'nama' => 'jhone',
            'level' => 1,
            'jabatan' => 'Kepala Yayasan',
            'id_admin' => User::factory(),
        ];
    }
}
