<?php

declare(strict_types=1);

namespace App\Service;

use Vac
use App\Repositories\DTO\VacanciesListDTO;

class VacanciesList
{
    public function __construct(

    ) {
    }

    public function getData(): VacanciesListDTO
    {
        return new VacanciesListDTO();
    }
}
