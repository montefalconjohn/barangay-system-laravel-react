<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PositionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'type' => 'positions',
            'id' => (string)$this->id,
            'attributes' => [
                'positionName' => $this->position_name,
            ]
        ];
    }
}
