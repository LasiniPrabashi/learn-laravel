<?php

namespace Database\Factories;

use App\Models\Employer;  // Add this import
use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\job>
 */
class jobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
         return [
                   'title' => $this->faker->jobTitle(),
                   'employer_id' => Employer::factory(),  // Reference the Employer factory
                   'salary' => '$5000 USD',
               ];
    }
}
