<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ResidentsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // relationships
        $blotters = null;
        $citizenship = null;

        return [
            'type' => 'residents',
            'id' => (string)$this->id,
            'attributes' => [
                'first_name' => $this->first_name,
                'last_name' => $this->last_name,
                'gender' => $this->gender,
                'birthplace' => $this->birthplace,
                'birthdate' => $this->birthdate,
                'phone_number' => $this->phone_number,
                'age' => $this->age,
                'occupation' => $this->occupation,
                'email' => $this->email,
                'citizenship' => $this->citizenship
            ],
            'relationships' => [

            ]
        ];
    }
}
