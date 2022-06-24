<?php

namespace App\Services\Citizenship;

use App\Models\Citizenships;
use App\Http\Requests\CitizenshipRequest;

interface CitizenshipServiceInterface
{
    /**
     * Fetches all citizenship
     */
    public function fetchAllCitizenships();

    /**
     * Fetch citizenship by Id
     * 
     * @param int $id
     * 
     * @return Citizenships
     */
    public function fetchCitizenshipById(int $id): Citizenships;

    /**
     * Create citizenship
     * 
     * @param CitizenshipRequest
     * 
     * @return Citizenships
     */
    public function createCitizenship(CitizenshipRequest $request): Citizenships;

    /**
     * Update citizenship by id
     * 
     * @param CitizenshipRequest $request
     * @param int $id
     * 
     * @retur nvoid
     */
    public function updateCitizenshipById(CitizenshipRequest $request, int $id): void;

    /**
     * Delete citizenship by Id
     */
    public function deleteCitizenshipById(int $id): void;
}