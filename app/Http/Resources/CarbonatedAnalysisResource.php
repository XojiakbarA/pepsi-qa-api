<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CarbonatedAnalysisResource extends JsonResource
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
            'target' => $this->syrup->invertedSyrup->target,
            'syrup_id' => $this->syrup_id,
            'syrup_name' => $this->syrup->product->name . " " . $this->syrup_id,
            'product_logo' => $this->syrup->product->logo,
            'line_name' => $this->line->name . " " . $this->line->speed,
            'container_supplier_name' => $this->containerSupplier->name,
            'format_value' => $this->format->value,
            'cap_name' => $this->cap->name,
            'temperature' => $this->temperature,
            'pressure' => $this->pressure,
            'carbonate' => $this->carbonate,
            'brix' => $this->brix,
            'inverted_brix' => $this->inverted_brix,
            'density' => $this->density,
            'acidity' => $this->acidity,
            'ph' => $this->ph,
            'fullness' => $this->fullness,
            'checked_at' => $this->created_at,
            'checked_by' => $this->user->name
        ];
    }
}
