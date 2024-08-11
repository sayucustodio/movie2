@extends('admin')
@section('title','Registrar Categoría')
@section('styles')
@endsection

@section('contenido')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            Modificar cliente
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Panel Administrador</a></li>
            <li class="breadcrumb-item"><a href="{{route('clientes.index')}}">Clientes</a></li>
                <li class="breadcrumb-item active" aria-current="page">Editar cliente</li>
            </ol>

        </nav>

    </div>


    <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <div class="d-flex justify-content-between">
    
                <h4 class="card-title">
                Modificar cliente
                  </h4>
                 
                </div>
                <div class="form-group">
                <!--{!! Form::open(['route'=>'categorias.store','method'=>'POST']) !!}-->
                <form action="{{route('clientes.update',$cliente->customer_id)}}" method="POST">
                  @csrf
                  @method('PUT')
                  <div class="form-group">
                  
                  <label for="name">Nombres</label>
                  <input name="nombre"id="nombre"class="form-control" type="text" 
                  aria-label="default input example" value="{{$cliente->first_name}}"required>
                  </div>

                  <div class="form-group">
                  <label for="apellidos">Apellidos</label>
                  <input name="apellidos"id="apellidos"class="form-control" type="text" 
                   aria-label="default input example" value="{{$cliente->last_name}}" required>
                  </div>

                  <div class="form-group">
                  <label for="email" >Correo electrónico</label>
                  <input name="email"type="email" class="form-control" id="email" value="{{$cliente->email}}"required>
                  </div>

                  <div class="form-group">
                    <label for="direccion">Dirección</label>
                    <select class="form-select form-control "
                   id="" name="direccion" required autocomplete="direccion" autofocus>
                                  <option selected>Seleccione dirección</option>
                    
                                  @foreach($direccion as $d)
                                     <option value="{{$d->address_id}}">{{$d->address}}</option>
    @endforeach
                   
                    </select>
                  </div>

                    <div class="form-group">
                    <label for="tienda">Tienda</label>
                    <select class="form-select form-control "
                    value="{{$cliente->store_id}}" id="" name="tienda" required autocomplete="tienda" autofocus>
                                                    <option selected>{{$cliente->store_id}}</option>
                       
                        @foreach($tiendas as $t)
                                       <option value="{{$t->store_id}}">{{$t->store_id}}</option>
                                      @endforeach
                       
                    </select>
                    </div>


  </div>   
                <button type="submit"class="btn btn-primary" >Actualizar</button>
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