<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\campaign;

class updateCampaignTest extends TestCase
{
    /**
     * A basic feature test example.
     * @test
     * @return void
     */
    public function update_campain()
    {

        $campaign = campaign::first();
        $this->post(
            route('update', $campaign->id),
            [
                'name' => 'campaign update',
            ],
        );
       
          $response = $this->post('/update/{1}');
        
        $response = $this->assertEquals('campaign update', $campaign->name);
      
    }
}
