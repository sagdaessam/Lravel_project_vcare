<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Major;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Major::factory(100)->create();

        // User::factory()->create([
        //     'name' => "test name",
        //     'email' => "test@test.com",
        //     'email_verified_at' => now(),
        //     'role'=>'doctor' ,
        //     'major_id'=> 1 ,
        //     'image'=>"2.png",
        //     'password' =>  Hash::make('password'),
        //     'remember_token' => Str::random(10),
        // ]);

        User::factory(150)->create();


    }
}
