<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap-theme.css') }}">

    <title>Admin Panel</title>

    <script type="text/javascript" src="{!! asset('bootstrap/js/bootstrap.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('js/jquery.js') !!}"></script>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script type="text/javascript" src="{!! asset('js/main.js') !!}"></script>

</head>
<body>
<div class="container">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="{{route('home')}}">Главная</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="{{route('services')}}">Услуги <span class="sr-only">(current)</span></a></li>
                    <li><a href="{{route('categories')}}">Каталог техники</a></li>
                </ul>


            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <div class="content">
        @yield('content')
    </div>
</div>

</body>
</html>