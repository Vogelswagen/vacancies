<?php

declare(strict_types=1);

namespace App\Entity\Response;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ResponseEloquentModel extends Model implements IResponseModel
{
    use HasFactory;

    protected $table = 'responses';

    protected $fillable = [
        'vacancy_id',
        'employee_id',
        'curr_vitae_id',
        'message',
    ];

    public $timestamps = true;
}
