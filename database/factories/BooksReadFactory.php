<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


//   @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>

class BooksReadFactory extends Factory
{
    public function definition(): array
    {
        return [
            'BOOK_NAME' => fake()->streetName(),
            'AUTHOR_NAME' => fake()->userName()
        ];
    }
}