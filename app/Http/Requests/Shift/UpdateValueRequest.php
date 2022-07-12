<?php

namespace App\Http\Requests\Shift;

use App\Rules\ExistsShiftModeValues;
use App\Rules\ValueDistinct;
use App\Rules\IndexMinMax;
use Illuminate\Foundation\Http\FormRequest;

class UpdateValueRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
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
            'shifts' => 'required|array|min:1',
            'shifts.*' => [new IndexMinMax, new ValueDistinct, new ExistsShiftModeValues],
            'shifts.*.id' => 'required|integer|distinct',
            'shifts.*.values' => 'required|array|min:1',
            'shifts.*.values.*.index' => 'required|integer',
            'shifts.*.values.*.value' => ['required']
        ];
    }
}
