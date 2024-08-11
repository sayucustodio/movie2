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
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
                <div class="row flex-grow">
                    <div class="col-lg-6 d-flex align-items-center justify-content-center">
                        <div class="auth-form-transparent text-left p-3">
                            <div class="brand-logo" style="">
                                <img src="{{URL::asset('img/logo3.png')}}" alt="logo"
                                    style="    display: block;margin-left: auto; margin-right: auto">
                            </div>
                            <h4>Iniciar Sesión</h4>
                            <form method="POST" action="{{ route('login') }}" class="pt-3">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input type="email" id="form1Example13"
                                        class="form-control form-control-lg @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email"
                                        autofocus />
                                    @error('email') <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <label for="floatingInput">Usuario</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="password" id="form1Example23"
                                        class="form-control form-control-lg @error('password') is-invalid @enderror"
                                        name="password" required autocomplete="current-password" />
                                    <label for="floatingInput">Contraseña</label>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>





                                <div class="my-2 d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <input type="checkbox" class="form-check-input">
                                            Recordarme
                                            <i class="input-helper"></i></label>
                                    </div>
                                    <a href="#" class="auth-link text-black">¿Olvidaste tu contraseña?</a>
                                </div>
                                <button type="submit" style="background-color: #0A1262;border-color: #0A1262"
                                    class="btn btn-danger btn-lg btn-block">Ingresar</button>


                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 login-half-bg d-flex flex-row">
                        <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright © 2023
                            All rights reserved.</p>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->

    </div>

    <!-- plugins:js 
    -->
    {
    !!
    Html::script('plantilla/vendors/js/vendor.bundle.base.js')
    !!
    }
    {
    !!
    Html::script('plantilla/vendors/js/vendor.bundle.addons.js')
    !!
    }
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


</body>