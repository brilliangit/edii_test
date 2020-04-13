<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {

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

    public function biodata() {
        return $this->hasOne('App\Biodata');
    }

    public function work() {
        return $this->hasMany('App\WorkHistory');
    }

    public function education() {
        return $this->hasMany('App\EducationHistory');
    }

    public function courses() {
        return $this->hasMany('App\CoursesHistory');
    }

}
