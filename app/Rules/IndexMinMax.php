<?php

namespace App\Rules;

use App\Models\Shift;
use Illuminate\Contracts\Validation\DataAwareRule;
use Illuminate\Contracts\Validation\Rule;

class IndexMinMax implements Rule, DataAwareRule
{
    protected array $data;
    protected int $id;
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
    public function passes($attribute, $value)
    {
        $shift = Shift::findOrFail($value['id']);

        $this->id = $value['id'];

        $this->max = count($shift->shift_values) - 1;

        $min = array_filter($value['values'], fn ($v) => $v['index'] < $this->min);
        $max = array_filter($value['values'], fn ($v) => $v['index'] > $this->max);

        return !$min && !$max;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The value index' . ' must be between ' . $this->min . ' and ' . $this->max . ' for shift id: ' .$this->id . '.';
    }

    public function setData($data) : IndexMinMax
    {
        $this->data = $data;

        return $this;
    }
}
