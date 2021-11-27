<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Experience;

class ExperienceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Experience::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'lang' => $this->faker->word,
            'company' => $this->faker->company,
            'from' => $this->faker->date(),
            'to' => $this->faker->date(),
            'job_title' => $this->faker->word,
            'core_duties' => '{}',
            'location' => $this->faker->text,
            'further_details' => $this->faker->text,
            'user_id' => $this->faker->numberBetween(-10000, 10000),
        ];
    }
}
