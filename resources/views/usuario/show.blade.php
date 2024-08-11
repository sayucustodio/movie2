@extends('admin')
@section('styles')
<link rel="shortcut icon" href="http://www.urbanui.com/" />
@endsection

@section('contenido')
<div class="content-wrapper">
    <div class="page-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">

                <li class="breadcrumb-item active" aria-current="page">Detalle de usuario</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="border-bottom text-center pb-4">
                                <img src="{{URL::asset('img/user.png')}}" alt="profile"
                                    class="img-lg rounded-circle mb-3">
                                <p>Administrador de Movie
                                </p>

                            </div>
                            <div class="border-bottom py-4">
                                <p>Habilidades</p>
                                <div>
                                    <label class="badge badge-outline-dark">Ingeniero de Sistemas</label>
                                    <label class="badge badge-outline-dark">Gestión de proyectos</label>
                                    <label class="badge badge-outline-dark">Programación</label>
                                    <label class="badge badge-outline-dark">Diseño Gráfico</label>
                                    <label class="badge badge-outline-dark">Diseño Web</label>
                                </div>
                            </div>
                            <div class="border-bottom py-4">
                                <div class="d-flex mb-3">
                                    <div class="progress progress-md flex-grow">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="55"
                                            style="width: 55%" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="progress progress-md flex-grow">
                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="75"
                                            style="width: 75%" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="py-4">
                                <p class="clearfix">
                                    <span class="float-left">
                                        Estado
                                    </span>
                                    <span class="float-right text-muted">
                                        Activo
                                    </span>
                                </p>
                                <p class="clearfix">
                                    <span class="float-left">
                                        Teléfono
                                    </span>
                                    <span class="float-right text-muted">
                                        995227917
                                    </span>
                                </p>
                                <p class="clearfix">
                                    <span class="float-left">
                                        Mail
                                    </span>
                                    <span class="float-right text-muted">
                                        {{$u->email}}
                                    </span>
                                </p>
                                <p class="clearfix">
                                    <span class="float-left">
                                        Facebook
                                    </span>
                                    <span class="float-right text-muted">
                                        <a href="#">{{$u->name}}</a>
                                    </span>
                                </p>
                                <p class="clearfix">
                                    <span class="float-left">
                                        Twitter
                                    </span>
                                    <span class="float-right text-muted">
                                        <a href="#">@ {{$u->name}}</a>
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-8 pl-lg-5">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h3>{{$u->name}}</h3>
                                    <div class="d-flex align-items-center">

                                        <h5 class="mb-0 mr-2 text-muted">Canada</h5>

                                        <div class="br-wrapper br-theme-css-stars"><select id="profile-rating"
                                                name="rating" autocomplete="off" style="display: none;">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                            <div class="br-widget"><a href="#" data-rating-value="1"
                                                    data-rating-text="1" class="br-selected br-current"></a><a href="#"
                                                    data-rating-value="2" data-rating-text="2"></a><a href="#"
                                                    data-rating-value="3" data-rating-text="3"></a><a href="#"
                                                    data-rating-value="4" data-rating-text="4"></a><a href="#"
                                                    data-rating-value="5" data-rating-text="5"></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <button class="btn btn-outline-secondary btn-icon">
                                        <i class="far fa-envelope"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="mt-4 py-2 border-top border-bottom">
                                <ul class="nav profile-navbar">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <i class="fa fa-user"></i>
                                            Info
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <i class="fa fa-calendar"></i>
                                            Agenda
                                        </a>
                                    </li>

                                </ul>
                            </div>
                            <div class="profile-feed">
                                <div class="d-flex align-items-start profile-feed-item">
                                    <img src="{{URL::asset('img/faces/face13.jpg')}}" alt=" profile"
                                        class="img-sm rounded-circle">
                                    <div class="ml-4">
                                        <h6>
                                            Mason Beck
                                            <small class="ml-4 text-muted"><i class="far fa-clock mr-1"></i>10
                                                hours</small>
                                        </h6>
                                        <p>
                                            Hello!!!
                                        </p>
                                        <p class="small text-muted mt-2 mb-0">
                                            <span>
                                                <i class="fa fa-star mr-1"></i>4
                                            </span>
                                            <span class="ml-2">
                                                <i class="fa fa-comment mr-1"></i>11
                                            </span>
                                            <span class="ml-2">
                                                <i class="fa fa-mail-reply"></i>
                                            </span>
                                        </p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start profile-feed-item">
                                    <img src="{{URL::asset('img/faces/face16.jpg')}}" alt="profile"
                                        class="img-sm rounded-circle">
                                    <div class="ml-4">
                                        <h6>
                                            Willie Stanley
                                            <small class="ml-4 text-muted"><i class="far fa-clock mr-1"></i>10
                                                hours</small>
                                        </h6>
                                        <img src="img/samples/1280x768/12.jpg" alt="sample" class="rounded mw-100">
                                        <p class="small text-muted mt-2 mb-0">
                                            <span>
                                                <i class="fa fa-star mr-1"></i>4
                                            </span>
                                            <span class="ml-2">
                                                <i class="fa fa-comment mr-1"></i>11
                                            </span>
                                            <span class="ml-2">
                                                <i class="fa fa-mail-reply"></i>
                                            </span>
                                        </p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start profile-feed-item">
                                    <img src="{{URL::asset('img/faces/face19.html')}}" alt=" profile"
                                        class="img-sm rounded-circle">
                                    <div class="ml-4">
                                        <h6>
                                            Dylan Silva
                                            <small class="ml-4 text-muted"><i class="far fa-clock mr-1"></i>10
                                                hours</small>
                                        </h6>
                                        <p>
                                            Tenemos mucho trabajo hoy :c
                                        </p>
                                        <img src="../../images/samples/1280x768/5.jpg" alt="sample"
                                            class="rounded mw-100">
                                        <p class="small text-muted mt-2 mb-0">
                                            <span>
                                                <i class="fa fa-star mr-1"></i>4
                                            </span>
                                            <span class="ml-2">
                                                <i class="fa fa-comment mr-1"></i>11
                                            </span>
                                            <span class="ml-2">
                                                <i class="fa fa-mail-reply"></i>
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection