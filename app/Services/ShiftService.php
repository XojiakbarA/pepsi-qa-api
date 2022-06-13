<?php

namespace App\Services;

use App\Filters\ShiftFilter;
use App\Http\Requests\Shift\FilterRequest;
use App\Http\Requests\Shift\StoreRequest;
use App\Http\Resources\ShiftResource;
use App\Models\Shift;
use App\Models\ShiftMode;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ShiftService
{
    private string $format = 'Y-m-01';

    public function getAll(FilterRequest $request, ShiftFilter $filter) : ResourceCollection
    {
        $date = self::dateCreator($this->format, $request->date ?? now());

        $shifts = Shift::filter($filter)->whereDate('date', '=', $date)->get();

        return ShiftResource::collection($shifts);
    }

    public function store(StoreRequest $request) : ResourceCollection
    {
        $date = self::dateCreator($this->format, $request->date);
        $user_ids = $request->user_ids;
        $factory_id = $request->factory_id;
        $shift_mode_id = $request->shift_mode_id;
        $initial_shift = $request->initial_shift;

        $shifts = [];

        foreach ($user_ids as $user_id) :
            $shift_values = self::valueGenerator($date, $shift_mode_id, $initial_shift);

            $shift = compact('date', 'user_id', 'factory_id', 'shift_mode_id', 'shift_values');

            $shifts[] = Shift::create($shift);
        endforeach;

        return ShiftResource::collection($shifts);
    }

    public static function dateCreator(string $format, string $date) : string
    {
        return date($format, strtotime($date));
    }

    public static function valueGenerator(string $date, int $shift_mode_id, int $init_shift = 0) : array
    {
        $days = date('t', strtotime($date));
        $shiftMode = ShiftMode::find($shift_mode_id);
        $sequence = $shiftMode->sequence;

        $a = array_splice($sequence, $init_shift);
        array_unshift($sequence, ...$a);

        $values = [];

        $remainder = $days % count($sequence);

        for ($i = 0; $i < intdiv($days, count($sequence)); $i++) :
            foreach ($sequence as $val) :
                $values[] = $val;
            endforeach;
        endfor;
        for ($i = 0; $i < $remainder; $i++) :
            $values[] = $sequence[$i];
        endfor;

        return $values;
    }
}
