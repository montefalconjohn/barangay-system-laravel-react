<?php

namespace App\Services\BarangayOfficials;

use App\Models\BarangayOfficial;
use App\Services\BarangayOfficials\BarangayOfficialServiceInterface;
use App\Repositories\BarangayOfficialRepositoryInterface;

class BarangayOfficialService implements BarangayOfficialServiceInterface
{
    /** @var BarangayOfficialRepositoryInterface */
    private $barangayOfficialRepository;

    /**
     * BarangayOfficialService constructor
     * 
     * @param BarangayOfficialRepositoryInterface
     */
    public function __construct(BarangayOfficialRepositoryInterface $barangayOfficialRepository)
    {
        $this->barangayOfficialRepository = $barangayOfficialRepository;
    }

    /**
     * @inheritDoc
     */
    public function fetchBarangayOfficials()
    {
        return $this->barangayOfficialRepository->getBarangayOfficials();
    }
    
    /**
     * @inheritDoc
     */
    public function fetchBarangayOfficialById(int $id): BarangayOfficial
    {
        return $this->barangayOfficialRepository->getBarangayOfficialById($id);
    }
    
    /**
     * @inheritDoc
     */
    public function createBarangayOfficial($request): BarangayOfficial
    {
        return BarangayOfficial::create([
            'first_name' => $request->firstName,
            'last_name' => $request->lastName,
            'age' => $request->age,
            'gender' => $request->gender,
            'birthplace' => $request->birthPlace,
            'birthdate' => $request->birthDate,
            'phone_number' => $request->phoneNumber,
            'purok' => $request->purok,
            'email' => $request->email,
            'start_term' => $request->startTerm,
            'end_term' => $request->endTerm,

            // relationships
            'barangay_id' => $request->barangay,
            'civil_status_id' => $request->civilStatus,
            'employment_status_id' => $request->employmentStatus,
            'position_id' => $request->position
        ]);
    }

    /**
     * @inheritDoc
     */
    public function updateBarangayOfficialById($request, int $id): void
    {
        $barangayOfficial = $this->barangayOfficialRepository->getBarangayOfficialById($id);
        
        $barangayOfficial->fill($request->input())->save();
    }

    /**
     * @inheritDoc
     */
    public function deleteBarangayOfficial(int $id): void
    {
        $barangayOfficial = $this->barangayOfficialRepository->getBarangayOfficialById($id);

        $barangayOfficial->delete();
    }
}