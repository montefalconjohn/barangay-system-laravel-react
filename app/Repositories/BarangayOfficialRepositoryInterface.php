<?php

namespace App\Repositories;

use App\Models\BarangayOfficial;

interface BarangayOfficialRepositoryInterface
{
    /**
     * Fetch a certain barangay by ID
     */
    public function getBarangayOfficialById(int $id): BarangayOfficial;

    /**
     * Fetches all the barangay officials
     */
    public function getBarangayOfficials();
}