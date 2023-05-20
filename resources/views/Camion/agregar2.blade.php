@extends('layout')

@section('Agregar', 'Crear nuevo registro')

@section('content')
    <div class="card">
        <h3 class="card-header">Agregar nuevo camion</h3>
        <div class="card-body">
            <p class="card-text">
            <form action="{{route('camion.store')}}" method="POST">
                @csrf
                <label for="">Placa Camion</label>
                <input type="text" name="placa_camion" class="form-control">
                <label for="">Marca</label>
                <input type="text" name="marca" class="form-control">
                <label for="">Color</label>
                <input type="text" name="color" class="form-control">
                <label for="">Modelo</label>
                <input type="text" name="modelo" class="form-control">
                <label for="">Capacidad Toneladas</label>
                <input type="text" name="capacidad_toneladas" class="form-control">
                <br>
                <a href="{{route("camion.index")}}" class="btn btn-secondary btn-sm">
                    <span class="bi bi-arrow-return-left"></span>  Regresar
                </a>
                <button class="btn btn-primary btn-sm">
                    <span class="bi bi-plus-circle"></span>  Agregar
                </button>
            </form>
            </p>
        </div>
    </div>
@endsection
