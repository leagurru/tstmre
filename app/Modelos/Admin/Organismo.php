<?php

namespace App\Modelos\Admin;

use Illuminate\Database\Eloquent\Model;

class Organismo extends Model
{

    protected $fillable = [
        'nombre', 'edificio_id', 'piso', 'observaciones',
    ];

    public function edificio(){
        return $this->belongsTo('App\Modelos\Admin\Edificio');
    }

    public function escrito(){
        return $this->hasMany('App\Modelos\User\Escrito');
    }
    public function user(){
        return $this->hasMany('App\Modelos\Admin\User');
    }
    public function mre(){
        return $this->hasOne('App\Modelos\Admin\Mre');
    }
}

