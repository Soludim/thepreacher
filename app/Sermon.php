<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sermon extends Model
{
    protected $fillable = [
        'topic',
        'audio_id',
        'speaker',
        'category_id'
    ];


    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }

    public function category() {
        return $this->belongsTo('App\SermonCategory')->select(['id', 'name']);
    }

}
