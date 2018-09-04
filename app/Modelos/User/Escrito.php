<?php

namespace App\Modelos\User;

use Illuminate\Database\Eloquent\Model;

class Escrito extends Model
{
    protected $fillable = [
        'user_id', 'organismo_id', 'causaNumero', 'causaAnio', 'caratula', 'observaciones'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
    public function organismo(){
        return $this->belongsTo('App\Modelos\Admin\Organismo');
    }
}
