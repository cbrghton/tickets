<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tobindex="-1" id="modal-password">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h5 class="modal-title">Resetear contraseña</h5>
            </div>

            <form method="post" action="{{ route('auth.reset') }}">
                @csrf
                <div class="modal-body">
                    <div class="alert alert-info">
                        Cuando cambies tu contraseña se va a cerrar tu sesión para confirmar el cambio
                    </div>

                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right" for="password">Contraseña nueva:</label>
                        <div class="col-md-5">
                            <input id="password" class="form-control" type="password" name="password" value="" required
                                   autofocus>
                        </div>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                             <strong>{{ $errors->first('password') }}</strong>
                          </span>
                        @endif
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right" for="password">Confirmar contraseña
                            nueva:</label>
                        <div class="col-md-5">
                            <input id="confirmar_password" type="password" class="form-control"
                                   name="password_confirmation" required>
                        </div>
                        @if ($errors->has('confirmar_password'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('confirmar_password') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Cambiar de contraseña</button>
                </div>
            </form>
        </div>
    </div>
</div>
