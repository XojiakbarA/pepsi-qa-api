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
        [
            'factory_id' => 2,
            'product_id' => 1,
            'format_id' => 2,
            'container_id' => 2,
            'container_supplier_id' => 2,
            'cap_id' => 1,
            'status' => 'works',
            'name' => 'Krones',
            'speed' => 44000,
            'logo' => 'storage/images/krones-logo.png'
        ],
        [
            'factory_id' => 2,
            'product_id' => null,
            'format_id' => null,
            'container_id' => 1,
            'container_supplier_id' => null,
            'cap_id' => null,
            'status' => 'stop',
            'name' => 'Krones',
            'speed' => 40000,
            'logo' => 'storage/images/krones-logo.png'
        ],
        [
            'factory_id' => 1,
            'product_id' => 1,
            'format_id' => 1,
            'container_id' => 2,
            'container_supplier_id' => 2,
            'cap_id' => 1,
            'status' => 'works',
            'name' => 'Krones',
            'speed' => 20000,
            'logo' => 'storage/images/krones-logo.png'
        ],
        [
            'factory_id' => 2,
            'product_id' => null,
            'format_id' => null,
            'container_id' => 2,
            'container_supplier_id' => null,
            'cap_id' => null,
            'status' => 'stop',
            'name' => 'KHS',
            'speed' => 28000,
            'logo' => 'storage/images/khs-logo.png'
        ],
        [
            'factory_id' => 1,
            'product_id' => null,
            'format_id' => null,
            'container_id' => 2,
            'container_supplier_id' => null,
            'cap_id' => null,
            'status' => 'stop',
            'name' => 'KHS',
            'speed' => 14000,
            'logo' => 'storage/images/khs-logo.png'
        ],
        [
            'factory_id' => 1,
            'product_id' => null,
            'format_id' => null,
            'container_id' => 3,
            'container_supplier_id' => null,
            'cap_id' => null,
            'status' => 'stop',
            'name' => 'KHS',
            'speed' => 10000,
            'logo' => 'storage/images/khs-logo.png'
        ],
    ];

        DB::table('lines')->insert($lines);
    }
}
