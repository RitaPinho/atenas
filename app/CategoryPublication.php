<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryPublication extends Model
{
    //
    use softDeletes;

    protected  $fillable = [
        'category_id', 'publication_id'
    ];

    /*
    public function category() {
        return $this->belongsToMany('App\Category', 'category_id');
    }

    public function publication() {
        return $this->belongsToMany('App\Publication', 'publication_id');
    }*/
}
