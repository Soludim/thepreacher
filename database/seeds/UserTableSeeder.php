<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\User;

class UserTableSeeder extends Seeder
{
  public function run()
  {
    User::create([
      "name" => "Israel Debrah",
      "email" => "israeldebrah45@gmail.com",
      'initials' => 'I.M.D.',
      "password" => Hash::make('incorrect'),
      "lives_in" => "Maakro",
      "contact" => "0558 3131 54",
      'api_token' => Str::random(60),
      "profile_pic" => "profile_pics/default.png",
      "role_id" => 1
    ]);
  }
}
