<!DOCTYPE html>

<html ><!--<![endif]-->
<head>
    <!-- Basic Page Needs -->
    <meta charset="UTF-8">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>@yield('title') | Lucky Ant Trading Limited</title>
    <link rel="preload" href="{{asset('fonts/fa-brands-400.woff2')}}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{asset('fonts/fa-solid-900.woff2')}}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{asset('fonts/montserrat-v14-latin-600.woff2')}}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{asset('fonts/lato-v16-latin-regular.woff2')}}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{asset('fonts/lato-v16-latin-700.woff2')}}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{asset('css/style.css')}}" as="style">
    <link rel="preload" href="{{asset('js/vendors/uikit.min.js')}}" as="script">
    <link rel="preload" href="{{asset('js/utilities.min.js')}}" as="script">
    <link rel="preload" href="{{asset('js/config-theme.js')}}" as="script">

    <!-- Add this to the head section of your HTML file -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- stylesheet -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
     <!-- uikit -->
    <script src="{{asset('js/vendors/uikit.min.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    
    <script>
        window.translations = {
            login: "{{ __('messages.login') }}",
      
        };
    </script>
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">
    <!-- touch icon -->
    <link rel="apple-touch-icon-precomposed" href="{{asset('img/Logo/logo-only.png')}}">

 
</head>
<body>

    @include('master.nav')


    @yield('content')

    @include('master.footer')



<!-- Javascript -->
<script src="{{asset('js/vendors/tradingview-widget.min.js')}}"></script>
<script src="{{asset('js/utilities.min.js')}}"></script>
<script src="{{asset('js/config-theme.js')}}"></script>
<script>
    // var loginUrl = "{{ url('https://member.luckyantfxasia.com/login') }}";
    // theme_mobilenav();
</script>
@yield('script')
@yield('scripts')
@stack('addscripts') 
</body>
</html>
