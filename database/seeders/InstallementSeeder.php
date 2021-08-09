<?php

namespace Database\Seeders;

use App\Models\Installement;
use Illuminate\Database\Seeder;

class InstallementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Installement::factory(10)->create();
    }
}
