<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'body' => $this->faker->paragraph,
            'image' => $this->faker->image,
            'upVotes' => (string)$this->faker->numerify,
            'downVotes' => (string)$this->faker->numerify,
            'category_id' => (string)'1',
            'created_by_user' => (string)'1',
        ];
    }
}
