<?php

namespace App\Services\CivilStatuses;

use App\Services\CivilStatuses\CivilStatusServiceInterface;
use App\Models\CivilStatus;
use App\Repositories\CivilStatuses\CivilStatusRepositoryInterface;

class CivilStatusService implements CivilStatusServiceInterface
{
    /** @var CivilStatusesRepositoryInterface */
    private $civilStatusRepository;

    /**
     * CivilStatusesService constructor.
     * 
     * @param CivilStatusRepositoryInterface $civilStatusRepository
     */
    public function __construct(CivilStatusRepositoryInterface $civilStatusRepository)
    {
        $this->civilStatusRepository = $civilStatusRepository;
    }

    /**
     * @inheritDoc
     */
    public function fetchCivilStatuses()
    {
        return $this->civilStatusRepository->getAllCivilStatuses();
    }

    /**
     * @inheritDoc
     */
    public function fetchCivilStatusById(int $id): CivilStatus
    {
        return $this->civilStatusRepository->getCivilStatusById($id);
    }

    /**
     * @inheritDoc
     */
    public function createCivilStatus($request): CivilStatus
    {
        return CivilStatus::create([
            'civil_status_name' => $request->civil_status_name
        ]);
    }

    /**
     * @inheritDoc
     */
    public function updateCivilStatusById($request, int $id): void
    {
        $civilStatus = $this->civilStatusRepository->getCivilStatusById($id);

        $civilStatus->fill($request->input())->save();
    }

    /**
     * @inheritDoc
     */
    public function deleteCivilStatusById(int $id): void
    {
        $civilStatus = $this->civilStatusRepository->getCivilStatusById($id);

        $civilStatus->delete();
    }
}