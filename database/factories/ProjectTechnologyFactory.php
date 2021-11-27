<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\ProjectTechnology;

class ProjectTechnologyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProjectTechnology::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'project_id' => $this->faker->numberBetween(-10000, 10000),
            'technology_id' => $this->faker->numberBetween(-10000, 10000),
        ];
    }
}
