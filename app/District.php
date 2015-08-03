<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = 'District';

    public function customer() {
        return $this->hasMany('App\Customer', 'distId', 'id');
    }

    public function schedules() {
        return $this->hasMany('App\Schedule', 'distId');
    }

    public function custOrders() {
        return $this->hasMany('App\CustOrder', 'distId');
    }

}
