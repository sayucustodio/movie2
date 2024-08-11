@extends('admin')
@section('title','Gestión de películas')
@section('styles')

@endsection

@section('contenido')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            Sección de Películas
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel Administrador</a></li>
                <li class="breadcrumb-item active" aria-current="page">Películas</li>
            </ol>

        </nav>

    </div>


    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">


                        <div class="btn-group">
                            <h4 class="card-title">
                                <!--<a href="">
                    <i class="fas fa-download"></i>
                    Exportar
                    </a>
                  </h4>-->

                                <a type="button" href="{{route('peliculas.create')}}"
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
                                    <th>Título</th>
                                    <th>Año de lanzamiento</th>
                                    <th>Idioma</th>
                                    <th>Categoría</th>
                                    <th>Precio</th>
                                    <th>Stock</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($peliculas as $pelicula)
                                <tr>
                                    <th scope="row">{{ $pelicula->film_id}}</th>
                                    <td>{{ $pelicula->title}}</td>
                                    <td>{{ $pelicula->release_year}}</td>
                                    <td style="width:50px;">{{ $pelicula->name}}</td>
                                    <td>{{ $pelicula->categoria}}</td>
                                    <td type="number">$ {{ $pelicula->rental_rate}}</td>
                                    <td>{{ $pelicula->stock }}</td>

                                    <td style="display:flex">
                                        <form>
                                            <a href="{{route('peliculas.edit',$pelicula->film_id)}}" class="btn"
                                                title="Editar">

                                                <i class="far fa-edit"></i>
                                            </a>
                                        </form>
                                        <form action="{{route('peliculas.destroy',$pelicula->film_id)}}" method="POST">
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
{!!Html::script('plantilla/js/data-table.js')!!}

@endsection