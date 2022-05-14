<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $formats = [
            ['value' => 2.0],
            ['value' => 1.5],
            ['value' => 1.0],
            ['value' => 0.5],
            ['value' => 0.449],
            ['value' => 0.25]
        ];

        DB::table('formats')->insert($formats);
    }
}
