<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PhysicalChemicalAnalysisResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'syrup_id' => $this->syrup_id,
            'product_name' => $this->syrup->product->name,
            'product_logo' => $this->syrup->product->logo,
            'line_name' => $this->line->name . " " . $this->line->speed,
            'container_supplier_name' => $this->containerSupplier->name,
            'format_value' => $this->format->value,
            'cap_name' => $this->cap->name,
            'filled_at' => $this->created_at->format('d.m.Y'),
            'values' => PhysicalChemicalValueResource::collection($this->values)
        ];
    }
}