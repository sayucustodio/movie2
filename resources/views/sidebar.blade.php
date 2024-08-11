<head>

    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<div>
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item nav-profile">
                <div class="nav-link">
                    <div class="profile-image">
                        <img src="{{URL::asset('img/user.png')}}">
                    </div>
                    <div class="profile-name">

                        <p class="name">
                            Administrador
                        </p>

                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/home">
                    <i class="fa fa-home menu-icon"></i>
                    <span class="menu-title">Home</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/clientes">
                    <i class="fa fa-user menu-icon"></i>
                    <span class="menu-title">Clientes</span>
                </a>
            </li>
            <!--<li class="nav-item">
            <a class="nav-link" href="categorias">
                <i class="fa fa-folder menu-icon"></i>
                <span class="menu-title">Categorías</span>
            </a>
        </li>-->
            <!-- <li class="nav-item">
            <a class="nav-link" href="/empleados">
                <i class="fa fa-users menu-icon"></i>
                <span class="menu-title">Trabajadores</span>
            </a>
        </li>-->

            <li class="nav-item d-none d-lg-block">
                <a class="nav-link" data-toggle="collapse" href="#sidebar-layouts" aria-expanded="false"
                    aria-controls="sidebar-layouts">
                    <i class="fas fa-columns menu-icon"></i>
                    <span class="menu-title">Inventario</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="sidebar-layouts">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="/categorias">Categorías</a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="/peliculas">Películas</a>
                        </li>
                    </ul>
                </div>
            </li>



            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                    aria-controls="ui-basic">
                    <i class="far fa-compass menu-icon"></i>
                    <span class="menu-title">Aquileres</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="/alquiler">Registro</a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="/listaAlquileres">Listado</a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- <li class="nav-item">
            <a class="nav-link" href="">
              <i class="fa fa-check menu-icon"></i>
              <span class="menu-title">Pagos</span>
            </a>
          </li>-->
            <!--<li class="nav-item">
            <a class="nav-link" href="">
                <i class="fa fa-home menu-icon"></i>
                <span class="menu-title">Tiendas</span>
            </a>
            </li>-->
            <li class="nav-item">
                <a class="nav-link" href="/usuarios">
                    <i class="fa fa-users menu-icon"></i>
                    <span class="menu-title">Usuarios</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/reportes">
                    <i class="fa fa-users menu-icon"></i>
                    <span class="menu-title">Reportes</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contacto">
                    <i class="fa fa-users menu-icon"></i>
                    <span class="menu-title">Contacto</span>
                </a>
            </li>





    </nav>
</div>