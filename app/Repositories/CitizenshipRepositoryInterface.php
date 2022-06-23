<?php

namespace App\Repositories;

use App\Models\Citizenship;

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
     * @return Citizenship
     */
    public function fetchCitizenshipById(int $id): Citizenship;
}