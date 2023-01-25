<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'project_number' => $this->faker->randomNumber(),
            'name' => $this->faker->name,
            'location' => $this->faker->text(10),
            'client_id' => $this->faker->numberBetween(1, 5),
        ];
    }
}
