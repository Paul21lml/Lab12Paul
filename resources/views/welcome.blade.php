<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <title>Contacto Paul 12 Lab</title>
</head>
<body>
<div class="container">
    <h1 class="text-center">Paul 12 Lab</h1>
    <div class="row">
        <div class="col-4">
        <form method="POST" action="{{route('guardarContacto')}}">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre"  placeholder="Ingrese el nombre" name="nombre">
            </div>
            <div class="form-group">
                <label for="apellido">Apellido</label>
                <input type="text" class="form-control" id="apellido"  placeholder="Ingrese el apellido" name="apellido">
            </div>
            <div class="form-group">
                <label for="telefono">Telefono</label>
                <input type="number" class="form-control" id="telefono"  placeholder="Ingrese el telefono" name="telefono">
            </div>
            <div class="form-group">
                <label for="direccion">Direccion</label>
                <input type="text" class="form-control" id="direccion"  placeholder="Ingrese la direccion" name="direccion">
            </div>
            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
        </div>
        <div class="col-8">
            <table class="table table-dark">
                <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Accion</th>
                </tr>
                </thead>
                <tbody>
                @foreach($contactos as $contacto)
                <tr>
                    <th>{{$contacto->nombre}}</th>
                    <th>{{$contacto->apellido}}</th>
                    <th>{{$contacto->telefono}}</th>
                    <th>{{$contacto->direccion}}</th>
                    <th><button type="button" class="btn btn-danger red"><a href="{{url('/eliminar/'.$contacto->id)}}" style="color: white">Eliminar</a></button></th>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<style>
    .modal-title{
        color: black;
    }
</style>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
