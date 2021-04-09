<?php

namespace App\Http\Controllers;

use App\Models\ClimbingRoutes;
use Illuminate\Http\Request;

class ClimbingRoutesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $routes = ClimbingRoutes::all();
        return response()->json($routes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClimbingRoutes  $climbingRoutes
     * @return \Illuminate\Http\Response
     */
    public function show(ClimbingRoutes $climbingRoutes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClimbingRoutes  $climbingRoutes
     * @return \Illuminate\Http\Response
     */
    public function edit(ClimbingRoutes $climbingRoutes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ClimbingRoutes  $climbingRoutes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClimbingRoutes $climbingRoutes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClimbingRoutes  $climbingRoutes
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClimbingRoutes $climbingRoutes)
    {
        //
    }
}
