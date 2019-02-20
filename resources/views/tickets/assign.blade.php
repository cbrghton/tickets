<div id="modal_assign" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content text-center">
            <div class="modal-header">
                <h5 class="modal-title">Asignar Usuario</h5>
            </div>

            <form method="post" action="{{ route('ticket.assign') }}">
                @csrf()
                <div class="modal-body">
                    <div class="form-group has-feedback">
                        <input name="id_solicitud" value="{{ $ticket->id_solicitud }}" hidden="hidden">

                        <select name="user_respuesta_id" class="select" data-placeholder="Selecciona a un usuario" required="required">
                            <option></option>
                            @foreach($users as $user)
                                <option value="{{ $user->id_user }}">{{ $user->nombre . ' ' . $user->primer_apellido . ' ' . $user->segundo_apellido }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="modal-footer text-center">
                    <button type="submit" class="btn btn-primary">Asignar!</button>
                </div>
            </form>
        </div>
    </div>
</div>
