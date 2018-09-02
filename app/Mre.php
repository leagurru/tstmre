<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mre extends Model
{
    protected $fillable = [
        'organismo_id',
    ];

    public function organismo(){
        return $this->belongsTo('App\Organismo');
    }
}
