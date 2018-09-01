<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mre extends Model
{
    public function edificio(){
        return $this->belongsTo('App\Edificio');
    }
}
