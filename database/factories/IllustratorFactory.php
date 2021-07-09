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
            'name' => $this->faker->name(),
            'nickName' => $this->faker->name(),
            'email'=> $this->faker->unique()->safeEmail(),
            'password' =>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'confirmPassword' =>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'personaldescription' => $this->faker->text(),
            'personalImage' => $this->faker->imageUrl(),
            'jobGenre' => $this->faker->name(),
            'title' => $this->faker->name(),
            'jobIllustration' => $this->faker->imageUrl(),
            'yearOfCreation' => $this->faker->date(),
        ];
    }
}
