<?php

namespace App\Services\BarangayOfficials;

use App\Models\BarangayOfficial;
use App\Services\BarangayOfficials\BarangayOfficialsServiceInterface;
use App\Repositories\BarangayOfficialsRepositoryInterface;

class BarangayOfficialsService implements BarangayOfficialsServiceInterface
{
    /** @var BarangayOfficialsRepositoryInterface */
    private $barangayOfficialRepository;

    /**
     * BarangayOfficialService constructor
     * 
     * @param BarangayOfficialsRepositoryInterface
     */
    public function __construct(BarangayOfficialsRepositoryInterface $barangayOfficialRepository)
    {
        $this->barangayOfficialRepository = $barangayOfficialRepository;
    }

    /**
     * @inheritDocs
     */
    public function fetchBarangayOfficials()
    {
        // var_dump($this->barangayOfficialRepository->getBarangayOfficials());die();
       return $this->barangayOfficialRepository->getBarangayOfficials();
    }
    
    /**
     * @inheritDocs
     */
    public function fetchBarangayOfficialById(int $id): BarangayOfficial
    {
        return $this->barangayOfficialRepository->getBarangayOfficialById($id);
    }
    
    /**
     * @inheritDocs
     */
    public function createBarangayOfficial($request): BarangayOfficial
    {
        return BarangayOfficial::create([
            'barangay_id' => $request->barangayId,
            'first_name' => $request->firstName,
            'last_name' => $request->lastName,
            'status' => $request->status,
            'age' => $request->age,
            'civil_status' => $request->civilStatus,
            'gender' => $request->gender,
            'birthplace' => $request->birthPlace,
            'birthdate' => $request->birthDate,
            'phone_number' => $request->phoneNumber,
            'email' => $request->email,
            'purok' => $request->purok,
            'term' => $request->term
        ]);
    }

    /**
     * @inheritDocs
     */
    public function updateBarangayOfficialById($request, int $id): void
    {
        $barangayOfficial = $this->barangayOfficialRepository->getBarangayOfficialById($id);
        
        $barangayOfficial->fill($request->input())->save();
    }

    /**
     * @inheritDocs
     */
    public function deleteBarangayOfficial(int $id): void
    {
        $barangayOfficial = $this->barangayOfficialRepository->getBarangayOfficialById($id);

        $barangayOfficial->delete();
    }
}