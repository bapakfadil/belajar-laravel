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
            'user_id' => mt_rand(1,5), // modify this line if you're making less than 5 user account in database seeder
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(),
            // Example of use using standard faker paragraph
            //'postBody' => $this->faker->paragraph(mt_rand(5,10))

            // Example of use using implode()
            //'postBody' => '<p>' . implode('</p><p>', $this->faker->paragraphs(mt_rand(5,10))) . '</p>',

            // Example of use using map()
            'postBody' => collect($this->faker->paragraphs(mt_rand(5,10)))->map(fn($p) => "<p>$p</p>")->implode(''),


        ];
    }
}
