@extends('layouts.app')

@section('title','Crear Usuario')

@push('assets')
    <script type="text/javascript" src="{{ asset('assets/js/plugins/forms/selects/select2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins/forms/styling/uniform.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins/forms/inputs/duallistbox.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/pages/custom/create_user.js') }}"></script>
@endpush

@section('content')
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Nuevo Usuario</h5>
        </div>
        <div class="panel-body">
            <form>
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre...."
                           onkeyup="mayus(this)" required="required">

                    @if ($errors->has('nombre'))
                        <span class="help-block text-danger">
                                <i class="icon-cancel-circle2 position-left"></i>
                                Verifica que estes ingresando bien la información
                            </span>
                    @endif
                </div>

                <div class="form-group">
                    <label>Primer Apellido</label>
                    <input type="text" name="primer_apellido" class="form-control" placeholder="Primer Apellido...."
                           onkeyup="mayus(this)" required="required">

                    @if ($errors->has('primer_apellido'))
                        <span class="help-block text-danger">
                                <i class="icon-cancel-circle2 position-left"></i>
                                Verifica que estes ingresando bien la información
                            </span>
                    @endif
                </div>

                <div class="form-group">
                    <label>Segundo Apellido</label>
                    <input type="text" name="segundo_apellido" class="form-control"
                           placeholder="Segundo Apellido...." onkeyup="mayus(this)" required="required">

                    @if ($errors->has('segundo_apellido'))
                        <span class="help-block text-danger">
                                <i class="icon-cancel-circle2 position-left"></i>
                                Verifica que estes ingresando bien la información
                            </span>
                    @endif
                </div>

                <div class="form-group">
                    <label>RFC</label>
                    <input type="text" name="rfc" class="form-control" placeholder="RFC...." onkeyup="mayus(this)"
                           required="required">

                    @if ($errors->has('rfc'))
                        <span class="help-block text-danger">
                                <i class="icon-cancel-circle2 position-left"></i>
                                Verifica que estes ingresando bien la información
                            </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="id_modulo">Modulo</label>
                    <select class="select" data-placeholder="Selecciona un modulo" name="id_modulo" id="id_modulo"
                            required="required">
                        <option></option>
                        <option value="modulo">Insurgentes</option>
                        <option value="modulo">Popotla</option>
                        <option value="modulo">Pilares</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password...."
                           required="required">
                </div>

                <div class="form-group">
                    <label>Confirmar Password</label>
                    <input type="password" name="password_confirmed" class="form-control"
                           placeholder="Confirmar Password..." required="required">
                </div>

                <div class="form-group">
                    <label for="id_rol">Selecciona los roles</label>
                    <select multiple="multiple" name="id_rol" id="id_rol" class="form-control listbox"
                            required="required">
                        @foreach($roles as $role)
                            <option value="{{ $role->id_rol }}">{{ $role->descripcion }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group text-right">
                    <a href="{{ route('home') }}">
                        <button type="button" class="btn btn-danger">Cancelar<i
                                class="icon-arrow-left13 position-right"></i></button>
                    </a>
                    <button type="submit" class="btn btn-primary">Guardar datos<i
                            class="icon-arrow-right14 position-right"></i></button>
                </div>
            </form>
        </div>
    </div>
    <script>
        function mayus(e) {
            e.value = e.value.toUpperCase();
        }
    </script>
@endsection
