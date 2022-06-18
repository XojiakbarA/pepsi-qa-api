<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\DataAwareRule;
use Illuminate\Contracts\Validation\Rule;

class ValueDistinct implements Rule, DataAwareRule
{
    protected array $data;
    protected int $id;
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
        $this->id = $value['id'];
        $array = array_map(fn ($v) => $v['index'], $value['values']);
        $prevCount = count($array);
        $nextCount = count(array_unique($array));

        return $prevCount === $nextCount;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'In the shifts id: ' . $this->id . ' field has a duplicate value.';
    }

    public function setData($data) : ValueDistinct
    {
        $this->data = $data;

        return $this;
    }
}
