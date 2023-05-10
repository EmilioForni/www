<?php
    require_once('marcosup.php');
?>

<div class="section">
    <div class="container">
        <div class="row text-center">
            <div class="text-center mx-auto col-10">
                <h1 class="text-center text-primary">Visor Alta de datos de Servicios</h1>
            </div>
        </div>
        <div class="row text-center">
            <div class="text-center mx-auto col-10">
                <?php
                // Todas las variables que ha enviado el Formulario
                $servicio=$_POST['servicio'];     // Variable que recoge el...
                $precio=$_POST['precio'];        // Variable que recoge el...
                $foto=$_POST['foto'];        // Variable que recoge el...
                $descripcion=$_POST['descripcion'];        // Variable que recoge el...
                $desc2=$_POST['desc2'];        // Variable que recoge el...

                // Obtiene el último idServicio de la tabla servicios
                $query = "SELECT MAX(idServicio) AS max_id FROM servicios";
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_assoc($result);
                $idServicio = $row['max_id'] != null ? $row['max_id'] + 1 : 1;

                // Muestra los datos recogidos durante la fase de desarrollo.
                // Luego se ocultan o comentan estas líneas
                echo "<hr>Para comprobar muestra los datos recogidos: ";
                echo '<table class="table table-bordered table-hover table-condensed table-responsive">';
                echo "<tr><td>idServicio: </td><td><b>$idServicio</b></td></tr>";
                echo "<tr><td>Servicio: </td><td><b>",$servicio,"</b></td></tr>";
                echo "<tr><td>Precio: </td><td><b>",$precio,"</b></td></tr>";
                echo "<tr><td>Foto: </td><td><b>",$foto,"</b></td></tr>";
                echo "<tr><td>Descripcion: </td><td><b>",$descripcion,"</b></td></tr>";
                echo "<tr><td>Desc2: </td><td><b>",$desc2,"</b></td></tr>";

                echo "</table>";

                // Indica la tabla sobre la que va a realizar la operación de alta
                $tabla="servicios"; // Entre comillas indicamos el nombre de la tabla

                // Construye la sentencia de inserción de los datos
                $sentencia="INSERT INTO $tabla (idServicio, Servicio, PrecioServicio, FotoServicio, Descripcion, desc2) VALUES ('$idServicio','$servicio','$precio','$foto','$descripcion','$desc2');";

                // Muestra la sentencia que va a ejecutar por si aparecen errores. Luego se puede ocultar esta línea.
                echo "<br>Sentencia:<br><font color='green'>". $sentencia."</font>";

                // A continuación ejecuta la sentencia
                if (mysqli_query($conn,$sentencia)) {
                    echo "<h2>Confirmada Alta como del registro: ".$idServicio." - ".$servicio." - ".$precio." - ".$foto." - ".$descripcion." - ".$desc2."</h2>";
                } else {
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