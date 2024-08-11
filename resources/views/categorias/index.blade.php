@extends('admin')
@section('title','Gestión de categorias')
@section('styles')

@endsection

@section('contenido')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            Sección de Categorías
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel Administrador</a></li>
                <li class="breadcrumb-item active" aria-current="page">Categorías</li>
            </ol>

        </nav>

    </div>


    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">

                        <h4 class="card-title">
                            Categorías
                        </h4>
                        <div class="btn-group">
                            <h4 class="card-title">


                                <a type="button" href="{{route('categorias.create')}}"
                                    class="btn btn-primary btn-fw">Agregar</a>

                        </div>
                    </div>
                    @if (session('success'))


                    <div class="alert alert-info" role="alert">
                        {{session('success')}}
                    </div>
                    @endif
                    <div class="table-responsive">
                        <table id="order-listing" class="table table-bordered table-striped">

                            <thead>
                                <tr class="bg-primary text-white" role="row">
                                    <th scope="col">ID</th>
                                    <th width="280px">Nombre</th>

                                    <th width="280px">Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categorias as $categoria )
                                <tr>
                                    <th scope="row">{{ $categoria->category_id }}</th>

                                    <td>{{$categoria->name}}</td>

                                    <td style="width:280px;display:flex">
                                        <form>
                                            <a href="{{route('categorias.edit',$categoria->category_id)}}"
                                                class="btn btn-info" title="Editar">
                                                <i class="far fa-edit"></i>
                                            </a>
                                        </form>
                                        <form action="{{route('categorias.destroy',$categoria->category_id)}}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">
                                                <i class="far fa-trash-alt"></i>
                                            </button>
                                        </form>

                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>

                    </div>

                </div>

            </div>

        </div>

    </div>
</div>
@endsection

@section('scripts')
{!! Html::script('plantilla/js/data-table.js') !!}
@endsection