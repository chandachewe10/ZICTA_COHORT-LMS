<?php

namespace Database\Factories;

use App\Models\announcements;
use Illuminate\Database\Eloquent\Factories\Factory;

class announcementsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = announcements::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'target' => $this->faker->text(10),
            'notice' =>$this->faker->sentence(200),
        ];
    }
}
