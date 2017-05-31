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

    @extends('layout._header')

</head>

<body class="login-page">

    @extends('auth.login')

    @extends('layout._footer')

    @section('js')
        <script src="{{ asset('/assets/js/sign-in.js')}}"></script>
    @endsection

</body>

</html>