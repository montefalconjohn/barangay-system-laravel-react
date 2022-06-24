<?php

namespace App\Repositories\Citizenship;

use App\Models\Citizenships;
use Symfony\Component\HttpKernel\Exception\HttpException;

class CitizenshipRepository implements CitizenshipRepositoryInterface
{
    /**
     * @inheritDoc
     */
    public function fetchAllCitizenship()
    {
        return Citizenships::all();
    }

    /**
     * @inheritDoc
     */
    public function fetchCitizenshipById(int $id): Citizenships
    {
        $citizenship = Citizenships::find($id);

        if (!$citizenship) {
            throw new HttpException(500, "Citizenship with {$id} does not exist.");
        }

        return $citizenship;
    }
}