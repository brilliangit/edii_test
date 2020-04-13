<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkHistory extends Model
{
    protected $table = 'work_history';
    public $timestamps = false;
    
    public function user() {
        return $this->belongsTo('App\User');
    }
}
