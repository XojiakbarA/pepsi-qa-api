<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class WaterAnalysisResource extends JsonResource
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
            'place' => $this->place,
            'hardness' => $this->hardness,
            'tds' => $this->tds,
            'alkalinity' => $this->alkalinity,
            'conductivity' => $this->conductivity,
            'turbidity' => $this->turbidity,
            'temperature' => $this->temperature,
            'cl' => $this->cl,
            'mn' => $this->mn,
            'fe' => $this->fe,
            'checked_at' => $this->created_at->setTimeZone('Asia/Tashkent')->format('d.m.Y G:i'),
            'checked_by' => $this->user->name,
        ];
    }
}
