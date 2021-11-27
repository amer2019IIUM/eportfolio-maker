<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'email' => $this->faker->safeEmail,
            'linkedin' => $this->faker->word,
            'twitter' => $this->faker->word,
            'facebook' => $this->faker->word,
            'github' => $this->faker->word,
            'phone_no' => $this->faker->word,
        ];
    }
}
