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
    <title>Log In | TC</title>
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

    @extends('auth.login')

    @extends('layout._footer')

    @section('js')
        <script src="{{ asset('/assets/js/sign-in.js')}}"></script>
    @endsection

</body>

</html>