<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'username' => 'ziggolover69',
        	'name' => 'Meneer Katerberg',
        	'email' => 'meneerkaterberg@gmail.com',
        	'password' => bcrypt('olyfantje123'),
        ]);
    }
}
