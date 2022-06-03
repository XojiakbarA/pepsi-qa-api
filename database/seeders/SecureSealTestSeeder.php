<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SecureSealTestSeeder extends Seeder
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
                array_push($values, ['id' => $j, '7_bar' => true, '10_bar' => true]);
            endfor;

            DB::table('secure_seal_tests')->insert([
                'syrup_id' => rand(1, 100),
                'user_id' => rand(1, 10),
                'line_id' => 1,
                'container_supplier_id' => 2,
                'format_id' => 2,
                'cap_id' => 1,
                'secure_seal_test_values' => json_encode($values),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        endfor;
    }
}
