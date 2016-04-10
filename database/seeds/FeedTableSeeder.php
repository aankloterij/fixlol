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
        $users = App\User::all();

        $faker = Factory::create();

        $catagories = ['#communication', '#ioT', '#bussinesscommunications', '#strategie', '#organisatie', '#professionalservices', '#data', '#digitalworkspaces', '#cloud', '#datacenters'];

        for ($i = 0; $i < 100; $i++)
        {
        	$fix = new App\Fix();

            $fix->user_id = $users->random()->id;
            $fix->body = '@' . $users->random()->username . ' ' . $faker->sentence() . ' ' . $this->rand($catagories);
            $fix->subject = $faker->sentence(4);

            $fix->save();
        }
    }

    protected function rand(array $source)
    {
        return $source[array_rand($source)];
    }
}
