<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InvertedSyrupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 100; $i++) :
            DB::table('inverted_syrups')->insert([
                'syrup_id' => $i + 1,
                'user_id' => rand(1, 10),
                'blend_syrup_brix' => rand(5395, 5431)/100,
                'drink_brix' => rand(1086, 1105)/100,
                'blend_density' => rand(12490, 12540)/10000,
                'drink_density' => rand(10411, 10425)/10000,
                'drink_inverted_brix' => rand(1130, 1149)/100,
                'drink_acidity' => rand(1190, 1230)/100,
                'drink_ph' => rand(239, 252)/100,
                'target' => rand(1079, 1086)/100,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        endfor;
    }
}
