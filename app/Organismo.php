<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organismo extends Model
{
    public function edificio(){
        return $this->belongsTo('App\Edificio');
    }

    public function escrito(){
        return $this->hasMany('App\Escrito');
    }
    public function user(){
        return $this->hasMany('App\User');
    }
}

