<?php

namespace Database\Factories;

use App\Models\Text;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TextFactory extends Factory
{
  protected $model = Text::class;

  public function definition()
  {
    return [
      'genre' => $this->faker->name(),
      'title' => $this->faker->name(),
      'description' => $this->faker->name(),
      'year' => $this->faker->year(),
      'favorite' => $this->faker->boolean(),
    ];
  }
}
