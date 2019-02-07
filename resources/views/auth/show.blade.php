@extends('layouts.app')

@section('title','Usuarios')

@push('assets')
    <script type="text/javascript" src="{{ asset('assets/js/plugins/tables/datatables/datatables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins/forms/selects/select2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/pages/custom/datatable_usuarios.js') }}"></script>
@endpush

@section('content')
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Usuarios</h5>
        </div>
        <div class="panel-body">
            Listado de todos los usuarios registrados.
        </div>
        <div class="dataTables_wrapper no-footer">
            <table class="table datatable-basic dataTable no-footer" role="grid">
                <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" rowspan="1" colspan="1" aria-sort="ascending">Nombre</th>
                    <th class="sorting" tabindex="0" rowspan="1" colspan="1">RFC</th>
                    <th class="sorting" tabindex="0" rowspan="1" colspan="1">Modulo</th>
                    <th class="sorting" tabindex="0" rowspan="1" colspan="1">Estatus</th>
                    <th class="text-center sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">Acciones</th>
                </tr>
                </thead>
                <tbody>
                @for($i = 1; $i <= 20; $i++)
                    <tr role="row" class="{{$i%2 ? "even":"odd"}}">
                        <td>Usuario{{$i}}</td>
                        <td>XXXX000000</td>
                        <td>Modulo</td>
                        <td><span class="label label-{{$i%2 ? "danger":"success"}}">{{$i%2 ? "Baja":"Alta"}}</span></td>
                        <td class="text-center">
                            <ul class="icons-list">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#"><i class="icon-vcard"></i> Editar Usuario</a></li>
                                        <li><a href="#DeshabilitarUsuarioModal" data-toggle="modal" data-iduser="{{$i}}" class="DeshabilitarUsuarioClass"><i class="icon-user-block"></i> Deshabilitar</a></li>
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

    <!-- Modal -->
    <div class="modal fade" id="DeshabilitarUsuarioModal" tabindex="-1" role="dialog" aria-labelledby="DeshabilitarUsuarioModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="DeshabilitarUsuarioLabel">Deshabilitar Usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ¿Seguro que desea deshabilitar al <span id="NombreUsuarioSpan"></span>?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button id="ConfirmarDeshabilitarUsuario" type="button" class="btn btn-primary">Confirmar</button>
                </div>
            </div>
        </div>
    </div>
@endsection