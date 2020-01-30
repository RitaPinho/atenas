<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Author extends Model
{
    //
    use softDeletes;

    protected  $fillable = [
        'name', 'description', 'email', 'job_id'
    ];
    public function job() {
        return $this->belongsTo('App\Job', 'job_id');
    }
    public function users() {
        return $this->belongsToMany(User::class);
    }

}
