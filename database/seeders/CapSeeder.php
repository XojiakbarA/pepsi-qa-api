<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $caps = [
            ['name' => 'TooPET'],
            ['name' => 'Bericap']
        ];

        DB::table('caps')->insert($caps);
    }
}
