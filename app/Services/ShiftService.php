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
                    $shiftValues[$value['index']] = $value['value'];
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

        return $values;
    }
}
