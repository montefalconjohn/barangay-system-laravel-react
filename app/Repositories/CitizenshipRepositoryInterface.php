<?php

namespace App\Repositories\Citizenship;

use App\Models\Citizenships;

interface CitizenshipRepositoryInterface
{
    /**
     * Fetches all citizenship
     */
    public function fetchAllCitizenship();

    /**
     * Fetch citizenship by id
     * 
     * @param int $id
     * 
     * @return Citizenships
     */
    public function fetchCitizenshipById(int $id): Citizenships;
}