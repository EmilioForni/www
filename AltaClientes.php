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
			<h1 class="text-center text-primary">Formulario Alta de datos de "Clientes"</h1>
		   </div>		
		</div>	
		<div class="row text-center">	
			<div class="text-left mx-auto col-10">
				<form method="POST" action="Alta_VisorClientes.php">
					<!-- Dato 1-->
					DNI:<br>
					<input type="text" name="DNI" size="9" value=""><br>
					<!-- Dato 2-->
					Nombre:<br>
					<input type="text" name="Nombre" size="45" value=""><br>
					<!-- Dato 3-->
					Apellidos:<br>
					<input type="text" name="Apellidos" size="45" value=""><br>
					<!-- Dato 4-->
					Correo electrónico:<br>
					<input type="text" name="Correo" size="45" value=""><br>
					<!-- Dato 5-->
					Dirección:<br>
					<input type="text" name="Direccion" size="45" value=""><br>
					<!-- Dato 6-->
					Teléfono:<br>
					<input type="text" name="Telefono" size="9" value=""><br>
					
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
