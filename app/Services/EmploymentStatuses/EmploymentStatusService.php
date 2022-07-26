<?php

namespace App\Services\EmploymentStatuses;

use App\Services\EmploymentStatuses\EmploymentStatusServiceInterface;
use App\Models\EmploymentStatus;
use App\Repositories\EmploymentStatuses\EmploymentStatusRepositoryInterface;
use App\Http\Requests\EmploymentStatusRequest;

class EmploymentStatusService implements EmploymentStatusServiceInterface
{
    /** @var EmploymentStatusRepositoryInterface */
    private $employmentStatusRepository;

    /**
     * EmplyomentStatusesService constructor.
     * 
     * @param EmploymentStatusRepositoryInterface $employmentStatusRepository
     */
    public function __construct(EmploymentStatusRepositoryInterface $employmentStatusRepository)
    {
        $this->employmentStatusRepository = $employmentStatusRepository;
    }

    /**
     * @inheritDoc
     */
    public function fetchAllEmploymentStatuses()
    {
        return $this->employmentStatusRepository->getAllEmploymentStatuses();
    }

    /**
     * @inheritDoc
     */
    public function fetchEmploymentStatusById(int $id): EmploymentStatus
    {
        return $this->employmentStatusRepository->getEmploymentStatusById($id);
    }

    /**
     * @inheritDoc
     */
    public function createEmploymentStatus(EmploymentStatusRequest $request): EmploymentStatus
    {
        return EmploymentStatus::create([
            'employment_status' => $request->employment_status
        ]);
    }

    /**
     * @inheritDoc
     */
    public function updateEmploymentStatusById(EmploymentStatusRequest $request, int $id): void
    {
        $status = $this->employmentStatusRepository->getEmploymentStatusById($id);

        $status->fill($request->input())->save();
    }

    /**
     * @inheritDoc
     */
    public function deleteEmploymentStatusById(int $id): void
    {
        $status = $this->employmentStatusRepository->getEmploymentStatusById($id);

        $status->delete();
    }
}