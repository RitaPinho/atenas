<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SearchType extends Model
{
    //
    use softDeletes;

    protected  $fillable = [
        'type'
    ];
}
