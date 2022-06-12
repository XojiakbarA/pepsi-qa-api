<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InvertedSyrupResource extends JsonResource
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
            'blend_syrup_brix' => $this->blend_syrup_brix,
            'drink_brix' => $this->drink_brix,
            'blend_density' => $this->blend_density,
            'drink_density' => $this->drink_density,
            'drink_inverted_brix' => $this->drink_inverted_brix,
            'drink_acidity' => $this->drink_acidity,
            'drink_ph' => $this->drink_ph,
            'target' => $this->target,
            'checked_by' => $this->user->name,
            'checked_at' => $this->created_at->setTimeZone('Asia/Tashkent')->format('d.m.Y H:i'),
        ];
    }
}
