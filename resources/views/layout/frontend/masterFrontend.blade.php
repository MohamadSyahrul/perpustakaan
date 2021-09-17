<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="{{asset('template/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('template/css/all.min.css')}}">
    <title>
        @yield('title')
    </title>
    <link href="{{asset('template/img/logoview.png')}}" rel="shortcut icon">
    
</head>

<body>
    <header class="header" id=#home>
        @include('layout.frontend.headerFrontend')
    </header>
    
    @yield('content')

    <footer>
       @include('layout.frontend.footerFrontend')
    </footer>

    <!--javascript-->
    <script src="{{asset('template/js/custom.js')}}"></script>
</body>
</html>
