@extends('adminlte::page')

@section('content_header')

    @if(session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('status') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"><i class="fas fa-times text-white"></i></span>
        </button>
    </div>
    @endif

    @if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"><i class="fas fa-times text-white"></i></span>
        </button>
    </div>
    @endif

    {{-- Verificando si hay algun error, si es true los devuelve todos --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fas fa-times text-white"></i></span>
            </button>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h1 class="d-inline">Panel de roles</h1>
    
    <!-- Button trigger modal -->
    <button type="button" class="ml-1 btn btn-primary" data-toggle="modal" data-target="#create-role-modal">Nuevo Rol</button>
@endsection

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Listado de Roles</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="roles" class="table table-bordered table-striped col-sm-12 col-md-12">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Rol</th>
                                <th>Usuarios</th>
                                {{-- <th></th>
                                <th></th> --}}
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $rol)
                            <tr>
                                <td>{{$rol->id}}</td>
                                <td>{{$rol->name}}</td>
                                <td>
                                    @foreach ($rol->users as $user)
                                        {{$user->name}},
                                    @endforeach
                                </td>
                                {{-- <td>{{$producto->descripcion_p}}</td>
                                <td><img src="{{asset('storage/imagenes_p/' . $producto->imagen_p)}}" alt="{{$producto->nombre_p}}" width="100px" class="img-fluid img-thumbnail"></td> --}}
                                <td>
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#assign-role-modal-{{$rol->id}}">
                                        Asingnar
                                    </button>
                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#remove-role-modal-{{$rol->id}}">
                                        Quitar rol
                                    </button>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete-role-modal-{{$rol->id}}">
                                        Eliminar
                                    </button>
                                </td>
                            </tr>
                            @include('roles.assign-role-modal')
                            @include('roles.remove-role-modal')
                            @include('roles.delete-role-modal')
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Rol</th>
                                <th>Usuarios</th>
                                {{-- <th></th>
                                <th></th> --}}
                                <th>Acciones</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>

@include('roles.create-role-modal')

@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('#roles').DataTable({
                // "order": [
                //     [3, "desc"]
                // ]
            });
        });
    </script>
@endsection