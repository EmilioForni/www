<?php 
	require_once('marcosup.php');

?>

    <div class="py-2 bg-dark" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.6));	background-position: top left;	background-size: 100%;	background-repeat: no-repeat;  height: 600px;">
            <div class="row py-1 bg-dark text-info"> 		
                <div class="col-1">
                </div>
                <div class="col-11">
                    <br><h1>Borrar Usuario</h1>                     
    <?php
		// Recoge todas las variables 
		$ID=$_POST['codigo']; 
		
		// Busca los datos del usuario seleccionado
        $sentencia="select * from clientes where id_cliente=$ID";

        // Recopilar las filas almacenadas en la tabla
		$resultado=mysqli_query($c,$sentencia);

		// Recorremos $resultado mostrando cada fila de la tabla
        while ($registro = mysqli_fetch_row($resultado)){
            // Construimos la entrada para cada fila de la tabla
            echo '<div class="col-md-8 col-sm-8">';
            echo "<table class='table table-sm text-info'> ";
                echo "<tr><td class='text-right text-warning'>ID: </td><td><h5>",$registro[0],"</h5></td></tr>";
                echo "<tr><td class='text-right text-warning'>NOMBRE:: </td><td><h5>",$registro[1],"</h5></td></tr>";
                echo "<tr><td class='text-right text-warning'>DIRECCION: </td><td><h5>",$registro[2],"</h5></td></tr>";
                echo "<tr><td class='text-right text-warning'>CORREO: </td><td><h5>",$registro[3],"</h5></td></tr>";
                echo "<tr><td class='text-right text-warning'>TELEFONO:  </td><td><h5>",$registro[4],"</h5></td></tr>";
		    echo "</table>";
            echo '</div>';					
        }
							
        // Muestra la sentencia de inserción que va a ejecutar
         //echo "<br>Sentencia:", $sentencia;
 
			// Cerramos la conexión con la base de datos
			mysqli_close($c);
		?>
            </div>
        </div>
        <div class="row py-1 bg-dark text-info">
            <div class="col-1 text-center">
            </div>
            <div class="col-3 text-center">
                <form action="BorraUsuario.php" method="post">
                    <input type="hidden" name="codigo" value="<?php echo $ID;?>">
                    <p class="close">Confirmar borrado
                    <input type="image" SRC="estilos/BTNCONFIRMAR.jpg" name="Confirmar" height="30" ALT="Eliminar">
                    </p> 
                </form>
            </div>
            <div class="col-3 text-center"> 
                <form action="GUsuarios-B.php" method="post">
                    <p class="close">Cancelar
                    <input type="image" SRC="estilos/BTNCANCELAR.jpg" name="codigo" height="30" ALT="cancelar">
                    </p> 
                </form>
            </div> 
            <div class="col-5 text-center">
            </div>
        </div>    
    </div>
    <?php
            //Cargar el marco inferior
            require_once('marcoinf.php');
            // Fin del código PHP
		?>