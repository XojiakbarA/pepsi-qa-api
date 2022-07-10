<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LineResource extends JsonResource
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
            'product_name' => $this->product?->name,
            'format_value' => $this->format?->value,
            'container_name' => $this->container->name,
            'container_supplier_name' => $this->containerSupplier?->name,
            'cap_name' => $this->cap?->name,
            'status' => $this->status,
            'name' => $this->name,
            'speed' => $this->speed,
            'logo' => $this->logo
        ];
    }
}
