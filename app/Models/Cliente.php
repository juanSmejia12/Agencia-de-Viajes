<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'nombre', 
        'apellido', 
        'telefono', 
        'email', 
        'direccion'
    ];

    public function reserva()
    {
        return $this->hasMany(Reserva::class);
    }
    use HasFactory;
}
