<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContainerSupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $suppliers = [
            ['container_id' => 1, 'name' => 'Asl Oyna'],
            ['container_id' => 2, 'name' => 'Tarleplast'],
            ['container_id' => 2, 'name' => 'Samplast'],
            ['container_id' => 2, 'name' => 'TashPET'],
            ['container_id' => 2, 'name' => 'Plastmaster'],
            ['container_id' => 3, 'name' => 'Canpack'],
            ['container_id' => 3, 'name' => 'Ball']
        ];

        DB::table('container_suppliers')->insert($suppliers);
    }
}
