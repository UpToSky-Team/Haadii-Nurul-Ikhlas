<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MaksudTujuan>
 */
class MaksudTujuanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_maksud_tujuan' => Str::uuid(),
            'maksud' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus accumsan dictum libero sit amet dictum. Praesent vitae commodo erat. Duis congue molestie augue. Proin sit amet ligula semper, varius neque placerat, semper arcu. Nunc pellentesque varius leo vel tincidunt. Duis massa dolor, maximus et ipsum commodo, sollicitudin semper ante.&nbsp;</p>",
            'tujuan' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus accumsan dictum libero sit amet dictum. Praesent vitae commodo erat. Duis congue molestie augue. Proin sit amet ligula semper, varius neque placerat, semper arcu. Nunc pellentesque varius leo vel tincidunt. Duis massa dolor, maximus et ipsum commodo, sollicitudin semper ante.&nbsp;</p>",
            'id_admin' => User::factory(),
        ];
    }
}
