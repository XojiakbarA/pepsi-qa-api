<?php

namespace Database\Seeders;

use App\Services\ShiftService;
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
        $shift_mode_id = 3;

        $values = ShiftService::valueGenerator($date, $shift_mode_id);

        for ($i = 0; $i < 10; $i++) :
            DB::table('shifts')->insert([
                'user_id' => $i + 1,
                'factory_id' => rand(1, 2),
                'shift_mode_id' => $shift_mode_id,
                'date' => $date,
                'shift_values' => json_encode($values)
            ]);
        endfor;
    }
}
