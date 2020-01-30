<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens,Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password', 'role_id', 'news_size_id', 'image'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Gets the user's Role model
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function role()
    {
        return $this->belongsTo('App\Role', 'role_id');
    }
    public function news_size()
    {
        return $this->belongsTo('App\NewsSize', 'news_size_id');
    }
    public function categories() {
        return $this->belongsToMany(Category::class);
    }
    public function authors() {
        return $this->belongsToMany(Author::class);
    }
    public function news() {
        return $this->belongsToMany(News::class);
    }
    /**
     * Verifies if user's role belongs to a list of given roles
     *
     * @param $roles array
     * @return bool
     */
    public function hasRole($roles)
    {
        $userRole = auth()->user()->role->name;

        if(in_array($userRole, $roles))
            return true;

        return false;
    }
}
