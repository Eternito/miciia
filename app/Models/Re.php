<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Re extends Model
{
    use HasFactory;
    protected $fillable =[ 
        
        'nombre',
        'Apaterno',
        'Amaterno',
        'fdn',
        'correo',
        'tel',
        'espe',
        'curso',
        ];
    
}
