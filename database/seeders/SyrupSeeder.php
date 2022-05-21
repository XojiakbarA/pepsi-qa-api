<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SyrupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 230; $i++) :
            DB::table('syrups')->insert([
                'tank_id' => random_int(1, 15),
                'product_id' => 1,
                'user_id' => rand(1, 10),
                'volume' => 13600,
                'sugar_syrup_brix' => rand(6278, 6311)/100,
                'blend_syrup_brix' => rand(5359, 5397)/100,
                'drink_brix' => rand(1070, 1091)/100,
                'blend_density' => rand(12475, 12510)/10000,
                'drink_density' => rand(10411, 10419)/10000,
                'drink_inverted_brix' => rand(1120, 1149)/100,
                'drink_acidity' => rand(1190, 1230)/100,
                'drink_ph' => rand(239, 252)/100,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        endfor;

        for ($i = 0; $i < 220; $i++) :
            DB::table('syrups')->insert([
                'tank_id' => random_int(16, 26),
                'product_id' => 1,
                'user_id' => rand(1, 10),
                'volume' => 27200,
                'sugar_syrup_brix' => rand(6278, 6311)/100,
                'blend_syrup_brix' => rand(5359, 5397)/100,
                'drink_brix' => rand(1070, 1091)/100,
                'blend_density' => rand(12475, 12510)/10000,
                'drink_density' => rand(10411, 10419)/10000,
                'drink_inverted_brix' => rand(1120, 1149)/100,
                'drink_acidity' => rand(1190, 1230)/100,
                'drink_ph' => rand(239, 252)/100,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        endfor;

        for ($i = 0; $i < 210; $i++) :
            DB::table('syrups')->insert([
                'tank_id' => random_int(27, 33),
                'product_id' => 1,
                'user_id' => rand(1, 10),
                'volume' => 40800,
                'sugar_syrup_brix' => rand(6278, 6311)/100,
                'blend_syrup_brix' => rand(5359, 5397)/100,
                'drink_brix' => rand(1070, 1091)/100,
                'blend_density' => rand(12475, 12510)/10000,
                'drink_density' => rand(10411, 10419)/10000,
                'drink_inverted_brix' => rand(1120, 1149)/100,
                'drink_acidity' => rand(1190, 1230)/100,
                'drink_ph' => rand(239, 252)/100,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        endfor;
    }
}
