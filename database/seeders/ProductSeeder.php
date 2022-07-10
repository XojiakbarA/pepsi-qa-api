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
            [
                'name' => 'Pepsi',
                'logo' => 'storage/images/pepsi-logo.png',
                'is_carbonated' => 1,
            ],
            [
                'name' => 'Mirinda',
                'logo' => 'storage/images/mirinda-logo.png',
                'is_carbonated' => 1,
            ],
            [
                'name' => '7UP',
                'logo' => 'storage/images/7up-logo.png',
                'is_carbonated' => 1,
            ],
            [
                'name' => 'Mountain Dew',
                'logo' => 'storage/images/mountain-dew-logo.png',
                'is_carbonated' => 1,
            ],
            [
                'name' => 'Adrenaline Rush',
                'logo' => 'storage/images/adrenaline-logo.png',
                'is_carbonated' => 1,
            ],
            [
                'name' => 'Lipton Black Tea Lemon',
                'logo' => 'storage/images/lipton-logo.png',
                'is_carbonated' => 0,
            ],
            [
                'name' => 'Lipton Green Tea Lemon',
                'logo' => 'storage/images/lipton-logo.png',
                'is_carbonated' => 0,
            ],
            [
                'name' => 'Lipton Black Tea Peach',
                'logo' => 'storage/images/lipton-logo.png',
                'is_carbonated' => 0,
            ],
            [
                'name' => 'Lipton Green Tea Peach',
                'logo' => 'storage/images/lipton-logo.png',
                'is_carbonated' => 0,
            ],
            [
                'name' => 'Lipton Black Tea Raspberry',
                'logo' => 'storage/images/lipton-logo.png',
                'is_carbonated' => 0,
            ],
            [
                'name' => 'Lipton Green Tea Raspberry',
                'logo' => 'storage/images/lipton-logo.png',
                'is_carbonated' => 0,
            ],
        ];

        DB::table('products')->insert($products);
    }
}
