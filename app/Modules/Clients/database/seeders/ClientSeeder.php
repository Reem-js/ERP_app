<?php

namespace clients\Database\Seeders;

use clients\Models\Client;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // Client::factory(10)->create();
        app(\Stocks\Database\Factories\ClientFactory::class)->count(10)->create();

    }
}
