<?php

namespace Database\Factories;

use App\Models\Data;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExpensesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Data::class;
    /**  
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category' => $this->faker->randomElement(['Food','Beverage','Merchandise', 'Marketing','Utilities','Repairs and Maintenance', 'Others']),
            'name' => $this->faker->word,
            'amount' => $this->faker->numberBetween($min = 1, $max =20),
            'date' => $this->faker->dateTimeBetween('-12 months', '+1 months'),
        ];
    }
}
