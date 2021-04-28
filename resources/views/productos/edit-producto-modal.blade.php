<!-- Modal -->
<div class="modal fade" id="edit-producto-modal-{{$producto->id}}" tabindex="-1" aria-labelledby="edit-producto-modal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit-producto-modal">Editar producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('dashboard.productos.update', $producto->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" value="{{$producto->nombre_p}}" placeholder="Nombre del producto">
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio</label>
                        <input type="text" class="form-control" name="precio" id="precio" value="{{$producto->precio_p}}" placeholder="Another input placeholder">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripcion</label>
                        <input type="text" class="form-control" name="descripcion" id="descripcion" value="{{$producto->descripcion_p}}" placeholder="Another input placeholder">
                    </div>
                    <div class="form-group">
                        <img src="{{asset('storage/imagenes_p/' . $producto->imagen_p)}}" alt="{{$producto->nombre_p}}" class="img-fluid img-thumbnail">
                    </div>
                    <div class="form-group">
                        <label for="imagen">Imagen</label>
                        <input type="file" class="form-control-file" name="imagen" id="imagen">
                    </div>
                    <div class="modal-footer">
                        {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button> --}}
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>