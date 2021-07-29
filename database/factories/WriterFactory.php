<?php

namespace Database\Factories;

use App\Models\Writer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class WriterFactory extends Factory
{
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = Writer::class;

  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    return [
      'personaldescription' => $this->faker->text(),
      'personalImage' => $this->faker->imageUrl(),
    ];
  }
}
