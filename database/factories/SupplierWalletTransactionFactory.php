<?php

namespace Database\Factories;

use App\Models\Supplier;
use App\Models\SupplierWallet;
use App\Models\SupplierWalletTransaction;
use Illuminate\Database\Eloquent\Factories\Factory;

class SupplierWalletTransactionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SupplierWalletTransaction::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'supplier_id' => Supplier::all()->random()->id,
            'supplier_wallet_id'=>SupplierWallet::all()->random()->id,
            'reason'=>$this->faker->sentence(10),
            'date'=>$this->faker->date('Y-m-d','now'),
            'supplier_wallet_transactionable_type'=>$this->faker->sentence(10),
            'supplier_wallet_transactionable_id' =>$this->faker->randomNumber(5, false),
            'transaction_date'=>$this->faker->date( 'Y-m-d','now'),
            'transaction_status'=>$this->faker->boolean(),
            'amount'=>$this->faker->randomNumber(5, false),
            'slug' => $this->faker->slug(),
        ];
    }
}
