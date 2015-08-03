<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'Customer';

    public function district() {
        return $this->belongsTo('App\District', 'distId', 'id');
    }

    public function custOrders() {
        return $this->hasMany('App\CustOrder', 'custId');
    }
}
