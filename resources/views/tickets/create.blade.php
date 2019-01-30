@extends('layouts.app')
@section('title','Crear Ticket')
@section('content')
    <div class="panel-default">
            <h3>Nueva Incidencia </h3>
            @if(count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
    {!!Form::open(array('url'=>'tickets/index','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
    {{Form::token()}}

         <div class="col-lg-10 col-sm-10 col-md-10 col-xs-10">
             <div class="form-group purple-border">
                <label for="Incidencia">Incidencia</label>
                <textarea class="form-control" name="incidencia" id="incidencia" rows="10" cols="20" ></textarea>
            </div>
         </div>



        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
        </div>
    {!!Form::close()!!}
    </div>
@endsection
