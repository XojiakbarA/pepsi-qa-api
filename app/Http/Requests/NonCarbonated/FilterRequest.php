<?php

namespace App\Http\Requests\NonCarbonated;

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
            'syrup_id' => 'integer',
            'product_ids' => 'array',
            'product_ids.*' => 'integer',
            'line_ids' => 'array',
            'line_ids.*' => 'integer',
            'format_ids' => 'array',
            'format_ids.*' => 'integer',
            'container_supplier_ids' => 'array',
            'container_supplier_ids.*' => 'integer',
            'cap_ids' => 'array',
            'cap_ids.*' => 'integer',
            'user_ids' => 'array',
            'user_ids.*' => 'integer',
            'from' => 'date',
            'to' => 'date'
        ];
    }
}
