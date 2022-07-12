<?php

namespace App\Rules;

use App\Models\Shift;
use Illuminate\Contracts\Validation\DataAwareRule;
use Illuminate\Contracts\Validation\Rule;

class ExistsShiftModeValues implements Rule, DataAwareRule
{
    protected array $data;
    protected string $values;
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
    public function passes($attribute, $value)
    {
        $shift = Shift::findOrFail($value['id']);
        $values = $shift->shiftMode->values;

        $this->values = implode(', ', $values);

        foreach ($value['values'] as $value) :
            if (in_array($value['value'], $values)) :
                return true;
            endif;
        endforeach;

        return false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute takes only ' . $this->values . ' values.';
    }

    public function setData($data) : ExistsShiftModeValues
    {
        $this->data = $data;

        return $this;
    }
}
