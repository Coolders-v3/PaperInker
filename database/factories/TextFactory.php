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
<<<<<<< HEAD
			'year' => $this->faker->year()
      ];
=======
			'year' => $this->faker->year(),
			
        ];
>>>>>>> b2eec397459cda4c7d92eca0061b7b8d1f817670
    }
}
