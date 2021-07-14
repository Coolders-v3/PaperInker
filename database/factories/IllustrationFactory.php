<?php

namespace Database\Factories;

use App\Models\Illustration;
use Illuminate\Database\Eloquent\Factories\Factory;

class IllustrationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Illustration::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'jobGenre' => $this->faker->name(),
            'title' => $this->faker->name(),
            'jobIllustration' => $this->faker->imageUrl(),
            'yearOfCreation' => $this->faker->year()
        ];
    }
}
