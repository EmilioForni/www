<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
}
?>
<?php
	//Iniciamos código PHP
	//Cargar el marco superior
	require_once('marcosup.php');
	// Fin del código PHP
?>
<!--  <div class="py-3 bg-info" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.6));	background-position: top left;	background-size: 100%;	background-repeat: no-repeat;  height: 400px;">
--> 	<div class="py-5 bg-info" style="background-image: url(imagenes/PAR.jpg);	background-position: top left;	background-size: 100%;	background-repeat: repeat;  height: 400px;">

    <div class="container">
      <div class="row">
        <div class="bg-none text-info col-12 col-sm-12 col-md-7 col-lg-7">			
			<div class="bg-dark-opaque text-warning" style="	background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.9));	background-position: top left;	background-size: 100%;	background-repeat: repeat;">
				<h3 class="display-4">FORNIX</h3>
				<h4>Tienda-Informática creada por Emilio Fornieles.</h4>
			</div>
        </div>
       <div class="bg-none col-9 col-sm-9 mx-auto col-md-5 col-lg-5">
<!-- 	<img class="img-fluid d-block mx-auto" src="imagenes/Entrada.jpg" title="Foto de la Entrada del Instituto">
-->			</div>
      </div>
    </div>
  </div>
<?php
	//Iniciamos código PHP
	//Cargar el marco inferior
	require_once('marcoinf.php');
	// Fin del código PHP
?>  
  
