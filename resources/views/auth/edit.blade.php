@extends('layouts.app')
@push('assets')
    <script type="text/javascript" src="{{ asset('assets/js/plugins/forms/selects/select2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins/forms/styling/uniform.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/pages/custom/edit_user.js') }}"></script>
@endpush

@section('title','Editar Usuario')
@section('content')

    <div class="panel panel-flat">
        <div class="panel-heading">
            <h3>Editar Usuario </h3>
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="panel-body">
            <form method="post" action="{{ route('auth_edit') }}">
                @csrf

                <input name="id_user" value="1" hidden="hidden">

                <div class="form-group">
                    <label for="nombre"> Nombre </label>
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre...."
                           onkeyup="mayus(this)">
                </div>


                <div class="form-group">
                    <label for="primer_apellido"> Primer Apellido </label>
                    <input type="text" name="primer_apellido" class="form-control" placeholder="Primer Apellido...."
                           onkeyup="mayus(this)">
                </div>

                <div class="form-group">
                    <label for="segundo_apellido"> Segundo Apellido </label>
                    <input type="text" name="segundo_apellido" class="form-control" placeholder="Segundo Apellido...."
                           onkeyup="mayus(this)">
                </div>


                <div class="form-group">
                    <label for="modulo"> Modulo </label>
                    <select data-placeholder="Selecciona un modulo" class="select" name="id_modulo" id="modulo">
                        <option></option>
                        <option value="modulo">Insurgentes</option>
                        <option value="modulo">Popotla</option>
                        <option value="modulo">Pilares</option>
                    </select>
                </div>


                <div class="form-group">
                    <label for="password"> Password </label>
                    <input type="password" name="password" class="form-control" placeholder="Password....">
                </div>

                <div class="form-group">
                    <label for="password">Confirmar Password </label>
                    <input type="password" name="password_confirmed" class="form-control"
                           placeholder="Confirmar Password....">
                </div>

                <div class="form-group">
                    <label for="rol"> Rol </label>
                    <select data-placeholder="Selecciona un modulo" class="select" name="id_rol" id="rol">
                        <option></option>
                        <option value="modulo">Administrador</option>
                        <option value="modulo">Usuario</option>
                        <option value="modulo">Responsable</option>
                    </select>
                </div>

                <div class="form-group text-right">
                    <button type="submit" class="btn btn-info">Editar</button>
                </div>
            </form>
        </div>
        <script>
            function mayus(e) {
                e.value = e.value.toUpperCase();
            }
        </script>
@endsection
