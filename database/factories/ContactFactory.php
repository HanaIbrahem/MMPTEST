<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
             'firstname' => $this->faker->firstName,
        'lastname' => $this->faker->lastName,
        'email' => $this->faker->safeEmail,
        'message' => $this->faker->paragraph,
        ];
    }
}
