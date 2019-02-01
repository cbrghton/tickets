<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tobindex="-1" id="modal-password-2">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h5 class="modal-title">Resetear contraseña</h5>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right" for="rfc">RFC:</label>
                    <div class="col-md-5">
                        <input id="rfc" class="form-control" name="rfc" value="" required autofocus>
                    </div>
                    @if ($errors->has('rfc'))
                        <span class="invalid-feedback" role="alert">
                           <strong>{{ $errors->first('rfc') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right" for="password">Contraseña nueva:</label>
                    <div class="col-md-5">
                        <input id="password"  class="form-control" type="password" name="password" value="" required autofocus>
                    </div>
                     @if ($errors->has('password'))
                          <span class="invalid-feedback" role="alert">
                             <strong>{{ $errors->first('password') }}</strong>
                          </span>
                     @endif
                </div>
                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right" for="password">Confirmar contraseña nueva:</label>
                    <div class="col-md-5">
                        <input id="confirmar_password" type="password" class="form-control" name="confirmar_password" required>
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
        </div>
    </div>
</div>