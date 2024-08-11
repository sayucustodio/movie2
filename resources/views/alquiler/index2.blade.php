@extends('admin')
@section('contenido')
<div class="container" style=" width: 100%;height: 900px;padding: 50px;">

    <div class="row">

        <div class="box">
            <div class="box-header">

                <h4 class="box-title" align="left">REGISTRO ALQUILER</h4>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <h5 class="box-title" align="left">Clientes disponibles para alquilar</h5>
                <table id="tablagrupo" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Apellidos</th>
                            <th>Nombres</th>
                            <th>Correo</th>

                            <th></th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clientes as $c)
                        <tr>
                            <td>{{ $c->customer_id }}</td>
                            <td>{{ $c->last_name }}</td>
                            <td>{{ $c->first_name}} </td>
                            <td>{{ $c->email }}</td>


                            <td style="text-align:  center;">

                                <a href="{{route('alquiler.create', ['id' => $c->customer_id ])}}"
                                    data-original-title="Alquiler" data-toggle="tooltip" data-placement="top"
                                    title="Alquiler"><i class="fa fa-fw fa-plus-square fa-lg"></i></a>
                                </a>



                            </td>

                        </tr>
                        @endforeach


                    </tbody>

                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->

    </div>
</div>

@endsection




@section('scripts')
{!!Html::script('plantilla/js/data-table.js')!!}
<script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

<script>
$(document).ready(function() {
    // $('#dataTables_cambio').dataTable();
    $('#tablagrupo').DataTable();



});
</script>
@endsection