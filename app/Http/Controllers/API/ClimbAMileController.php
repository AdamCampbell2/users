<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\ClimbAMile;
use Illuminate\Http\Request;

class ClimbAMileController extends Controller
{
    public function index(){

        // $laps = ClimbingRoutes::all();
        // return $routes;

    }

    public function getUserLaps($id) {
        if(ClimbAMile::where('user_id', $id)->exits()){
            $user = ClimbAMile::where('user_id',$id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($user, 200);
        }else{
            return response()->json([
                "message" => "User Laps not found"
            ], 404);
        }
    }

    public function updateUserLaps(Request $request, $id) {
        //
    }
}
