<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RemovalTorqueAnalysisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) :
            DB::table('removal_torque_analyses')->insert([
                'product_analysis_id' => $i + 1,
                'user_id' => $i + 1
            ]);
        endfor;
    }
}
