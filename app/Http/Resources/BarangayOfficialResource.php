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
    public function toArray($request): array
    {
        return [
            'type' => 'barangay-officials',
            'id' => (string)$this->id,
            'attributes' => [
                'firstName' => $this->first_name,
                'lastName' => $this->last_name,
                'age' => $this->age,
                'gender' => $this->gender,
                'birthPlace' => $this->birthplace,
                'birthDate' => $this->birthdate,
                'phoneNumber' => $this->phone_number,
                'email' => $this->email,
                'purok' => $this->purok,
                'startTerm' => $this->start_term,
                'endTerm' => $this->end_term,
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
