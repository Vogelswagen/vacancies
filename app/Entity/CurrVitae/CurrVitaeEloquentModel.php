<?php

declare(strict_types=1);

namespace App\Entity\CurrVitae;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CurrVitaeEloquentModel extends Model implements ICurrVitaeModel
{
    use HasFactory;

    protected $table = 'responses';

    protected $fillable = [
        'employee_id',
        'filename',
    ];

    public $timestamps = true;
}
