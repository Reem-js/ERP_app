<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ClientWalletTransaction;

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
    }
}
