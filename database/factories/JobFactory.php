<?php

namespace Database\Factories;

use App\Models\Employer;
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
            'employer_id' => Employer::factory(),
            'title' => fake()->sentence,
            'location' => fake()->randomElement(['Remote','Remote/Nairobi','New York City','Remote GMT+3']),
            'type' => fake()->randomElement(['Full Time','Part Time','Contract','Temporary','Intern','Other']),
            'url' => 'https://laracasts.com/work',
            'salary' => fake()->randomElement(['$50,000 USD','$120,000 USD','$70,000 - $90,000 USD','$140,000 USD'])
        ];
    }
}
