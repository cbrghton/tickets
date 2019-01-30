@extends('layouts.app')

@section('title','Tickets')

@push('assets')
    <script type="text/javascript" src="{{ asset('assets/js/plugins/tables/datatables/datatables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins/forms/selects/select2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/datatable_tickets.js') }}"></script>
@endpush

@section('content')

    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Tickets</h5>
        </div>
        <div class="panel-body">
            Listado de todos los tickets que se tienen asociados.
        </div>
        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">

            <!--<div class="datatable-header">
                <div id="DataTables_Table_0_filter" class="dataTables_filter">
                    <label><span>Buscar:</span><input type="search" class="" placeholder="Buscando..." aria-controls="DataTables_Table_0"></label>
                </div>
                <div class="dataTables_length" id="DataTables_Table_0_length">
                    <label><span>Mostrar:</span>
                        <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                        <span class="select2 select2-container select2-container--default" dir="ltr" style="width: auto;">
                            <span class="selection">
                                <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-DataTables_Table_0_length-61-container">
                                    <span class="select2-selection__rendered" id="select2-DataTables_Table_0_length-61-container" title="10">10</span>
                                    <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                </span>
                            </span>
                            <span class="dropdown-wrapper" aria-hidden="true"></span>
                        </span>
                    </label>
                </div>
            </div>
-->
            <div class="datatable-scroll">
                <table class="table datatable-basic dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                    <thead>
                        <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending">Folio Ticket</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1">Incidencia</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1">Fecha de Registro</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1">Sistema</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1">Estado</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1">Asignado a:</th>
                            <th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 100px;">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for($i = 1; $i <= 20; $i++)
                            <tr role="row" class="{{$i%2 ? "even":"odd"}}">
                                <td class="sorting_1">2019{{$i}}</td>
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
                                                <li><a href="#"><i class="icon-pencil4"></i> Editar</a></li>
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
           <!-- <div class="datatable-footer">
                <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Mostrando 1 a 10 de 15 entradas</div>
                <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                    <a class="paginate_button previous disabled" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" id="DataTables_Table_0_previous">←</a>
                    <span>
                        <a class="paginate_button current" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0">1</a>
                        <a class="paginate_button " aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0">2</a>
                    </span>
                    <a class="paginate_button next" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" id="DataTables_Table_0_next">→</a>
                </div>
            </div>
-->
        </div>
    </div>







@endsection

