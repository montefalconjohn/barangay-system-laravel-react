<?php

namespace App\Services\BarangayOfficials;

use App\Models\BarangayOfficial;

interface BarangayOfficialServiceInterface
{
    /**
     * Fetches all barangay officials
     * 
     * 
     */
    public function fetchBarangayOfficials();

    /**
     * Fetches a certain barangay official by id
     */
    public function fetchBarangayOfficialById(int $id): BarangayOfficial;

    /**
     * Create Barangay Official
     */
    public function createBarangayOfficial($request): BarangayOfficial;

    /**
     * Updates a certain barangay by ID
     */
    public function updateBarangayOfficialById($request, int $id): void;

    /**
     * Delete barangay by ID
     */
    public function deleteBarangayOfficial(int $id): void;
}