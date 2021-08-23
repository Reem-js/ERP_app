<?php

namespace clients\Database\Seeders;

use clients\Models\ClientWallet;
use Illuminate\Database\Seeder;

class ClientWalletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ClientWallet::factory(10)->create();
        app(\Stocks\Database\Factories\ClientWalletFactory::class)->count(10)->create();


    }
}
