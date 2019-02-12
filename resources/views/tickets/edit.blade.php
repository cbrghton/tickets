@extends('layouts.app')

@push('assets')
    <script type="text/javascript" src="{{ asset('assets/js/plugins/forms/selects/select2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins/uploaders/fileinput.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins/forms/styling/uniform.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/pages/custom/editar_ticket.js') }}"></script>
@endpush

@section('title', 'Editar Ticket')

@section('content')
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h6 class="panel-title">Editar Ticket</h6>
        </div>

        <div class="panel-body">
            <form method="post" action="{{ route('ticket.update') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Descripción de la Incidencia:</label>
                    <textarea rows="5" cols="5" class="form-control" placeholder="La incidencia"
                              readonly="readonly"></textarea>
                </div>

                <div class="form-group">
                    <label>Información adicional:</label>
                    <span class="help-block">Esta información se agregara a la descripción de la incidencia</span>
                    <textarea rows="5" cols="5" class="form-control" name="incidencia" placeholder="Opcional"></textarea>

                    @if ($errors->has('incidencia'))
                        <span class="help-block text-danger">
                                <i class="icon-cancel-circle2 position-left"></i>
                                Verifica tu información
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <label class="display-block">Agrega más imagenes:</label>
                    <input type="file" name="imagenes[]" class="file-input" multiple="multiple" data-show-upload="false">

                    @if ($errors->has('imagenes'))
                        <span class="help-block text-danger">
                                <i class="icon-cancel-circle2 position-left"></i>
                                {{ $errors->first('imagenes') }}
                            </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="id_sistema">Sistema Asociado</label>
                    <select data-placeholder="{{ $ticket->system->sistema }}" class="select" name="id_sistema" id="id_sistema">
                        <option></option>
                        @foreach($systems as $system)
                            <option value="{{ $system->id_sistema }}">{{ $system->sistema }}</option>
                        @endforeach
                    </select>

                    @if ($errors->has('id_sistema'))
                        <span class="help-block text-danger">
                                <i class="icon-cancel-circle2 position-left"></i>
                                Verifica tu información
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
@endsection
