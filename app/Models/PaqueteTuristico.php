<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaqueteTuristico extends Model
{
    protected $fillable = [
        'destino',
        'descripcion', 
        'duracion', 
        'precio', 
        'incluye'
        
    ];

    public function reservas()
    {
        return $this->hasMany(Reserva::class);
    }

    use HasFactory;
}
