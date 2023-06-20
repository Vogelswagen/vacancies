<?php

declare(strict_types=1);

namespace App\Entity\Employee;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EmployeeEloquentModel extends Model implements IEmployeeModel
{
    use HasFactory;

    protected $table = 'employees';

    protected $fillable = [
        'name',
        'suriname',
        'email',
        'phone',
    ];

    public $timestamps = true;
}
