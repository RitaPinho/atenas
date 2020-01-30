<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryUser extends Model
{
    //
    use softDeletes;

    protected  $fillable = [
        'category_id', 'user_id'
    ];
    /*
    public function category() {
        return $this->belongsToMany('App\Category', 'category_id');
    }

    public function user() {
        return $this->belongsToMany('App\User', 'user_id');
    }
    */
}
