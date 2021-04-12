<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\UserResource;
use App\Http\Resources\UsersResource;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$user = Auth::user()->User;
        //$users = User::all();
        //return $user;
       return new UsersResource(Auth::user()->users);
        
    }

    public function returnAll(){
        $users = User::all();
        return $users;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request['user_id'] = Auth::user()->id;
        $user = new User($request->all());
        $user->save();
        return response()->json([
            "message" =>"User created"
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        if($user->created_by == Auth::user()->id){
            return new UserResource($user);
        }
        abort(403);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        if($user->user_id == Auth::user()->id){
            $user->update($request->all());
            return response()->json([
                "message" =>"User updated"
            ], 200);
        }
        abort(403);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if($user->user_id == Auth::user()->id){
            $user->delete();
            return response()->json([
                "message" =>"User deleted"
            ], 202);
        }
        abort(403);
    }
    
}
