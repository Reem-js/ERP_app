<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\ClientWallet;
use App\Models\ClientWalletTransaction;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientWalletTransactionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ClientWalletTransaction::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'client_id' => Client::all()->random()->id,
            'client_wallet_id'=>ClientWallet::all()->random()->id,
            'reason'=>$this->faker->sentence(10),
            'date'=>$this->faker->date('Y-m-d','now'),
            'client_wallet_transactionable_type'=>$this->faker->sentence(10),
            'client_wallet_transactionable_id' =>$this->faker->randomNumber(5, false),
            'transaction_date'=>$this->faker->date( 'Y-m-d','now'),
            'transaction_status'=>$this->faker->boolean(),
            'amount'=>$this->faker->randomNumber(5, false),
            'slug' => $this->faker->slug(),
        ];
    }
}
