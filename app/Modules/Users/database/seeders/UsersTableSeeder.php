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
        User::create([
            'name'=>'admin',
            'email'=>'admin@material.com',
            'password'=>Hash::make('secret'),
            'phone'=>'111111111',
            'slug'=>'super-admin'
        ]);
        app(\Users\Database\Factories\UserFactory::class)->count(10)->create();
    }
}
