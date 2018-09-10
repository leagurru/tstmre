<?php

namespace App\Modelos\Admin;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'email', 'organismo_id', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



    public function escritos()
    {
        return $this->hasMany('App\Modelos\User\Escrito');
    }

    public function organismo()
    {
        return $this->belongsTo('App\Modelos\Admin\Organismo');
    }


    // Query scope
    public function scopeNombre($query, $name)
    {
//        dd("scope: " . $name );
//        if (trim($name) != "") {
        if ($name) {


            return $query->where('nombre', 'LIKE', "%$nombre%");
        }

    }

    public function scopeEmail($query, $email)
    {
//        dd("scope: " . $email );
        if ($email) {
            return $query->where('email', 'LIKE', "%$email%");
        }
    }

}

