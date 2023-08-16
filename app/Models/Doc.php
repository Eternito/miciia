<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doc extends Model
{
    use HasFactory;
    public $timestmaps=false;
    protected $table='docs';
    protected $fillable = [
        'curp',
        'ct',
        'cm',
        'si',
        'es',
    ];
}
