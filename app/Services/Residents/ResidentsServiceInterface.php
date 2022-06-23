<?php

namespace App\Services\Residents;

use App\Models\Residents;
use App\Http\Requests\ResidentsRequest;

interface ResidentsServiceInterface
{
    /**
     * Fetches all Residents by baranggay id
     * 
     * @param int $baranggayId
     */
    public function fetchAllResidentsByBaranggayId(int $baranggayId);

    /**
     * Create Resident
     * 
     * @param ResidentsRequest $request
     * 
     * @return Residents
     */
    public function createResident(ResidentsRequest $request): Residents;
}