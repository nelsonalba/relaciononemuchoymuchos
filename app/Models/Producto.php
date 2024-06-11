<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;//esto es de muchos a muchos
    public function clientes()
    {
        return $this->belongsToMany('App\Models\Cliente'); 
    }

    public function proveedor()//el belongstomany va aca por que este es donde esta la foranea en la migracion y el hasManyva en la oytra tabla
    {//esto es de uno a muchos
        return $this->belongsTo('App\Models\Proveedor');
    }

}
