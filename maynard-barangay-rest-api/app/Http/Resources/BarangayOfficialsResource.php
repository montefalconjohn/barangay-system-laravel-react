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
        return [
            'type' => 'barangay-officials',
            'id' => (string)$this->id,
            'attributes' => [
                'first_name' => $this->first_name,
                'last_name' => $this->last_name,
                'status' => $this->status,
                'age' => $this->age,
                'civil_status' => $this->civil_status,
                'gender' => $this->gender,
                'birthplace' => $this->birthplace,
                'birthdate' => $this->birthdate,
                'phone_number' => $this->phone_number,
                'email' => $this->email,
                'purok' => $this->purok,
                'term' => $this->term,
                'barangay' => new BarangayResource($this->barangay)
            ]
        ];
    }
}