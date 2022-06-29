<?php

namespace App\Repositories\Residents;

use App\Models\Residents;

interface ResidentsRepositoryInterface
{
    /**
     * Fetches all residents by barangay
     * 
     * @param int $barangayId
     */
    public function fetchAllResidentsByBarangayId(int $barangayId);

    /**
     * Fetches resident by resident id
     * 
     * @param int $residentId
     * 
     * @return Residents
     */
    public function fetchResidentById(int $residentId): Residents;
}