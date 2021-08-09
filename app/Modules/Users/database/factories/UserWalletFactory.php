<?php

namespace Users\Database\Factories;

use Users\Models\User;
use Users\Models\UserWallet;
use Users\Models\UserWalletTrans;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserWalletFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserWallet::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'user_id' => User::all()->random()->id,
            'total_paid' => $this->faker->randomNumber(5,true),
            'total_pending'=>$this->faker->randomNumber(5,false),
            'status'=>$this->faker->boolean(),
            'number_of_transaction'=>'5',
            'total_value'=>$this->faker->randomNumber(5,false),
            'slug' => $this->faker->slug(),
        ];
    }
}
