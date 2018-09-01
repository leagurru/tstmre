<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organismo extends Model
{
    public function edificio(){
        return $this->hasOne('App\Edificio');
    }

    public function escrito(){
        return $this->hasMany('App\Escrito');
    }
    public function usuario(){
        return $this->hasMany('App\Usuario');
    }
}
