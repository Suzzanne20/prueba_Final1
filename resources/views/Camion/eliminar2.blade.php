@extends('layout')

@section('Agregar', 'Crear nuevo registro')

@section('content')
    <div class="card">
        <h3 class="card-header">Eliminar camion</h3>
        <div class="card-body">
            <p class="card-text">
            <div class="alert alert-danger" role="alert">
                ¿Estás seguro de eliminar este registro?
                <table class="table table-sm table-hover">
                    <thead>
                    <th>ID</th>
                    <th>Placa camion</th>
                    <th>Marca</th>
                    <th>Color</th>
                    <th>Modelo</th>
                    <th>Capacidad</th>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{$camion->id}}</td>
                        <td>{{$camion->placa_camion}}</td>
                        <td>{{$camion->marca}}</td>
                        <td>{{$camion->color}}</td>
                        <td>{{$camion->modelo}}</td>
                        <td>{{$camion->capacidad_toneladas}}</td>
                    </tr>
                    </tbody>
                </table>
                <hr>
                <form action="{{route('camion.destroy', $camion->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="{{route('camion.index')}}" class="btn btn-sm btn-secondary">
                        <span class="bi bi-arrow-return-left"></span>  Regresar
                    </a>
                    <button class="btn btn-sm btn-danger">
                        <span class="bi bi-trash3"></span>  Eliminar
                    </button>
                </form>
            </div>
            </p>
        </div>
    </div>
@endsection

