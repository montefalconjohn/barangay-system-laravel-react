<?php

namespace App\Repositories\Residents;

use App\Models\Residents;

interface ResidentsRepositoryInterface
{
    /**
     * Fetches resident by resident id
     * 
     * @param int $residentId
     * 
     * @return Residents
     */
    public function fetchResidentById(int $residentId): Residents;
}