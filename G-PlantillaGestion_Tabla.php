<?php
	require_once('marcosup.php');
	
?>
    <div class="section">
      <div class="container">
        <div class="row text-center">
		   <div class="text-center mx-auto col-10">
			<h2> GESTIÓN DE Nombre de la Tabla</h2>	
		   </div>		
		</div>	
		<div class="row text-center">	
			<div class="text-center mx-auto col-10">		
            <?php
            
            // Seleccionamos la tabla con la que vamos a trabajar
            $tabla="";// Escribir entre comillas el nombre de la tabla a listar
            
            // Establecemos la sentencia SQL de la Consulta a realizar
            $sentencia="select * from $tabla";
            
            // Dibujamos una tabla HTML para mostrar los valores almacenados
            echo "<table border='1'>";
            
            // Recopilar los nombres de las columnas de la tabla seleccionada
            $cabeceras=mysqli_query($c,"SHOW FIELDS FROM $tabla");
            
            // Construye la fila de cabeceras
            echo "<tr bgcolor='#f0f000'>";
            while ($cab=mysqli_fetch_row($cabeceras)){
				echo "<th>$cab[0]</th>";
			}			
			echo "<th></th>";
			echo "<th>";
			// Formulario para enviar los datos
				echo '<form name="alta" method="POST" action="A-PlantillaAlta_Formulario.php">';
				echo '<input type="hidden" name="codigo" value="'.$registro[0].'">';
				echo '<input type="image" src="imagenes/mas.png" height="20px">';
				echo '</form>';
			echo "</th>";
			echo "<th></th>";
            echo "</tr>";
            
            // Recopilar las filas almacenadas en la tabla
            $resultado=mysqli_query($c,$sentencia);
            
            // Recorremos $resultado mostrando cada fila de la tabla
            while ($registro = mysqli_fetch_row($resultado)){
				
				// Iniciamos la fila
				echo "<tr>";
				
				// Iniciar un contador de columnas
				$i=0;
				
				// Recorremos y mostramos el valor de cada columna
				foreach ($registro as $fila){
					
					// Mostramos el valor de cada celda
					echo "<td> $registro[$i]</td>";
					
					// Incrementamos el contador de columnas
					$i++;
				}							
				echo "<td align='center'>";
					// Para ver solo un registro.
					// Formulario para enviar los datos
						echo '<form name="veruno" method="POST" action="VerUno.php">';
						echo '<input type="hidden" name="codigo" value="'.$registro[0].'">';
						echo '<input type="image" src="imagenes/UnOjo.jpg">';
						echo '</form>';
				echo "</td><td align='center'>";		
					// Para borrar un registro.
					// Formulario para enviar los datos
						echo '<form name="borraruno" method="POST" action="BorrarUno.php">';
						echo '<input type="hidden" name="codigo" value="'.$registro[0].'">';
						echo '<input type="image" src="imagenes/Borrar.jpg">';
						echo '</form>';
				echo "</td><td align='center'>";		
					// Para modificar un registro.
					// Formulario para enviar los datos
						echo '<form name="editaruno" method="POST" action="EditarUno.php">';
						echo '<input type="hidden" name="codigo" value="'.$registro[0].'">';
						echo '<input type="image" src="imagenes/Editar.jpg">';
						echo '</form>';
 						
                echo "</td>";   				
				// Fin de la fila
				
				// Fin de la fila
				echo "</tr>";				
			}
            
             // Fin de la tabla HTML
            echo "</table>";
            
            // Cerramos la conexión con la base de datos
            mysqli_close($c);
            
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
	require_once('marcoinf.php');
?>	
