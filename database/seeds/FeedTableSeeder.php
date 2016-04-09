<?php

use Illuminate\Database\Seeder;

use Faker\Factory;

class FeedTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\User::first();

        $faker = Factory::create();

        $catagories = ['#communication', '#ioT', '#bussinesscommunications', '#strategie', '#organisatie', '#professionalservices', '#data', '#digitalworkspaces', '#cloud', '#datacenters'];

        for ($i = 0; $i < 100; $i++)
        {
        	$fix = new App\Fix();

            $fix->user_id = $user->id;
            $fix->body = $faker->sentences(8, 4) . ' ' . $catagories[array_rand($catagories)];
            $fix->subject = $faker->sentence(4);

            $fix->save();
        }
    }
}
