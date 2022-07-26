<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ResidentResource extends JsonResource
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
            'type' => 'residents',
            'id' => (string)$this->id,
            'attributes' => [
                'first_name' => $this->first_name,
                'last_name' => $this->last_name,
                'middle_name' => $this->middle_name,
                'birthdate' => $this->birthdate,
                'birthplace' => $this->birthplace,
                'age' => $this->age,
                'zone' => $this->zone,
                'household' => $this->household,
                'household_number' => $this->household_number,
                'blood_type' => $this->blood_type,
                'occupation' => $this->occupation,
                'religion' => $this->religion,
                'address' => $this->address,
                'gender' => $this->gender,
                'phone_number' => $this->phone_number,
                'email' => $this->email
            ],
            'relationships' => [
                'barangays' => $this->barangay,
                'citizenships' => $this->citizenship,
                'civilStatuses' => $this->civilStatus
            ]
        ];
    }
}
