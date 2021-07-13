<?php

namespace Database\Factories;

use App\Models\Illustrator;
use Illuminate\Database\Eloquent\Factories\Factory;

class IllustratorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Illustrator::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'personaldescription' => $this->faker->text(),
            'personalImage' => $this->faker->imageUrl()
        ];
    }
}
