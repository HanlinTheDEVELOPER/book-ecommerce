<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AdditionalBookinfo>
 */
class AdditionalBookinfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // 'book_id' => Book::factory(),
            'page' => fake()->numberBetween(200, 600),
            'language' => fake()->languageCode(),
            'weight' => fake()->numberBetween(1, 10)
        ];
    }
}