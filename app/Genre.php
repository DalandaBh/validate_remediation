<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    public function users(){
        return $this->hasMany('App\User');
    }
}
