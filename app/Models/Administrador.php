<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
Use Illuminate\Foundation\Auth\User As Authenticable;
    

class Administrador extends Authenticable
{
    use Notifiable;
    protected $table = 'administrador'; 
    protected $fillable = ['nombre', 'email', 'telefono', 'pass'];
    public $primaryKey = 'usuario';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false; 

    public function getAuthPassword()
    {
        return $this->attributes['pass'];
    }
}
