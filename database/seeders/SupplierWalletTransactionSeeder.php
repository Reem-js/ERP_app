<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SupplierWalletTransaction;

class SupplierWalletTransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        SupplierWalletTransaction::factory(10)->create();
    }
}
