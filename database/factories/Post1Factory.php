<?php

namespace Database\Factories;

use App\Models\Post1;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class Post1Factory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post1::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'asal' => $this->faker->word,
            
        ];
    }
}
