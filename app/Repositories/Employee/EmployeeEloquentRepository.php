<?php

declare(strict_types=1);

namespace App\Repositories\Employee;

use App\Repositories\DTO\EmployeeDTO;
use App\Entity\Employee\EmployeeEloquentModel;

class EmployeeEloquentRepository implements IEmployeeRepository
{
    public function __construct(
        private readonly EmployeeEloquentModel $model
    ) {
    }

    public function put(EmployeeDTO $employee): bool
    {
        return $this->model->firstOrCreate($employee->toArray()) !== null;
    }

    public function findByEmail()
    {

    }

    public function findByPhone()
    {

    }
}
