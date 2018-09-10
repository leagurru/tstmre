<?php

namespace App\Modelos\Admin;

use Illuminate\Database\Eloquent\Model;

class Mre extends Model
{
    protected $fillable = [
        'organismo_id',
    ];

    public function organismo(){
        return $this->hasOne('App\Modelos\Admin\Organismo','id','mre_id');
    }

    public function escrito(){
        return $this->hasMany('App\Modelos\User\Escrito');
    }
}
