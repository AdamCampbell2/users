<?php

use App\Http\Controllers\API\ClimbAMileController;
use App\Models\ClimbingRoutes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Laravel\Ui\Presets\React;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\ApiClimbingRouteController;
use App\Http\Controllers\ApiClimbingRoutes;
use App\Http\Resources\LapResources;
use App\Models\ClimbAMile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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

        //Route::apiResource('laps', ClimbAMileController::class);


        Route::get('laps', function(Request $request){
            return new LapResources( Auth::User()->laps()->get());
        });



        });




    });


    Route::prefix('v2')->group(function(){
        //Future dev
    });


Route::apiResource('v1/routes', ApiClimbingRoutes::class);

Route::post('v1/user/login', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
        'device_name' => 'required',
    ]);

    $user = User::where('email', $request->email)->first();

    if (! $user || ! Hash::check($request->password, $user->password)) {
        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }

    return response()->json($user->createToken($request->device_name)->plainTextToken);

   // return $user->createToken($request->device_name)->plainTextToken;
    
});




