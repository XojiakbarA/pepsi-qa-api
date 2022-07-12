<?php

namespace App\Services;

use App\Filters\ShiftFilter;
use App\Http\Requests\Shift\FilterRequest;
use App\Http\Requests\Shift\StoreRequest;
use App\Http\Requests\Shift\UpdateValueRequest;
use App\Http\Resources\ShiftResource;
use App\Models\Shift;
use App\Models\ShiftMode;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\DB;
use Throwable;

class ShiftService
{
    private string $format = 'Y-m-01';

    public function getAll(FilterRequest $request, ShiftFilter $filter) : JsonResource|Throwable
    {
        try {
            $data = $request->validated();

            $date = self::dateCreator($this->format, $data['date'] ?? now());

            $shifts = Shift::filter($filter)->whereDate('date', '=', $date)->get();

            return ShiftResource::collection($shifts);

        } catch (Throwable $th) {
            return $th;
        }
    }

    public function store(StoreRequest $request) : JsonResource|Throwable
    {
        try {
            DB::beginTransaction();

            $data = $request->validated();

            $date = self::dateCreator($this->format, $data['date']);
            $user_ids = $data['user_ids'];
            $factory_id = $data['factory_id'];
            $shift_mode_id = $data['shift_mode_id'];
            $initial_shift = $data['initial_shift'];

            $shifts = Collection::make();

            foreach ($user_ids as $user_id) :
                $shift_values = self::valueGenerator($date, $shift_mode_id, $initial_shift);

                $shift = compact('date', 'user_id', 'factory_id', 'shift_mode_id', 'shift_values');

                $created = Shift::create($shift);

                $shifts->add($created);
            endforeach;

            DB::commit();

            return ShiftResource::collection($shifts);

        } catch (Throwable $th) {
            DB::rollBack();
            return $th;
        }
    }

    public function updateValues(UpdateValueRequest $request) : JsonResource|Throwable
    {
        try {
            DB::beginTransaction();

            $validated = $request->validated();

            $data = $validated['shifts'];

            foreach ($data as $item) :
                $id = $item['id'];
                $values = $item['values'];
                
                $shift = Shift::findOrFail($id);
                $shiftValues = $shift->shift_values;

                foreach ($values as $value) :
                    $shiftValues[$value['index']]['value'] = $value['value'];
                    $y = date('Y', strtotime($shift->date));
                    $m = date('m', strtotime($shift->date));
                    $d = str_pad($value['index'] + 1, 2, 0, STR_PAD_LEFT);
                    $n = str_pad($value['index'] + 2, 2, 0, STR_PAD_LEFT);
                    if ($value['value'] === 'day') :
                        $shiftValues[$value['index']]['start'] = date($y . '-' . $m . '-' . $d . ' ' . $shift->shiftMode[$value['value']]['start']);
                        $shiftValues[$value['index']]['end'] = date($y . '-' . $m . '-' . $d . ' ' . $shift->shiftMode[$value['value']]['end']);
                    elseif ($value['value'] === 'night') :
                        $shiftValues[$value['index']]['start'] = date($y . '-' . $m . '-' . $d . ' ' . $shift->shiftMode[$value['value']]['start']);
                        $shiftValues[$value['index']]['end'] = date($y . '-' . $m . '-' . $n . ' ' . $shift->shiftMode[$value['value']]['end']);
                    else :
                        $shiftValues[$value['index']]['start'] = null;
                        $shiftValues[$value['index']]['end'] = null;
                    endif;
                endforeach;

                $shift->update([ 'shift_values' => $shiftValues ]);
            endforeach;

            DB::commit();

            return ShiftResource::collection([]);

        } catch (\Throwable $th) {
            DB::rollBack();
            return $th;
        }
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

        $values = array_map(function ($value, $i) use ($date, $shiftMode) {
            $m = date('m', strtotime($date));
            $y = date('Y', strtotime($date));
            $d = str_pad($i + 1, 2, 0, STR_PAD_LEFT);
            $n = str_pad($i + 2, 2, 0, STR_PAD_LEFT);
            $start = null;
            $end = null;
            if ($value === 'day') {
                $start = date($y . '-' . $m . '-' . $d . ' ' . $shiftMode[$value]['start']);
                $end = date($y . '-' . $m . '-' . $d . ' ' . $shiftMode[$value]['end']);
            } elseif ($value === 'night') {
                $start = date($y . '-' . $m . '-' . $d . ' ' . $shiftMode[$value]['start']);
                $end = date($y . '-' . $m . '-' . $n . ' ' . $shiftMode[$value]['end']);
            }
            return compact('value', 'start', 'end');
        }, $values, array_keys($values));

        return $values;
    }
}
