@extends('admin')
@section('contenido')
<div class="container" style=" width: 100%;height: 900px;padding: 50px;padding-top:10px">
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Registrar Alquiler</h3>
        </div>

        <form action="{{route('alquiler.store')}}" method="POST">
            @csrf
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <strong><i class="fa fa-book "></i> Datos del Cliente</strong>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Codigo</label>
                            <input type="text" name="cliente_id" class="form-control pull-right" id="inputdateini"
                                value="{{$c->customer_id}}" readonly>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Apellidos</label>
                            <input type="text" class="form-control pull-right" id="inputdateini"
                                value="{{$c->last_name}}" readonly>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Nombres</label>
                            <input type="text" class="form-control pull-right" id="inputdateini"
                                value="{{$c->first_name}}" readonly>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Correo</label>
                            <input type="text" class="form-control pull-right" id="inputdateini" value="{{$c->email}}"
                                readonly>
                        </div>
                    </div>


                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong><i class="fa fa-book "></i> Datos del Película</strong>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Película</label>
                                <!--<label for="inputdeno" class="col-sm-3 control-label">Denominación</label>-->
                                <div class="input-group date">
                                    <select id="peli_id" name="film_id" class=" form-select form-control pull-right">
                                        @foreach($peliculas as $p)
                                        <option value="{{$p->film_id}}">{{$p->title}} </option>

                                        @endforeach
                                    </select>
                                </div>

                            </div>
                        </div>

                        <!-- < <div class="col-md-3">
                            <div class="form-group">
                                <label>Fecha Entrega</label>


                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>

                                    <input id="fecha_fin" type="date" name="fecha" class="form-control pull-right">


                                </div>

                            </div>
                    </div>-->
                        <!--<div class="form-group col-md-3">

                        {!! Form::label('dias', 'Días', ['class' => 'col-sm-3 control-label']) !!}

                        <div class="col-sm-5">
                            <input class="form-control" id="dia">
                        </div>
                    </div>-->
                        <div class="form-group col-md-3">
                            <label>Importe</label>
                            <div class="col-sm-5">
                                <input class="form-control" id="importe" readonly>
                            </div>
                        </div>
        </form>
    </div>
    <hr>
    <div class=" row">
        <div class="col-md-12">
            <div class="form-group">
                <p><strong><i class="fa fa-book "></i> Detalle Alquiler</strong></p>
                <p>
                <div class="col-md-2 col-md-offset-10">
                    <a type="button" id="agregar" class="btn btn-block btn-info">
                        Agregar
                        Película</a>
                </div>
                </p>

            </div>
        </div>
    </div>
    <div class=" row">
        <div class="col-md-12">
            <table id="tbdetallemat" class="table  table-bordered table-striped ">
                <thead>
                    <tr>
                        <th>Eliminar</th>
                        <th>Película</th>
                        <th>Precio ($)</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th colspan="4">
                            <p align="right">TOTAL</p>
                        </th>
                        <th colspan="4">
                            <p align="right">
                                <span id="total">

                                </span>
                            </p>
                        </th>
                    </tr>

                </tfoot>
                <tbody id="detalles">

                </tbody>
            </table>
            <div class="form-group">
                <div id="guardar" class="col-sm-12 pt-4">
                    <p align="right">
                        <button type="submit" class="btn btn-primary">GUARDAR</button>
                    </p>
                </div>
            </div>

        </div>
    </div>




</div>



</div>
</div>
<hr>




</div>


@endsection

@section('scripts')

<!-- InputMask -->

<script src="{{ asset('plugins/input-mask/jquery.inputmask.js')}}"></script>
<script src="{{ asset('plugins/input-mask/jquery.inputmask.date.extensions.js')}}">
</script>
<script src="{{ asset('plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>

<!-- bootstrap datepicker -->
<script src="{{ asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}">
</script>
<!-- bootstrap color picker -->
<script src="{{ asset('bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}">
</script>
<!-- bootstrap time picker -->
<script src="{{ asset('plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>
<script src="{{ asset('js/agregarTabla.js')}}"></script>

<!-- Custom js for this page-->
{!!Html::script('plantilla/js/alerts.js')!!}
{!!Html::script('plantilla/js/avgrund.js')!!}


<script>
$(function() {


    //Date picker
    $('#fecha').datepicker({
        autoclose: true
    })
    $('#fecha_fin').datepicker({
        autoclose: true
    })



});
</script>

<script type="text/javascript">
var id;

jQuery.fn.doBloquer = function() {
    $(this).css({
        'position': 'fixed',
        'width': '100%',
        'height': '100%',
        'left': '0px',
        'top': '0px',
        'background-color': '#000',
        'opacity': 0.8,
        'z-index': '100'
    });
    $(this).fadeIn(500);
}
jQuery.fn.doModal = function() {
    var w = $(window).width();
    var h = $(window).height();
    var divW = $(this).width();
    var divH = $(this).height();
    $(this).css({
        'position': 'absolute',
        'left': (w / 4) - (divW / 4) + "px",
        'top': (h / 100) - (divH / 100) + "px",
        'z-index': '100'
    });
    $(this).fadeIn(500);
}

function refrescarto() {
    $('#contenidoto').remove();
    $('#contenedorto').html('<div id="contenidoto"> </div>');
}
</script>


<!--precio de pelicula-->
<script type="text/javascript">
$('#peli_id').on('click', function(event) {
    fetch(`/calcularimporte?pelicula=${document.getElementById('peli_id').value}`, {
            method: 'get'
        })
        .then(response => response.text())
        .then(html => {
            document.getElementById("importe").value = html
        })

});
</script>

@endsection