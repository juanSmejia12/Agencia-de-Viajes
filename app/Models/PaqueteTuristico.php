<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaqueteTuristico extends Model
{
    protected $table ='paquetes_turisticos';
    protected $fillable = [
        'destino',
        'descripcion', 
        'duracion', 
        'precio', 
        'incluye'
        
    ];

    public function reserva()
    {
        return $this->hasMany(Reserva::class);
    }

    use HasFactory;
}
