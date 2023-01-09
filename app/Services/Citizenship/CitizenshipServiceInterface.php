<?php

namespace App\Services\Citizenship;

use App\Models\Citizenship;
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
     * @return Citizenship
     */
    public function fetchCitizenshipById(int $id): Citizenship;

    /**
     * Create citizenship
     *
     * @param CitizenshipRequest
     * @return Citizenship
     */
    public function createCitizenship(CitizenshipRequest $request): Citizenship;

    /**
     * Update citizenship by id
     *
     * @param CitizenshipRequest $request
     * @param int $id
     * @return void
     */
    public function updateCitizenshipById(CitizenshipRequest $request, int $id): void;

    /**
     * Delete citizenship by Id
     *
     * @param int $id
     */
    public function deleteCitizenshipById(int $id): void;
}
