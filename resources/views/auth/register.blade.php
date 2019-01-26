<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

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
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript" src="{{ asset('assets/js/plugins/forms/styling/switchery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins/forms/styling/switch.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins/tables/datatables/datatables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/core/libraries/jquery_ui/interactions.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins/forms/selects/select2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins/forms/styling/uniform.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('assets/js/core/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/pages/login.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/pages/form_select2.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/pages/form_checkboxes_radios.js') }}"></script>
    <!-- /theme JS files -->

</head>

<body class="navbar-bottom login-container">

<!-- Main navbar -->
<div class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="index.html">TICKETS</a>

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

            <!-- Advanced login -->
            <form action="index.html" class="login-form">
                <div class="panel panel-body">
                    <div class="text-center">
                        <h5 class="content-group">Registra una nueva cuenta
                            <small class="display-block">Todos los campos son requeridos</small>
                        </h5>
                    </div>

                    <div class="content-divider text-muted form-group"><span>Datos Personales</span></div>

                    <div class="form-group has-feedback has-feedback-left">
                        <input type="text" class="form-control{{ $errors->has('rfc') ? ' is-invalid' : '' }}"
                               placeholder="RFC" value="{{ old('rfc') }}" name="rfc">
                        <div class="form-control-feedback">
                            <i class="icon-barcode2 text-muted"></i>
                        </div>

                        @if ($errors->has('name'))
                            <span class="help-block text-danger"><i
                                    class="icon-cancel-circle2 position-left"></i>
                                <strong>{{ $errors->first('rfc') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group has-feedback has-feedback-left">
                        <input type="text" class="form-control" placeholder="Nombre" name="nombre">
                        <div class="form-control-feedback">
                            <i class="icon-user-check text-muted"></i>
                        </div>
                    </div>

                    <div class="form-group has-feedback has-feedback-left">
                        <input type="text" class="form-control" placeholder="Primer Apellido" name="primer_apellido">
                        <div class="form-control-feedback">
                            <i class="icon-user-check text-muted"></i>
                        </div>
                    </div>

                    <div class="form-group has-feedback has-feedback-left">
                        <input type="text" class="form-control" placeholder="Segundo Apellido" name="segundo_apellido">
                        <div class="form-control-feedback">
                            <i class="icon-user-check text-muted"></i>
                        </div>
                    </div>

                    <div class="form-group has-feedback has-feedback-left">
                        <select data-placeholder="Selecciona un modulo" class="select-icons" name="modulo" required>
                            <option></option>
                            <optgroup label="Modulos">
                                <option value="1">Modulo 1</option>
                            </optgroup>
                        </select>
                    </div>

                    <div class="content-divider text-muted form-group"><span>Roles</span></div>

                    <table class="table datatable-roles table-hover">
                        <thead>
                        <tr>
                            <th>Rol</th>
                            <th class="text-center">Estado</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Rol 1</td>
                                <td class="text-center">

                                        <div class="checkbox checkbox-switch">
                                            <label>
                                                <input type="checkbox" name="role[]" value="1"
                                                       data-off-color="danger" data-on-text="Activado"
                                                       data-off-text="Desactivado" class="switch"
                                                       checked="checked">
                                            </label>
                                        </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>


                    <button type="submit" class="btn bg-pink-400 btn-block btn-lg">Register <i
                            class="icon-circle-right2 position-right"></i></button>
                </div>
            </form>
            <!-- /advanced login -->

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
            &copy; 2015. <a href="#" class="navbar-link">Limitless Web App Kit</a> by <a
                href="http://themeforest.net/user/Kopyov" class="navbar-link" target="_blank">Eugene Kopyov</a>
        </div>

        <div class="navbar-right">
            <ul class="nav navbar-nav">
                <li><a href="#">About</a></li>
                <li><a href="#">Terms</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- /footer -->

</body>
</html>
