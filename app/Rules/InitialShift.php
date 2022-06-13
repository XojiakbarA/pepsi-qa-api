<?php

namespace App\Rules;

use App\Models\ShiftMode;
use Illuminate\Contracts\Validation\DataAwareRule;
use Illuminate\Contracts\Validation\Rule;

class InitialShift implements Rule, DataAwareRule
{
    protected array $data;
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

        $count = count($shiftMode?->sequence ?? []);

        return $value < $count;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message() : string
    {
        return 'The :attribute is invalid.';
    }

    public function setData($data) : InitialShift
    {
        $this->data = $data;

        return $this;
    }
}
