<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $table = 'Driver';

    public function schedules(){
        return $this->hasMany('App\Schedule', 'drvId');
    }
}
