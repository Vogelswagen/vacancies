<?php

declare(strict_types=1);

namespace App\Repositories\Response;

use App\Repositories\DTO\ResponseDTO;
use App\Entity\Response\ResponseEloquentModel;

class ResponseEloquentRepository implements IResponseRepository
{
    public function __construct(
        private readonly ResponseEloquentModel $model
    ) {
    }

    public function put(ResponseDTO $response): bool
    {
        return $this->model->firstOrCreate($response->toArray()) !== null;
    }
}
