<?php

namespace App\Http\Requests\Shift;

use App\Models\ShiftMode;
use App\Rules\InitialShift;
use App\Rules\UniqueMonth;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() : bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'user_ids' => 'required|array|min:1',
            'user_ids.*' => 'integer',
            'date' => ['required', 'date', new UniqueMonth],
            'shift_mode_id' => ['required', Rule::exists(ShiftMode::class, 'id')],
            'initial_shift' => ['required', new InitialShift]
        ];
    }
}
