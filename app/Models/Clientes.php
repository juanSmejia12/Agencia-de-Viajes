<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $fillable = [
        'nombre', 
        'apellido', 
        'telefono', 
        'email', 
        'direccion'
    ];

    public function reservas()
    {
        return $this->hasMany(Reserva::class);
    }
}
