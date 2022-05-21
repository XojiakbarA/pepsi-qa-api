<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionWeightBodySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 5; $i++) :
            $tops = array_combine(range(1, 22), array_map(function () { return rand(1130, 1180)/100; }, range(1, 22)));
            $tops['section_weight_analysis_id'] = $i + 1;
            $tops['created_at'] = now();
            $tops['updated_at'] = now();

            DB::table('section_weight_bodies')->insert($tops);
        endfor;
    }
}
