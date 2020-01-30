<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    //
    use softDeletes;

    protected  $fillable = [
        'title', 'image', 'url', 'subtitle', 'news_size_id', 'category_id'
    ];
    public function news_size() {
        return $this->belongsTo('App\NewsSize', 'news_size_id');
    }
    public function category() {
        return $this->belongsTo('App\Category', 'category_id');
    }
    public function users() {
        return $this->belongsToMany(User::class);
    }
    public function topics() {
        return $this->belongsToMany(Topic::class);
    }
    public function collections() {
        return $this->belongsToMany(Collection::class);
    }
}
