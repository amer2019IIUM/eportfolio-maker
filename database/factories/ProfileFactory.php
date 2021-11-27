<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Profile;

class ProfileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Profile::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'lang' => $this->faker->word,
            'user_id' => $this->faker->numberBetween(-10000, 10000),
            'country' => $this->faker->country,
            'city' => $this->faker->city,
            'nationality' => $this->faker->word,
            'summary' => $this->faker->text,
            'headline' => $this->faker->word,
        ];
    }
}
