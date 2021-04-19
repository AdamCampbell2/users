<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ClimbAMileResource;
use App\Http\Resources\LapResources;
use App\Http\Resources\MilesResource;
use App\Models\ClimbAMile;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ClimbAMileController extends Controller
{
    public function index(){
        return new LapResources(ClimbAMile::all());
    }


    public function store(Request $request) {
        $request['user_id'] = Auth::user()->id;
        $lap = new ClimbAMile($request->all());
        $lap->save();
        return response()->json([
            "message" =>"Lap Created"
        ], 201);
    }
}
