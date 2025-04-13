<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $fillable = [
        'cliente_id',
        'paquete_id',
        'fecha_reserva',
        'fecha_salida',
        'cantidad_personas',
        'comentarios'
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function paquete()
    {
        return $this->belongsTo(PaqueteTuristico::class);
    }
    use HasFactory;
}
