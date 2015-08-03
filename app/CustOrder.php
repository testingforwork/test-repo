<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustOrder extends Model
{
    protected $table = 'CustOrder';

    public function customer() {
        return $this->belongsTo('App\Customer', 'custId');
    }

    public function district() {
        return $this->belongsTo('App\District', 'distId');
    }

    public function schedule() {
        return $this->belongsTo('App\Schedule', 'jobId');
    }

    public function products() {
        return $this->belongsToMany('App\Product', 'OrderLine', 'ordId', 'prodId')
            ->withPivot('actualPrice', 'qty');
    }
}
