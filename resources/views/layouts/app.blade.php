<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Tickets</title>

    <!-- Global stylesheets -->
    <link href="{{ asset( url('https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900') ) }}"
          rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/icons/icomoon/styles.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/core.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/components.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/colors.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
          integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="{{ asset('assets/js/plugins/ui/moment/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins/loaders/pace.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/core/libraries/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/core/libraries/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins/loaders/blockui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins/ui/nicescroll.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins/ui/drilldown.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins/ui/fab.min.js') }}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    @stack('assets')
    @include('auth.passwords.reset')
    <script type="text/javascript" src="{{ asset('assets/js/core/app.js') }}"></script>
    <!-- /theme JS files -->

</head>

<body class="navbar-bottom sidebar-xs">

<!-- Page header -->
<div class="page-header page-header-inverse">

    <!-- Main navbar -->
    <div class="navbar navbar-inverse navbar-transparent">
        <div class="navbar-header">
            <ul class="nav navbar-nav pull-right">
                <li>
                    <a class="navbar-brand" href="{{ url('/') }}"
                       style="font-weight: bold; font-size: 25px;">Tickets</a>
                </li>
            </ul>

            <ul class="nav navbar-nav pull-right visible-xs-block">
                <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-grid3"></i></a></li>
            </ul>
        </div>

        <div class="navbar-collapse collapse" id="navbar-mobile">

            <div class="navbar-right">
                <ul class="nav navbar-nav">
                    <li class="dropdown dropdown-user">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{ asset('assets/images/placeholder.jpg') }}" alt="">
                            <span>{{ Auth::user()->nombre }}</span>
                            <i class="caret"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="" data-target="#modal-password" data-toggle="modal"><i
                                        class="icon-user-plus"></i>Cambiar contraseña</a></li>


                            <li class="divider"></li>
                            <li><a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                                    <i class="icon-switch2"></i> Cerrar Sesión

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        @csrf
                                    </form>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /main navbar -->

    <!-- Sidebar controls -->
    <ul class="fab-menu fab-menu-top-left hidden-xs" data-fab-toggle="hover">
        <li>
            <a class="fab-menu-btn btn btn-default btn-float btn-rounded btn-icon sidebar-control sidebar-secondary-hide">
                <i class="icon-indent-decrease"></i>
            </a>
        </li>
    </ul>
    <!-- /sidebar controls -->


    <!-- Page header content -->
    <div class="page-header-content">
        <div class="page-title">
            <h4>@yield('title')</h4>
        </div>
    </div>
    <!-- /page header content -->
</div>
<!-- /page header -->


<!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Secondary sidebar -->
        <div class="sidebar sidebar-secondary sidebar-default">
            <div class="sidebar-content">

                <!-- Timer -->
                <div class="sidebar-category time">
                    <div class="category-title">
                        <span> Tiempo</span>
                        <ul class="icons-list">
                            <li><a href="#" data-action="collapse"></a></li>
                        </ul>
                    </div>

                    <div class="category-content">
                        <ul class="timer-weekdays mb-10">
                            <li><a href="#" id="day-1" class="label label-default">Lun</a></li>
                            <li><a href="#" id="day-2" class="label label-default">Mar</a></li>
                            <li><a href="#" id="day-3" class="label label-default">Mie</a></li>
                            <li><a href="#" id="day-4" class="label label-default">Jue</a></li>
                            <li><a href="#" id="day-5" class="label label-default">Vie</a></li>
                            <li><a href="#" id="day-6" class="label label-default">Sab</a></li>
                            <li><a href="#" id="day-0" class="label label-default">Dom</a></li>
                        </ul>

                        <ul class="timer mb-10">
                            <li>
                                <div id="hour"></div>
                                <span>horas</span>
                            </li>
                            <li class="dots">:</li>
                            <li>
                                <div id="minute"></div>
                                <span>minutos</span>
                            </li>
                            <li class="dots">:</li>
                            <li>
                                <div id="second"></div>
                                <span>segundos</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /timer -->


                <!-- Action buttons -->
                <div class="sidebar-category">
                    <div class="category-title">
                        <span>Tickets</span>
                        <ul class="icons-list">
                            <li><a href="#" data-action="collapse"></a></li>
                        </ul>
                    </div>

                    <div class="category-content">
                        <div class="row">
                            <div class="col-xs-6">
                                <a href="{{ route('ticket.create') }}">
                                    <button class="btn bg-teal-400 btn-block btn-float btn-float-lg text-size-small"
                                            type="button"><i class="fas fa-ticket-alt"></i><span>Crear Ticket</span>
                                    </button>
                                </a>
                            </div>

                            <div class="col-xs-6">
                                <a href="{{ route('ticket.show') }}">
                                    <button class="btn bg-warning-400 btn-block btn-float btn-float-lg text-size-small"
                                            type="button"><i class="fas fa-clipboard-list"></i><span>Ver Tickets</span>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /action buttons -->


                <!-- Task navigation -->
                <div class="sidebar-category">
                    <div class="category-title">
                        <span>Usuarios</span>
                        <ul class="icons-list">
                            <li><a href="#" data-action="collapse"></a></li>
                        </ul>
                    </div>

                    <div class="category-content">
                        <div class="row">
                            <div class="col-xs-6">
                                <a href="{{ route('auth.create') }}">
                                    <button class="btn bg-purple-400 btn-block btn-float btn-float-lg text-size-small"
                                            type="button"><i class="fas fa-user-plus"></i><span>Crear Usuario</span>
                                    </button>
                                </a>
                            </div>

                            <div class="col-xs-6">
                                <a href="{{ route('auth.show') }}">
                                    <button class="btn bg-blue-400 btn-block btn-float btn-float-lg text-size-small"
                                            type="button"><i class="fas fa-users"></i><span>Ver Usuarios</span>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /task navigation -->

            </div>
        </div>
        <!-- /secondary sidebar -->

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Detailed task -->
            <div class="row">
                <div class="col-lg-12">
                    @yield('content')
                </div>
            </div>
            <!-- /detailed task -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</div>
<!-- /page container -->

<!-- Footer -->
<div class="navbar navbar-default navbar-fixed-bottom footer">
    <ul class="nav navbar-nav visible-xs-block">
        <li><a class="text-center collapsed" data-toggle="collapse" data-target="#footer"><i
                    class="icon-circle-up2"></i></a></li>
    </ul>

    <div class="navbar-collapse collapse" id="footer">
        <div class="navbar-text">
            <a href="{{ url('https://www.semovi.cdmx.gob.mx') }}" class="navbar-link">SECRETARIA DE MOVILIDAD DE LA
                CIUDAD DE MÉXICO</a> DIRECCION DE SISTEMAS
        </div>
    </div>
</div>
<!-- /footer -->

<!-- Datetime script -->
<script type="text/javascript" src="{{ asset('assets/js/pages/custom/datetime.js') }}"></script>
<!-- /datetime script -->

</body>
</html>
