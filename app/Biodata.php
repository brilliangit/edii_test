<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    protected $table = 'biodata';
    public $timestamps = false;
    
    public function user() {
        return $this->belongsTo('App\User');
    }
}
