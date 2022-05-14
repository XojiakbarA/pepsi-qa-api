<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RemovalTorqueAngleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) :
            $lbs = array_combine(range(1, 30), array_map(function () { return rand(775, 840); }, range(1, 30)));
            $lbs['removal_torque_analysis_id'] = $i + 1;

            DB::table('removal_torque_angles')->insert($lbs);
        endfor;
    }
}
