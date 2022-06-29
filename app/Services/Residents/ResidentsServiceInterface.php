<?php

namespace App\Services\Residents;

use App\Models\Residents;
use App\Http\Requests\ResidentsRequest;

interface ResidentsServiceInterface
{
    /**
     * Fetches specific resident by id
     * 
     * @param int $id
     * 
     * @return Residents
     */
    public function fetchResidentById(int $id): Residents;

    /**
     * Create Resident
     * 
     * @param ResidentsRequest $request
     * 
     * @return Residents
     */
    public function createResident(ResidentsRequest $request): Residents;

    /**
     * Update resident by Id
     * 
     * @param ResidentsRequest $request
     * @param int $id
     * 
     * @return void
     */
    public function updateResidentById(ResidentsRequest $request, int $id): void;

    /**
     * Delete specific resident by id
     * 
     * @param int $id
     * 
     * @return void
     */
    public function deleteResidentById(int $id): void;
}