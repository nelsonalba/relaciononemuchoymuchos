<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    public function productos(){//esto es de muchos a muchos
        return $this->belongsToMany('App\Models\Producto');
    }
}
