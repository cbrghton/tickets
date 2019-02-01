<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tobindex="-1" id="modal-password-2">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">

                <div class="panel-heading">
                    <h6 class="panel-title">Resetear contraseña</h6>

                </div>

                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right" for="rfc">RFC:</label>
                    <div class="col-md-5">
                        <input id="rfc" class="form-control" type="rfc" name="rfc" value="" required autofocus>
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
                </div>
                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right" for="password">Confirmar contraseña:</label>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                    <div class="col-md-5">
                        <input id="confirmar_password" type="password" class="form-control" name="confirmae_password" required>
                    </div>
                </div>
                <div class="form-group" align="right">
                    <button type="button" class="btn btn-link" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Cambio de contraseña</button>
                </div>
            </div>
        </div>
    </div>
</div>


<!--
<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tobindex="-1" id="modal-password-2">
        <div class="panel-heading">
            <h6 class="panel-title">Resetear contraseña</h6>
        </div>
        <div class="panel-body">
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right" for="rfc">RFC:</label>
                <div class="col-md-3">
                      <input id="rfc" class="form-control" type="rfc" name="rfc" value="" required autofocus>
                </div>
                @if ($errors->has('rfc'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('rfc') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right" for="password">Contraseña nueva:</label>
                <div class="col-md-3">
                      <input id="password"  class="form-control" type="password" name="password" value="" required autofocus>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right" for="password">Confirmar contraseña:</label>
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
                 <div class="col-md-3">
                    <input id="confirmar_password" type="password" class="form-control" name="confirmae_password" required>
                </div>
            </div>

            <div class="form-group" align="right">
                <button type="submit" class="btn btn-primary">Cambio de contraseña</button>
                        </div>

        </div>
    </div>

