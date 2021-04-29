<!-- Modal -->
<div class="modal fade" id="remove-role-modal-{{$rol->id}}" tabindex="-1" aria-labelledby="remove-role-modal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="remove-role-modal">Quitar Rol</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('dashboard.roles.remove', $rol->id)}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="user">Seleccione un usuario</label>
                        <select class="form-control" name="user" id="user" class="form-select">
                            @foreach ($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>