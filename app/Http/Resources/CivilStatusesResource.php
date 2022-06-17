<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CivilStatusesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'type' => 'civil-statuses',
            'id' => (string)$this->id,
            'attributes' => [
                'civil_status_name' => $this->civil_status_name,
            ]
        ];
    }
}
