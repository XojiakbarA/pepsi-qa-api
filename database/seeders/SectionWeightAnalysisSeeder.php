<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionWeightAnalysisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 100; $i++) :

            $values = [];

            for ($j = 1; $j <= 22; $j++) :
                array_push($values, [
                    'id' => $j,
                    'top' => rand(1010, 1090)/100,
                    'label' => rand(1005, 1040)/100,
                    'body' => rand(1130, 1180)/100,
                    'base' => rand(940, 1010)/100
                ]);
            endfor;

            DB::table('section_weight_analyses')->insert([
                'syrup_id' => rand(1, 100),
                'user_id' => rand(1, 10),
                'line_id' => 1,
                'container_supplier_id' => 2,
                'format_id' => 2,
                'cap_id' => 1,
                'section_weight_values' => json_encode($values),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        endfor;
    }
}
