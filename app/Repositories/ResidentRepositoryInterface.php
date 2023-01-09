<?php

namespace App\Repositories\Residents;

use App\Models\Resident;

interface ResidentRepositoryInterface
{
    /**
     * Fetches resident by resident id
     *
     * @param int $residentId
     * @return Resident
     */
    public function fetchResidentById(int $residentId): Resident;
}
