@extends('admin')
@section('title','Gestión de categorias')
@section('styles')

@endsection

@section('contenido')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            Sección de Trabajadores
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel Administrador</a></li>
                <li class="breadcrumb-item active" aria-current="page">Trabajadores</li>
            </ol>

        </nav>

    </div>


    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <div class="d-flex justify-content-between">
    
                <h4 class="card-title">
                Trabajadores
                  </h4>
                  <div class="btn-group">
                  <h4 class="card-title">
                  <!--<a href="">
                    <i class="fas fa-download"></i>
                    Exportar
                    </a>
                  </h4>-->
                  
                  <a type="button" href="{{route('empleados.create')}}"class="btn btn-primary btn-fw" >Agregar</a>
                 
                  </div>
                </div>
                @if (session('success'))
                
                <div class="alert alert-fill-primary" role="alert">
                {{session('success')}}
                  </div>
                @endif
                
                    <div class="table-responsive">

                                <table role="grid" class="table dataTable no-footer" aria-describedby="order-listing_info" id="order-listing">

                                    <thead >
                                        <tr class="bg-primary text-white" role="row">
                                        <th scope="col">ID</th>
                                        <th >Nombre</th>
                                        <th >Apellido</th>
                                        <th style="width:50px;">Correo</th>
                                        <th >Dirección</th>
                                        
                                        <th >Tienda</th>
                                        <th >Estado</th>
                                       
                                        
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($empleados as $empleado)
                                        <tr>
                                            <th scope="row">{{ $empleado->staff_id }}</th>
                                            
                                            <td>{{ $empleado->first_name }}</td>
                                            <td >{{ $empleado->last_name }}</td>
                                            <td style="width:50px;" >{{ $empleado->email }}</td>
                                           
                                            <td>{{ $empleado->address}}</td>
                                            <td >{{ $empleado->store_id }}</td>
                                            <td >{{ $empleado->active }}</td>
                                            
                                      
                                            <td style="width:100px;display:flex">
                                               <form>
                                                <a
                                                    href="" class="btn btn-info" title="Editar">
                                                <i class="far fa-edit"></i>
                                                </a>
                                                </form>
                                                <form action="" method="POST" >
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">
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
  