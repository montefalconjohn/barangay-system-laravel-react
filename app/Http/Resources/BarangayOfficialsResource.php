<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BarangayOfficialsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $barangay = $this->whenLoaded('barangay');
        $position = $this->whenLoaded('position');
        $civilStatus = $this->whenLoaded('civilStatus');
        $employmentStatus = $this->whenLoaded('employmentStatus');

        return [
            'type' => 'barangay-officials',
            'id' => (string)$this->id,
            'attributes' => [
                'first_name' => $this->first_name,
                'last_name' => $this->last_name,
                'age' => $this->age,
                'gender' => $this->gender,
                'birthplace' => $this->birthplace,
                'birthdate' => $this->birthdate,
                'phone_number' => $this->phone_number,
                'email' => $this->email,
                'purok' => $this->purok,
                'term' => $this->term
            ],
            'relationships' => [
                // Lazy loading
                'barangay' => new BarangayResource($barangay),
                'civilStatus' => new CivilStatusesResource($civilStatus),
                'employmentStatus' => new EmploymentStatusesResource($employmentStatus),
                'position' => new PositionResource($position)
            ]
        ];
    }
}