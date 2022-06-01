<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WaterAnalysisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 50; $i++) :
            DB::table('water_analyses')->insert([
                'user_id' => rand(1, 10),
                'place' => 'Rework ' . rand(1, 3),
                'hardness' => rand(150, 450)/100,
                'tds' => rand(310, 770)/100,
                'alkalinity' => rand(3, 10),
                'conductivity' => rand(500, 1250)/100,
                'turbidity' => rand(65, 72)/1000,
                'temperature' => rand(195, 215)/10,
                'ph' => rand(560, 690)/100,
                'cl' => rand(0, 3)/100,
                'mn' => rand(10, 18)/1000,
                'fe' => rand(0, 3)/100,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        endfor;
    }
}
