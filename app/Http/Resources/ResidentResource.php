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
                'firstName' => $this->first_name,
                'lastName' => $this->last_name,
                'middleName' => $this->middle_name,
                'birthDate' => $this->birthdate,
                'birthPlace' => $this->birthplace,
                'age' => $this->age,
                'zone' => $this->zone,
                'household' => $this->household,
                'householdNumber' => $this->household_number,
                'bloodType' => $this->blood_type,
                'occupation' => $this->occupation,
                'religion' => $this->religion,
                'address' => $this->address,
                'gender' => $this->gender,
                'phoneNumber' => $this->phone_number,
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
