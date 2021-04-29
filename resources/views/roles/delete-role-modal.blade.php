<!-- Modal -->
<div class="modal fade" id="delete-role-modal-{{$rol->id}}" tabindex="-1" aria-labelledby="delete-role-modal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="delete-role-modal">Quitar Rol</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('dashboard.roles.delete', $rol->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="form-group">
                        <label for="nombre">Nombre del Rol</label>
                        <input class="form-control" type="text" name="nombre" id="nombre" value="{{$rol->name}}" readonly>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>