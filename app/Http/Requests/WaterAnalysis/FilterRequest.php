<?php

namespace App\Http\Requests\WaterAnalysis;

use Illuminate\Foundation\Http\FormRequest;

class FilterRequest extends FormRequest
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
            'page' => 'integer',
            'per_page' => 'integer',
            'place' => 'string',
            'hardness_min' => 'numeric',
            'hardness_max' => 'numeric',
            'tds_min' => 'numeric',
            'tds_max' => 'numeric',
            'alkalinity_min' => 'numeric',
            'alkalinity_max' => 'numeric',
            'conductivity_min' => 'numeric',
            'conductivity_max' => 'numeric',
            'turbidity_min' => 'numeric',
            'turbidity_max' => 'numeric',
            'temperature_min' => 'numeric',
            'temperature_max' => 'numeric',
            'cl_min' => 'numeric',
            'cl_max' => 'numeric',
            'mn_min' => 'numeric',
            'mn_max' => 'numeric',
            'fe_min' => 'numeric',
            'fe_max' => 'numeric',
            'user_ids' => 'array',
            'user_ids.*' => 'integer',
            'from' => 'date',
            'to' => 'date'
        ];
    }
}
