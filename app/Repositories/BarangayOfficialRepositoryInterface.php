<?php

namespace App\Repositories\BarangayOfficials;

use App\Models\BarangayOfficial;

interface BarangayOfficialRepositoryInterface
{
    /**
     * Fetch a certain barangay by ID
     *
     * @param int $id
     * @return BarangayOfficial
     */
    public function getBarangayOfficialById(int $id): BarangayOfficial;

    /**
     * Fetches all the barangay officials
     */
    public function getBarangayOfficials();
}
