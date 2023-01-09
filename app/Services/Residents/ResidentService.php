<?php

namespace App\Services\Residents;

use App\Http\Requests\ResidentRequest;
use App\Models\Resident;
use App\Repositories\Residents\ResidentRepositoryInterface;

class ResidentService implements ResidentServiceInterface
{
    /** @var ResidentRepositoryInterface */
    private $residentRepository;

    /**
     *
     * ResidentService constructor.
     * @param ResidentRepositoryInterface $residentRepository
     */
    public function __construct(ResidentRepositoryInterface $residentRepository)
    {
        $this->residentRepository = $residentRepository;
    }

    /**
     * @inheritDoc
     */
    public function fetchResidentById(int $id): Resident
    {
        return $this->residentRepository->fetchResidentById($id);
    }

    /**
     * @inheritDoc
     */
    public function createResident(ResidentRequest $request): Resident
    {
        return Resident::create([
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
    public function updateResidentById(ResidentRequest $request, int $id): void
    {
        $resident = $this->residentRepository->fetchResidentById($id);

        $resident->fill($request->input())->save();
    }

    /**
     * @inheritDoc
     */
    public function deleteResidentById(int $id): void
    {
        $resident = $this->residentRepository->fetchResidentById($id);

        $resident->delete();
    }
}
