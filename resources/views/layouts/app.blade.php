<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Movie') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
   

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {!! Html::style('plantilla/vendors/iconfonts/font-awesome/css/all.min.css') !!}
  {!! Html::style('plantilla/vendors/css/vendor.bundle.base.css') !!}
  {!! Html::style('plantilla/vendors/css/vendor.bundle.addons.css') !!}
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  {!! Html::style('plantilla/css/style.css') !!}
  @yield('styles')
  <!-- endinject -->
  <link rel="shortcut icon" href="http://www.urbanui.com/" />
</head>
<body>
    <div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <!--<a class="navbar-brand" href="{{ url('/') }}"> -->
                <a class="navbar-brand" href="#">
                <!-- <img src="http://localhost/movie/resources/img/logo.png"  srcset="">-->
                <img src="{{URL::asset('img/logo3.png')}}" style="width: 100px; height: 80px; ">
                     <!--  {{ config('app.name', 'Movie') }} -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

            </div>
        </nav>

        <div class="py-4" style="text-align:center; width:100%; height:500px;background-color:white"><!--url(https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSYZXmvoNlzumRYwe6LGVWYA52RvRatzokkCRu9h2OcjbumeZaW)-->
            @yield('content')
        </div>
    </div>
   
  <!-- plugins:js -->
  {!! Html::script('plantilla/vendors/js/vendor.bundle.base.js') !!}
    {!! Html::script('plantilla/vendors/js/vendor.bundle.addons.js') !!}
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  {!! Html::script('plantilla/js/off-canvas.js') !!}
    {!! Html::script('plantilla/js/hoverable-collapse.js') !!}
        {!! Html::script('plantilla/js/misc.js') !!}
            {!! Html::script('plantilla/js/settings.js') !!}
             {!! Html::script('plantilla/js/todolist.js') !!}
  <!-- endinject -->
  <!-- Custom js for this page-->
  {!! Html::script('plantilla/js/dashboard.js') !!}
  @yield('scripts') 
</body>
</html>
