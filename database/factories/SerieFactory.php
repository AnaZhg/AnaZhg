<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SerieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence(6, true);
        return [
            'author_id' => \App\Models\User::factory(),
            'title' => $title,
            'content' => $this->faker->paragraph(10, true),
            'acteurs' => $this->faker->paragraph(10, true),
            'url' => str_replace(' ', '-',$title),
            'tags' => $this->faker->words(3, true),
        ];
    }
}
