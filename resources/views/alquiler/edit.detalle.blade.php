@extends('admin')
@section('contenido')
	<div class="box box-info">
        <div class="box-header with-border">
              <h3 class="box-title">Matricular en Curso</h3>
        </div>
            	
		
         {!! Form::model($matricula, ['route' => ['matriculas.update', $matricula->id], 'method' => 'PUT', 'class' => 'form-horizontal']) !!}
		
			<div class="box-body">
    			<div class="form-group">
        			<div class="form-group">
        				{!! Form::label('alumno_id', 'Codigo de Alumno', ['class' => 'col-sm-3 control-label']) !!}
        <!--<label for="inputdatefi" class="col-sm-3 control-label">Fecha de Fin</label>-->
        				<div class="col-sm-5">
            				<div class="input-group date">
                				<div class="input-group-addon">
                    				<i class="fa fa-fw fa-credit-card"></i>
                				</div>
                				<input id="alumno_id" name="alumno_id" type="text" placeholder="" class="form-control input-md"  value="{{ $matricula->alumno_id}}" readonly>

            </div>
        </div>
    </div>

        {!! Form::label('grupo_id', 'Grupo', ['class' => 'col-sm-3 control-label']) !!}
        <!--<label for="inputdeno" class="col-sm-3 control-label">Denominación</label>-->
        <div class="col-sm-5">
            <select id="grupo_id" name="grupo_id" class="form-control select2">
                @foreach($grupos as $grupo)
                    <option value="{{$grupo->id}}">{{$grupo->denominacion}} </option>
                    <?php $precio[$grupo->id]=$grupo->curso['precio'];  ?>
                    
                                                    
                @endforeach
            </select>

        </div>
    </div>
    
    <div class="form-group">
        {!! Form::label('fecha', 'Fecha', ['class' => 'col-sm-3 control-label']) !!}
        <!--<label for="inputdateini" class="col-sm-3 control-label">Fecha de Inicio</label>-->
        <div class="col-sm-5">
            <div class="input-group date">
                <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </div>

                {!! Form::text('fecha', null, ['class' => 'form-control pull-right']) !!}
            <!--<input type="text" class="form-control pull-right" id="inputdateini">-->
            </div>
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('pago_id', 'Codigo de pago', ['class' => 'col-sm-3 control-label']) !!}
        <!--<label for="inputdatefi" class="col-sm-3 control-label">Fecha de Fin</label>-->
        <div class="col-sm-5">
            <div class="input-group date">
                <div class="input-group-addon">
                    <i class="fa fa-fw fa-credit-card"></i>
                </div>
                <input id="pago_id" name="pago_id" type="text" placeholder="" class="form-control input-md"  value="{{ $matricula->pago_id}}" readonly>

                <!--<input type="text" class="form-control pull-right" id="inputdatefi">-->
            </div>
        </div>
    </div> 
    <div id="contenedorPrecio">
    	<div id="contenidoPrecio">
    		<div class="form-group">
        	{!! Form::label('importe', 'Importe', ['class' => 'col-sm-3 control-label']) !!}
        <!--<label for="inputdatefi" class="col-sm-3 control-label">Fecha de Fin</label>-->
        <div class="col-sm-5">
            <div class="input-group date">
                <div class="input-group-addon">
                        <i class="fa fa-fw fa-dollar"></i>
                    </div> 
                        <input id="importe" name="importe" type="text" placeholder="" class="form-control input-md" value="{{$matricula->Pago['importe']}}">

                    </div>
                </div>
                
                <!--<input type="text" class="form-control pull-right" id="inputdatefi">-->
            </div>
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('fecha_pago', 'Fecha de Pago', ['class' => 'col-sm-3 control-label']) !!}
        <!--<label for="inputdatefi" class="col-sm-3 control-label">Fecha de Fin</label>-->
        <div class="col-sm-5">
            <div class="input-group date">
                <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </div>
                {!! Form::text('fecha_pago', $matricula->Pago['fecha'], ['class' => 'form-control pull-right']) !!}
                <!--<input type="text" class="form-control pull-right" id="inputdatefi">-->
            </div>
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('descuento', 'Descuento', ['class' => 'col-sm-3 control-label']) !!}
        <!--<label for="inputdatefi" class="col-sm-3 control-label">Fecha de Fin</label>-->
        <div class="col-sm-5">
            <div class="input-group date">
                <div class="input-group-addon">
                    <i class="fa fa-fw fa-dollar"></i>
                </div>
                {!! Form::text('descuento', $matricula->Pago['descuento'], ['class' => 'form-control']) !!}
                <!--<input type="text" class="form-control pull-right" id="inputdatefi">-->
            </div>
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('tipopago', 'Tipo de Pago', ['class' => 'col-sm-3 control-label']) !!}
        <!--<label for="inputdatefi" class="col-sm-3 control-label">Fecha de Fin</label>-->

        <div class="col-sm-5">
            <select id="tipopago" name="tipopago" class="form-control">
                
                <option value="TESORERIA">TESORERIA</option>
                <option value="BANCO DE LA NACION">BANCO DE LA NACION</option>
                                                    
            
            </select>

        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-12" style="text-align:  center;">
        {!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
                                          
</div>


			
	{{ Form::close() }}

          </div>
@endsection
@section('cscript')

<!-- InputMask -->

<script src="{{ asset('plugins/input-mask/jquery.inputmask.js')}}"></script>
<script src="{{ asset('plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
<script src="{{ asset('plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>

<!-- bootstrap datepicker -->
<script src="{{ asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<!-- bootstrap color picker -->
<script src="{{ asset('bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>
<!-- bootstrap time picker -->
<script src="{{ asset('plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>

<script>
    document.getElementById('grupo_id').value = '{{$matricula->grupo_id}}';
	 $(function () {
    

    //Date picker
    $('#fecha').datepicker({
      autoclose: true
    })
    $('#fecha_pago').datepicker({
      autoclose: true
    })
    
    
    
  });
	
</script>
<script type="text/javascript">

	$('#grupo_id').on('click', function(event) {
  //$("select[name='grupo_id']").change(function(){
      var id_grupo = $(this).val();
      console.log(id_grupo);

      var token = $("input[name='_token']").val();
      event.preventDefault();
      $.ajax({
          
          url: '/select-ajax/'+ id_grupo,
          //method: 'POST',
          type: 'GET',
          dataType: 'json',
         // data: {id_country:id_grupo, _token:token},
          
          

      })
      	.done(function(datosServer) {
      		//console.log('indexindexindex');
					refrescando ();
					$('#contenidoPrecio').html(datosServer.view);
				})
		.fail(function() {
					console.log("error");
				});
  });
  function refrescando () {
  	//console.log('indexindexindex');
				$('#contenidoPrecio').remove();
				//console.log('indexindexindex contenedor');
				$('#contenedorPrecio').html('<div id="contenidoPrecio"> fffff </div>');
			}
</script>
@endsection
