<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'       =>   $this->faker->word,
            'slug'        =>   $this->faker->unique()->slug,
            'body'        =>   $this->faker->sentences(10, true),
            'status'      =>   $this->faker->randomElement(['active', 'inactive']),
            'image'       =>   $this->faker->imageUrl('400', '200')
        ];
    }
}
