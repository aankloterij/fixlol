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
        $data = [
            [
                'username' => 'sibren',
                'name' => 'Sibren Talens',
                'email' => 'sibrentalens@gmail.com',
            ], [
                'username' => 'ziggolover69',
                'name' => 'Meneer Katerberg',
                'email' => 'meneerkaterberg@gmail.com',
            ], [
                'username' => 'arjan',
                'name' => 'arjandeinktvis',
                'email' => 'arjandeinktvis@gmail.com',
            ], [
                'username' => 'skimmet',
                'name' => 'Max Verbeek',
                'email' => 'm4xv3rb33k@gmail.com',
            ]

        ];

        $i = 0;

        foreach ($data as $newuser)
        {
            $user = new App\User();

            $user->username = $newuser['username'];
            $user->name = $newuser['name'];
            $user->email = $newuser['email'];
            $user->password = bcrypt('grijzelijntjes');
            $user->department_id = ++$i;
            $user->location_id = $i % 3;

            $user->save();
        }

    }
}
