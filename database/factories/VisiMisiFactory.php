<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\VisiMisi>
 */
class VisiMisiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_visi_misi' => Str::uuid(),
            'visi' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus accumsan dictum libero sit amet dictum. Praesent vitae commodo erat. Duis congue molestie augue. Proin sit amet ligula semper, varius neque placerat, semper arcu. Nunc pellentesque varius leo vel tincidunt. Duis massa dolor, maximus et ipsum commodo, sollicitudin semper ante.&nbsp;</p>",
            'misi' => "<ol><li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.&nbsp;</li><li>Vivamus accumsan dictum libero sit amet dictum. Praesent vitae commodo erat. Duis congue molestie augue.&nbsp;</li><li>Proin sit amet ligula semper, varius neque placerat, semper arcu. Nunc pellentesque varius leo vel tincidunt.&nbsp;</li></ol>",
            'id_admin' => User::factory(),
        ];
    }
}
