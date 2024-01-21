<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use function Laravel\Prompts\table;

class ParticipantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('participants')->insert([[
          'user_id'               => '1',
          'event_id'              => '1',
          'registration_date'     => Carbon::createFromFormat('d/m/Y', '15/11/2023')->format('Y-m-d'),
        ], [
          'user_id'               => '3',
          'event_id'              => '2',
          'registration_date'     => Carbon::createFromFormat('d/m/Y', '17/11/2023')->format('Y-m-d'),
        ]]);
    }
}
