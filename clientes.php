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
      </div>		
    </div>	
    <div class="row text-center">	
      <div class="text-center mx-auto col-10">
        <center>
          <h2>Clientes</h2>
          <?php
            // Seleccionamos la tabla con la que vamos a trabajar
            $tabla="clientes";// Escribir entre comillas el nombre de la tabla a listar

            // Establecemos la sentencia SQL de la Consulta a realizar
            $sentencia="select * from $tabla";

            // Recopilar los nombres de las columnas de la tabla seleccionada
            $conn = mysqli_connect($Servidor_conexion, $login_conexion, $password_conexion, $base) or trigger_error(mysqli_error(),E_USER_ERROR);
            $cabeceras=mysqli_query($conn,"SHOW FIELDS FROM $tabla");

            // Dibujamos una tabla HTML para mostrar los valores almacenados
            echo "<table border='1'>";

            // Construye la fila de cabeceras
            echo "<tr bgcolor='#f0f000'>";
            while ($cab=mysqli_fetch_row($cabeceras)){
              echo "<th>$cab[0]</th>";
            }
            echo "</tr>";

            // Recopilar las filas almacenadas en la tabla
            $resultado=mysqli_query($conn,$sentencia);

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

              // Fin de la fila
              echo "</tr>";				
            }

            // Fin de la tabla HTML
            echo "</table>";

            // Cerramos la conexión con la base de datos
            mysqli_close($conn);
          ?>
        </center>
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
