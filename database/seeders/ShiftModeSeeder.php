<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShiftModeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shiftModes = [
            [ 'value' => 2, 'sequence' => json_encode(['day', 'weekend']) ],
            [ 'value' => 3, 'sequence' => json_encode(['day', 'day', 'night', 'night', 'weekend', 'weekend']) ],
            [ 'value' => 4, 'sequence' => json_encode(['day', 'night', 'weekend', 'weekend']) ],
            [ 'value' => 5, 'sequence' => json_encode(['day', 'day', 'day', 'day', 'day', 'weekend', 'weekend']) ],
            [ 'value' => 6, 'sequence' => json_encode(['day', 'day', 'day', 'day', 'day', 'day', 'weekend']) ],
        ];

        DB::table('shift_modes')->insert($shiftModes);
    }
}
