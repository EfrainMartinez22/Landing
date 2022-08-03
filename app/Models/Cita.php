<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    protected $table = 'citas';
    
    protected $fillable = [
        'Nombre', 
        'ApellidoPaterno', 
        'ApellidoMaterno', 
        'Edad', 
        'Telefono', 
        'Especialidad', 
        'Dia', 
        'Hora'
    ];
}
