<?php

namespace App\Services\EmploymentStatuses;

use App\Services\EmploymentStatuses\EmploymentStatusesServiceInterface;
use App\Models\EmploymentStatuses;
use App\Repositories\EmploymentStatuses\EmploymentStatusesRepositoryInterface;

class EmploymentStatusesService implements EmploymentStatusesServiceInterface
{
    /** @var EmploymentStatusesRepositoryInterface */
    private $employmentStatusesRepository;

    /**
     * EmplyomentStatusesService constructor.
     * 
     * @param EmploymentStatusesRepositoryInterface $employmentStatusesRepository
     */
    public function __construct(EmploymentStatusesRepositoryInterface $employmentStatusesRepository)
    {
        $this->employmentStatusesRepository = $employmentStatusesRepository;
    }

    /**
     * @inheritDoc
     */
    public function fetchAllEmploymentStatuses()
    {
        
    }

    /**
     * @inheritDoc
     */
    public function fetchEmploymentStatusById(int $id): EmploymentStatuses
    {
        
    }

    /**
     * @inheritDoc
     */
    public function createEmploymentStatus($request): EmploymentStatuses
    {
        return EmploymentStatuses::create([
            'employment_status' => $request->employment_status
        ]);
    }

    /**
     * @inheritDoc
     */
    public function updateEmploymentStatusById($request, int $id): void
    {
        
    }

    /**
     * @inheritDoc
     */
    public function deleteEmploymentStatusById(int $id): void
    {
        
    }
}