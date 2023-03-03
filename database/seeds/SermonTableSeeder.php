<?php

use App\Sermon;
use Illuminate\Database\Seeder;

class SermonTableSeeder extends Seeder
{
    public function run()
    {
        Sermon::create([
            'topic' => 'REVISITING APOSTOLIC CHRISTIANITY',
            'audio_id' => '1P-Bkpcq6m1hhT8pf56Liul6SWAWryzUn',
            'speaker' => 'tHePrEaChEr',
            'category_id' => 1,
        ]);
        Sermon::create([
            'topic' => 'I BELONG TO THE FAMILY OF YHWH',
            'audio_id' => '1QlQYhjpVJpLnPFxY1TCnTu5ua7lwqr5Z',
            'speaker' => 'tHePrEaChEr',
            'category_id' => 2,
        ]);
    }
}