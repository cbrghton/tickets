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
                @foreach($users as $user)
                    <tr role="row">
                        <td>{{$user->primer_apellido." ".$user->segundo_apellido." ".$user->nombre}}</td>
                        <td>{{$user->rfc}}</td>
                        <td>{{$user->module->modulo}}</td>
                        <td><span
                                class="label label-{{$user->estatus == "ALTA" ? "success":"danger"}}">{{$user->estatus}}</span>
                        </td>
                        <td class="text-center">
                            <ul class="icons-list">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li>
                                            <form action="{{ route('auth.edit', ['id' => $user->id_user]) }}" method="get">
                                                <button type="submit" class="btn btn-link"><i class="icon-vcard"></i>
                                                    Editar Usuario
                                                </button>
                                            </form>
                                        </li>
                                        <li><a href="#DeshabilitarUsuarioModal" data-toggle="modal"
                                               data-iduser="{{$user->id_user}}" class="DeshabilitarUsuarioClass"><i
                                                    class="icon-user-block"></i> Deshabilitar</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="DeshabilitarUsuarioModal" tabindex="-1" role="dialog"
         aria-labelledby="DeshabilitarUsuarioModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="DeshabilitarUsuarioLabel">Deshabilitar Usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="#" method="post">
                    <div class="modal-body">

                        {{ csrf_field() }}
                        <input type="hidden" id="id_user_modal" name="id_user" value="">
                        ¿Seguro que desea deshabilitar al usuario: <span id="NombreUsuarioSpan"></span>?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Confirmar</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
