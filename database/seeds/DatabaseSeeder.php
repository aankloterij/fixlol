<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LocationsTableSeeder::class);
        $this->call(DepartmentsTableSeeder::class);

        $this->call(UsersTableSeeder::class);
        // $this->call(FeedTableSeeder::class);
        // Enable this for lolz
        $this->call(NaudSeeder::class);
    }
}
