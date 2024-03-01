<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'postTitle' => $this->faker->sentence(mt_rand(2,6)),
            'category_id' => mt_rand(1,3),
            'user_id' => mt_rand(1,5),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(),
            'postBody' => $this->faker->paragraph(mt_rand(5,10))
        ];
    }
}
