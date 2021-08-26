<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table = 'cliente';
    protected $fillable = ['nombre', 'email', 'telefono', 'pass', 'direccion', 'colonia', 'ciudad', 'municipio', 'estado'];
    public $primaryKey = 'usuario';
    public $timestamps = false; 

    public function ventas(){
        return $this->hasMany('App\Models\Venta','cliente');
    }

}
