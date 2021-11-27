<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Attachment;

class AttachmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Attachment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(4),
            'link' => $this->faker->word,
            'attachable_id' => $this->faker->numberBetween(-10000, 10000),
            'attachable_type' => $this->faker->word,
            'type' => $this->faker->word,
        ];
    }
}
