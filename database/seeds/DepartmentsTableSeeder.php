<?php

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['Business Communications', 'businesscommunications'],
            ['Cloud and Datacenters', 'cloud'],
            ['Data & IoT', 'data'],
            ['Digital Workspace', 'digitalworkspace'],
            ['Professional Services', 'services'],
            ['Strategie en Organisatie', 'organisatie'],
        ];

        foreach ($data as $d)
        {
            $dep = new \App\Department();

            $dep->name = $d[0];
            $dep->tag = $d[1];

            $dep->save();
        }
    }
}
