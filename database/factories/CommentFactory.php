<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $check = (random_int(100000, 999999) % 2) == 0;


        if ($check) {
            return [
                "post_id" => Post::get()->random()->id,
                "comment" => $this->faker->paragraph(1),
                "user_id" => User::get()->random()->id,
            ];
        }else{
            return [
                "post_id" => Post::get()->random()->id,
                "name" => $this->faker->name,
                "email" => $this->faker->email,
                "website" => $this->faker->url,
                "comment" => $this->faker->paragraph(1),
            ];
        }

    }
}
