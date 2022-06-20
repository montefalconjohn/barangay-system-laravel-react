<?php

namespace App\Services\EmploymentStatuses;

use App\Services\EmploymentStatuses\EmploymentStatusesServiceInterface;
use App\Models\EmploymentStatuses;

class EmploymentStatuses implements EmploymentStatusesServiceInterface
{
    private $employmentStatusesRepository;

    public function fetchAllEmploymentStatuses()
    {
        
    }

    public function fetchEmploymentStatusById(int $id): EmploymentStatuses
    {
        
    }

    public function createEmploymentStatus($request): EmploymentStatuses
    {
        
    }

    public function updateEmploymentStatusById($request, int $id): void
    {
        
    }

    public function deleteEmploymentStatusById(int $id): void
    {
        
    }
}