<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function statuses()
    {
        return $this->hasMany(Status::class);
    }

    public function gravatar($size = '200')
    {
        $hash = md5(strtolower(trim($this->attributes['email'])));

        return "https://cdn.v2ex.com/gravatar/$hash?s=$size";
    }

    public function feed()
    {
        return $this->statuses()->orderBy('created_at','desc');
    }
    
}
