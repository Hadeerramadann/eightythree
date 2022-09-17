<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AddCampaignFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $factory->define(\App\Models\campaign::class,function(Faker $faker){
            return [
                "name" => $faker->name,
                
            ];

        });
        
    }
}
