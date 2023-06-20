<?php

declare(strict_types=1);

namespace App\Repositories\Vacancy;

use App\Repositories\DTO\VacancyDTO;
use App\Http\DTO\VacanciesListDTO;
use App\Entity\Vacancy\VacancyEloquentModel;

class VacancyEloquentRepository implements IVacancyRepository
{
    public function __construct(
        private readonly VacancyEloquentModel $model
    ) {
    }

    public function getById(int $id): VacancyDTO
    {
        $vacancy = $this->model->findById($id);

        return new VacancyDTO;
    }

    public function getAll(): VacanciesListDTO
    {
        return new VacanciesListDTO;
    }
}
