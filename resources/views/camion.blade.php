@extends('layout')

@section('Laravel', 'Crud con Laravel')

@section('content')
    <div class="container-fluid my-5">
        <div class="card">
            <h3 class="card-header">CRUD con Laravel y MySQL</h3>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        @if($mensaje = Session::get('success'))
                            <div class="alert alert-success" role="alert">
                                {{$mensaje}}
                            </div>
                        @endif
                    </div>
                </div>
                <h5 class="card-tittle text-center">Listado de camiones</h5>
                <p>
                    <a href="{{ route("camion.create") }}" class="btn btn-primary btn-sm mr-2 mb-2">
                        <span class="bi bi-patch-plus"></span>     Agregar nuevo
                    </a>
                </p>
                <hr>
                <p class="card-text">
                <div class="table table-responsive">
                    <table class="table table-sm table-bordered">
                        <thead>
                        <th>ID</th>
                        <th>Placa camion</th>
                        <th>Marca</th>
                        <th>Color</th>
                        <th>Modelo</th>
                        <th>Capacidad toneladas</th>
                        <th>Transporte</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                        </thead>
                        <tbody>
                        @foreach($datos as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->placa_camion}}</td>
                                <td>{{$item->marca}}</td>
                                <td>{{$item->color}}</td>
                                <td>{{$item->modelo}}</td>
                                <td>{{$item->capacidad_toneladas}}</td>
                                <td>{{$item->transporte->nombre}}</td>

                                <td>
                                    <form action="{{route("camion.edit",$item->id)}}" method="GET">
                                        <button class="btn btn-warning btn-sm">
                                            <span class="bi bi-pencil-square"></span>
                                        </button>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{route("camion.show",$item->id)}}" method="GET">
                                        <button class="btn btn-danger btn-sm">
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
