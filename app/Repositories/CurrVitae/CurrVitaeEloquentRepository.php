<?php

declare(strict_types=1);

namespace App\Repositories\CurrVitae;

use App\Entity\CurrVitae\CurrVitaeEloquentModel;
use App\Repositories\DTO\CurrVitaeDTO;

class CurrVitaeEloquentRepository implements ICurrVitaeRepository
{
    public function __construct(
        private readonly CurrVitaeEloquentModel $model
    ) {
    }

    public function put(CurrVitaeDTO $currVitae): bool
    {
        return $this->model->firstOrCreate($currVitae->toArray()) !== null;
    }

    public function findByEmployee()
    {

    }
}
