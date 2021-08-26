<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    protected $table = "venta";
    protected $fillable = ['fecha', 'fecha_e', 'total', 'forma_pago'];
    //public $primaryKey = 'id';
    public $timestamp = false; 

    public function cliente(){
        return $this->belongsTo('App\Models\Cliente','cliente');
    }

    public function productos(){
        return $this->belongToMany('App\Models\Producto','venta_producto','idProducto','idVenta');
    }
}
