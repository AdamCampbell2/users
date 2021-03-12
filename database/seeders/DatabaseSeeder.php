<?php

namespace Database\Seeders;

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
        // DB::table('users')->insert([
        //     'name'=> 'Adam Campbell',
        //     'email'=>'tester@yahoo.com',
        //     'password'=>Hash::make('password')
        //     ]);
    }
}
