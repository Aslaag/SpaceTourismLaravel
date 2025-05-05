<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DestinationController as ApiDestinationController;
use App\Http\Controllers\Api\CrewController as ApiCrewController;
use App\Http\Controllers\Api\TechnologyController as ApiTechnologyController;

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('destinations', ApiDestinationController::class)->only(['index', 'show']);
    Route::apiResource('crewMembers', ApiCrewController::class)->only(['index', 'show']);
    Route::apiResource('technologies', ApiTechnologyController::class)->only(['index', 'show']);
});
