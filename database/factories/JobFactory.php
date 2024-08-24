<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => 1,
            'title' => fake()->jobTitle(),
            'salary' => fake()->numberBetween(10000, 100000),
            'location' => fake()->city(),
            'schedule' => fake()->randomElement(['full-time', 'part-time']),
            'url' => fake()->url(),
            'featured' => false,
        ];
    }
}
