<?php
	require_once('marcosup.php');
	
?>
    <div class="section">
      <div class="container">
        <div class="row text-center">
		   <div class="text-center mx-auto col-10">
			<h1 class="text-center text-primary">Visor Alta de datos de "nombre de la Tabla"</h1>
		   </div>		
		</div>	
		<div class="row text-center">	
		  <div class="text-center mx-auto col-10">
<?php			
		 // Todas las variables que ha enviado el Formulario
		$d1=$_POST['d1'];    	// Variable que recoge el...
		$d2=$_POST['d2'];    	// Variable que recoge el...	
		$d3=$_POST['d3']; 		// Variable que recoge el...
		$dn=$_POST['dn'];      	// Variable que recoge el...

		// Muestra los datos recogidos durante la fase de desarrollo. 
		// Luego se ocultan o comentan estas líneas
		echo "<hr>Para comprobar muestra los datos recogidos: ";
		echo '<table class="table table-bordered table-hover table-condensed table-responsive">';
		echo "<tr><td>D1: </td><td><b>$d1</b></td></tr>";
		echo "<tr><td>D2: </td><td><b>",$d2,"</b></td></tr>";
		echo "<tr><td>D3: </td><td><b>",$d3,"</b></td></tr>";
		echo "<tr><td>DN: </td><td><b>",$dn,"</b></td></tr>";
		echo "</table>";
   
		// Indica la tabla sobre la que va a realizar la operación de alta
		$tabla="TABLA"; // Entre comillas indicamos el nombre de la tabla
		
		// Construye la sentencia de inserción de los datos
		$sentencia="INSERT INTO $tabla (columna-1, columna-2, columna-3, columna-n) VALUES ('$d1','$d2','$d3','$dn');";
		// Muestra la sentencia que va a ejecutar por si aparecen errores. Luego se puede ocultar esta línea.
		echo "<br>Sentencia:<br><font color='green'>". $sentencia."</font>";

		// A continuación ejecuta la sentencia
		 if (mysqli_query($c,$sentencia)) {			 
			 echo "<h2>Confirmada Alta como del registro: ".$d1." - ".$d2." - ".$d3." - ".$dn."</h2>";
		 }
		 else {
			 echo "<br><h2>No insertado. Compruebe errores en los datos de entrada.</h2>";
		 }	
?>
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
// Cargamos el marco inferior de páginas
   require_once('marcoinf.php');		
?>
