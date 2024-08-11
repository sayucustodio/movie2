@extends('admin')

@section('title','Registro Trabajador')
@section('styles')
@endsection

@section('contenido')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            Registro de Trabajadores
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Panel Administrador</a></li>
            <li class="breadcrumb-item"><a href="{{route('clientes.index')}}">Trabajadores</a></li>
                <li class="breadcrumb-item active" aria-current="page">Registro de Trabajadores</li>
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
                <form action="{{route('empleados.store')}}" method="POST">
                  @csrf
                    <div class="form-group">
                  
                      <label for="name">Nombres</label>
                      <input name="nombre"id="nombre"class="form-control" type="text" placeholder="Ingrese nombre" aria-label="default input example" required>

                    </div>

                    <div class="form-group">
                      <label for="apellidos">Apellidos</label>
                      <input name="apellidos"id="apellidos"class="form-control" type="text" placeholder="Ingrese apellidos" aria-label="default input example" required>

                    </div>

                    <div class="form-group">
                    <label for="email" >Correo electrónico</label>
                    <input name="email"type="email" class="form-control" id="email" placeholder="name@example.com"required>
                    </div>
                   
    
                    <div class="form-group">
                        <label for="direccion">Dirección</label>
                        <select class="form-select form-control "
                                    id="autoSizingSelect" name="direccion" required autocomplete="direccion" autofocus>
                                    <option selected>Seleccionar</option>
      @foreach($direccion as $d)
                                     <option value="{{$d->address_id}}">{{$d->address}}</option>
    @endforeach
                        </select>
                     </div>

                  </div>    
                  <div class="form-group">
                        <label for="">Tienda</label>
                        <select class="form-select form-control "
                                    id="" name="tienda" required autocomplete="" autofocus>
                                    <option selected>Seleccionar</option> 
                  @foreach($tiendas as $t)
                                       <option value="{{$t->store_id}}">{{$t->store_id}}</option>
                                      @endforeach
                                      </select>
                     </div>
                     <div class="form-group">
                  
                  <label for="">Usuario</label>
                  <input name="username"id="nombre"class="form-control" type="text" placeholder="Ingrese nombre de usuario" aria-label="default input example" required>

                </div>
                <div class="form-group">
                  
                  <label for="">Contraseña</label>
                  <input name="contraseña"id="nombre"class="form-control" type="password" placeholder="Ingrese contraseña" aria-label="default input example" required>

                </div>
               <!--     <div class="card-body">
                  <h4 class="card-title d-flex">Fotografía
                    
                  </h4>
                  <div class="dropify-wrapper"><div class="dropify-message"><span class="file-icon"></span> <p>Seleccionar archivo</p><p class="dropify-error">Ooops, something wrong appended.</p></div><div class="dropify-loader"></div><div class="dropify-errors-container"><ul></ul></div><input type="file" class="dropify"><button type="button" class="dropify-clear">Remove</button><div class="dropify-preview"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner"></span></p><p class="dropify-infos-message">Drag and drop or click to replace</p></div></div></div></div>

                </div>-->
                <button type="submit"class="btn btn-primary" >Registrar</button>
                        <a href="/empleados" class="btn btn-light" >Cancelar</a>
                    
                  </form>
                </div>
@endsection

@section('scripts')



{!! Html::script('plantilla/js/data-table.js') !!}
@endsection