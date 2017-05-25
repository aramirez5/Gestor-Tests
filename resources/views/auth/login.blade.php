<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="cache-control" content="no-store" />
    <meta http-equiv="cache-control" content="must-revalidate" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
    <meta http-equiv="pragma" content="no-cache" />
    <title>Log In | GdT</title>
    <!-- Favicon-->
    <link rel="icon" href="{{ asset('/assets/img/favicon.ico')}}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{ asset('/assets/css/bootstrap/bootstrap.css')}}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{ asset('/assets/css/node-waves/waves.css')}}" rel="stylesheet">

    <!-- Animation Css -->
    <link href="{{ asset('/assets/css/animate-css/animate.css')}}" rel="stylesheet">

    <!-- Custom Css -->
    <link href="{{ asset('/assets/css/style.css')}}" rel="stylesheet">
</head>

<body class="login-page">
<div class="login-box">
    <div class="logo">
        <a>Gestor de<b> TESTS</b></a>
    </div>
    <div class="card">
        <div class="body">
            <form action="{{ route('loginAdmin') }}" autocomplete="on" method="post" role="form">
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <div class="msg">Iniciar Sesión</div>
                <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                    <div class="form-line">
                        <input type="email" class="form-control" name="email" placeholder="Email" required autofocus>
                    </div>
                    <span>{!! $errors->first('email', '<span class="help-block">:message</span>') !!}</span>
                </div>
                <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                    <div class="form-line">
                        <input type="password" class="form-control" name="password" placeholder="Contraseña" required>
                    </div>
                    <span>{!! $errors->first('password', '<span class="help-block">:message</span>') !!}</span>
                </div>
                <div class="row">
                    <div class="col-xs-8 p-t-5">
                        <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                        <label for="rememberme">Recuérdame</label>
                    </div>
                    <div class="col-xs-4">
                        <button class="btn btn-block bg-pink waves-effect" type="submit">ENTRAR</button>
                    </div>
                </div>
                <div class="row m-t-15 m-b--20">
                    <div class="col-xs-6">
                        <a href="sign-up.html">¡Regístrate!</a>
                    </div>
                    <div class="col-xs-6 align-right">
                        <a href="forgot-password.html">Recordar Contraseña</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Jquery Core Js -->
<script src="{{ asset('/assets/js/jquery/jquery.min.js')}}"></script>

<!-- Bootstrap Core Js -->
<script src="{{ asset('/assets/js/bootstrap/bootstrap.js')}}"></script>

<!-- Waves Effect Plugin Js -->
<script src="{{ asset('/assets/js/node-waves/waves.js')}}"></script>

<!-- Validation Plugin Js -->
<script src="{{ asset('/assets/js/jquery/jquery.validate.js')}}"></script>

<!-- Custom Js -->
<script src="{{ asset('/assets/js/admin.js')}}"></script>
<script src="{{ asset('/assets/js/sign-in.js')}}"></script>
</body>

</html>