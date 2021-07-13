<?php

namespace Database\Factories;

use App\Models\Text;
use Illuminate\Database\Eloquent\Factories\Factory;

class TextFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Text::class;

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
            'jobText' => $this->faker->text(),
            'yearOfCreation' => $this->faker->date(),  
        ];
    }
}
