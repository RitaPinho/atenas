<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NewsSize extends Model
{
    //
    use softDeletes;

    protected  $fillable = [
        'size'
    ];
}
