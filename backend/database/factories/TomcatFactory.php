<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tomcat>
 */
class TomcatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'species_id' => $this->faker->numberBetween(1, 9),
            'old' => $this->faker->numberBetween(3, 7),
            'name' => $this->faker->name(),
            'img' => 'none'
        ];
    }
}
