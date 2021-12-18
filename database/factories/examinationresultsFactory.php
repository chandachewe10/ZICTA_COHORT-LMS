<?php

namespace Database\Factories;

use App\Models\examinationresults;
use Illuminate\Database\Eloquent\Factories\Factory;

class examinationresultsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = examinationresults::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Mathematics' => $this->faker->randomDigit(),
            'Biology' => $this->faker->randomDigit(),
            'Physics'=>now(),
            'Chemistry' => $this->faker->randomDigit(),
            'Additional Mathematics' => $this->faker->randomDigit(),
            'Pure Physics'=>now(),
            'Computer/IT' => $this->faker->randomDigit(),
            'email' => $this->faker->unique()->safeEmail(),
        ];
    }
}
