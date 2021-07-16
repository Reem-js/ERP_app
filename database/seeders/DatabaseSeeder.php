<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
