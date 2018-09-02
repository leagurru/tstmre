<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Edificio extends Model
{

    protected $fillable = [
        'direccion',
    ];

    public function mre(){
        return $this->hasMany('App\Mre');
    }

    public function organismo(){
        return $this->hasMany('App\Organismo');
    }
}
