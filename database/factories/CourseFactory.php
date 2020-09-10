<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence($nbWords = 3, $variableNbWords = true),
            'text' => $this->faker->text(35),
            'price' => $this->faker->numberBetween(10, 100),
            'image' => 'img_' . rand(1, 6) . '.jpg',
            'student_count' => $this->faker->numberBetween(500, 3000),
            'lesson_count' => $this->faker->numberBetween(4, 12),
            'week_count' => $this->faker->numberBetween(4, 20)
        ];
    }
}
