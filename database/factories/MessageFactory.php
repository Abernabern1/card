<?php

namespace Database\Factories;

use App\Models\Message;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MessageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Message::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'subject' => $this->faker->sentence($nbWords = 3, $variableNbWords = true),
            'email' => $this->faker->safeEmail,
            'text' => $this->faker->sentence($nbWords = 15, $variableNbWords = true)
        ];
    }
}
