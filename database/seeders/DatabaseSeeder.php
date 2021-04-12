<?php

namespace Database\Seeders;

use App\Models\ClimbAMile;
use App\Models\ClimbingRoutes;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(20)->create();
        ClimbingRoutes::factory()->count(20)->create();
        ClimbAMile::factory()->count(3)->create();
    }
}
