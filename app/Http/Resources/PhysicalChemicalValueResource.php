<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PhysicalChemicalValueResource extends JsonResource
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
            'temperature' => $this->temperature,
            'pressure' => $this->pressure,
            'carbonate' => $this->carbonate,
            'brix' => $this->brix,
            'inverted_brix' => $this->inverted_brix,
            'turbidity' => $this->turbidity,
            'density' => $this->density,
            'acidity' => $this->acidity,
            'ph' => $this->ph,
            'fullness' => $this->fullness,
            'time' => $this->created_at->setTimeZone('Asia/Tashkent')->format('G:i'),
            'checked_by' => $this->user->name
        ];
    }
}
