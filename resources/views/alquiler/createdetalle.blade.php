@extends('admin')
@section('contenido')
<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Matricular en Curso</h3>
    </div>

    {{  Form::open(array('route' => 'alquiler.store',method=>'POST', 'class' => 'form-horizontal')) }}

    <div class="box-body">
        <div class="form-group row pt-3">
            <div class="form-group col-md-6">
                {!! Form::label('cliente_id', 'Codigo de Cliente', ['class' => 'col-sm-3 control-label']) !!}
                <!--<label for="inputdatefi" class="col-sm-3 control-label">Fecha de Fin</label>-->

                <div class="input-group date">
                    <div class="input-group-addon">
                        <i class="fa fa-fw fa-credit-card"></i>
                    </div>
                    <input id="alumno_id" name="cliente_id" type="text" placeholder="" class="form-control input-md"
                        value="{{ $cliente}}" readonly>

                </div>

            </div>


            <div class="form-group col-md-6">
                {!! Form::label('pelicula_id', 'Pelicula', ['class' => 'col-sm-3 control-label']) !!}
                <!--<label for="inputdeno" class="col-sm-3 control-label">Denominación</label>-->


                <select id="grupo_id" name="pelicula_id" class="form-control select ">
                    @foreach($peliculas as $p)
                    <option value="{{$p->film_id}}">{{$p->title}} </option>

                    @endforeach
                </select>

            </div>


            <div class="form-group col-md-6">
                {!! Form::label('fecha', 'Fecha', ['class' => 'col-sm-3 control-label']) !!}
                <!--<label for="inputdateini" class="col-sm-3 control-label">Fecha de Inicio</label>-->

                <div class="input-group date">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>

                    <input type=date name="fecha">

                </div>
            </div>



            <div class="form-group col-md-6">
                {!! Form::label('fecha_pago', 'Fecha de Entrega', ['class' => 'col-sm-3 control-label']) !!}


                <div class="input-group date">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <!--     {!! Form::text('fecha_pago', null, ['class' => 'form-control pull-right']) !!}-->
                    <input type=date name="fecha_pago">

                </div>

            </div>


            <div id="importe" class="form-group col-md-3">


            </div>


            <div class="form-group">
                <div class="col-sm-12" style="text-align:  center;">
                    {!! Form::submit('ENVIAR', ['class' => 'btn btn-info']) !!}
                </div>
            </div>
        </div>
        {{ Form::close() }}

    </div>
    @endsection

    @section('scripts')
    <script src="{{ asset('plugins/input-mask/jquery.inputmask.js')}}"></script>
    <script src="{{ asset('plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
    <script src="{{ asset('plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>

    <script type="text/javascript">
    $('#grupo_id').on('click', function(event) {
        fetch(`/calcularimporte?pelicula=${document.getElementById('grupo_id').value}`, {
                method: 'get'
            })
            .then(response => response.text())
            .then(html => {
                document.getElementById("importe").innerHTML = html
            })

    });
    </script>

    @endsection