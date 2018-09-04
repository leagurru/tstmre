<?php

namespace App\Modelos\Admin;

use Illuminate\Database\Eloquent\Model;

class Edificio extends Model
{

    protected $fillable = [
        'direccion',
    ];

    public function mre(){
        return $this->hasMany('App\Modelos\Admin\Mre');
    }

    public function organismo(){
        return $this->hasMany('App\Modelos\Admin\Organismo');
    }
}
