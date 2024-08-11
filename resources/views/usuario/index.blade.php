@extends('admin')
@section('title','Gestión de usuarios')
@section('styles')

@endsection

@section('contenido')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            Sección de Usuarios del Sistema
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel Administrador</a></li>
                <li class="breadcrumb-item active" aria-current="page">Usuarios</li>
            </ol>

        </nav>

    </div>


    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">

                        <h4 class="card-title">
                            Usuarios
                        </h4>
                        <div class="btn-group">
                            <h4 class="card-title">
                                <!--<a href="">
                    <i class="fas fa-download"></i>
                    Exportar
                    </a>
                  </h4>-->

                                <a type="button" href="{{route('usuarios.create')}}"
                                    class="btn btn-primary btn-fw">Agregar</a>

                        </div>
                    </div>
                    @if (session('success'))

                    <div class="alert alert-info" role="alert">
                        {{session('success')}}
                    </div>
                    @endif

                    <div class="table-responsive">

                        <table role="grid" class="table dataTable no-footer table-bordered table-striped"
                            aria-describedby="order-listing_info" id="order-listing">

                            <thead>
                                <tr class="bg-primary text-white" role="row">
                                    <th scope="col">ID</th>
                                    <th>Usuario</th>
                                    <th>Correo</th>

                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($usuarios as $u)
                                <tr>
                                    <td>{{ $u->id }}</td>
                                    <td>{{ $u->name }}</td>
                                    <td>{{ $u->email }}</td>


                                    <td style="width:100px;display:flex">
                                        <form>
                                            <a href="{{route('usuarios.show',$u->id)}}" class="btn " title="Ver">
                                                <i class="far fa-eye"></i>
                                            </a>
                                        </form>
                                        <form>
                                            <a href="{{route('usuarios.edit',$u->id)}}" class="btn " title="Editar">
                                                <i class="far fa-edit"></i>
                                            </a>
                                        </form>
                                        <form action="{{route('usuarios.destroy',$u->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn">
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