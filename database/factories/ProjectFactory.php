<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Project;

class ProjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Project::class;

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
            'desc' => $this->faker->text,
            'progress' => $this->faker->numberBetween(-10000, 10000),
            'source_code' => $this->faker->word,
            'icon' => $this->faker->word,
            'last_update' => $this->faker->date(),
            'hidden' => $this->faker->boolean,
            'user_id' => $this->faker->numberBetween(-10000, 10000),
            'sort' => $this->faker->numberBetween(-10000, 10000),
        ];
    }
}
