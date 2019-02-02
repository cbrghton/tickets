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
                            <li><a href="#"><i class="icon-user-plus"></i> Cambiar Contraseña</a></li>
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
                        <span>Acciones</span>
                        <ul class="icons-list">
                            <li><a href="#" data-action="collapse"></a></li>
                        </ul>
                    </div>

                    <div class="category-content">
                        <div class="row">
                            <div class="col-xs-6">
                                <a href="{{ route('create_ticket') }}">
                                    <button class="btn bg-teal-400 btn-block btn-float btn-float-lg text-size-small"
                                            type="button"><i class="icon-home"></i> <span>Crear Ticket</span></button>
                                </a>
                            </div>

                            <div class="col-xs-6">
                                <a href="{{ route('see_tickets') }}">
                                    <button class="btn bg-warning-400 btn-block btn-float btn-float-lg text-size-small"
                                            type="button"><i class="icon-stats-bars"></i><span>Ver Tickets</span>
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
                        <span>Navigation</span>
                        <ul class="icons-list">
                            <li><a href="#" data-action="collapse"></a></li>
                        </ul>
                    </div>

                    <div class="category-content no-padding">
                        <ul class="navigation navigation-alt navigation-accordion">
                            <li class="navigation-header">Actions</li>
                            <li><a href="#"><i class="icon-googleplus5"></i> Create task</a></li>
                            <li><a href="#"><i class="icon-portfolio"></i> Create project</a></li>
                            <li><a href="#"><i class="icon-compose"></i> Edit task list</a></li>
                            <li><a href="#"><i class="icon-user-plus"></i> Assign users <span
                                        class="label label-success">94 online</span></a></li>
                            <li><a href="#"><i class="icon-collaboration"></i> Create team</a></li>
                            <li class="navigation-header">Tasks</li>
                            <li><a href="#"><i class="icon-files-empty"></i> All tasks</a></li>
                            <li><a href="#"><i class="icon-file-plus"></i> Active tasks <span
                                        class="badge badge-default">28</span></a></li>
                            <li><a href="#"><i class="icon-file-check"></i> Closed tasks</a></li>
                            <li class="navigation-divider"></li>
                            <li><a href="#"><i class="icon-reading"></i> Assigned to me <span class="badge badge-info">86</span></a>
                            </li>
                            <li><a href="#"><i class="icon-make-group"></i> Assigned to my team <span
                                        class="badge badge-info">47</span></a></li>
                            <li><a href="#"><i class="icon-cog3"></i> Settings</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /task navigation -->


                <!-- Assigned users -->
                <div class="sidebar-category">
                    <div class="category-title">
                        <span>Assigned users</span>
                        <ul class="icons-list">
                            <li><a href="#" data-action="collapse"></a></li>
                        </ul>
                    </div>

                    <div class="category-content">
                        <ul class="media-list">
                            <li class="media">
                                <a href="#" class="media-left"><img src="{{ asset('assets/images/placeholder.jpg') }}"
                                                                    class="img-sm img-circle" alt=""></a>
                                <div class="media-body">
                                    <a href="#" class="media-heading text-semibold">James Alexander</a>
                                    <span class="text-size-mini text-muted display-block">Santa Ana, CA.</span>
                                </div>
                                <div class="media-right media-middle">
                                    <span class="status-mark bg-success"></span>
                                </div>
                            </li>

                            <li class="media">
                                <a href="#" class="media-left"><img src="{{ asset('assets/images/placeholder.jpg') }}"
                                                                    class="img-sm img-circle" alt=""></a>
                                <div class="media-body">
                                    <a href="#" class="media-heading text-semibold">Jeremy Victorino</a>
                                    <span class="text-size-mini text-muted display-block">Dowagiac, MI.</span>
                                </div>
                                <div class="media-right media-middle">
                                    <span class="status-mark bg-danger"></span>
                                </div>
                            </li>

                            <li class="media">
                                <a href="#" class="media-left"><img src="{{ asset('assets/images/placeholder.jpg') }}"
                                                                    class="img-sm img-circle" alt=""></a>
                                <div class="media-body">
                                    <a href="#" class="media-heading text-semibold">Margo Baker</a>
                                    <span class="text-size-mini text-muted display-block">Kasaan, AK.</span>
                                </div>
                                <div class="media-right media-middle">
                                    <span class="status-mark bg-success"></span>
                                </div>
                            </li>

                            <li class="media">
                                <a href="#" class="media-left"><img src="{{ asset('assets/images/placeholder.jpg') }}"
                                                                    class="img-sm img-circle" alt=""></a>
                                <div class="media-body">
                                    <a href="#" class="media-heading text-semibold">Beatrix Diaz</a>
                                    <span class="text-size-mini text-muted display-block">Neenah, WI.</span>
                                </div>
                                <div class="media-right media-middle">
                                    <span class="status-mark bg-warning"></span>
                                </div>
                            </li>

                            <li class="media">
                                <a href="#" class="media-left"><img src="{{ asset('assets/images/placeholder.jpg') }}"
                                                                    class="img-sm img-circle" alt=""></a>
                                <div class="media-body">
                                    <a href="#" class="media-heading text-semibold">Richard Vango</a>
                                    <span class="text-size-mini text-muted display-block">Grapevine, TX.</span>
                                </div>
                                <div class="media-right media-middle">
                                    <span class="status-mark bg-grey-400"></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /assigned users -->


                <!-- Revisions -->
                <div class="sidebar-category">
                    <div class="category-title">
                        <span>Revisions</span>
                        <ul class="icons-list">
                            <li><a href="#" data-action="collapse"></a></li>
                        </ul>
                    </div>

                    <div class="category-content">
                        <ul class="media-list">
                            <li class="media">
                                <div class="media-left">
                                    <a href="#"
                                       class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i
                                            class="icon-git-pull-request"></i></a>
                                </div>

                                <div class="media-body">
                                    Drop the IE <a href="#">specific hacks</a> for temporal inputs
                                    <div class="media-annotation">4 minutes ago</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="media-left">
                                    <a href="#"
                                       class="btn border-warning text-warning btn-flat btn-rounded btn-icon btn-sm"><i
                                            class="icon-git-commit"></i></a>
                                </div>

                                <div class="media-body">
                                    Add full font overrides for popovers and tooltips
                                    <div class="media-annotation">36 minutes ago</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="media-left">
                                    <a href="#"
                                       class="btn border-info text-info btn-flat btn-rounded btn-icon btn-sm"><i
                                            class="icon-git-branch"></i></a>
                                </div>

                                <div class="media-body">
                                    <a href="#">Chris Arney</a> created a new <span class="text-semibold">Design</span>
                                    branch
                                    <div class="media-annotation">2 hours ago</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="media-left">
                                    <a href="#"
                                       class="btn border-success text-success btn-flat btn-rounded btn-icon btn-sm"><i
                                            class="icon-git-merge"></i></a>
                                </div>

                                <div class="media-body">
                                    <a href="#">Eugene Kopyov</a> merged <span class="text-semibold">Master</span> and
                                    <span class="text-semibold">Dev</span> branches
                                    <div class="media-annotation">Dec 18, 18:36</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="media-left">
                                    <a href="#"
                                       class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i
                                            class="icon-git-pull-request"></i></a>
                                </div>

                                <div class="media-body">
                                    Have Carousel ignore keyboard events
                                    <div class="media-annotation">Dec 12, 05:46</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /revisions -->


                <!-- Completeness stats -->
                <div class="sidebar-category">
                    <div class="category-title">
                        <span>Completeness stats</span>
                        <ul class="icons-list">
                            <li><a href="#" data-action="collapse"></a></li>
                        </ul>
                    </div>

                    <div class="category-content">
                        <ul class="progress-list">
                            <li>
                                <label>Highest priority <span>80%</span></label>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-danger" style="width: 80%">
                                        <span class="sr-only">80% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <label>High priority <span>70%</span></label>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-info" style="width: 70%">
                                        <span class="sr-only">70% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <label>Normal priority <span>50%</span></label>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-primary" style="width: 50%">
                                        <span class="sr-only">50% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <label>Low prioruty <span>60%</span></label>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-success" style="width: 60%">
                                        <span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /completeness stats -->

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
