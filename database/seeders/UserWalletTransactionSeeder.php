<?php

namespace Database\Seeders;

use App\Models\UserWalletTransaction;
use Illuminate\Database\Seeder;

class UserWalletTransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        UserWalletTransaction::factory(10)->create();

    }
}
