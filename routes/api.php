<?php

use App\Http\Controllers\Api\ClasseController;
use App\Http\Controllers\Api\EleveController;
use App\Http\Controllers\Api\FiliereController;
use App\Http\Controllers\Api\InscriptionController;
use App\Http\Controllers\Api\OptionController;
use App\Http\Controllers\Api\SectionController;
use App\Http\Controllers\Api\V1\Finance\ReceiptController;
use App\Http\Resources\AnneeResource;
use App\Models\Annee;
use Illuminate\Support\Facades\Route;
use Orion\Facades\Orion;

Route::group(['as' => 'api.'], function () {
    Orion::resource('eleves', EleveController::class)->only(['index', 'show']);
    Orion::resource('sections', SectionController::class)->only(['index', 'show']);
    Orion::resource('options', OptionController::class)->only(['index', 'show']);
    Orion::resource('filieres', FiliereController::class)->only(['index', 'show']);
    Orion::resource('classes', ClasseController::class)->only(['index', 'show']);
    Route::get('annees', function () {
        return AnneeResource::collection(Annee::all());
    });
    Route::get('annees/encours', function () {
        return AnneeResource::make(Annee::encours());
    });
    Orion::resource('inscriptions', InscriptionController::class)->only(['index', 'show', 'search']);

});

Route::prefix('v1')->group(function () {

    Route::prefix('finance')->group(function () {

        Route::get(
            'receipts',
            [ReceiptController::class, 'index']
        )->name('api.v1.finance.receipts.index');

    });

});
