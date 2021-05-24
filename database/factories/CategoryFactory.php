<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'        =>   $this->faker->word,
            'slug'         =>   $this->faker->unique()->slug,
            'status'       =>   $this->faker->randomElement(['active', 'inactive']),
            'image'        =>   $this->faker->imageUrl('400', '200'),
            'description'  =>   $this->faker->sentences(6, true)
        ];
    }
}