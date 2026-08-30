<?php

use App\Http\Controllers\Api\ClasseController;
use App\Http\Controllers\Api\EleveController;
use App\Http\Controllers\Api\FiliereController;
use App\Http\Controllers\Api\InscriptionController;
use App\Http\Controllers\Api\OptionController;
use App\Http\Controllers\Api\SectionController;
use App\Http\Controllers\Api\V1\AuthController;
use App\Http\Controllers\Api\V1\ContextController;
use App\Http\Controllers\Api\V1\DashboardController;
use App\Http\Controllers\Api\V1\ReceiptController;
use App\Http\Resources\AnneeResource;
use App\Models\Annee;
use Illuminate\Support\Facades\Route;
use Orion\Facades\Orion;

Route::prefix('v1')->group(function () {
    Route::post('/auth/login', [AuthController::class, 'login']);

    Route::middleware('auth:sanctum')->group(function () {
        Route::post('/auth/logout', [AuthController::class, 'logout']);
        Route::get('/auth/me', [AuthController::class, 'me']);

        Route::get('/context', [ContextController::class, 'index']);

        Route::get('/dashboard', [DashboardController::class, 'index']);
    });


    Route::get('/receipts', [ReceiptController::class, 'index']);

});
