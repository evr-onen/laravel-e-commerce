<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
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

        User::create([
            'name' => 'Evren Önen',
            'email' => 'evr.onen@gmail.com',
            'password' => bcrypt('1234'),
            'user_role' => 0,
            'store_id' => 0,




        ]);
    }
}
