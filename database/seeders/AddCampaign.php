<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AddCampaign extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\campaign::factory(10)->create();
    }
}
