<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Users\Database\Seeders\UsersTableSeeder;
use Users\Database\Seeders\UserWalletSeeder;
use Suppliers\Database\Seeders\SupplierSeeder;
use Suppliers\Database\Seeders\PriceListSeeder;
use Suppliers\Database\Seeders\SupplierWalletSeeder;
use Users\Database\Seeders\UserWalletTransactionSeeder;
use Suppliers\Database\Seeders\SupplierWalletTransactionSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(
            [
                UsersTableSeeder::class,
                UserWalletSeeder::class,
                UserWalletTransactionSeeder::class,
                ClientSeeder::class,
                ClientWalletSeeder::class,
                ClientWalletTransactionSeeder::class,
                SupplierSeeder::class,
                SupplierWalletSeeder::class,
                SupplierWalletTransactionSeeder::class,
                CategorySeeder::class,
                BrandSeeder::class,
                ProductSeeder::class,
                SaleSeeder::class,
                AppCapitalSeeder::class,
                ExpenseTypeSeeder::class,
                ExpenseSeeder::class,
                InstallementSeeder::class,
                NotificationSeeder::class,
                PartnerSeeder::class,
                PriceListSeeder::class,
                WebsiteSeeder::class
            ]
        );
    }
}
