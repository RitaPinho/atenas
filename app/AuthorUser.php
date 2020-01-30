<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AuthorUser extends Model
{
    //
    use softDeletes;

    protected  $fillable = [
        'author_id', 'user_id'
    ];
    /*
    public function author() {
        return $this->belongsToMany('App\Author', 'author_id');
    }

    public function user() {
        return $this->belongsToMany('App\User', 'user_id');
    }
    */
}
