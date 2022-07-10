<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NonCarbonatedAnalysisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($a = 100; $a < 300; $a++) :
            $user_id = rand(1, 10);
            $line_id = 4;
            $container_supplier_id = 3;
            $format_id = rand(2, 4);
            $cap_id = 2;
            DB::table('non_carbonated_analyses')->insert([
                'syrup_id' => $a + 1,
                'line_id' => $line_id,
                'container_supplier_id' => $container_supplier_id,
                'format_id' => $format_id,
                'cap_id' => $cap_id,
                'user_id' => $user_id,
                'temperature_after_filling' => rand(850, 885)/10,
                'temperature_before_tilter' => rand(820, 840)/10,
                'temperature_after_cooling' => rand(260, 350)/10,
                'pressure_after_filling' => rand(20, 14)/10,
                'pressure_after_cooling' => rand(2, 10)/10,
                'brix_after_filling' => rand(790, 830)/100,
                'brix_after_cooling' => rand(780, 820)/100,
                'turbidity' => rand(90, 160)/10,
                'density' => rand(10028, 10031)/10000,
                'acidity' => rand(175, 210)/100,
                'ph' => rand(310, 320)/100,
                'fullness' => rand(990, 1005),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            for ($i = 0; $i < 3; $i++) :
                DB::table('non_carbonated_analyses')->insert([
                    'syrup_id' => $a + 1,
                    'line_id' => $line_id,
                    'container_supplier_id' => $container_supplier_id,
                    'format_id' => $format_id,
                    'cap_id' => $cap_id,
                    'user_id' => $user_id,
                    'temperature_after_filling' => rand(850, 885)/10,
                    'temperature_before_tilter' => rand(820, 840)/10,
                    'temperature_after_cooling' => rand(260, 350)/10,
                    'pressure_after_filling' => rand(20, 14)/10,
                    'pressure_after_cooling' => rand(2, 10)/10,
                    'brix_after_filling' => rand(790, 830)/100,
                    'brix_after_cooling' => rand(780, 820)/100,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            endfor;

            DB::table('non_carbonated_analyses')->insert([
                'syrup_id' => $a + 1,
                'line_id' => $line_id,
                'container_supplier_id' => $container_supplier_id,
                'format_id' => $format_id,
                'cap_id' => $cap_id,
                'user_id' => $user_id,
                'temperature_after_filling' => rand(850, 885)/10,
                'temperature_before_tilter' => rand(820, 840)/10,
                'temperature_after_cooling' => rand(260, 350)/10,
                'pressure_after_filling' => rand(20, 14)/10,
                'pressure_after_cooling' => rand(2, 10)/10,
                'brix_after_filling' => rand(790, 830)/100,
                'brix_after_cooling' => rand(780, 820)/100,
                'turbidity' => rand(90, 160)/10,
                'density' => rand(10028, 10031)/10000,
                'acidity' => rand(175, 210)/100,
                'ph' => rand(310, 320)/100,
                'fullness' => rand(990, 1005),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            for ($i = 0; $i < 3; $i++) :
                DB::table('non_carbonated_analyses')->insert([
                    'syrup_id' => $a + 1,
                    'line_id' => $line_id,
                    'container_supplier_id' => $container_supplier_id,
                    'format_id' => $format_id,
                    'cap_id' => $cap_id,
                    'user_id' => $user_id,
                    'temperature_after_filling' => rand(850, 885)/10,
                    'temperature_before_tilter' => rand(820, 840)/10,
                    'temperature_after_cooling' => rand(260, 350)/10,
                    'pressure_after_filling' => rand(20, 14)/10,
                    'pressure_after_cooling' => rand(2, 10)/10,
                    'brix_after_filling' => rand(790, 830)/100,
                    'brix_after_cooling' => rand(780, 820)/100,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            endfor;

            DB::table('non_carbonated_analyses')->insert([
                'syrup_id' => $a + 1,
                'line_id' => $line_id,
                'container_supplier_id' => $container_supplier_id,
                'format_id' => $format_id,
                'cap_id' => $cap_id,
                'user_id' => $user_id,
                'user_id' => $user_id,
                'temperature_after_filling' => rand(850, 885)/10,
                'temperature_before_tilter' => rand(820, 840)/10,
                'temperature_after_cooling' => rand(260, 350)/10,
                'pressure_after_filling' => rand(20, 14)/10,
                'pressure_after_cooling' => rand(2, 10)/10,
                'brix_after_filling' => rand(790, 830)/100,
                'brix_after_cooling' => rand(780, 820)/100,
                'turbidity' => rand(90, 160)/10,
                'density' => rand(10028, 10031)/10000,
                'acidity' => rand(175, 210)/100,
                'ph' => rand(310, 320)/100,
                'fullness' => rand(990, 1005),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        endfor;
    }
}
