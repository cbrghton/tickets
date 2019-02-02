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
            Listado de todos los tickets que se tienen asociados.
        </div>
        <div class="dataTables_wrapper no-footer">
            <table class="table datatable-basic dataTable no-footer" role="grid">
                <thead>
                    <tr role="row">
                        <th class="sorting_asc" tabindex="0" rowspan="1" colspan="1" aria-sort="ascending">Folio Ticket</th>
                        <th class="sorting" tabindex="0" rowspan="1" colspan="1">Incidencia</th>
                        <th class="sorting" tabindex="0" rowspan="1" colspan="1">Fecha de Registro</th>
                        <th class="sorting" tabindex="0" rowspan="1" colspan="1">Sistema</th>
                        <th class="sorting" tabindex="0" rowspan="1" colspan="1">Estado</th>
                        <th class="sorting" tabindex="0" rowspan="1" colspan="1">Asignado a:</th>
                        <th class="text-center sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @for($i = 1; $i <= 20; $i++)
                        <tr role="row" class="{{$i%2 ? "even":"odd"}}">
                            <td>2019{{$i}}</td>
                            <td>Error {{$i}}</td>
                            <td>29/01/2019</td>
                            <td>Micro</td>
                            <td><span class="label label-{{$i%2 ? "info":"success"}}">{{$i%2 ? "Pendiente":"Resuelto"}}</span></td>
                            <td></td>
                            <td class="text-center">
                                <ul class="icons-list">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="icon-menu9"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="{{ route('edit_ticket') }}"><i class="icon-pencil4"></i> Editar</a></li>
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
@endsection

