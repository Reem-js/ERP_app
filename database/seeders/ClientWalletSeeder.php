<?php

namespace Database\Seeders;

use App\Models\ClientWallet;
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

    }
}
