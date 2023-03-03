<?php

use App\SermonCategory;
use Illuminate\Database\Seeder;

class SermonCategorySeeder extends Seeder
{
    public function run()
    {
        SermonCategory::create([
            "name"=>"sermon"
        ]);
        SermonCategory::create([
            "name"=>"cover"
        ]);
        SermonCategory::create([
            "name"=>"my song"
        ]);
    }
}
