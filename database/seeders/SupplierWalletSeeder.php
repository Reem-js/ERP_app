<?php

namespace Database\Seeders;

use App\Models\SupplierWallet;
use Illuminate\Database\Seeder;

class SupplierWalletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        SupplierWallet::factory(10)->create();
    }
}
