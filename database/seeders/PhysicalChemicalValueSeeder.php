<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhysicalChemicalValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($a = 0; $a < 100; $a++) :
            $user_id = rand(1, 10);
            DB::table('physical_chemical_values')->insert([
                'physical_chemical_analysis_id' => $a + 1,
                'user_id' => $user_id,
                'temperature' => rand(150, 189)/10,
                'pressure' => rand(490, 530)/10,
                'carbonate' => rand(420, 455)/100,
                'brix' => rand(1077, 1095)/100,
                'inverted_brix' => rand(1110, 1138)/100,
                'density' => rand(10412, 10425)/10000,
                'acidity' => rand(1155, 1195)/100,
                'ph' => rand(242, 255)/100,
                'fullness' => rand(1497, 1505),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            for ($i = 0; $i < 3; $i++) :
                DB::table('physical_chemical_values')->insert([
                    'physical_chemical_analysis_id' => $a + 1,
                    'user_id' => $user_id,
                    'temperature' => rand(150, 189)/10,
                    'pressure' => rand(490, 530)/10,
                    'carbonate' => rand(420, 455)/100,
                    'brix' => rand(1077, 1095)/100,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            endfor;

            DB::table('physical_chemical_values')->insert([
                'physical_chemical_analysis_id' => $a + 1,
                'user_id' => $user_id,
                'temperature' => rand(150, 189)/10,
                'pressure' => rand(490, 530)/10,
                'carbonate' => rand(420, 455)/100,
                'brix' => rand(1077, 1095)/100,
                'inverted_brix' => rand(1110, 1138)/100,
                'density' => rand(10412, 10425)/10000,
                'acidity' => rand(1155, 1195)/100,
                'ph' => rand(242, 255)/100,
                'fullness' => rand(1497, 1505),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            for ($i = 0; $i < 3; $i++) :
                DB::table('physical_chemical_values')->insert([
                    'physical_chemical_analysis_id' => $a + 1,
                    'user_id' => $user_id,
                    'temperature' => rand(150, 189)/10,
                    'pressure' => rand(490, 530)/10,
                    'carbonate' => rand(420, 455)/100,
                    'brix' => rand(1077, 1095)/100,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            endfor;

            DB::table('physical_chemical_values')->insert([
                'physical_chemical_analysis_id' => $a + 1,
                'user_id' => $user_id,
                'temperature' => rand(150, 189)/10,
                'pressure' => rand(490, 530)/10,
                'carbonate' => rand(420, 455)/100,
                'brix' => rand(1077, 1095)/100,
                'inverted_brix' => rand(1110, 1138)/100,
                'density' => rand(10412, 10425)/10000,
                'acidity' => rand(1155, 1195)/100,
                'ph' => rand(242, 255)/100,
                'fullness' => rand(1497, 1505),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        endfor;
    }
}
