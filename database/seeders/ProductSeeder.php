<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            ['name' => 'Pepsi'],
            ['name' => 'Mirinda'],
            ['name' => '7UP'],
            ['name' => 'Mountain Dew'],
            ['name' => 'Adrenaline Rush'],
            ['name' => 'Lipton Black Tea Lemon'],
            ['name' => 'Lipton Green Tea Lemon'],
            ['name' => 'Lipton Black Tea Peach'],
            ['name' => 'Lipton Green Tea Peach'],
            ['name' => 'Lipton Black Tea Raspberry'],
            ['name' => 'Lipton Green Tea Raspberry'],
        ];

        DB::table('products')->insert($products);
    }
}
