<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
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
        $user = new User();
        $user->name = "Ninny";
        $user->username = "admin";
        $user->email = "minandmin2333@hotmail.com";
        $user->password = Hash::make("1234");
        $user->save();
    }
}
