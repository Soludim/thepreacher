<?php

use App\Sermon;
use Illuminate\Database\Seeder;

class SermonTableSeeder extends Seeder
{
    public function run()
    {
        Sermon::create([
            'topic' => 'I BLESS YOU LORD',
            'audio_id' => '1h2u6ZAnpvYm8lb1WA-GdNo_TjeNGpAr6',
            'speaker' => 'tHePrEaChEr',
            'category_id' => 2,
        ]);
        Sermon::create([
            'topic' => 'I BELONG TO THE FAMILY OF YHWH',
            'audio_id' => '1r68_Wa-luoWEZ2_ygWuwgAoCP1KhA9iK',
            'speaker' => 'tHePrEaChEr',
            'category_id' => 2,
        ]);
        Sermon::create([
            'topic' => 'O GOD, WE WAIT ON YOU',
            'audio_id' => '1FhzLNr7sjl3aPSd3rfZPi9NTSz6a244V',
            'speaker' => 'tHePrEaChEr',
            'category_id' => 3,
        ]);
        Sermon::create([
            'topic' => 'PRESSING INTO JESUS AS "THE WONDERFUL"',
            'audio_id' => '1k922YA9hl3P_6n7eKALBP9KwMLbDOtiZ',
            'speaker' => 'tHePrEaChEr',
            'category_id' => 1,
        ]);
        Sermon::create([
            'topic' => 'REVISITING APOSTOLIC CHRISTIANITY; PT 1',
            'audio_id' => '1hA6pHuvq5MZH9hq-WxmckkqpzP6pxQn_',
            'speaker' => 'tHePrEaChEr',
            'category_id' => 1,
        ]);
        Sermon::create([
            'topic' => 'REVISITING APOSTOLIC CHRISTIANITY; PT 2',
            'audio_id' => '1y5Ig94i6pSRAKZuQliZfFRPzU04IrMmP',
            'speaker' => 'tHePrEaChEr',
            'category_id' => 1,
        ]);
        Sermon::create([
            'topic' => 'REVISITING APOSTOLIC CHRISTIANITY; PT 3',
            'audio_id' => '1jt3Z5l5SbqGizijNDhzgZmrwXmQ3Fzhg',
            'speaker' => 'tHePrEaChEr',
            'category_id' => 1,
        ]);
        Sermon::create([
            'topic' => 'THE URGENT EMERGENCE OF THE DAUGTHER\'S OF ZION',
            'audio_id' => '1B6d1GPHK3X0u7EfuUowo0umO8iCer-60',
            'speaker' => 'tHePrEaChEr',
            'category_id' => 1,
        ]);
        // Sermon::create([
        //     'topic' => 'SPIRITUAL EXERCISE',
        //     'audio_id' => '1feb3hD7pERB_4HgiIAJIoTXigrDCg2ZZ',
        //     'speaker' => 'tHePrEaChEr',
        //     'category_id' => 3,
        // ]);
        Sermon::create([
            'topic' => 'THE JOURNEY TO SECURE TRUE UNDERSTANDING OF WHY',
            'audio_id' => '1ASGCO5BIY9kg8suopUtf3F869zTdBIH2',
            'speaker' => 'tHePrEaChEr',
            'category_id' => 1,
        ]);
        Sermon::create([
            'topic' => 'THE UNCOMMON CHANT "HOLY"',
            'audio_id' => '1VDfeDNami4_IzJMFNve33wyB1U00AMfE',
            'speaker' => 'tHePrEaChEr',
            'category_id' => 3,
        ]);

    }
}