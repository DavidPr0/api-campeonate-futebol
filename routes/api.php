<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\JogadorController;
use App\Http\Controllers\api\TimeController;
use App\Http\Controllers\api\PartidaController;

Route::apiResource('jogadores', JogadorController::class);
Route::apiResource('time', TimeController::class);
Route::apiResource('partida', PartidaController::class);
