@extends('layouts.app')
@push('assets')
    <script type="text/javascript" src="{{ asset('assets/js/plugins/forms/selects/select2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins/forms/styling/uniform.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/pages/form_layouts.js') }}"></script>
@endpush
@section('title', 'Responder Ticket')
@section('content')
     <div class="panel panel-flat">
        <div class="panel-heading">
            <h6 class="panel-title">Responder Ticket</h6>
        </div>
        <div class="panel-body">
             <div class="form-group">
                 <label>Sistema:</label>
                 Sistema Alfred.
              </div>
             <div class="form-group">
                <label>Fecha de solicitud:</label>
                 30 de Enero de 2019.
             </div>
             <div class="form-group">
                <label>Incidencia:</label>
                <textarea  class="form-control" readonly="readonly" rows="4"></textarea>
             </div>
             <div class="row">
                <div class="col-md-1">
                     <div class="panel panel-flat">
                         <div class="panel-heading">
                             <lavel>Evidencia</lavel>
                             <a class="heading-elements-toggle"><i class="icon-more"></i></a></div>
                         <div class="thumbnail">
                             <a href="" data-target="#modal-show-1" data-toggle="modal"> <img src="{{ asset('assets/images/placeholder.jpg') }}" alt=""></a>
                             @include('tickets.modal')
                         </div>
                     </div>
                 </div>
            </div>
            <div class="form-group">
               <label>Respuesta:</label>
               <textarea class="form-control" placeholder="Respuesta de la solicitud" rows="4"></textarea>
            </div>
            <div class="form-group" align="right">
                <button type="submit" class="btn btn-primary">Enviar respuesta</button>
            </div>
        </div>
    </div>
    @endsection