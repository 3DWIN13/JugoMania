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

    <h1 class="d-inline">Productos</h1>
    
    <!-- Button trigger modal -->
    <button type="button" class="ml-1 btn btn-primary" data-toggle="modal" data-target="#create-producto-modal">Nuevo producto</button>
@endsection

@section('content')

{{-- Modal crear producto --}}
@include('productos.create-producto-modal')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Listado de productos</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="productos" class="table table-bordered table-striped col-sm-12 col-md-12">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Precio</th>
                                <th>Descripcion</th>
                                <th>Imagen</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($productos as $producto)
                                <tr>
                                    <td>{{$producto->id}}</td>
                                    <td>{{$producto->nombre_p}}</td>
                                    <td>RD$ {{$producto->precio_p}}</td>
                                    <td>{{$producto->descripcion_p}}</td>
                                    <td><img src="{{asset('storage/imagenes_p/' . $producto->imagen_p)}}" alt="{{$producto->nombre_p}}" width="100px" class="img-fluid img-thumbnail"></td>
                                    <td>
                                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit-producto-modal-{{$producto->id}}">
                                            Editar
                                        </button>
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete-producto-modal-{{$producto->id}}">
                                            Eliminar
                                        </button>
                                    </td>
                                </tr>
                                @include('productos.edit-producto-modal')
                                @include('productos.delete-producto-modal')
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Precio</th>
                                <th>Descripcion</th>
                                <th>Imagen</th>
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

@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('#productos').DataTable({
                "order": [
                    [3, "desc"]
                ]
            });
        });
    </script>
@endsection