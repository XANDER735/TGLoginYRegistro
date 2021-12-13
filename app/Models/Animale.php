<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animale extends Model
{
    protected $fillable = ['especie','familia','nombre','genero','longevidad','longitud','peso','informacion','imagen'];
    public function getRouteKeyName()
    {
        return 'especie';
    }
}
