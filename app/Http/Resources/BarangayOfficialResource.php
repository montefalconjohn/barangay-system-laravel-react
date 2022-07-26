<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BarangayOfficialResource extends JsonResource
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
                'start_term' => $this->start_term,
                'end_term' => $this->end_term,
            ],
            'relationships' => [
                // Lazy loading
                'barangay' => $this->barangay,
                'civilStatus' => $this->civilStatus,
                'employmentStatus' => $this->employmentStatus,
                'position' => $this->position
            ]
        ];
    }
}