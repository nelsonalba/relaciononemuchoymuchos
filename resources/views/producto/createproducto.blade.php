<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>crear producto</title>
</head>

<body
    style="background-image:url('https://static0.gamerantimages.com/wordpress/wp-content/uploads/2023/02/giyu-sword.jpg'); width:100%; ">
    {{--  --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="well well-sm ">
                    <form class="form-horizontal mx-auto " method="POST" action="{{ route('producto.store') }}"
                        enctype="multipart/form-data">{{-- aca coloco la ruta para que me guarde en la base de datos --}}
                        @csrf
                        <fieldset>
                            <legend class="text-center header"
                                style="  color: #36A0FF;
                            font-size: 27px;
                            padding: 10px;">
                                FORMULARIO DE PRODUCTO</legend>

                            <div class="form-group py-3">
                                <div class="col-md-11">
                                    <input name="precio" type="text" placeholder="Precio"
                                        class="form-control">{{-- donde dice ****name="nombre"****es necesario que sea igual como le colocaron en la migracion los atributos --}}
                                </div>
                            </div>
                            <div class="form-group py-3">
                                <div class="col-md-11">
                                    <input name="existencias" type="text" placeholder="Existencias"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="form-group py-3">
                                <div class="col-md-11">
                                    <input name="codigo" type="text" placeholder="Codigo" class="form-control">
                                </div>
                            </div>

                            <div class="form-group py-3">
                                <div class="col-md-11">
                                    <input name="descripcion" type="text" placeholder="Descripción"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="form-group py-3">
                                <div class="col-md-11">
                                    <select name="proveedor_id">
                                        <option value="">Seleccione un proveedor</option>
                                        @foreach ($proveedors as $proveedor)
                                        <option value="{{ $proveedor->id }}" {{ old('proveedor_id') == $proveedor->id  }}>
                                            {{ $proveedor->codigo }}
                                        </option>
                                        @endforeach
                                    </select>
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
