<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'Product';

    public function category() {
        return $this->belongsTo('App\Category', 'catId');
    }

    public function supplier() {
        return $this->belongsTo('App\Supplier', 'suppId');
    }

    public function custOrders() {
        return $this->belongsToMany('App\CustOrder', 'OrderLine', 'prodId', 'ordId')
            ->withPivot('actualPrice', 'qty');
    }
}
