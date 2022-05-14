<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormattableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $formattables = [
            ['format_id' => 2, 'formattable_id' => 1, 'formattable_type' => 'App\Models\Preform'],
            ['format_id' => 2, 'formattable_id' => 2, 'formattable_type' => 'App\Models\Preform'],
            ['format_id' => 3, 'formattable_id' => 3, 'formattable_type' => 'App\Models\Preform'],
            ['format_id' => 4, 'formattable_id' => 3, 'formattable_type' => 'App\Models\Preform'],
            ['format_id' => 2, 'formattable_id' => 4, 'formattable_type' => 'App\Models\Preform'],
            ['format_id' => 3, 'formattable_id' => 4, 'formattable_type' => 'App\Models\Preform'],
            ['format_id' => 4, 'formattable_id' => 4, 'formattable_type' => 'App\Models\Preform'],
            ['format_id' => 6, 'formattable_id' => 1, 'formattable_type' => 'App\Models\Glass'],
            ['format_id' => 5, 'formattable_id' => 1, 'formattable_type' => 'App\Models\Can'],
            ['format_id' => 6, 'formattable_id' => 1, 'formattable_type' => 'App\Models\Can'],
            ['format_id' => 2, 'formattable_id' => 1, 'formattable_type' => 'App\Models\Line'],
            ['format_id' => 6, 'formattable_id' => 2, 'formattable_type' => 'App\Models\Line'],
            ['format_id' => 1, 'formattable_id' => 3, 'formattable_type' => 'App\Models\Line'],
            ['format_id' => 2, 'formattable_id' => 3, 'formattable_type' => 'App\Models\Line'],
            ['format_id' => 3, 'formattable_id' => 3, 'formattable_type' => 'App\Models\Line'],
            ['format_id' => 4, 'formattable_id' => 3, 'formattable_type' => 'App\Models\Line'],
            ['format_id' => 2, 'formattable_id' => 4, 'formattable_type' => 'App\Models\Line'],
            ['format_id' => 3, 'formattable_id' => 3, 'formattable_type' => 'App\Models\Line'],
            ['format_id' => 4, 'formattable_id' => 4, 'formattable_type' => 'App\Models\Line'],
            ['format_id' => 2, 'formattable_id' => 5, 'formattable_type' => 'App\Models\Line'],
            ['format_id' => 4, 'formattable_id' => 5, 'formattable_type' => 'App\Models\Line'],
            ['format_id' => 5, 'formattable_id' => 6, 'formattable_type' => 'App\Models\Line'],
            ['format_id' => 6, 'formattable_id' => 6, 'formattable_type' => 'App\Models\Line'],
        ];

        DB::table('formattables')->insert($formattables);
    }
}
