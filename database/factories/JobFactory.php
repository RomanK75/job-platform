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
            'employer_id' => \App\Models\Employer::factory(),
            'title' => fake()->jobTitle(),
            'salary' => fake()->randomElement(['$50.000 USD', '$60.000 USD', '$70.000 USD', '$80.000 USD', '$90.000 USD', '$100.000 USD']),
            'location' => fake()->city(),
            'schedule' => fake()->randomElement(['Full-time', 'Part-time', 'Contract', 'Internship']),
            'url' => fake()->url(),
            'featured' => false,
        ];
    }
}