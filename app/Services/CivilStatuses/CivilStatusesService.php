<?php

namespace App\Services\CivilStatuses;

use App\Services\CivilStatuses\CivilStatusesServiceInterface;
use App\Models\CivilStatuses;
use App\Repositories\CivilStatuses\CivilStatusesRepositoryInterface;

class CivilStatusesService implements CivilStatusesServiceInterface
{
    /** @var CivilStatusesRepositoryInterface */
    private $civilStatusesRepository;

    /**
     * CivilStatusesService constructor.
     * 
     * @param CivilStatusesRepositoryInterface $civilStatusRepository
     */
    public function __construct(CivilStatusesRepositoryInterface $civilStatusesRepository)
    {
        $this->civilStatusesRepository = $civilStatusesRepository;
    }

    /**
     * @inheritDoc
     */
    public function fetchCivilStatuses()
    {
        return $this->civilStatusesRepository->getAllCivilStatuses();
    }

    /**
     * @inheritDoc
     */
    public function fetchCivilStatusById(int $id): CivilStatuses
    {
        return $this->civilStatusesRepository->getCivilStatusById($id);
    }

    /**
     * @inheritDoc
     */
    public function createCivilStatus($request): CivilStatuses
    {
        return CivilStatuses::create([
            'civil_status_name' => $request->civil_status_name
        ]);
    }

    /**
     * @inheritDoc
     */
    public function updateCivilStatusById($request, int $id): void
    {
        
    }

    /**
     * @inheritDoc
     */
    public function deleteCivilStatusById(int $id): void
    {
        
    }
}