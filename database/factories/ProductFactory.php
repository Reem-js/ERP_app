<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name('male'),
            'code' => $this->faker->name(),
            'desc' => $this->faker->sentence(),
            'primary_purchase_price' => $this->faker->randomFloat(2, 0, 10000),
            'primary_sale_price' => $this->faker->randomFloat(2, 0, 10000), //randomFloat($decimals, $min, $max
            'category_id' => $this->faker->randomDigitNotNull(),
            'brand_id' => $this->faker->randomDigitNotNull(),
            'slug' => $this->faker->slug(),
        ];
    }
}
