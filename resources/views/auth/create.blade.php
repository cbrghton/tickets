@extends('layouts.app')
@section('title','Crear Usuario')
@section('content')

    <div class="panel panel-flat">
        <div class="panel-heading">
            <h3>Nuevo Usuario </h3>
            @if(count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
        </div>
    </div>
    @endif
    <div class="panel-body">
        {!!Form::open(array('url'=>'auth/index','method'=>'POST','autocomplete'=>'off'))!!}
        {{Form::token()}}

             <div class="col-lg-10 col-sm-10 col-md-10 col-xs-10">
                <div class="form-group">
                    <label for="nombre"> Nombre  </label>
                    <input type="text" name="nombre"  class="form-control" placeholder="Nombre...." onkeyup="mayus(this)">
                </div>
             </div>

              <div class="col-lg-10 col-sm-10 col-md-10 col-xs-10">
                 <div class="form-group">
                    <label for="primer_apellido"> Primer Apellido  </label>
                    <input type="text" name="primer_apellido"  class="form-control" placeholder="Primer Apellido...." onkeyup="mayus(this)">
                </div>
             </div>

             <div class="col-lg-10 col-sm-10 col-md-10 col-xs-10">
                 <div class="form-group">
                      <label for="segundo_apellido"> Segundo Apellido  </label>
                      <input type="text" name="segundo_apellido"  class="form-control" placeholder="Segundo Apellido...." onkeyup="mayus(this)">
                 </div>
             </div>

             <div class="col-lg-10 col-sm-10 col-md-10 col-xs-10">
               <div class="form-group">
                <label for="rfc"> RFC  </label>
                <input type="text" name="rfc"  class="form-control" placeholder="RFC...." onkeyup="mayus(this)">
                 </div>
              </div>

        <div class="col-lg-10 col-sm-10 col-md-10 col-xs-10">
            <div class="form-group">
                <label for="rfc"> Modulo </label>
                    <select class="form-control" name="modulo">
                        <option value="modulo">Insurgentes</option>
                        <option value="modulo">Popotla</option>
                        <option value="modulo">Pilares</option>
                    </select>
            </div>
        </div>

        <div class="col-lg-10 col-sm-10 col-md-10 col-xs-10">
            <div class="form-group">
                <label for="password"> Password  </label>
                <input type="password" name="password"  class="form-control" placeholder="Password....">
            </div>
        </div>

        <div class="col-lg-10 col-sm-10 col-md-10 col-xs-10">
            <div class="form-group">
                <label for="rfc"> Rol </label>
                <select class="form-control" name="rol">
                    <option value="rol">Administrador</option>
                    <option value="rol">Responsable</option>
                    <option value="rol">Usuario</option>
                </select>
            </div>
        </div>

        {!!Form::close()!!}
    </div>
    <script>
    function mayus(e) {
    e.value = e.value.toUpperCase();
    }
    </script>
@endsection
