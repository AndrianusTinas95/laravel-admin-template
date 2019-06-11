<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | @yield('title')</title>

    <link href="{!! asset('/Inspinia/css/bootstrap.min.css')!!}" rel="stylesheet">
    <link href="{!! asset('/Inspinia/font-awesome/css/font-awesome.css')!!}" rel="stylesheet">

    @stack('plugin-css')

    <link href="{!! asset('/Inspinia/css/animate.css')!!}" rel="stylesheet">
    <link href="{!! asset('/Inspinia/css/style.css')!!}" rel="stylesheet">

    @stack('css')
    @stack('style')
</head>

<body>
    <div id="wrapper">
        @include('Inspinia.layouts.partial.navbar')

        <div id="page-wrapper" class="gray-bg">
            @include('Inspinia.layouts.partial.header')
           
            @yield('content')
            {{-- @include('Inspinia.pages.home-1') --}}

            @include('Inspinia.layouts.partial.footer')

        </div>
        @include('Inspinia.layouts.partial.sidebar')
        
    </div>
    
    <!-- Mainly scripts -->
    @include('Inspinia.layouts.assets.js.mainly')
    

    @stack('plugin-js')
     
    <!-- Sparkline -->
    <script src="{!! asset('/Inspinia/js/plugins/sparkline/jquery.sparkline.min.js')!!}"></script>


    
    @stack('js')
    @stack('script')
    
</body>

</html>
