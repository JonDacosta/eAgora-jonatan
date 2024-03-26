<?php

use App\Http\Controllers\ProcedureController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProcedureController::class, 'index']);
Route::get('/create', [ProcedureController::class, 'create']);
Route::get('/edit/{procedure}', [ProcedureController::class, 'edit']);



