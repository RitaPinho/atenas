<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    //
    use softDeletes;

    protected  $fillable = [
        'category', 'image'
    ];

    public function publications() {
        return $this->belongsToMany(Publication::class);
    }
    public function users() {
        return $this->belongsToMany(User::class);
    }
}
