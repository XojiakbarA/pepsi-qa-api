<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionWeightBaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 5; $i++) :
            $tops = array_combine(range(1, 22), array_map(function () { return rand(940, 1010)/100; }, range(1, 22)));
            $tops['section_weight_analysis_id'] = $i + 1;
            $tops['created_at'] = now();
            $tops['updated_at'] = now();
            DB::table('section_weight_bases')->insert($tops);
        endfor;
    }
}
