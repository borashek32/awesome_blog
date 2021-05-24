<?php

namespace Database\Factories;

use App\Models\CategoryPost;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryPostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CategoryPost::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id'     =>   $this->faker->numberBetween(1,5),
            'post_id'         =>   $this->faker->numberBetween(1,50),
        ];
    }
}
