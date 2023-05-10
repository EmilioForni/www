<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
}
?>
<?php
	require_once('marcosup.php');
	
?>
    <div class="section">
      <div class="container">
        <div class="row text-center">
		   <div class="text-center mx-auto col-10">
			<h1 class="text-center text-primary">Formulario Alta de datos de Empleados</h1>
		   </div>		
		</div>	
		<div class="row text-center">	
			<div class="text-left mx-auto col-10">
				<form method="POST" action="Alta_VisorEmpleados.php">
					<!-- Dato 2-->
					Usuario:<br>
					<input type="text" name="usuario" size="45" value=""><br>
					<!-- Dato 3-->
					Clave:<br>
					<input type="password" name="clave" size="45" value=""><br>
					<!-- Dato 4-->
					Foto:<br>
					<input type="text" name="foto" size="45" value=""><br>
					
					<!-- Botones del Formulario -->					
					<hr>
					<input type="submit" value="ENVIAR">
					- 
					<input type="reset" value="LIMPIAR">
				</form>
          </div>           
        </div> 
          <div class="row text-center">
		   <div class="col">
			<hr>	
		   </div>		
		</div>
      </div>
    </div>

<?php
	require_once('marcoinf.php');
?>	
