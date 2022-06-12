<?php

namespace App\Http\Requests\Syrup;

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
            'id' => 'integer',
            'product_ids' => 'array',
            'product_ids.*' => 'integer',
            'tank_ids' => 'array',
            'tank_ids.*' => 'integer',
            'user_ids' => 'array',
            'user_ids.*' => 'integer',
            'volume_min' => 'numeric',
            'volume_max' => 'numeric',
            'sugar_syrup_brix_min' => 'numeric',
            'sugar_syrup_brix_max' => 'numeric',
            'blend_syrup_brix_min' => 'numeric',
            'blend_syrup_brix_max' => 'numeric',
            'drink_brix_min' => 'numeric',
            'drink_brix_max' => 'numeric',
            'blend_density_min' => 'numeric',
            'blend_density_max' => 'numeric',
            'drink_density_min' => 'numeric',
            'drink_density_max' => 'numeric',
            'drink_inverted_brix_min' => 'numeric',
            'drink_inverted_brix_max' => 'numeric',
            'drink_acidity_min' => 'numeric',
            'drink_acidity_max' => 'numeric',
            'drink_ph_min' => 'numeric',
            'drink_ph_max' => 'numeric',
            'target_min' => 'numeric',
            'target_max' => 'numeric',
            'from' => 'date',
            'to' => 'date'
        ];
    }
}
