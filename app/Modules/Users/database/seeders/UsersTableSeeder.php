<?php
namespace Users\Database\Seeders;

use Users\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app(\Users\Database\Factories\UserFactory::class)->count(10)->create();
    }
}
