<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TankResource extends JsonResource
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
            'factory_name' => $this->factory->name,
            'number' => $this->number,
            'volume' => $this->volume
        ];
    }
}
