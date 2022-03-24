<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'author_id' => \App\Models\User::factory(),
            'serie_id' => \App\Models\Serie::factory(),
            'content' => $this->faker->paragraph(10, true),

        ];
    }
}
