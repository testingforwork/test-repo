<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table = 'Schedule';

    public function driver() {
        return $this->belongsTo('App\Driver', 'drvId');
    }

    public function district() {
        return $this->belongsTo('App\District', 'distId');
    }

    public function custOrders() {
        return $this->hasMany('App\CustOrder', 'jobId');
    }
}
