<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class ClimbingRoutes extends Model
{
    use HasFactory,HasApiTokens, Notifiable;

    protected $fillable =[
        'name',
        'level',
        'points'
    ];

    public function climbingRoutes()
    {
        return $this->hasMany(ClimbingRoutes::class);
    }
}
