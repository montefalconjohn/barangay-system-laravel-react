<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CivilStatusResource extends JsonResource
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
                'civilStatusName' => $this->civil_status_name,
            ]
        ];
    }
}
