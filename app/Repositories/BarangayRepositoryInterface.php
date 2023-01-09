<?php

namespace App\Repositories\Barangays;

use App\Models\Barangay;

interface BarangayRepositoryInterface
{
    /**
     * Fetch a certain barangay by ID
     *
     * @param int $id
     * @return Barangay
     */
    public function getBarangayById(int $id): Barangay;
}
