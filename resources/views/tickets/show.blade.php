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
                    @foreach($tickets as $ticket)
                        <tr>
                            <td>{{ $ticket->id_solicitud }}</td>
                            <td>{{ substr($ticket->incidencia, 0, 70) . '...' }}</td>
                            <td>{{ $ticket->created_at }}</td>
                            <td>{{ $ticket->system->sistema }}</td>
                            <td><span class="label label-{{ $ticket->estatus == 'PENDIENTE' ? "info":"success" }}">
                                    {{ $ticket->estatus }}
                                </span></td>
                            <td>{{ $ticket->userResponse ? $ticket->userResponse->nombre : 'SIN ASIGNAR' }}</td>
                            <td class="text-center">
                                <ul class="icons-list">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="icon-menu9"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li>
                                                <a href="" data-toggle="modal" data-target="#modal_assign">
                                                    <i class="glyphicon glyphicon-pushpin position-left"></i> Asignar
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('ticket.edit', ['id' => $ticket->id_encrypt]) }}">
                                                    <i class="icon-pencil4 position-left"></i> Editar
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('ticket.view', ['id' => $ticket->id_encrypt]) }}">
                                                    <i class="icon-reply position-left"></i> Responder
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </td>
                        </tr>

                        @include('tickets.assign')
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

