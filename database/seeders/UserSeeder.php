<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    User::create([
        'name'=>'hafidz aulia urrahman',
        'username'=>'hafidz',
        'username_ig'=>'hafidzau',
        'email'=>'hafidz@gmail.com',
        'email_verified_at'=>now(),
        'password'=>Hash::make('password'),
        'remember_token'=>Str::random(10)
    ]);
    User::create([
        'name'=>'ian hafiz rahman',
        'username'=>'ian',
        'username_ig'=>'ianhafizrac',
        'email'=>'ian@gmail.com',
        'email_verified_at'=>now(),
        'password'=>Hash::make('password'),
        'remember_token'=>Str::random(10)
    ]);
    User::create([
        'name'=>'muhammad syafiq alfarensi',
        'username'=>'syafiq',
        'username_ig'=>'syfq.mp4',
        'email'=>'syafiq@gmail.com',
        'email_verified_at'=>now(),
        'password'=>Hash::make('password'),
        'remember_token'=>Str::random(10)
    ]);
    }
}
