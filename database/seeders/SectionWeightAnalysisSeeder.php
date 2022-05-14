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
        for ($i = 0; $i < 5; $i++) :
            DB::table('section_weight_analyses')->insert([
                'product_analysis_id' => $i + 1,
                'user_id' => $i + 1
            ]);
        endfor;
    }
}
