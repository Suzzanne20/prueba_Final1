
@extends('layout')

@section('Laravel', 'Crud con Laravel')

@section('content')
    <div class="container-fluid my-5">
        <div class="card">
            <h3 class="card-header">Listado de transportes</h3>
            <div class="card-body">
                <p>
                    <a href="{{ route("transporte.create") }}" class="btn btn-primary btn-sm mr-2 mb-2">Agregar nuevo registro</a>
                </p>
                <hr>
                <p class="card-text">
                    <div class="table table-responsive">
                        <table class="table table-sm table-bordered">
                            <thead>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Razón social</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </thead>
                            <tbody>
                            @foreach($datos as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->nombre}}</td>
                                    <td>{{$item->razon_social}}</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </p>
            </div>
        </div>
    </div>
@endsection
