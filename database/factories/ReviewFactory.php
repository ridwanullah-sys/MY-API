<?php

namespace Database\Factories;

use App\Models\review;
use App\Models\product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ReviewFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = review::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_id' => function(){
                return product::all()->random();
            },
            'costomer' => $this->faker->name,
            'review' => $this->faker->paragraph,
            'star'=> $this->faker->numberbetween(0,5)
        ];
    }
}
