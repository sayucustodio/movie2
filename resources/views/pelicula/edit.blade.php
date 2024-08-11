@extends('admin')

@section('title','Registro Trabajador')
@section('styles')
@endsection

@section('contenido')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            Actualizar datos de Películas
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel Administrador</a></li>
                <li class="breadcrumb-item"><a href="{{route('peliculas.index')}}">Películas</a></li>
            </ol>

        </nav>

    </div>


    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">

                    <form action="{{route('peliculas.update',$pelicula->film_id)}}" method="POST" class="form-sample">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Título</label>
                                    <div class="col-sm-9">
                                        <div class="row">
                                            <input name="titulo" type="text" class="form-control" value="{{$p->title}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Año de Publicación</label>
                                    <div class="col-sm-5">
                                        <input name="año" type="text" class="form-control"
                                            value="{{$peliculas->release_year}}">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" enable>Días que se alquila</label>
                                    <div class="col-sm-6">

                                        <input name="duracion" type="text" class="form-control"
                                            value="{{$peliculas->rental_duration}}">

                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Idioma</label>
                                    <div class="col-sm-9">
                                        <select class="form-select form-control " name="idioma" required
                                            autocomplete="direccion" autofocus>
                                            <option selected>{{$peliculas->language->name}}
                                            </option>
                                            @foreach($idioma as $i)
                                            <option value="{{$i->language_id}}">{{$i->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Categoría</label>
                                    <div class="col-sm-9">
                                        <select name="categoria" class="form-select form-control " required
                                            autocomplete="direccion" autofocus>
                                            <option selected>Seleccionar</option>
                                            @foreach($categoria as $c)
                                            <option value="{{$c->category_id}}">{{$c->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Precio</label>
                                    <div class="col-sm-6">

                                        <input name="precio" class="form-control" style="text-align: right;"
                                            value="{{$pelicula->rental_rate}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">



                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Descripcion</label>
                                    <div class="col-sm-9">
                                        <textarea name="descripcion" class="form-control" rows="3"
                                            value="{{$pelicula->description}}"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"> Stock</label>
                                    <div class="col-sm-4">
                                        <div class="form-check">

                                            <input type="number"
                                                class="form-control @error('cantidad') is-invalid @enderror"" name="
                                                cantidad" value="1" min="1" max="100" value="" required autofocus>

                                            @error('cantidad')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Registrar</button>
                        <a href="/peliculas" class="btn btn-light">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')



{!! Html::script('plantilla/js/data-table.js') !!}
@endsection