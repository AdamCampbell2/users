<?php

use App\Http\Controllers\API\ClimbAMileController;
use App\Models\User;
use App\Models\ClimbingRoutes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Ui\Presets\React;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\ApiClimbingRouteController;
use App\Http\Controllers\ApiClimbingRoutes;
use App\Models\ClimbAMile;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum'])->group(function () {
    Route::prefix('v1')->group(function(){
        Route::apiResource('users', UserController::class);

        Route::apiResource('laps', ClimbAMileController::class);
       // Route::apiResource('laps', ClimbAMileController::class);

    });


    Route::prefix('v2')->group(function(){
        //Future dev
    });
});

Route::apiResource('v1/routes', ApiClimbingRoutes::class);




