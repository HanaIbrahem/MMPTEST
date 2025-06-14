<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>[
                'en'=>'d',
                'ku'=>'s'
            ],
              'content'=>[
                'en'=>'ddd',
                'ku'=>'ssss'
            ]
        ];
    }
}
