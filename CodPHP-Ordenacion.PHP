<?php

        // Este código hay que pegarlo justo al incluir el marcosup
			// --- --- --- --- --- --- --- --- --- --- --- --- --- --- ---
			// Código para ordenar por las columnas
			
			// Establece una variable de ORDENACIÓN para elegir la columna por la que quiere ordenar
			// Define el orden de la consulta por NOMBRE DE ALUMNO como valor por defecto.
				$orden = "nombre";
					
			// Comprueba si viene (por el método GET) un valor elegido por el usuario. En caso afirmativo lo cambia
				if (isset($_GET['orden'])) 
					{
						$orden=$_GET['orden'];
					}
			// --- --- --- --- --- --- --- --- --- --- --- --- --- --- ---	
			           
		// Este código hay que pegarlo tras construir la sentencia
			// --- --- --- --- --- --- --- --- --- --- --- --- --- --- ---
			// Añade el orden a la sentencia
			$sentencia .= " order by $orden";
			// --- --- --- --- --- --- --- --- --- --- --- --- --- --- ---

		// Ajustes al construir el encabezado de la tabla para poder pulsar sobre la columna
		// que queremos ordenar
			// Construye la fila de cabeceras
            echo "<tr bgcolor='#f0f000'>";
            while ($cab=mysqli_fetch_row($cabeceras)){
				//echo '<th>'.strtoupper($cab[0]).'</th>';
				// --- --- --- --- --- --- --- --- --- --- --- --- --- --- ---
				// Para la ordenación, al escribir el nombre de cada columna lo enlaza a la propia página
				// e incluye la variable de ordenación.
				echo "<th class='success'><a href='GEST_Alumnos2.php?orden=".$cab[0]."'>",strtoupper($cab[0]),"</a></th>";
				// --- --- --- --- --- --- --- --- --- --- --- --- --- --- ---
			}
			echo "<th></th>";
?>	
