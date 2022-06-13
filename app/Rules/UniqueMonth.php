<?php

namespace App\Rules;

use App\Models\Shift;
use Illuminate\Contracts\Validation\DataAwareRule;
use Illuminate\Contracts\Validation\Rule;

class UniqueMonth implements Rule, DataAwareRule
{
    protected array $data;
    protected string $names;
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
        $givenDate = date('Y-m-01', strtotime($value));

        $shifts = Shift::whereIn('user_id', $this->data['user_ids'])->where('date', $givenDate)->get();

        if ($shifts->count()) :
            $names = [];

            foreach ($shifts as $shift) :
                $names[] = $shift->user->name . '(id:' . $shift->user_id . ')';
            endforeach;

            $this->names = implode(', ', $names);

            return false;
        endif;

        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message() : string
    {
        return $this->names . '\'s shifts has already been created for ' . date('Y-m', strtotime($this->data['date']));
    }

    public function setData($data) : UniqueMonth
    {
        $this->data = $data;

        return $this;
    }
}
