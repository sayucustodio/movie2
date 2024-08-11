@extends('admin')
@section('title','Listado de alquileres')
@section('styles')

@endsection

@section('contenido')
<div class="row">


    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Alquileres</h4>
                <p class="card-description">Listado de alquileres</p>
                <ul class="nav nav-pills nav-pills-success" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link  active show" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                            role="tab" aria-controls="pills-home" aria-selected="false">Pendientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                            aria-controls="pills-profile" aria-selected="true">Devueltos</a>
                    </li>

                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade active show" id="pills-home" role="tabpanel"
                        aria-labelledby="pills-home-tab">
                        <div class="media">
                            <div class="media-body">
                                <h5 class="mt-0">Pendientes</h5>
                                @if (session('success'))

                                <div class="alert alert-info" role="alert">
                                    {{session('success')}}
                                </div>
                                @endif
                                <div class="table-responsive">

                                    <table role="grid" class="table dataTable no-footer"
                                        aria-describedby="order-listing_info" id="order-listing">

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
                                            @foreach ($alquilerp as $ad)
                                            <tr>
                                                <th scope="row">{{ $ad->rental_id }}</th>

                                                <td style="width:100px">{{ $ad->first_name }} {{ $ad->last_name }}</td>
                                                <td>{{$ad->pelicula}}</td>
                                                <td>{{ $ad->rental_rate}}</td>

                                                <td>{{ $ad->rental_date}}</td>
                                                <td>{{ $ad->return_date}}</td>

                                                <td id="resp{{$ad->rental_id}}">
                                                    <br>
                                                    @if($ad->return_date)
                                                    <label class="badge badge-info">Devuelto</label>


                                                    @else
                                                    <label class="badge badge-danger">Pendiente</label>

                                                    @endif
                                                </td>

                                                <td style="width:100px;display:flex">

                                                    <!-- <label class="switch">
                                                        <input data-id="{{$ad->rental_id}}" class="mi_checkbox"
                                                            type="checkbox" data-onstyle="success"
                                                            data-offstyle="danger" data-toggle="toggle" data-on="Active"
                                                            data-off="InActive" {{ $ad->return_date ? 'checked' : '' }}>
                                                        <span class="slider round"></span>
                                                    </label>-->

                                                    <form>
                                                        <a href="{{route('alquiler.edit',$ad->rental_id)}}" class="btn"
                                                            title="Editar">
                                                            <i class="far fa-edit"></i>
                                                        </a>
                                                    </form>
                                                    <form action="{{route('alquiler.destroy',$ad->rental_id)}}"
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
                    <div class="tab-pane fade " id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="media">
                            <h5 class="mt-0">Devueltos</h5>
                            <div class="media-body">
                                <div class="table-responsive">

                                    <table role="grid" class="table dataTable no-footer"
                                        aria-describedby="order-listing_info" id="order-listing2">

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
                                            @foreach ($alquilerd as $a)
                                            <tr>
                                                <th scope="row">{{ $a->rental_id }}</th>

                                                <td style="width:100px">{{ $a->first_name }} {{ $ad->last_name }}</td>
                                                <td>{{$a->pelicula}}</td>
                                                <td>{{ $a->rental_rate}}</td>

                                                <td>{{ $a->rental_date}}</td>
                                                <td>{{ $a->return_date}}</td>

                                                <td id="resp{{$ad->rental_id}}">
                                                    <br>
                                                    @if($a->return_date)
                                                    <label class="badge badge-info">Devuelto</label>


                                                    @else
                                                    <label class="badge badge-danger">Pendiente</label>

                                                    @endif
                                                </td>

                                                <td>

                                                    <button type="button" class="btn btn-outline-info btn-icon-text">
                                                        <i class="fa fa-print btn-icon-append"></i>
                                                    </button>

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
        </div>
    </div>
</div>
@endsection
@section('scripts')
{!!Html::script('plantilla/js/data-table.js')!!}
{!!Html::script('plantilla/js/data-table2.js')!!}
{!! Html::script('plantilla/js/tabs.js') !!}
<script type="text/javascript">
    $(document).ready(function() {
        /*$(windows).load(function(){
    $(".cargando").fadeOut(1000);
            });*/
        $('.mi_checkbox').change(function() {
            //verificar estado de checkbox, si esta seleccionado es 1 , sino es  0
            var status = $(this).prop('checked') == true ? 0 : 1;
            var id = $(this).data('id');
            console.log(status);
            $.ajax({
                type: "GET",
                dataType: "json",
                url: '/ActualizarEstadoAlquiler',
                data: {
                    'return_date': status,
                    'rental_id': id
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