<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $containers = [
            ['name' => 'RGB'],
            ['name' => 'PET'],
            ['name' => 'CAN']
        ];

        DB::table('containers')->insert($containers);
    }
}
