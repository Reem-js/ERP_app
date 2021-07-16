<?php
namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Database\Seeders\SupplierSeeder;
use Database\Seeders\UsersTableSeeder;
use Database\Seeders\UserWalletSeeder;
use Stocks\Database\Seeders\TestSeeder;
use Database\Seeders\UserWalletTransactionSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
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
            TestSeeder::class,
        ]);
    }
}
