<?php

declare(strict_types=1);

namespace App\Entity\Vacancy;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VacancyEloquentModel extends Model implements IVacancyModel
{
    use HasFactory;

    protected $table = 'vacancies';

    protected $fillable = [
        'name',
        'description',
    ];

    public $timestamps = true;
}
