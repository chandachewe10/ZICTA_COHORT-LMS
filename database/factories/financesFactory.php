<?php

namespace Database\Factories;

use App\Models\finances;
use Illuminate\Database\Eloquent\Factories\Factory;

class financesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = finances::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'due'=>now(),
            'amount' => $this->faker->randomDigit(),
        ];
    }
}
