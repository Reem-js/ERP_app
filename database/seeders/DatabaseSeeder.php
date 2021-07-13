<?php
namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Users\Database\Seeders\UsersTableSeeder;
use Users\Database\Seeders\UserWalletSeeder;
use Users\Database\Seeders\UserWalletTransactionSeeder;

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
        ]);
    }
}
