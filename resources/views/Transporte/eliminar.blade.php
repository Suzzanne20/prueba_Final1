@extends('layout')

@section('Agregar', 'Crear nuevo registro')

@section('content')
    <div class="card">
        <h3 class="card-header">Eliminar transporte</h3>
        <div class="card-body">
            <p class="card-text">
            <div class="alert alert-danger" role="alert">
                ¿Estás seguro de eliminar este registro?
                <table class="table table-sm table-hover">
                    <thead>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Razón Social</th>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{$transporte->id}}</td>
                        <td>{{$transporte->nombre}}</td>
                        <td>{{$transporte->razon_social}}</td>
                    </tr>
                    </tbody>
                </table>
                <hr>
                <form action="{{route('transporte.destroy', $transporte->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="{{route('transporte.index')}}" class="btn btn-sm btn-secondary">
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
