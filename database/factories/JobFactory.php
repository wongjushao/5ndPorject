<?php

namespace Database\Factories;

use App\Models\Job;
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
            'title' => $this->faker->jobTitle,
            'description' => $this->faker->paragraph(3,true),
            'salary' => $this->faker->numberBetween(60000, 180000),
            'location' => $this->faker->city,
            'category' => $this->faker->randomElement(Job::$category),
            'experience' => $this->faker->randomElement(Job::$experience),
        ];
    }
}
