<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShiftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = '2022-06-01';
        $days = date('t', strtotime($date));
        $values = [];
        $shifts = ['day', 'night', 'weekend', 'weekend'];

        $remainder = $days % count($shifts);

        for ($i = 0; $i < intdiv($days, count($shifts)); $i++) {
            foreach ($shifts as $val) {
                $values[] = $val;
            }
        }
        for ($i = 0; $i < $remainder; $i++) {
            $values[] = $shifts[$i];
        }

        DB::table('shifts')->insert([
            'user_id' => 11,
            'date' => $date,
            'shift_values' => json_encode($values)
        ]);
    }
}
