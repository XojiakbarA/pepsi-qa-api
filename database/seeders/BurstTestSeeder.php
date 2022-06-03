<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BurstTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 500; $i++) :

            $values = [];

            for ($j = 1; $j <= 15; $j++) :
                array_push($values, ['id' => $j, '135_psi' => true, 'psi_of_burst' => rand(189, 198)]);
            endfor;

            DB::table('burst_tests')->insert([
                'syrup_id' => rand(1, 100),
                'user_id' => rand(1, 10),
                'line_id' => 1,
                'container_supplier_id' => 2,
                'format_id' => 2,
                'cap_id' => 1,
                'burst_test_values' => json_encode($values),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        endfor;
    }
}
