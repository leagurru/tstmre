<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organismo extends Model
{

    protected $fillable = [
        'nombre', 'edificio_id', 'piso', 'observaciones',
    ];

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

