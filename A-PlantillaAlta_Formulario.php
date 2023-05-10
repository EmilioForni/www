<?php
	require_once('marcosup.php');
	
?>
    <div class="section">
      <div class="container">
        <div class="row text-center">
		   <div class="text-center mx-auto col-10">
			<h1 class="text-center text-primary">Formulario Alta de datos de "nombre de la Tabla"</h1>
		   </div>		
		</div>	
		<div class="row text-center">	
			<div class="text-left mx-auto col-10">
				<form method="POST" action="A-PlantillaAlta_Visor.php">
					<!-- Dato 1-->
					Dato 1:<br>
					<input type="text" name="d1" size="5" value=""><br>
					<!-- Dato 2-->
					Dato 2:<br>
					<input type="text" name="d2" size="20" value=""><br>
					<!-- Dato 3-->
					Dato 3:<br>
					<input type="text" name="d3" size="20" value=""><br>
					
					<br>
					<!-- Dato n-->
					Dato n:<br>
					<input type="text" name="dn" size="20" value=""><br>
					
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
