<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <script type="text/javascript" src="{{ asset('assets/js/plugins/loaders/pace.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/core/libraries/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/core/libraries/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins/loaders/blockui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins/ui/nicescroll.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins/ui/drilldown.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins/ui/fab.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/pages/custom/helpers.js') }}"></script>
    <!-- /core JS files -->


    <!-- Theme JS files -->
    <script type="text/javascript" src="{{ asset('assets/js/core/app.js') }}"></script>
    <!-- /theme JS files -->

</head>

<body class="navbar-bottom login-container">

<!-- Main navbar -->
<div class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ url('/') }}">Tickets</a>

        <ul class="nav navbar-nav pull-right visible-xs-block">
            <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-grid3"></i></a></li>
        </ul>
    </div>
</div>
<!-- /main navbar -->


<!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Simple login form -->
            <form method="POST" action="{{ route('login') }}" class="login-form">
                @csrf

                <div class="panel panel-body">
                    <div class="text-center">
                        <div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
                        <h5 class="content-group">Ingresa a tu cuenta
                            <small class="display-block">Escribe tus credenciales</small>
                        </h5>
                    </div>

                    <div class="form-group has-feedback has-feedback-left{{ $errors->has('rfc') ? ' has-error' : '' }}">
                        <input type="text" class="form-control"
                               placeholder="RFC" name="rfc" onkeyup="toUpperCase(this)">
                        <div class="form-control-feedback">
                            <i class="icon-user text-muted"></i>
                        </div>

                        @if ($errors->has('rfc'))
                            <span class="help-block text-danger">
                                <i class="icon-cancel-circle2 position-left"></i>
                                {{ $errors->first('rfc') }}
                            </span>
                        @endif
                    </div>

                    <div
                        class="form-group has-feedback has-feedback-left{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input type="password" class="form-control"
                               placeholder="Constraseña" name="password" required>
                        <div class="form-control-feedback">
                            <i class="icon-lock2 text-muted"></i>
                        </div>

                        @if ($errors->has('password'))
                            <span class="help-block text-danger">
                                <i class="icon-cancel-circle2 position-left"></i>
                                {{ $errors->first('password') }}
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn bg-pink-400 btn-block">Inicia Sesión<i
                                class="icon-circle-right2 position-right"></i></button>
                    </div>
                </div>
            </form>
            <!-- /simple login form -->

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
            <a href="www.semovi.cdmx.gob.mx" class="navbar-link">SECRETARIA DE MOVILIDAD</a> DIRECCIÓN DE SISTEMAS
        </div>
    </div>
</div>
<!-- /footer -->

</body>
</html>
