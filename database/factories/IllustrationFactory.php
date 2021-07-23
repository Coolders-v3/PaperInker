<?php

namespace Database\Factories;

use App\Models\Illustration;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class IllustrationFactory extends Factory
{
    protected $model = Illustration::class;

    public function definition()
    {
        return [
			'genre' => $this->faker->name(),
			'title' => $this->faker->name(),
			'description' => $this->faker->name(),
			'year' => $this->faker->year(),
      'favorite'=>$this->faker->boolean(),
      ];
    }
}
