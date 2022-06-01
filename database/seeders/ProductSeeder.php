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
            ['name' => 'Pepsi', 'logo' => 'storage/images/pepsi-logo.png'],
            ['name' => 'Mirinda', 'logo' => 'storage/images/mirinda-logo.png'],
            ['name' => '7UP', 'logo' => 'storage/images/7up-logo.png'],
            ['name' => 'Mountain Dew', 'logo' => 'storage/images/7up-logo.png'],
            ['name' => 'Adrenaline Rush', 'logo' => 'storage/images/7up-logo.png'],
            ['name' => 'Lipton Black Tea Lemon', 'logo' => 'storage/images/7up-logo.png'],
            ['name' => 'Lipton Green Tea Lemon', 'logo' => 'storage/images/7up-logo.png'],
            ['name' => 'Lipton Black Tea Peach', 'logo' => 'storage/images/7up-logo.png'],
            ['name' => 'Lipton Green Tea Peach', 'logo' => 'storage/images/7up-logo.png'],
            ['name' => 'Lipton Black Tea Raspberry', 'logo' => 'storage/images/7up-logo.png'],
            ['name' => 'Lipton Green Tea Raspberry', 'logo' => 'storage/images/7up-logo.png'],
        ];

        DB::table('products')->insert($products);
    }
}
