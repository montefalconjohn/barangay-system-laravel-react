<?php

namespace App\Services\Citizenship;

use App\Models\Citizenship;

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
     * @return Citizenship
     */
    public function fetchCitizenshipById(int $id): Citizenship;

    public function createCitizenship($request): Citizenship;
}