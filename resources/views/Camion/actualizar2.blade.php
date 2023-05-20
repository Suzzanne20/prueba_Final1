@extends('layout')

@section('Agregar', 'Crear nuevo registro')

@section('content')
    <div class="card">
        <h3 class="card-header">Actualizar camion</h3>
        <div class="card-body">
            <p class="card-text">
            <form action="{{route('camion.update', $camion -> id)}}" method="POST">
                @csrf
                @method("PUT")
                <label for="">Placa Camion</label>
                <input type="text" name="placa_camion" class="form-control" required value="{{$camion -> placa_camion}}">
                <label for="">Marca</label>
                <input type="text" name="marca" class="form-control" required value="{{$camion -> marca}}">
                <label for="">Color</label>
                <input type="text" name="color" class="form-control" required value="{{$camion -> color}}">
                <label for="">Modelo</label>
                <input type="text" name="modelo" class="form-control" required value="{{$camion-> modelo}}">
                <label for="">Capacidad Toneladas</label>
                <input type="text" name="capacidad_toneladas" class="form-control" required value="{{$camion -> capacidad_toneladas}}">
                <br>
                <a href="{{route("camion.index")}}" class="btn btn-secondary btn-sm">
                    <span class="bi bi-arrow-return-left"></span>  Regresar
                </a>
                <button class="btn btn-warning btn-sm">
                    <span class="bi bi-pencil-square"></span>  Actualizar
                </button>
            </form>
            </p>
        </div>
    </div>
@endsection
