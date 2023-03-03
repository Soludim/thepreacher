<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SermonCategory extends Model
{
    protected $fillable = ['name'];


    public function sermons() {
        return $this->hasMany('App\Sermon', 'category_id');
    }
}
