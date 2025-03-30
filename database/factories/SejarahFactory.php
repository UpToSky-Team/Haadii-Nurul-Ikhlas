<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sejarah>
 */
class SejarahFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_sejarah' => Str::uuid(),
            'konten' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus accumsan dictum libero sit amet dictum. Praesent vitae commodo erat. Duis congue molestie augue. Proin sit amet ligula semper, varius neque placerat, semper arcu. Nunc pellentesque varius leo vel tincidunt. Duis massa dolor, maximus et ipsum commodo, sollicitudin semper ante.&nbsp;</p>",
            'id_admin' => User::factory(),
        ];
    }
}
