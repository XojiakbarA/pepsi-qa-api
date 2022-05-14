<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lines = [
        ['name' => 'Krones', 'container_id' => 2, 'speed' => 44000],
        ['name' => 'Krones', 'container_id' => 1, 'speed' => 40000],
        ['name' => 'Krones', 'container_id' => 2, 'speed' => 20000],
        ['name' => 'KHS', 'container_id' => 2, 'speed' => 28000],
        ['name' => 'KHS', 'container_id' => 2, 'speed' => 14000],
        ['name' => 'KHS', 'container_id' => 3, 'speed' => 10000],
    ];

        DB::table('lines')->insert($lines);
    }
}
