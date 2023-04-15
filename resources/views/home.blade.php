
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
                <h5 class="card-tittle text-center">Listado de transportes</h5>
                <p>
                    <a href="{{ route("transporte.create") }}" class="btn btn-primary btn-sm mr-2 mb-2">
                        <span class="bi bi-patch-plus"></span>     Agregar nuevo
                    </a>
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
                                    <td>
                                        <form action="">
                                            <button class="btn btn-warning btn-sm">
                                                <span class="bi bi-pencil-square"></span>
                                            </button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="">
                                            <button class="btn btn-danger btn-sm">
                                                <span class="bi bi-trash3"></span>
                                            </button>
                                        </form>
                                    </td>
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
