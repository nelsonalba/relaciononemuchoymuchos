<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Proveedor;

class ProductoController extends Controller
{//ACA EN VEZ TECAHER PASO A PRODUCTO
    

    public function listar(){
        
        $productos = Producto::orderBy('id', 'desc')->get();//aca lo organizo por el id y de forma descendiente "desc"
        return view('producto.listarproducto', compact('productos'));// aca lo llevo a la vista listarprofesores y compact es el plural para listar todos los profes
   }


    public function create(){ //se crea este primero donde vamos a crear el profesor
        
        {
            $proveedors = Proveedor::orderBy('id', 'desc')->get(); // Obtener todos los proveedores
            return view('producto.createproducto', compact('proveedors'));
        }
    }

    public function store(Request $request){ //aca creo el objeto teacher del modulo teacher que esta en verde y los demas son los atributos de la tabla teacher
        
        $producto= new Producto();//creo una variable  $teacher para guarda el nuevo profe

        $producto->precio=$request->precio;
        $producto->existencias=$request->existencias;
        $producto->codigo=$request->codigo;
        $producto->descripcion=$request->descripcion;
        $producto->proveedor_id=$request->proveedor_id;
        $producto->save();
        return $producto;//para ver si se guardo el dato
    }


     public function edit(Producto $producto){
         return view('producto.editproducto',compact('producto'));  //aca coloco la vista editar de view y ese compact teacher es de la variable $teacher 

     }



    public function update(Request $request,Producto $producto){ //coloco el modelo que esta en verde y la variable como la llame en la pasada
            
        $producto->precio=$request->precio;
        $producto->existencias=$request->existencias;
        $producto->codigo=$request->codigo;
        $producto->descripcion=$request->descripcion;
        $producto->proveedor_id=$request->proveedor_id;
        $producto->save();//hago lo mismo para editar 
     
        return redirect()->route('producto.listar'); //aca lo direciono a la vista view de profesores
     
      }

      public function destroy(Producto $producto){
        
        $producto->delete();
        
        return redirect()->route('producto.listar');
    }
}
