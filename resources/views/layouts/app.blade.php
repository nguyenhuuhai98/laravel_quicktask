<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ trans('layout.quickstart') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/f714ee491f.js" crossorigin="anonymous"></script>
    <!-- CSS And JavaScript -->
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-md bg-light navbar-light">
            <a class="navbar-brand" href="#">{{ trans('layout.task') }}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
            </div>
        </nav>
        <br>
        @yield('content')
    </div>
</body>
</html>
