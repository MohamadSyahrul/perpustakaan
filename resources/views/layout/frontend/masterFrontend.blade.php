<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="{{asset('template/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('template/css/all.min.css')}}">
    <title>
        @yield('title') {{-- yield digunakan untuk memberikan tanda kepada section, agar bisa dipanggil oleh banyak section --}}
    </title>
    <link href="{{asset('template/img/logoview.png')}}" rel="shortcut icon">
    
</head>

<body>
    <header class="header" id=#home>
        @include('layout.frontend.headerFrontend') {{-- include untuk memisahkan layout agar rapi dan mudah dipahami --}}
    </header>
    
    @yield('content') {{-- yield digunakan untuk memberikan tanda kepada section, agar bisa dipanggil oleh banyak section --}}

    <footer>
       @include('layout.frontend.footerFrontend') {{-- include untuk memisahkan layout agar rapi dan mudah dipahami --}}
    </footer>

    <!--javascript-->
    <script src="{{asset('template/js/custom.js')}}"></script>
</body>
</html>
