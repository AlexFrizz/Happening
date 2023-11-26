<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Percorso del file immagine
//        $image_path1 = public_path('assets/project-1.jpg');
//        $image_path2 = public_path('assets/project-2.jpg');


        DB::table('events')->insert([[
            'user_id'       => '1',
            'image_name'    => 'project-1',
            'image'         => '',
            'title'         => 'Voglio tornare negli anni 90',
            'description'   => 'Correte a ripassare i grandi classici degli anni 90, non fatevi trovare impreparati! Pronti a scatenarvi?',
            'city'          => 'Ferrara',
            'address'       => 'Piazzetta S. Nicolò 6',
            'location'      => 'Arci Bolognesi',
            'date'          => Carbon::createFromFormat('d/m/Y', '20/11/2023')->format('Y-m-d'),
        ], [
            'user_id'       => '3',
            'image_name'    => 'project-1',
            'image'         => '',
            'title'         => 'tekno bunker',
            'description'   => 'Vi faremo saltare dal divertimento!',
            'city'          => 'Ferrara',
            'address'       => 'Piazzetta S. Nicolò 6',
            'location'      => 'Arci Bolognesi',
            'date'          => Carbon::createFromFormat('d/m/Y', '22/11/2023')->format('Y-m-d'),
        ]]);
    }
}
