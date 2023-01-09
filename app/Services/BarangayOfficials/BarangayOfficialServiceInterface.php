<?php

namespace App\Services\BarangayOfficials;

use App\Models\BarangayOfficial;
use App\Http\Requests\BarangayOfficialRequest;

interface BarangayOfficialServiceInterface
{
    /**
     * Fetches all barangay officials
     */
    public function fetchBarangayOfficials();

    /**
     * Fetches a certain barangay official by id
     *
     * @param int $id
     * @return BarangayOfficial
     */
    public function fetchBarangayOfficialById(int $id): BarangayOfficial;

    /**
     * Create Barangay Official
     *
     * @param BarangayOfficialRequest
     * @return BarangayOfficial
     */
    public function createBarangayOfficial(BarangayOfficialRequest $request): BarangayOfficial;

    /**
     * Updates a certain barangay by ID
     *
     * @param BarangayOfficialRequest $request
     * @param int $id
     * @return void
     */
    public function updateBarangayOfficialById(BarangayOfficialRequest $request, int $id): void;

    /**
     * Delete barangay by ID
     *
     * @param int $id
     * @return void
     */
    public function deleteBarangayOfficial(int $id): void;
}
