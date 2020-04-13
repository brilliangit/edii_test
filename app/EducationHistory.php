<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EducationHistory extends Model
{
    protected $table = 'education_history';
    public $timestamps = false;
    
    public function user() {
        return $this->belongsTo('App\User');
    }
}
