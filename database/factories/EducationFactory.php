<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Education;

class EducationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Education::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'lang' => $this->faker->word,
            'degree' => $this->faker->word,
            'from' => $this->faker->word,
            'to' => $this->faker->word,
            'CGPA' => $this->faker->randomFloat(0, 0, 9999999999.),
            'headline' => $this->faker->word,
            'school' => $this->faker->word,
            'country' => $this->faker->country,
            'city' => $this->faker->city,
            'hidden' => $this->faker->boolean,
            'user_id' => $this->faker->numberBetween(-10000, 10000),
        ];
    }
}
