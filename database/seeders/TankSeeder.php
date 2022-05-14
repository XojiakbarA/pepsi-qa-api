<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 15; $i++) :
            DB::table('tanks')->insert([
                'factory_id' => 1,
                'number' => $i,
                'volume' => 14000
            ]);
        endfor;

        for ($i = 1; $i <= 11; $i++) :
            DB::table('tanks')->insert([
                'factory_id' => 2,
                'number' => $i,
                'volume' => 28000
            ]);
        endfor;

        for ($i = 1; $i <= 7; $i++) :
            DB::table('tanks')->insert([
                'factory_id' => 2,
                'number' => 'K' . $i,
                'volume' => 42000
            ]);
        endfor;
    }
}
