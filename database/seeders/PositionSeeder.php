<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $positions = [
            ['name' => 'Head of Laboratory'],
            ['name' => 'Quality Control Manager'],
            ['name' => 'Quality Engineer'],
            ['name' => 'Engineer-chemist'],
            ['name' => 'Microbiologist']
        ];

        DB::table('positions')->insert($positions);
    }
}
