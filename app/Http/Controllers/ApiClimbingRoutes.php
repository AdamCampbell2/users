<?php

namespace App\Http\Controllers;

use App\Http\Resources\ClimbingRouteResource;
use App\Http\Resources\ClimbingRoutesResource;
use App\Models\ClimbingRoutes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ApiClimbingRoutes extends Controller
{
    
    public function index(){

        // $routes = ClimbingRoutes::all();
        // return $routes;
        return new ClimbingRoutesResource(ClimbingRoutes::all());
    }

}
