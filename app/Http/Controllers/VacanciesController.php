<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class VacanciesController extends BaseController
{
    public function getList(): string
    {
        return 'List of vacancies';
    }

    public function getDetail(int $id): string
    {
        return 'Vacancy '. $id .' in detail view';
    }
}
