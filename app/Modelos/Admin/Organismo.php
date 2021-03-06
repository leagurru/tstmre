<?php

namespace App\Modelos\Admin;

use Illuminate\Database\Eloquent\Model;

class Organismo extends Model
{

    protected $casts = [
        'escritos' => 'boolean',
        'es_mre'   => 'boolean',
    ];

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
//    public function mre(){
//        return $this->hasOne('App\Modelos\Admin\Mre');
//    }

    public function mre(){
        return $this->belongsTo('App\Modelos\Admin\Mre','mre_id', 'mre_id');
    }


    public function scopeMesasReceptoras($query)
    {
        return $query->where('es_mre', true );
    }

}

