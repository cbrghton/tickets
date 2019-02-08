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
    <link rel="stylesheet" href="{{ asset( url('https://use.fontawesome.com/releases/v5.7.0/css/all.css') ) }}"
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
        </div>
    </div>
    <!-- /main navbar -->
</div>
<!-- /page header -->


<!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Detailed task -->
            <div class="col-lg-6 col-lg-offset-3">
                <div class="panel panel-body">
                    <div class="text-center">
                        <div class="icon-object border-warning text-warning"><i class="icon-feed spinner"></i></div>
                        <h5 class="content-group text-warning">Estas intentando entrar a un sitio no autorizado
                            <small class="display-block">Compureba tus permisos</small>
                        </h5>

                        <a href="{{ route('home') }}">
                            <button class="btn btn-block btn-warning">Regresar al inicio!</button>
                        </a>
                    </div>
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

</body>
</html>
