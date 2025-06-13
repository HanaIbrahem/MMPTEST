<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Branch;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Webinar>
 */
class WebinarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
             'title' => [
                'en' => $this->faker->sentence(6),
                'ku' => $this->faker->sentence(6), // Replace with real Kurdish later
            ],
            'content' => [
                'en' => $this->faker->paragraph(3),
                'ku' => $this->faker->paragraph(3),
            ],
            'date' => $this->faker->dateTimeBetween('-1 year', '+1 year')->format('Y-m-d'),
            'branch_id' => Branch::inRandomOrder()->first()?->id ?? Branch::factory(),
            'image' => 'uploads/webinars/sample.jpg', // or use Faker image
        ];
    }
}
