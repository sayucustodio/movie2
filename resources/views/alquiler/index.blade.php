@extends('admin')
@section('title','Gestionar Alquiler')
@section('styles')

@endsection

@section('contenido')
<div class="content-wrapper" style="background-color: white;">
    <div class="page-header">
        <h3 class="page-title">
            Listado de Alquileres
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel Administrador</a></li>
                <li class="breadcrumb-item active" aria-current="page">Alquiler</li>
            </ol>

        </nav>

    </div>



    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">

                    </div>
                    @if (session('success'))

                    <div class="alert alert-fill-primary" role="alert">
                        {{session('success')}}
                    </div>
                    @endif
                    <div class="table-responsive">

                        <table role="grid" class="table dataTable no-footer" aria-describedby="order-listing_info"
                            id="order-listing">

                            <thead>
                                <tr role="row">
                                    <th scope="col">ID</th>

                                    <th>Cliente</th>
                                    <th>Película</th>
                                    <th>Monto</th>
                                    <th>Fecha Alquiler </th>
                                    <th>Fecha de Entrega</th>
                                    <!-- <th >Tienda</th>-->
                                    <th>Estado</th>

                                    <th width="150px">Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($alquiler as $a)
                                <tr>
                                    <th scope="row">{{ $a->rental_id }}</th>

                                    <td style="width:100px">{{ $a->first_name }} {{ $a->last_name }}</td>
                                    <td>{{$a->pelicula}}</td>
                                    <td>{{ $a->rental_rate}}</td>

                                    <td>{{ $a->rental_date}}</td>
                                    <td>{{ $a->return_date}}</td>
                                    @if ($a->return_date)
                                    <td>Devuelto </td>
                                    @else
                                    <td>Pendiente </td>
                                    @endif
                                    <td></td>
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