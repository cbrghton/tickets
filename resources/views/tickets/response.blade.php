@extends('layouts.app')
@push('assets')
    <script type="text/javascript" src="{{ asset('assets/js/plugins/forms/selects/select2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins/forms/styling/uniform.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins/media/fancybox.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/pages/form_layouts.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/pages/components_thumbnails.js') }}"></script>
@endpush
@section('title', 'Responder Ticket')
@section('content')
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Responder Ticket</h5>
        </div>

        <div class="panel-body">
            <div class="form-group">
                <label for="system">Sistema:</label>
                <input id="system" value="{{ $ticket->system->sistema }}" class="form-control" readonly="readonly">
            </div>

            <div class="form-group">
                <label for="date">Fecha de solicitud:</label>
                <input id="date" value="{{ $ticket->created_at }}" class="form-control" readonly="readonly">
            </div>

            <div class="form-group">
                <label for="incidence">Incidencia:</label>
                <textarea id="incidence" class="form-control" placeholder="{{ $ticket->incidencia }}" readonly="readonly" rows="4"></textarea>
            </div>

            <div class="row">
                @foreach($ticket->images as $image)
                    <div class="col-xs-6 col-sm-3">
                        <div class="thumbnail">
                            <a href="data:image/png;base64,{{ $image->imagen }}" data-popup="lightbox">
                                <img src="data:image/png;base64,{{ $image->imagen }}" alt="">
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <form method="post" action="{{ route('ticket.response') }}">
                @csrf()
                <input name="id_solicitud" value="{{ $ticket->id_solicitud }}" hidden="hidden">
                <input name="estatus" value="RESUELTO" hidden="hidden">

                <div class="form-group">
                    <label>Respuesta:</label>
                    <textarea class="form-control" name="respuesta" placeholder="Respuesta de la solicitud" rows="4" onkeyup="toUpperCase(this)"></textarea>
                </div>

                <div class="form-group" align="right">
                    <button type="submit" class="btn btn-primary">Enviar respuesta</button>
                </div>
            </form>
        </div>
    </div>
@endsection
