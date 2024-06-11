<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;
    public function producto(){//esto es de uno a muchos
        return $this->hasMany('App\Models\Producto');
    }
}
