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
    public function toArray($request): array
    {
        return [
            'type' => 'employment-statuses',
            'id' => (string)$this->id,
            'attributes' => [
                'employmentStatus' => $this->employment_status,
            ]
        ];
    }
}
