<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BarangayResource extends JsonResource
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
            'type' => 'barangays',
            'id' => (string)$this->id,
            'attributes' => [
                'name' => $this->name,
                'municipality' => $this->municipality,
                'province' => $this->province,
                'email' => $this->email,
                'phoneNumber' => $this->phone_number
            ],
            'relationships' => [
                'barangayOfficials' => $this->barangayOfficials,
                'residents' => $this->residents
            ]
        ];
    }
}
 