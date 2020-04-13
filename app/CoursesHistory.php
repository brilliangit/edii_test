<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoursesHistory extends Model
{
    protected $table = 'courses_history';
    public $timestamps = false;
    
    public function user() {
        return $this->belongsTo('App\User');
    }
}
