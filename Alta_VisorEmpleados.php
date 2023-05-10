<?php
    require_once('marcosup.php');
?>

    <div class="section">
        <div class="container">
            <div class="row text-center">
                <div class="text-center mx-auto col-10">
                    <h1 class="text-center text-primary">Visor Alta de datos de Empleados</h1>
                </div>
            </div>
            <div class="row text-center">
                <div class="text-center mx-auto col-10">
                    <?php
                    // Todas las variables que ha enviado el Formulario
                    $usuario=$_POST['usuario'];     // Variable que recoge el...
                    $clave=$_POST['clave'];        // Variable que recoge el...
                    $foto=$_POST['foto'];        // Variable que recoge el...

                    // Obtiene el último idEmpleado de la tabla empleados
                    $query = "SELECT MAX(idEmpleado) AS max_id FROM empleados";
                    $result = mysqli_query($conn, $query);
                    $row = mysqli_fetch_assoc($result);
                    $idEmpleado = $row['max_id'] + 1;

                    // Muestra los datos recogidos durante la fase de desarrollo.
                    // Luego se ocultan o comentan estas líneas
                    echo "<hr>Para comprobar muestra los datos recogidos: ";
                    echo '<table class="table table-bordered table-hover table-condensed table-responsive">';
                    echo "<tr><td>idEmpleado: </td><td><b>$idEmpleado</b></td></tr>";
                    echo "<tr><td>Usuario: </td><td><b>",$usuario,"</b></td></tr>";
                    echo "<tr><td>Clave: </td><td><b>",$clave,"</b></td></tr>";
                    echo "<tr><td>Foto: </td><td><b>",$foto,"</b></td></tr>";

                    echo "</table>";

                    // Indica la tabla sobre la que va a realizar la operación de alta
                    $tabla="empleados"; // Entre comillas indicamos el nombre de la tabla

                    // Construye la sentencia de inserción de los datos
                    $sentencia="INSERT INTO $tabla (idEmpleado, Usuario, Clave, Foto) VALUES ('$idEmpleado','$usuario','$clave','$foto');";

                    // Muestra la sentencia que va a ejecutar por si aparecen errores. Luego se puede ocultar esta línea.
                    echo "<br>Sentencia:<br><font color='green'>". $sentencia."</font>";

                    // A continuación ejecuta la sentencia
                    if (mysqli_query($conn,$sentencia)) {
                        echo "<h2>Confirmada Alta como del registro: ".$idEmpleado." - ".$usuario." - ".$clave." - ".$foto."</h2>";
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
