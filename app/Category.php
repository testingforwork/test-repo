<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'Category';

    public function products() {
        return $this->hasMany('App\Product', 'catId');
    }

    public function catParent() {
        return $this->belongsTo('App\Category', 'catParentId');
    }

    public function subCats() {
        return $this->hasMany('App\Category', 'catParentId');
    }
}
