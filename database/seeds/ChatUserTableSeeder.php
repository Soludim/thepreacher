<?php

use Illuminate\Database\Seeder;
use App\ChatUser;

class ChatUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ChatUser::create([
            "user_id" => 1,
            "chat_id" => 1
        ]);
     
    }
}
