<?php
        // Este código hay que añadirlo tras ejecutar la sentencia para saber 
			// el total de registros de la consulta y poder calcular el número de páginas
			// --- --- --- --- --- --- --- --- --- --- --- ---
			// --- --- --- Preparamos la paginación -- --- --- 
			// comprueba si viene número de página   
			if (isset($_GET['pagina']))
				{
				$pagina=$_GET['pagina'];
				}
				else{
				$pagina=1;  
				} 
			// Calculamos el número de páginas que tenemos que usar para visualizar el resultado
			//$numreg=mysql_num_rows($resultado);
			$numreg=mysqli_num_rows($resultado);
			// Como vamos a usar 3 registros por página dividimos entre tres
			$numpag= ceil($numreg/3);    
			
			// Calcula cuál será el registro de inicio para construir la consulta
			$inicio=($pagina-1)*3;
			
			// Volvemos a ejecutar la sentencia pero fijando los límites.
			$sentencia .=" limit ".$inicio.", 3";
            $resultado=mysqli_query($c,$sentencia);
			//echo "<hr>$sentencia<hr>";
			// --- --- --- --- --- --- --- --- --- --- --- ---

		// Este código se añade al final de la consulta en la última sección row
		   // --- --- --- --- --- --- --- --- --- --- --- ---
			// --- Mostramos el paginador ---       
            // Calcula páginas anterior y siguiente
            if ($pagina==1){
                $anterior=1;
            }
            else{
                $anterior=$pagina-1;
            }
            if ($pagina==$numpag){
                $siguiente=$pagina;
            }
            else{
                $siguiente=$pagina+1;
            }
            
			echo "<div class='col-md-12 text-center'>"; // Fin de la capa row  
			echo '<ul class="pagination justify-content-center ">';
			echo '	<li class="page-item ">';
			echo '	  <a class="page-link" href="NOMBRE-ARCHIVO-PHP.php?pagina='.$anterior.'">&laquo;</a>';
			echo '	</li>';
			for ($i=1;$i<=$numpag;$i++)
            {
                if($i==$pagina){
						echo '	<li class="page-item active">';
						echo '	  <a class="page-link"href="NOMBRE-ARCHIVO-PHP.php?pagina='.$i.'">'.$i.'</a>';
						echo '	</li>';						
					}
                    else{
						echo '	<li class="page-item"><a class="page-link" href="NOMBRE-ARCHIVO-PHP.php?pagina='.$i.'">'.$i.'</a></li>';
                    }
            }
			echo '	<li class="page-item ">';
			echo '	  <a class="page-link" href="NOMBRE-ARCHIVO-PHP.php?pagina='.$siguiente.'">&raquo;</a>';
			echo '	</li>';
			echo '  </ul>';
			
			// --- Fin paginación ---
			// --- --- --- --- --- --- --- --- --- --- --- ---
?>

