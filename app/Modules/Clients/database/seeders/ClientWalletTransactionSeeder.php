<?php

namespace clients\Database\Seeders;

use Illuminate\Database\Seeder;
use clients\Models\ClientWalletTransaction;

class ClientWalletTransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ClientWalletTransaction::factory(10)->create();
        app(\Stocks\Database\Factories\ClientWalletTransactionFactory::class)->count(10)->create();
    }
}
