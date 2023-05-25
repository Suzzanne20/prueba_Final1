@extends('layout')

@section('Laravel', 'Crud con Laravel')

@section('content')
    <div class="container-fluid my-5">
        <div class="card">
            <div class="card-body">
                <h3 class="card-tittle text-center display-5">Listado de Transportistas</h3>
                <div class="d-flex justify-content-end">
                    <a href="{{ route("transporte.create") }}" class="btn btn-primary btn-sm mr-2 mb-1">
                        Agregar nuevo
                    </a>
                </div>
                <hr>
                <p class="card-text">
                <div class="table table-responsive">
                    <table class="table">
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
                                <td>
                                    <form action="{{route("transporte.edit",$item->id)}}" method="GET">
                                        <button class="btn btn-outline-info btn-sm" onclick="editar()">
                                            <span class="bi bi-pencil-square"></span>
                                        </button>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{route("transporte.show",$item->id)}}" method="GET">
                                        <button class="btn btn-outline-dark btn-sm">
                                            <span class="bi bi-trash3"></span>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <hr>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        {{$datos->links()}}
                    </div>
                </div>
                </p>
            </div>
        </div>
    </div>
@endsection
