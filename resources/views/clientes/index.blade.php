@extends('admin')
@section('title','Gestión de Clientes')
@section('styles')

@endsection

@section('contenido')
<div class="content-wrapper" style="background-color: white;">
    <div class="page-header">
        <h3 class="page-title">
            Sección de Clientes
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel Administrador</a></li>
                <li class="breadcrumb-item active" aria-current="page">Clientes</li>
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

                                <a type="button" href="{{route('clientes.create')}}"
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
                                <tr class=" text-black" role="row">
                                    <th scope="col">ID</th>
                                    <th style="width:150px">Nombre y Apellidos </th>
                                    <th>Correo</th>
                                    <th>Dirección</th>
                                    <th>Ciudad</th>
                                    <th>País</th>
                                    <th>Estado</th>
                                    <th></th>

                                    <th width="150px">Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clientes as $cliente)
                                <tr>
                                    <th scope="row">{{ $cliente->customer_id }}</th>

                                    <td style="width:100px">{{ $cliente->first_name }} {{ $cliente->last_name }}</td>
                                    <td>{{ $cliente->email }}</td>
                                    <td>{{ $cliente->address}}</td>
                                    <td>{{ $cliente->city}}</td>
                                    <td> {{ $cliente->country}}</td>

                                    <td id="resp{{$cliente->customer_id}}">
                                        <br>
                                        @if($cliente->active == 1)
                                        <button type="button" class="btn btn-sm btn-success">Activo</button>
                                        @else
                                        <button type="button" class="btn btn-sm btn-danger">Inactivo</button>
                                        @endif
                                    </td>
                                    <td>
                                        <br>
                                        <label class="switch">
                                            <input data-id="{{$cliente->customer_id}}" class="mi_checkbox"
                                                type="checkbox" data-onstyle="success" data-offstyle="danger"
                                                data-toggle="toggle" data-on="Active" data-off="InActive"
                                                {{ $cliente->active ? 'checked' : '' }}>
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td style="width:100px;display:flex">
                                        <form>
                                            <a href="{{route('clientes.edit',$cliente->customer_id)}}" class="btn"
                                                title="Editar">
                                                <i class="far fa-edit"></i>
                                            </a>
                                        </form>
                                        <form action="{{route('clientes.destroy',$cliente->customer_id)}}"
                                            method="POST">
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
<script type="text/javascript">
$(document).ready(function() {
    /*$(windows).load(function(){
$(".cargando").fadeOut(1000);
        });*/
    $('.mi_checkbox').change(function() {
        //verificar estado de checkbox, si esta seleccionado es 1 , sino es  0
        var status = $(this).prop('checked') == true ? 1 : 0;
        var id = $(this).data('id');
        console.log(status);
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '/ActualizarEstado',
            data: {
                'active': status,
                'customer_id': id
            },
            success: function(data) {
                $('#resp' + id).html(data.var);
                console.log(data.var)
            }
        });
    })
});
</script>

@endsection