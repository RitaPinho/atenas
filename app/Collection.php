<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    //
    protected  $fillable = [
        'collection', 'user_id'
    ];
    
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
    public function news() {
        return $this->belongsToMany(News::class);
    }
}
