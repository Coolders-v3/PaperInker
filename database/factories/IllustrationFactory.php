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
			'jobGenre' => $this->faker->name,
			'title' => $this->faker->name,
			'jobIllustration' => $this->faker->name,
			'yearOfCreation' => $this->faker->date,
/* 			'illustrator_id' => $this->faker->name,
 */        ];
    }
}
