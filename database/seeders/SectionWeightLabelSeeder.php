<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionWeightLabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 5; $i++) :
            $tops = array_combine(range(1, 22), array_map(function () { return rand(1005, 1040)/100; }, range(1, 22)));
            $tops['section_weight_analysis_id'] = $i + 1;
            DB::table('section_weight_labels')->insert($tops);
        endfor;
    }
}
