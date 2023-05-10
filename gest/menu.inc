<?php
################################################
#### Menú Principal #
#
#
function principal()
{
echo '
        <ul class="navbar-nav ml-auto text-light">
          <li class="nav-item text-white"> <a class="nav-link" href="index.php">Inicio</a> </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
				Tablas</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="clientes.php">Clientes</a>
              <a class="dropdown-item" href="empleados.php">Empleados</a>
              <a class="dropdown-item" href="clientes_has_servicios.php">Clientes y servicios</a>
              <a class="dropdown-item" href="servicios.php">Servicios</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
				Vistas</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="vista_clientes_servicios.php">Servicios Clientes</a>
              <a class="dropdown-item" href="vista_servicios_contratados.php">Servicos contratados</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
				Altas</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="AltaClientes.php">Alta-Clientes</a>
              <a class="dropdown-item" href="AltaEmpleados.php">Alta-Empleados</a>
              <a class="dropdown-item" href="AltaServicios.php">Alta-Servicios</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
				Gestión</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="clientesgestion.php">Clientes</a>
              <a class="dropdown-item" href="empleadosgestion.php">Empleados</a>
              <a class="dropdown-item" href="serviciosgestion.php">Servicios</a>
              <a class="dropdown-item" href="clientes_has_servicios_gestion.php">Clientes y servicios</a>
            </div>
          </li>        
          <li class="nav-item"> <a class="nav-link" href="login.php">ENTRAR</a> </li>
          <li class="nav-item"> <a class="nav-link" href="logout.php">SALIR</a> </li>
        </ul>
          ';
		 
}
################################################
?>
