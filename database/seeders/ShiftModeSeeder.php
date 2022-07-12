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
            [
                'type' => 2,
                'values' => json_encode(['day', 'weekend', 'leave', 'sick_leave']),
                'day' => json_encode(['start' => '08:00:00', 'end' => '19:59:59']),
                'night' => null,
                'sequence' => json_encode(['day', 'weekend'])
            ],
            [
                'type' => 3,
                'values' => json_encode(['day', 'night', 'weekend', 'leave', 'sick_leave']),
                'day' => json_encode(['start' => '08:00:00', 'end' => '19:59:59']),
                'night' => json_encode(['start' => '20:00:00', 'end' => '07:59:59']),
                'sequence' => json_encode(['day', 'day', 'night', 'night', 'weekend', 'weekend'])
            ],
            [
                'type' => 4,
                'values' => json_encode(['day', 'night', 'weekend', 'leave', 'sick_leave']),
                'day' => json_encode(['start' => '08:00:00', 'end' => '19:59:59']),
                'night' => json_encode(['start' => '20:00:00', 'end' => '07:59:59']),
                'sequence' => json_encode(['day', 'night', 'weekend', 'weekend'])
            ],
            [
                'type' => 5,
                'values' => json_encode(['day', 'weekend', 'leave', 'sick_leave']),
                'day' => json_encode(['start' => '09:00:00', 'end' => '17:59:59']),
                'night' => null,
                'sequence' => json_encode(['day', 'day', 'day', 'day', 'day', 'weekend', 'weekend'])
            ],
            [
                'type' => 6,
                'values' => json_encode(['day', 'weekend', 'leave', 'sick_leave']),
                'day' => json_encode(['start' => '09:00:00', 'end' => '17:59:59']),
                'night' => null,
                'sequence' => json_encode(['day', 'day', 'day', 'day', 'day', 'day', 'weekend'])
            ],
        ];

        DB::table('shift_modes')->insert($shiftModes);
    }
}
