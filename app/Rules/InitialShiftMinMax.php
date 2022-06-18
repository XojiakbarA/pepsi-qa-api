<?php

namespace App\Rules;

use App\Models\ShiftMode;
use Illuminate\Contracts\Validation\DataAwareRule;
use Illuminate\Contracts\Validation\Rule;

class InitialShiftMinMax implements Rule, DataAwareRule
{
    protected array $data;
    protected int $min = 0;
    protected int $max;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value) : bool
    {
        $shiftMode = ShiftMode::find($this->data['shift_mode_id']);

        $this->max = count($shiftMode?->sequence ?? []);

        return $value <= $this->max && $value >= $this->min;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message() : string
    {
        return 'The :attribute must be between ' . $this->min . ' and ' . $this->max . ' for this shift mode';
    }

    public function setData($data) : InitialShiftMinMax
    {
        $this->data = $data;

        return $this;
    }
}
