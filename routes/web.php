<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VacanciesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/list', [VacanciesController::class, 'getList']);
Route::get('/vacancy/{id}', [VacanciesController::class, 'getDetail'])->where('id', '[0-9]+');


