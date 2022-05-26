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

            $values = [
                ['lb' => rand(13, 16), 'angle' => rand(790, 820)],
                ['lb' => rand(13, 16), 'angle' => rand(790, 820)],
                ['lb' => rand(13, 16), 'angle' => rand(790, 820)],
                ['lb' => rand(13, 16), 'angle' => rand(790, 820)],
                ['lb' => rand(13, 16), 'angle' => rand(790, 820)],
                ['lb' => rand(13, 16), 'angle' => rand(790, 820)],
                ['lb' => rand(13, 16), 'angle' => rand(790, 820)],
                ['lb' => rand(13, 16), 'angle' => rand(790, 820)],
                ['lb' => rand(13, 16), 'angle' => rand(790, 820)],
                ['lb' => rand(13, 16), 'angle' => rand(790, 820)],
                ['lb' => rand(13, 16), 'angle' => rand(790, 820)],
                ['lb' => rand(13, 16), 'angle' => rand(790, 820)],
                ['lb' => rand(13, 16), 'angle' => rand(790, 820)],
                ['lb' => rand(13, 16), 'angle' => rand(790, 820)],
                ['lb' => rand(13, 16), 'angle' => rand(790, 820)],
            ];

            DB::table('removal_torque_analyses')->insert([
                'syrup_id' => $i + 1,
                'user_id' => $i + 1,
                'line_id' => 1,
                'container_supplier_id' => 2,
                'format_id' => 2,
                'cap_id' => 1,
                'removal_torque_values' => json_encode($values),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        endfor;
    }
}
