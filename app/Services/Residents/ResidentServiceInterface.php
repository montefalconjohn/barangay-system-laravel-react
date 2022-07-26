<?php

namespace App\Services\Residents;

use App\Models\Resident;
use App\Http\Requests\ResidentRequest;

interface ResidentServiceInterface
{
    /**
     * Fetches specific resident by id
     * 
     * @param int $id
     * 
     * @return Residents
     */
    public function fetchResidentById(int $id): Resident;

    /**
     * Create Resident
     * 
     * @param ResidentRequest $request
     * 
     * @return Residents
     */
    public function createResident(ResidentRequest $request): Resident;

    /**
     * Update resident by Id
     * 
     * @param ResidentRequest $request
     * @param int $id
     * 
     * @return void
     */
    public function updateResidentById(ResidentRequest $request, int $id): void;

    /**
     * Delete specific resident by id
     * 
     * @param int $id
     * 
     * @return void
     */
    public function deleteResidentById(int $id): void;
}