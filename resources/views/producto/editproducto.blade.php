<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="resources/css/profesor.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>form productos</title>
</head>

<body>
    {{--  --}}
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="well well-sm">
                    <form class="form-horizontal" method="POST" action="{{route('producto.update',$producto)}}" enctype="multipart/form-data">{{--  route('teacher.update',$teacher  del controlador me traigo esos valores--}}
                        @csrf
                        @method('put'){{-- este si es obligatorio --}}
                        <fieldset>
                            <legend class="text-center header">FORMULARIO PRODUCTO</legend>
    
                            <div class="form-group py-3">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                                <div class="col-md-8">
                                    <input  name="precio" type="text" placeholder="Precio" class="form-control" value="{{old('Precio',$producto->precio) }}">{{--este es obligatorio ese old  --}}
                                </div>
                            </div>
                            <div class="form-group py-3">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                                <div class="col-md-8">
                                    <input name="existencias" type="text" placeholder="Existencias" class="form-control"  value="{{old('Existencias',$producto->existencias) }}">
                                </div>
                            </div>
    
                            <div class="form-group py-3">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                                <div class="col-md-8">
                                    <input  name="codigo" type="text" placeholder="Codigo" class="form-control"  value="{{old('Codigo',$producto->codigo) }}">
                                </div>
                            </div>
    
                            <div class="form-group py-3">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                                <div class="col-md-8">
                                    <input  name="descripcion" type="text" placeholder="Descripcion" class="form-control"  value="{{old('Descripcion',$producto->descripcion) }}">
                                </div>
                            </div>
                            <div class="form-group py-3">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                                <div class="col-md-8">
                                    <label for="proveedor_id">Proveedor ID</label>
                                    <input type="number" name="proveedor_id" id="proveedor_id" class="form-control" value="{{ old('proveedor_id', $producto->proveedor_id) }}" required>
                                </div>
                            </div>
                            <div class="form-group py-3">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary btn-lg">enviar</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{--  --}}
</body>

</html>
