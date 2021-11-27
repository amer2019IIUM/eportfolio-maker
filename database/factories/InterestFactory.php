<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Interest;

class InterestFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Interest::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'lang' => $this->faker->word,
            'title' => $this->faker->sentence(4),
            'user_id' => $this->faker->numberBetween(-10000, 10000),
            'sort' => $this->faker->numberBetween(-10000, 10000),
        ];
    }
}
