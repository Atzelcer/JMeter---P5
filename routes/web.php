<?php

use App\Http\Controllers\PersonaController;
use Illuminate\Support\Facades\Route;

Route::get('/personas/create', [PersonaController::class, 'create']);
Route::post('/personas', [PersonaController::class, 'store']);