<?php

namespace App\Services\Residents;

use App\Http\Requests\ResidentsRequest;
use App\Services\Residents\ResidentsServiceInterface;
use App\Models\Residents;

class ResidentsService implements ResidentsServiceInterface
{
    /**
     * @inheritDoc
     */
    public function fetchAllResidentsByBaranggayId(int $baranggayId)
    {
        
    }

    /**
     * @inheritDoc
     */
    public function fetchResidentById(int $id): Residents
    {
        
    }

    /**
     * @inheritDoc
     */
    public function createResident(ResidentsRequest $request): Residents
    {
        return Residents::create([
            'first_name' => $request->firstName,
            'last_name' => $request->lastName,
            'middle_name' => $request->middleName,
            'birthdate' => $request->birthDate,
            'birthplace' => $request->birthPlace,
            'age' => $request->age,
            'zone' => $request->zone,
            'household' => $request->household,
            'household_number' => $request->householdNumber,
            'blood_type' => $request->bloodType,
            'occupation' => $request->occupation,
            'religion' => $request->religion,
            'gender' => $request->gender,
            'address' => $request->address,
            'phone_number' => $request->phoneNumber,
            'email' => $request->email,
            'barangay_id' => $request->barangay,
            'citizenship_id' => $request->citizenship,
            'civil_status_id' => $request->civilStatus
        ]);
    }

    /**
     * @inheritDoc
     */
    public function updateResidentById(ResidentsRequest $request, int $id): void
    {
        
    }

    /**
     * @inheritDoc
     */
    public function deleteResidentById(int $id): void
    {
        
    }
}