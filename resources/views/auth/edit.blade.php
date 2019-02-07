@extends('layouts.app')
@push('assets')
    <script type="text/javascript" src="{{ asset('assets/js/plugins/forms/selects/select2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins/forms/styling/uniform.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins/forms/inputs/duallistbox.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/pages/custom/create_user.js') }}"></script>
@endpush

@section('title','Editar Usuario')
@section('content')

    <div class="panel panel-flat">
        <div class="panel-heading">
            <h3>Editar Usuario </h3>
        </div>
        <div class="panel-body">
            <form method="post" action="{{ route('auth.update') }}">
                @csrf

                <input name="id_user" value="1" hidden="hidden">

                <div class="form-group">
                    <label> Nombre </label>
                    <input type="text" name="name" class="form-control" placeholder="Nombre...."
                           onkeyup="mayus(this)">

                    @if ($errors->has('name'))
                        <span class="help-block text-danger">
                                <i class="icon-cancel-circle2 position-left"></i>
                                Verifica que estes ingresando bien la información
                            </span>
                    @endif
                </div>


                <div class="form-group">
                    <label> Primer Apellido </label>
                    <input type="text" name="first_surname" class="form-control" placeholder="Primer Apellido...."
                           onkeyup="mayus(this)">

                    @if ($errors->has('first_surname'))
                        <span class="help-block text-danger">
                                <i class="icon-cancel-circle2 position-left"></i>
                                Verifica que estes ingresando bien la información
                            </span>
                    @endif
                </div>

                <div class="form-group">
                    <label> Segundo Apellido </label>
                    <input type="text" name="second_surname" class="form-control" placeholder="Segundo Apellido...."
                           onkeyup="mayus(this)">

                    @if ($errors->has('second_surname'))
                        <span class="help-block text-danger">
                                <i class="icon-cancel-circle2 position-left"></i>
                                Verifica que estes ingresando bien la información
                            </span>
                    @endif
                </div>


                <div class="form-group">
                    <label for="id_module"> Modulo </label>
                    <select data-placeholder="Selecciona un modulo" class="select" name="id_module" id="id_module">
                        <option></option>
                        <option value="modulo">Insurgentes</option>
                        <option value="modulo">Popotla</option>
                        <option value="modulo">Pilares</option>
                    </select>
                </div>


                <div class="form-group">
                    <label for="password"> Password </label>
                    <input type="password" name="password" class="form-control" placeholder="Password....">

                    @if ($errors->has('password'))
                        <span class="help-block text-danger">
                                <i class="icon-cancel-circle2 position-left"></i>
                                {{ $errors->first('password') }}
                            </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="password">Confirmar Password </label>
                    <input type="password" name="password_confirmed" class="form-control"
                           placeholder="Confirmar Password....">
                </div>

                <div class="form-group">
                    <label for="id_role">Selecciona los roles</label>
                    <select multiple="multiple" name="id_role" id="id_role" class="form-control listbox"
                            required="required">
                        @foreach($roles as $role)
                            <option value="{{ $role->id_rol }}">{{ $role->descripcion }}</option>
                        @endforeach
                    </select>
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
