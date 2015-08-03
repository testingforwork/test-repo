<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User2 extends Model
{
    protected $table = 'User2';

    public function roles() {
        return $this->belongsToMany('App\Role', 'UserRole', 'userId', 'roleId');
    }
}
