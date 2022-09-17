<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\campaign;

class AddCampaignTest extends TestCase
{
    /**
     * A basic feature test example.
     * @test
     * @return void
     */
    public function test_add_campaign()
    {
        campaign::insert([
            "name" =>"comp1",
            "from"=>"2022-09-16",
            "to"=> "2022-09-22",
            "total"=> "20.5",
            "daily_budget"=> "80.5",
        ]);
        // $campaign = campaign::factory()->create();
        $response = $this->get('/add');

        $response->assertStatus(405);
                  
    }
}
 