<?php

namespace App\Modelos\User;

use Illuminate\Database\Eloquent\Model;

class Escrito extends Model
{
    protected $fillable = [
        'user_id', 'organismo_id', 'fecha', 'causaNumero', 'causaAnio', 'caratula', 'observaciones'
    ];

    public function user(){
        return $this->belongsTo('App\Modelos\Admin\User');
    }
    public function organismo(){
        return $this->belongsTo('App\Modelos\Admin\Organismo');
    }

    public function mre(){
        return $this->belongsTo('App\Modelos\Admin\Mre','mre_id', 'mre_id');
    }


    // Query scope

    public function scopeFecha($query, $fecha)
    {
        if ($fecha) {
            return $query->where('fecha', '=', "$fecha");
        }
    }

    public function scopeOrganismo_id($query, $organismo_id)
    {
        if ($organismo_id) {
            return $query->where('organismo_id', '=', "$organismo_id");
        }
    }

    public function scopeCaratula($query, $caratula)
    {
        if ($caratula) {
            return $query->where('caratula', 'LIKE', "%$caratula%");
        }
    }

    public function scopeCausaNumero($query, $causaNumero)
    {
        if ($causaNumero ) {
            return $query->where('causaNumero', '=', $causaNumero);
        }
    }

    public function scopeCausaAnio($query, $causaAnio)
    {
        if ($causaAnio) {
            return $query->where('causaAnio', '=', $causaAnio);
        }
    }

    public function scopeObservaciones($query, $observaciones)
    {
        if ($observaciones) {
            return $query->where('observaciones', 'LIKE', "%$observaciones%");
        }
    }

    public function scopeUser_id($query, $user_id)
    {
        if ($user_id) {
            return $query->where('user_id', '=', "$user_id");
        }
    }

    public function scopeMre_id($query, $mre_id)
    {
        if ($mre_id) {
            return $query->where('mre_id', '=', "$mre_id");
        }
    }

}
