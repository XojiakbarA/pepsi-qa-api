<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NonCarbonatedAnalysisResource extends JsonResource
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
            'target' => $this->syrup?->invertedSyrup?->target,
            'syrup_id' => $this->syrup_id,
            'syrup_name' => $this->syrup->product->name . " " . $this->syrup_id,
            'product_logo' => $this->syrup->product->logo,
            'line_name' => $this->line->name . " " . $this->line->speed,
            'container_supplier_name' => $this->containerSupplier->name,
            'format_value' => $this->format->value,
            'cap_name' => $this->cap->name,
            'temperature_after_filling' => $this->temperature_after_filling,
            'temperature_before_tilter' => $this->temperature_before_tilter,
            'temperature_after_cooling' => $this->temperature_after_cooling,
            'pressure_after_filling' => $this->pressure_after_filling,
            'pressure_after_cooling' => $this->pressure_after_cooling,
            'brix_after_filling' => $this->brix_after_filling,
            'brix_after_cooling' => $this->brix_after_cooling,
            'turbidity' => $this->turbidity,
            'density' => $this->density,
            'acidity' => $this->acidity,
            'ph' => $this->ph,
            'fullness' => $this->fullness,
            'checked_at' => $this->created_at,
            'checked_by' => $this->user->name
        ];
    }
}
