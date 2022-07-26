<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EmploymentStatusResource extends JsonResource
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
            'type' => 'employment-statuses',
            'id' => (string)$this->id,
            'attributes' => [
                'employment_status' => $this->employment_status,
            ]
        ];
    }
}
