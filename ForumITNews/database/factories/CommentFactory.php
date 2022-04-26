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
            'body'=> $this->faker->text,
            'post_id'=>(string)'2',
            'user_id'=>(string)'1',
            'reply_to'=>(string)'1',
        ];
    }
}
