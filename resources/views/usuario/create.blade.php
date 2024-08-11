@extends('admin')

@section('title','Registrar Cliente')
@section('styles')
@endsection

@section('contenido')


<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            Registro de usuarios
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel Administrador</a></li>
                <li class="breadcrumb-item"><a href="{{route('usuarios.index')}}">Usuarios</a></li>
                <li class="breadcrumb-item active" aria-current="page">Registro de usuarios</li>
            </ol>

        </nav>

    </div>


    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">

                    </div>
                    <div class="form-group">
                        <!--{!! Form::open(['route'=>'categorias.store','method'=>'POST']) !!}-->
                        <form action="{{route('usuarios.store')}}" method="POST">
                            @csrf
                            <div class="form-group">

                                <label for="name">Nombres</label>
                                <input name="nombre" id="nombre" class="form-control" type="text"
                                    placeholder="Ingrese nombre" aria-label="default input example" required>

                            </div>

                            <div class="form-group">
                                <label for="email">Correo</label>
                                <input name="email" type="email" class="form-control" id="email"
                                    placeholder="name@example.com" required>
                            </div>

                            <div class="form-group">
                                <label for="email">Contraseña</label>
                                <input name="contraseña" type="password" class="form-control" id="" required>
                            </div>




                    </div>



                    <button type="submit" class="btn btn-primary">Registrar</button>
                    <a href="/usuarios" class="btn btn-light">Cancelar</a>
                </div>
                </form>
                <!--{!! Form::close()!!}-->
            </div>

        </div>

    </div>
</div>
@endsection

@section('scripts')



{!! Html::script('plantilla/js/data-table.js') !!}
@endsection