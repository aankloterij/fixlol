<?php

use Illuminate\Database\Seeder;

class NaudSeeder extends Seeder
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
                'subject' => 'Project I.Turn.IT',
                'body' => 'Hallo, samen met @pimpraat van I.Turn.IT werk ik aan een hackaton. Wij van KPNconsulting moeten een kwestie voorleggen en een praatje houden. Wie zou dit samen met mij willen doen? #communicatie #organisatie #education #Groningen'
                // 'Het was per ongeluk'
            ],
            [
                'subject' => 'Algemene bijeenkomst Data & IoT Groningen',
                'body' => 'Beste werknemers, 4 maart a.s. is er een jaarlijkse bijeenkomst Data & IoT Groningen. Naast drie sprekers zal er ook een borrel zijn. Over de tijden wordt u nog ingeligt. Eventueel tot dan! #Groningen'
            ],
            [
                'subject' => 'Digital Workspace Groningen workshops',
                'body' => 'Voor iedereen van de afdeling Digital Workspace Groningen is er de keuze om je te specialiceren. Elke 2 jaar organiseren wij als departement workshops. Blablabla. #Groningen'
            ],
            [
                'subject' => 'Probleem php-segmentationfault',
                'body' => 'Hallo, ik heb een probleem met blablabla in php. Zou iemand in groningen het me willen uitleggen. Zie bijlage voor probleem #Groningen'
            ],
            [
                'subject' => 'Vergaderruimte Groningen gezocht!!',
                'body' => 'Hallo, ik moet voor 20 man een vergaderruimte hebben voor volgende week vrijdag (84 septoper). .... #Groningen'
            ],
            [
                'subject' => 'HELP! Groningen',
                'body' => 'Help! Ik moet heel nodig naar het toilet, maar ik ken de weg hier nog niet zo goed... Kan iemand me helpen... PLS'
            ]


        ];

        foreach ($data as $newuser)
        {
            $fix = new App\Fix();

            $fix->user_id = $users->random()->id;
            $fix->body = $newuser['body'];
            $fix->subject = $newuser['body'];

            $fix->save();
        }

    }
}
