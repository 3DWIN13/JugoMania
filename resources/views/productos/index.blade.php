@extends('adminlte::page')

@section('content_header')
    <h1 class="d-inline">Productos</h1>
    <!-- Button trigger modal -->
    <button type="button" class="ml-1 btn btn-primary" data-toggle="modal" data-target="#create-producto-modal">Nuevo producto</button>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Listado de productos</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="productos" class="table table-bordered table-striped col-sm-12">
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
                            <tr>
                                <td>1</td>
                                <td>Jugo de pera</td>
                                <td>RD$ 35.00</td>
                                <td>Jugo de pera natural con un toque de canela</td>
                                <td><img src="" alt="Jugo de pera"></td>
                                <td>
                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit-producto-modal">
                                        Editar
                                    </button>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete-producto-modal">
                                        Eliminar
                                    </button>
                                </td>
                            </tr>
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

{{-- Modal crear producto --}}
@include('productos.create-producto-modal')
@include('productos.edit-producto-modal')
@include('productos.delete-producto-modal')
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