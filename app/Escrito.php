<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escrito extends Model
{
    //
    public function user(){
        return $this->belongsTo('App\Escrito');
    }

    public function organismo(){
        return $this->belongsTo('App\Organismo');
    }
}
