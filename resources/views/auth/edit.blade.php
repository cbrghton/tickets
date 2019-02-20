@extends('layouts.app')

@section('title','Editar Usuario')

@push('assets')
    <script type="text/javascript" src="{{ asset('assets/js/plugins/forms/selects/select2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins/forms/styling/uniform.min.js') }}"></script>
    <script type="text/javascript"
            src="{{ asset('assets/js/plugins/forms/selects/bootstrap_multiselect.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/pages/custom/create_user.js') }}"></script>
@endpush

@section('content')
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Editar Usuario </h5>
        </div>
        <div class="panel-body">
            <form method="post" action="{{ route('auth.update') }}">
                @csrf
                <input name="id_user" value="{{ $user->id_user }}" hidden="hidden">

                <div class="form-group">
                    <label> Nombre </label>
                    <input type="text" name="nombre" class="form-control" placeholder="{{ $user->nombre }}"
                           onkeyup="mayus(this)">

                    @if ($errors->has('nombre'))
                        <span class="help-block text-danger">
                                <i class="icon-cancel-circle2 position-left"></i>
                                Verifica que estes ingresando bien la información
                            </span>
                    @endif
                </div>


                <div class="form-group">
                    <label> Primer Apellido </label>
                    <input type="text" name="primer_apellido" class="form-control"
                           placeholder="{{ $user->primer_apellido }}"
                           onkeyup="mayus(this)">

                    @if ($errors->has('primer_apellido'))
                        <span class="help-block text-danger">
                                <i class="icon-cancel-circle2 position-left"></i>
                                Verifica que estes ingresando bien la información
                            </span>
                    @endif
                </div>

                <div class="form-group">
                    <label> Segundo Apellido </label>
                    <input type="text" name="segundo_apellido" class="form-control"
                           placeholder="{{ $user->segundo_apellido }}"
                           onkeyup="mayus(this)">

                    @if ($errors->has('segundo_apellido'))
                        <span class="help-block text-danger">
                                <i class="icon-cancel-circle2 position-left"></i>
                                Verifica que estes ingresando bien la información
                            </span>
                    @endif
                </div>


                <div class="form-group">
                    <label for="id_modulo"> Modulo </label>
                    <select data-placeholder="{{ $user->module->modulo }}" class="select" name="modulo_id"
                            id="id_modulo">
                        <option></option>
                        @foreach($modules as $module)
                            <option value="{{ $module->id_modulo }}">{{ $module->modulo }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="id_rol">Selecciona los roles</label>
                    <div class="multi-select-full">
                        <select class="multiselect" multiple="multiple" name="id_rol[]" id="id_rol">
                            @foreach($roles as $role)
                                <option
                                    value="{{ $role->id_rol }}" {{ $user->hasRole($role->nombre) ? 'selected="selected"' : '' }}>{{ $role->descripcion }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password"> Password </label>
                    <input type="password" name="password" class="form-control" placeholder="Contraseña">

                    @if ($errors->has('password'))
                        <span class="help-block text-danger">
                                <i class="icon-cancel-circle2 position-left"></i>
                                {{ $errors->first('password') }}
                            </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="password">Confirmar Password </label>
                    <input type="password" name="password_confirmation" class="form-control"
                           placeholder="Confirmar Contraseña">
                </div>

                <div class="form-group text-right">
                    <button type="submit" class="btn btn-info">Editar</button>
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
