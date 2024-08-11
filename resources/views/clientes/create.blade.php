
@extends('admin')

@section('title','Registrar Cliente')
@section('styles')
@endsection

@section('contenido')
<head>
<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            Registro de clientes
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Panel Administrador</a></li>
            <li class="breadcrumb-item"><a href="{{route('clientes.index')}}">Clientes</a></li>
                <li class="breadcrumb-item active" aria-current="page">Registro de clientes</li>
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
                <form action="{{route('clientes.store')}}" method="POST">
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
                
                      
                        <button type="submit"class="btn btn-primary" >Registrar</button>
                        <a href="/clientes" class="btn btn-light" >Cancelar</a>
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