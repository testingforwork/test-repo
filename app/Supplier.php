<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'Supplier';

    public function products() {
        return $this->hasMany('App\Product', 'suppId');
    }
}
