<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NewsTopic extends Model
{
    //
    use softDeletes;

    protected  $fillable = [
        'news_id', 'topic_id'
    ];
    /*
    public function new() {
        return $this->belongsToMany('App\New', 'news_id');
    }

    public function topic() {
        return $this->belongsToMany('App\Topic', 'topic_id');
    }
    */
}
