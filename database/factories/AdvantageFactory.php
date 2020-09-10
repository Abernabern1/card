<?php

namespace Database\Factories;

use App\Models\Advantage;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AdvantageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Advantage::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence($nbWords = 4, $variableNbWords = true),
            'icon' => $this->faker->randomElement(['icon-university', 'icon-graduation-cap'])
        ];
    }
}
