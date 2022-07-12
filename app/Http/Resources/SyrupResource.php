<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SyrupResource extends JsonResource
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
            'tank_number' => $this->tank->factory->name . ' ' . $this->tank->number,
            'product_name' => $this->product->name . ' ' . $this->id,
            'product_logo' => $this->product->logo,
            'is_carbonated' => $this->product->is_carbonated,
            'volume' => $this->volume,
            'sugar_syrup_brix' => $this->sugar_syrup_brix,
            'blend_syrup_brix' => $this->blend_syrup_brix,
            'drink_brix' => $this->drink_brix,
            'blend_density' => $this->blend_density,
            'drink_density' => $this->drink_density,
            'drink_inverted_brix' => $this->drink_inverted_brix,
            'drink_acidity' => $this->drink_acidity,
            'drink_ph' => $this->drink_ph,
            'checked_by' => $this->user->name,
            'checked_at' => $this->created_at,
            'inverted_syrup' => new InvertedSyrupResource($this->invertedSyrup),
        ];
    }
}
