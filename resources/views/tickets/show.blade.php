@extends('layouts.app')

@section('title','Tickets')

@push('assets')
    <script type="text/javascript" src="{{ asset('assets/js/plugins/tables/datatables/datatables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins/forms/selects/select2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/pages/custom/datatable_tickets.js') }}"></script>
@endpush

@section('content')
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Tickets</h5>
        </div>
        <div class="panel-body">
            <div class="form-group">
                Listado de todos los tickets que se tienen asociados.
            </div>
            <div class="form-group">
                <table class="table datatable-basic dataTable table-hover">
                    <thead>
                    <tr>
                        <th>Folio Ticket</th>
                        <th>Incidencia</th>
                        <th>Fecha de Registro</th>
                        <th>Sistema</th>
                        <th>Estado</th>
                        <th>Asignado a:</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @for($i = 1; $i <= 20; $i++)
                        <tr>
                            <td>2019{{$i}}</td>
                            <td>Error {{$i}}</td>
                            <td>29/01/2019</td>
                            <td>Micro</td>
                            <td><span class="label label-{{$i%2 ? "info":"success"}}">{{$i%2 ? "Pendiente":"Resuelto"}}</span>
                            </td>
                            <td></td>
                            <td class="text-center">
                                <ul class="icons-list">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="icon-menu9"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="{{ route('ticket.edit') }}"><i class="icon-pencil4"></i> Editar</a>
                                            </li>
                                            <li><a href="#"><i class="icon-reply"></i> Responder</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

