<?php

namespace Database\Factories;

use App\Models\Expense;
use App\Models\ExpenseType;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExpenseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Expense::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date' => $this->faker->date(),
            'value' => $this->faker->randomFloat(2, 1000, 2000),
            'expense_type_id' => ExpenseType::all()->random()->id
        ];
    }
}
