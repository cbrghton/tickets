@extends('layouts.app')

@section('title','Crear Ticket')

@push('assets')
    <script type="text/javascript" src="{{ asset('assets/js/plugins/forms/selects/select2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins/uploaders/fileinput.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins/forms/styling/uniform.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/pages/custom/editar_ticket.js') }}"></script>
@endpush

@section('content')
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Nuevo Ticket</h5>
        </div>
        <div class="panel-body">
            <form method="post" action="{{ route('ticket.insert') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="incidencia">Incidencia</label>
                    <textarea class="form-control" name="incidencia" id="incidencia" rows="5" cols="5"
                              onkeyup="mayus(this)" required="required"></textarea>

                    @if ($errors->has('incidencia'))
                        <span class="help-block text-danger">
                                <i class="icon-cancel-circle2 position-left"></i>
                                {{ $errors->first('incidencia') }}
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="id_sistema">Sistema</label>
                    <select data-placeholder="Selecciona un sistema" name="sistema_id" id="id_sistema" class="select"
                            required="required">
                        <option></option>
                        @foreach($systems as $system)
                            <option value="{{ $system->id_sistema }}">{{ $system->sistema }}</option>
                        @endforeach
                    </select>

                    @if ($errors->has('sistema_id'))
                        <span class="help-block text-danger">
                                <i class="icon-cancel-circle2 position-left"></i>
                                Verifica que ingreses bien tu información
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <label class="display-block">Agrega más imagenes:</label>
                    <input type="file" name="imagenes[]" class="file-input" multiple="multiple" data-show-upload="false">

                    @if ($errors->has('imagenes'))
                        <span class="help-block text-danger">
                                <i class="icon-cancel-circle2 position-left"></i>
                                Verifica que ingreses bien tu información
                        </span>
                    @endif
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
