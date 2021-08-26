<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
//use Illuminate\Notifications\Notifiable;
Use Illuminate\Foundation\Auth\User As Authenticable;
use Illuminate\Notifications\Notifiable;

class Cliente extends Authenticable
{
    use Notifiable;
    protected $table = 'cliente';
    protected $fillable = ['nombre', 'email', 'telefono', 'pass', 'direccion', 'colonia', 'ciudad', 'municipio', 'estado'];
    public $primaryKey = 'usuario';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false; 

    public function ventas(){
        return $this->hasMany('App\Models\Venta','cliente');
    }
    public function getAuthPassword()
    {
        return $this->attributes['pass'];
    }

}
