<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Edificio extends Model
{
    public function mre(){
        return $this->hasMany('App\Mre');
    }

    public function organismo(){
        return $this->hasMany('App\Organismo');
    }
}
