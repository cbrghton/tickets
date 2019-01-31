@extends('layouts.app')
@section('title','Editar Usuario')
@section('content')

    <div class="panel panel-flat">
        <div class="panel-heading">
            <h3>Editar Usuario </h3>
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
        {!!Form::model(['method'=>'PATCH','route'=>['user.update']])!!}
        {{Form::token()}}


        <div class="col-lg-10 col-sm-10 col-md-10 col-xs-10">
            <div class="form-group">
                <label for="nombre"> Nombre  </label>
                <input type="text" name="nombre"  class="form-control" placeholder="Nombre...." onkeyup="mayus(this)">
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
