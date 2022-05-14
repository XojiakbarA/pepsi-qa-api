<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TorqueAngleAnalysisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) :
            $torques = array_combine(range(1, 30), array_map(function () { return rand(785, 830); }, range(1, 30)));
            $torques['removal_torque_analysis_id'] = $i + 1;

            DB::table('torque_angle_analyses')->insert($torques);
        endfor;
    }
}
