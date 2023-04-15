@extends('layout')

@section('Agregar', 'Crear nuevo registro')

@section('content')
    <div class="card">
        <h3 class="card-header">Actualizar transporte</h3>
        <div class="card-body">
            <p class="card-text">
            <form action="#">
                <label for="">Nombre</label>
                <input type="text" name="nombre" class="form-control" required>
                <label for="">Razón social</label>
                <input type="text" name="razon_social" class="form-control" required>
                <br>
                <a href="{{route("transporte.index")}}" class="btn btn-secondary btn-sm">
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
