<?php

namespace Users\Database\Seeders;

use App\Models\UserWallet;
use Illuminate\Database\Seeder;

class UserWalletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app(\Users\Database\Factories\UserWalletFactory::class)->count(10)->create();
    }
}
