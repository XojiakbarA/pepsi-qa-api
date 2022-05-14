<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductAnalysisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 100; $i++) :
            DB::table('product_analyses')->insert([
                'syrup_id' => $i + 1,
                'line_id' => 1,
                'container_supplier_id' => 1,
                'format_id' => 2,
                'cap_id' => 1
            ]);
        endfor;
    }
}
