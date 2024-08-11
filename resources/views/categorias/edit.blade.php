@extends('admin')
@section('title','Registrar Categoría')
@section('styles')
@endsection

@section('contenido')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            Modificar categorías
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Panel Administrador</a></li>
            <li class="breadcrumb-item"><a href="{{route('categorias.index')}}">Categorías</a></li>
                <li class="breadcrumb-item active" aria-current="page">Editar categorías</li>
            </ol>

        </nav>

    </div>


    <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <div class="d-flex justify-content-between">
    
                <h4 class="card-title">
                Modificar categoría
                  </h4>
                 
                </div>
                <div class="form-group">
                <!--{!! Form::open(['route'=>'categorias.store','method'=>'POST']) !!}-->
                <form action="{{route('categorias.update',$categoria->category_id)}}" method="POST">
                  @csrf
                  @method('PUT')
                  <div class="form-group">
<label for="name">Nombre</label>
<input name="nombre"value="{{$categoria->name}}" class="form-control" type="text" placeholder="Ingrese nombre de categoría" aria-label="default input example" required>

</div>
                <button type="submit"class="btn btn-primary" >Actualizar</button>
                <a href="/categorias" class="btn btn-light" >Cancelar</a>
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