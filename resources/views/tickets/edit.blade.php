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
                    <textarea rows="5" cols="5" class="form-control" name="incidence" placeholder="Opcional"></textarea>

                    @if ($errors->has('incidence'))
                        <span class="help-block text-danger">
                                <i class="icon-cancel-circle2 position-left"></i>
                                Verifica tu información
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <label class="display-block">Agrega más imagenes:</label>
                    <input type="file" name="images[]" class="file-input" multiple="multiple" data-show-upload="false">

                    @if ($errors->has('images'))
                        <span class="help-block text-danger">
                                <i class="icon-cancel-circle2 position-left"></i>
                                {{ $errors->first('images') }}
                            </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="id_system">Sistema Asociado</label>
                    <select data-placeholder="Selecciona un sistema" class="select" name="id_system" id="id_system">
                        <option></option>
                        <optgroup label="Sistemas de Licencias">
                            <option value="AZ">Licencias A</option>
                            <option value="CO">Licencias B</option>
                            <option value="ID">Licencias C</option>
                            <option value="WY">Licencias D</option>
                            <option value="WY">Licencias E</option>
                        </optgroup>
                        <optgroup label="Sistemas Vehiculares">
                            <option value="AL">Oklahoma</option>
                            <option value="IA">Taxi 2.0</option>
                        </optgroup>
                    </select>

                    @if ($errors->has('system'))
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
