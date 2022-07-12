<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ShiftResource extends JsonResource
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
            'user_name' => $this->user->name,
            'factory_name' => $this->factory->name,
            'shift_mode_type' => $this->shiftMode->type,
            'shift_mode_values' => $this->shiftMode->values,
            'shift_values' => $this->shift_values,
            'date' => date_format(date_create($this->date), 'Y-m'),
        ];
    }
}
