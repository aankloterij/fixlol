<?php

use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [

        	['Groningen', 'groningen'],
        	['Zoetermeer', 'zoetermeer'],
        	['Apeldoorn', 'apeldoorn'],
        ];

        foreach ($data as $d)
        {
        	$location = new \App\Location();

        	$location->name = $d[0];
        	$location->tag = $d[1];

        	$location->save();
        }
    }
}
