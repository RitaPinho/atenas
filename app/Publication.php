<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Publication extends Model
{
    //
    use softDeletes;

    protected  $fillable = [
        'name'
    ];
    public function categories() {
        return $this->belongsToMany(Category::class);
    }
}
